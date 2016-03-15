<?php

namespace App\Http\Controllers;
use App\Http\Requests\MaterialRequest;
use Illuminate\Http\Request;
use App\Material;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use App\MR;
use App\Vlist;


use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;

class MaterialsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // $material = Material::latest('updated_at')->published()->get();
       $material =Material::orderBy('created_at', 'desc')->paginate(10);
        return view ('materials.index', compact('material' ));
    }



    /**
     * @param Material$material
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Material $material)
    {
        //dd($material->po_issued->format('d-M-Y'));
        return view('materials.show', compact ('material'));
    }

    public function create()
    {
        $tags= Tag::lists('name','id')->all();


        return view('materials.create',compact('tags' ));
    }

    /**
     * @param CreateMaterialRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MaterialRequest $request)
    {
        //  dd($request->input('tag_list'));
        $this->createMaterial($request);

        //   flash()->success('The Supplier has been Added');
        flash()->overlay('The Material has been Successfully Added!', 'Good Job');
        return redirect ('materials');
    }

    /**
     * @param Material$material
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Material $material)
    {
        $tags = Tag::lists('name','id')->all();


        return view('materials.edit',compact('material','tags','mr','suppliers'));
    }

    /**
     * @param Material$material
     * @param MaterialRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update(Material$material , MaterialRequest $request)
    {
       $material->update($request->all());

        $this->syncTags($material, $request->input('tag_material_list'));


        return redirect ('materials');
    }

    /** sync up the list  of tags in database
     * @param Material$material
     * @param array $tags
     * @internal param MaterialRequest $request
     */
    public function syncTags(Material$material , array $tags)
    {
       $material->tags()->sync($tags);
    }








    /** save a new Material
     * @param MaterialRequest $request
     * @return mixed
     */
    private function createMaterial(MaterialRequest $request)
    {
       $material= Auth::user()->material()->create($request->all());    //get authenticated user who saved  Material
        $this->syncTags($material, $request->input('tag_material_list'));



        return $material;
    }

    /**
     * @param int $howMany
     * @return mixed
     */

    public function import()
    {
        $file=Input::file("file");

        Excel::load($file, function($reader)
        {
            $results = $reader->get();

            foreach($results as $row):
               Material::create([
                    'po_no'                    =>$row->po_no,
                    'po_subject'               =>$row->po_subject,
                    'po_issued'                =>date("d-M-Y g:i A",strtotime($row->po_issued)),
                    'po_confirmation'          =>date("d-M-Y g:i A",strtotime($row->po_confirmation)),
                    'po_loaded_on_ideas'       =>date("d-M-Y g:i A",strtotime($row->po_loaded_on_ideas)),
                    'po_approved_on_ideas'     =>date("d-M-Y g:i A",strtotime($row->po_approved_on_ideas)),
                    'po_memo_to_fin'           =>date("d-M-Y g:i A",strtotime($row->po_memo_to_fin)),
                    'po_delivery_date'         =>date("d-M-Y g:i A",strtotime($row->po_delivery_date)),
                    'po_reminder_delivery_date'=>date("d-M-Y g:i A",strtotime($row->po_reminder_delivery_date)),
                    'po_mr_received_date'      =>date("d-M-Y g:i A",strtotime($row->po_mr_received_date)),
                    'po_mrr_received_date'     =>date("d-M-Y g:i A",strtotime($row->po_mrr_received_date)),
                    'po_mrr_missing_date'      =>date("d-M-Y g:i A",strtotime($row->po_mrr_missing_date)),
                    'po_mrr_rejected_date'     =>date("d-M-Y g:i A",strtotime($row->po_mrr_rejected_date)),
                    'po_invoice_received_date' =>date("d-M-Y g:i A",strtotime($row->po_invoice_received_date)),
                    'po_penalty'               =>$row->po_penalty,
                    'po_cover_invoice'         =>date("d-M-Y g:i A",strtotime($row->po_cover_invoice)),
                    'po_completed'             =>date("d-M-Y g:i A",strtotime($row->po_completed)),
                    'popath'                   =>$row->popath,
                    'user_id'                  =>Auth::user()->id


                ]);
            endforeach;

        });
        return redirect ('materials');
    }



}