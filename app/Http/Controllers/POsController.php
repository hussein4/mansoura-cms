<?php

namespace App\Http\Controllers;

use App\Http\Requests\PORequest;
use Illuminate\Http\Request;
use App\PO;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use App\MR;
use App\Material;
use App\Vlist;
use App\Tender;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class POsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index']]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //  $po = PO::latest('updated_at')->published()->get();
        $search = \Request::get('search');
        $po = PO::where('po_no', 'like', '%' . $search . '%')
            ->orWhere("po_subject", 'like', '%' . $search . '%')
            ->orWhere("slug", 'like', '%' . $search . '%')
            ->orderBy('po_no')
            ->paginate(10);
      //  $po = PO::orderBy( 'created_at', 'desc' )->paginate( 10 );
        return view( 'pos.index', compact( 'po' ) );
    }

    /**
     * @param PO $po
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show( PO $po )
    {
        //dd($po->po_issued->format('d-M-Y'));
        return view( 'pos.show', compact( 'po' ) );
    }

    public function create()
    {
        $tags      = Tag::lists( 'name', 'id' )->all();
        $mr        = MR::lists( 'mr_no', 'id' )->all();
        $material  = Material::lists( 'm_description', 'id' )->all();
        $suppliers = Vlist::lists( 'vname', 'id' )->all();
        $tenders =   Tender::lists('mr_t_no','id')->all();
        return view( 'pos.create', compact( 'tags', 'mr', 'material', 'suppliers','tenders' ) );
    }

    /**
     * @param CreatePORequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store( PORequest $request )
    {

        $this->createPO( $request );
        flash()->overlay( 'The PO has been Successfully Added!', 'Good Job' );
        return redirect( 'pos' );
    }

    /**
     * @param PO $po
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit( PO $po )
    {
        $tags      = Tag::lists( 'name', 'id' )->all();
        $mr        = MR::lists( 'mr_no', 'id' )->all();
        $material  = Material::lists( 'm_description', 'id' )->all();
        $suppliers = Vlist::lists( 'vname', 'id' )->all();
        $tenders =   Tender::lists('mr_t_no','id')->all();

        return view( 'pos.edit', compact( 'tags', 'mr', 'po', 'material', 'suppliers','tenders' ) );
    }

    /**
     * @param PO $po
     * @param PORequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update( PO $po, PORequest $request )
    {
        $po->update( $request->all() );

        $this->syncTags( $po, $request->input( 'tag_list_po' ) );
        $this->syncMr( $po, $request->input( 'mr_list' ) );
        $this->syncMaterial( $po, $request->input( 'material_list' ) );
        $this->syncSuppliers( $po, $request->input( 'suppliers_list' ) );
        $this->syncTenders( $po, $request->input( 'tenders_list' ) );

        return redirect( 'pos' );
    }

    /** sync up the list  of tags in database
     * @param PO $po
     * @param array $tags
     * @internal param PORequest $request
     */
    public function syncTags( PO $po, array $tags )
    {
        $po->tags()->sync( $tags );
    }

    public function syncMr( PO $po, array $mr )
    {
        $po->mr()->sync( $mr );
    }

    public function syncMaterial( PO $po, array $material )
    {
        $po->material()->sync( $material );
    }

    public function syncSuppliers( PO $po, array $suppliers )
    {
        $po->suppliers()->sync( $suppliers );
    }

    public function syncTenders( PO $po, array $tenders )
    {
        $po->tenders()->sync( $tenders );
    }


    /** save a new PO
     * @param PORequest $request
     * @return mixed
     */
    private function createPO( PORequest $request )
    {
        $po = Auth::user()->po()->create( $request->all() );    //get authenticated user who saved  PO
        $this->syncTags( $po, $request->input( 'tag_list_po' ) );
        $this->syncMr( $po, $request->input( 'mr_list' ) );
        $this->syncMaterial( $po, $request->input( 'material_list' ) );
        $this->syncSuppliers( $po, $request->input( 'suppliers_list' ) );
        $this->syncTenders( $po, $request->input( 'tenders_list' ) );


        return $po;
    }

    /**
     * @param int $howMany
     * @return mixed
     */
    public function import()
    {
        $file = Input::file("file");
        $destinationPath = storage_path('app/uploads');
        $fileName = $file->getClientOriginalName();
        $file->move($destinationPath,$fileName);

        $uploadedFileLocation = storage_path('app/uploads') . '/' . $file->getClientOriginalName();
        $storageRelativeLocation = 'uploads' . '/' . $file->getClientOriginalName();


        Excel::load($uploadedFileLocation)->chunk(500, function ($results) {

            foreach($results as $row):
                echo $row->po_no."<br />";
                PO::create( [
                    'po_no'                     => $row->po_no,
                    'po_subject'                => $row->po_subject,
                    'po_issued'                 => $row->po_issued,
                    'po_confirmation'           => $row->po_confirmation,
                    'po_loaded_on_ideas'        => $row->po_loaded_on_ideas,
                    'po_approved_on_ideas'      => $row->po_approved_on_ideas,
                    'po_memo_to_fin'            => $row->po_memo_to_fin,
                    'po_delivery_date'          => $row->po_delivery_date,
                    'po_reminder_delivery_date' => $row->po_reminder_delivery_date,
                    'po_mr_received_date'       => $row->po_mr_received_date,
                    'po_mrr_received_date'      => $row->po_mrr_received_date,
                    'po_mrr_missing_date'       => $row->po_mrr_missing_date,
                    'po_mrr_rejected_date'      => $row->po_mrr_rejected_date,
                    'po_invoice_received_date'  => $row->po_invoice_received_date,
                    'po_penalty'                => $row->po_penalty,
                    'po_cover_invoice'          => $row->po_cover_invoice,
                    'po_completed'              => $row->po_completed,
                    'popath'                    => $row->popath,
                    'user_id'                   => Auth::user()->id
                ] );
            endforeach;
        } );
        \Storage::delete($storageRelativeLocation);
        return redirect( 'pos' );
    }

    public function exportExcel(PO $po)
    {
        Excel::create( 'po', function($excel) use($po){


            $excel->sheet( 'po', function($sheet) use ($po){

                $sheet->loadView( 'pos.pos_excel_template' )->with('po', $po);
            } );
        } )->export('xlsx');
    }



       
    public function exportAll()
    {

            Excel::create('POs', function($excel)
            {
                $excel->sheet('pos', function($sheet)
                {

                    $pos = PO::all();
                   
                $sheet->loadView( 'pos.pos_all_template')->with('pos',$pos);

                })->download('xls');
            });

    }




}
