<?php

namespace App\Http\Controllers;
use App\Http\Requests\VlistRequest;
use App\Tag;
use App\Vlist;
use Gate;

//use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Carbon\Carbon;

use Auth;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;






class VlistsController extends Controller {



    /**
     * Create a New Vlist instance
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index()
    {
        //  $vlist = Vlist::latest('updated_at')->published()->get();
        $vlist = Vlist::orderBy('created_at', 'desc')->paginate(10);
        return view('vlist.index', compact('vlist'));
    }

    public function show(Vlist $vlist)
    {

        return view('vlist.show', compact('vlist'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id')->all();

        return view('vlist.create', compact('tags'));
    }

    /**
     * @param CreateVlistRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(VlistRequest $request)
    {
        //if (Input::hasFile('vpath'))
        if($request->hasFile('vpath'))
        {
            // $file = Input::file('vpath');
            $file = $request->file('vpath');
            $filename = time().'-'.$file->getClientOriginalName();
            $file->move(public_path() .'/views/vlist/docs', $filename);
            $this->vpath = $filename;
        }


        $this->createVlist($request);

        flash()->overlay('The Supplier has been Successfully Added!', 'Good Job');

        return redirect('vlist');
    }

    /**
     * @param Vlist $vlist
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Vlist $vlist)
    {
        $tags = Tag::lists('name', 'id')->all();

        return view('vlist.edit', compact('vlist', 'tags'));
    }

    /**
     * @param Vlist $vlist
     * @param VlistRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update(Vlist $vlist, VlistRequest $request)
    {
        /*
                $vlist->update($request->all());
                $this->syncTags($vlist, $request->input('tag_list'));
                return redirect('vlist');
          */
        $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('desc')+ $request->get('bidbond')) / 4);
        $vlist->update($request->all());
        $vlist->vgrade = $average;
        Auth::user()->vlist()->save($vlist);
        $this->syncTags($vlist, $request->input('tag_list'));
        return redirect('vlist');

    }

    public function average(Vlist $vlist, VlistRequest $request)
    {

        $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('desc')+ $request->get('bidbond')) / 4);
        $vlist->vgrade = $average;
        // $vlist->fill($vlist);
        Auth::user()->vlist()->save($vlist);

        $tags = Tag::lists('name', 'id')->all();
        $this->syncTags($vlist, $request->input('tag_list'));
        return view('vlist.eval', compact('vlist', 'tag_list'));

    }

    /** sync up the list  of tags in querybase
     * @param Vlist $vlist
     * @param array $tags
     * @internal param VlistRequest $request
     */


    public function syncTags(Vlist $vlist, array $tags)
    {
        $vlist->tags()->sync($tags);
    }

    /** save a new vlist
     * @param VlistRequest $request
     * @return mixed
     */
    private function createVlist(VlistRequest $request)
    {
        $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('desc')+ $request->get('bidbond')) / 4);
        $vlist = new Vlist;
        $vlist->fill($request->all());
        $vlist->vgrade = $average;

        Auth::user()->vlist()->save($vlist);
        $this->syncTags($vlist, $request->input('tag_list'));
        return $vlist;

    }
    public function destroy(Request $request, Vlist $vlist)
    {
        $this->authorize('destroy', $vlist);
        $vlist->delete();

        return redirect('/vlist');
    }




    public function export(Request $request ,Vlist $vlist ,$id)
    {

        $filename = 'test';


        Excel::create($filename.time(), function($excel) use ($id)
        {
            //  $supplier = Vlist::where('id',$id)->get(['vname']);
            // Set the title
            $excel->setTitle('Supplier Details');
            $excel->setCreator('Hussein')
                ->setCompany('Mansoura');
            $excel->sheet('supplier', function($sheet) use ($id)
            {
                $data = Vlist::where('id', $id)->get(['vname','vservice','vphone','vmobile', 'vemail', 'vcontactperson','vaddress','vegpcno','vcapitallimit','vgrade','vremarks','updated_at']);

                $sheet->cells('A1:L1', function($cells) {
                    // Set font
                    $cells->setFont(array(
                        'family'     => 'Arial',
                        'size'       => '16',
                        'bold'       =>  true
                    ));
                    $cells->setAlignment('center');

                });
                $sheet->cells('A2:L2', function($cells) {
                    $cells->setFont(array(
                        'family'     => 'Arial',
                        'size'       => '12',
                        'bold'       =>  false
                    ));
                    $cells->setAlignment('center');
                });

                //  $sheet->setCellValue('D8', $data);

                //  $sheet->fromArray($data);


                $sheet->fromArray($data,null,'A1',false,false)->prependRow(array(
                        'Name', 'Service', 'Phone', 'Mobile', 'Email',
                        'Contact Person', 'Address', 'EGPC No', 'Capital Limit' , 'Grade' , 'Remarks'
                    ,'Updated At'
                    )

                );

            });
        })->download('xlsx');
    }


    public function exportSupplier( Vlist $vlist )
    {
        Excel::create( $vlist->vname, function($excel) use($vlist){
            $excel->setTitle('Supplier Details');
            $excel->setCreator('Hussein')
                ->setCompany('Mansoura');

            $excel->sheet( $vlist->vname, function($sheet) use ($vlist){

                $sheet->loadView( 'vlist.supplier_excel_template' )->with('vlist', $vlist);
            } );
        } )->export('xlsx');
    }



    public function import()
    {
        $file=Input::file("file");

      // Excel::load($file, function($reader)
       // Excel::filter('chunk' )->load($file, function ($reader)
            Excel::filter('chunk')->load($file)->chunk(10,function($reader)
        {
            $results = $reader->get();
            foreach($results as $row):
               Vlist::create([
                    'vname'           =>$row->vname,
                    'vservice'        =>$row->vservice,
                    'vphone'          =>$row->vphone,
                    'vmobile'         =>$row->vmobile,
                    'vemail'          =>$row->vemail,
                    'vcontactperson'  =>$row->vcontactperson,
                    'vaddress'        =>$row->vaddress,
                    'vegpcno'         =>$row->vegpcno,
                    'vcapitallimit'   =>$row->vcapitallimit,
                    'vgrade'          =>$row->vgrade,
                    'vremarks'        =>$row->vremarks,
                    'user_id'        =>Auth::user()->id
                ]);
            endforeach;
        });
        return redirect('vlist');
    }



}
