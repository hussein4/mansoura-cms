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

use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;





class POsController extends Controller
{

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
        $po =PO::orderBy('created_at', 'desc')->paginate(10);
        return view ('pos.index', compact('po' ));
    }



    /**
     * @param PO $po
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(PO $po)
    {
        //dd($po->po_issued->format('d-M-Y'));
        return view('pos.show', compact ('po'));
    }

    public function create()
    {
        $tags= Tag::lists('name','id')->all();
        $mr= MR::lists('mr_no','id')->all();
        $material = Material::lists('m_description','id')->all();
        $suppliers = Vlist::lists('vname','id')->all();
        return view('pos.create',compact('tags' ,'mr','material','suppliers'));
    }

    /**
     * @param CreatePORequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(PORequest $request)
    {
        //  dd($request->input('tag_list'));
        $this->createPO($request);

        //   flash()->success('The Supplier has been Added');
        flash()->overlay('The PO has been Successfully Added!', 'Good Job');
        return redirect ('pos');
    }

    /**
     * @param PO $po
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(PO $po)
    {
        $tags = Tag::lists('name','id')->all();
        $mr = MR::lists('mr_no','id')->all();
        $material = Material::lists('m_description','id')->all();
        $suppliers = Vlist::lists('vname','id')->all();
        return view('pos.edit',compact('tags' ,'mr','po','material','suppliers'));
    }

    /**
     * @param PO $po
     * @param PORequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update(PO $po , PORequest $request)
    {
        $po->update($request->all());

        $this->syncTags($po, $request->input('tag_list_po'));
        $this->syncMr($po, $request->input('mr_list'));
        $this->syncMaterial($po, $request->input('material_list'));
        $this->syncSuppliers($po, $request->input('suppliers_list'));
        return redirect ('pos');
    }

    /** sync up the list  of tags in database
     * @param PO $po
     * @param array $tags
     * @internal param PORequest $request
     */
    public function syncTags(PO $po , array $tags)
    {
        $po->tags()->sync($tags);
    }

    public function syncMr(PO $po , array $mr)
    {
        $po->mr()->sync($mr);
    }

    public function syncMaterial(PO $po , array $material)
    {
        $po->material()->sync($material);
    }

    public function syncSuppliers(PO $po , array $suppliers)
    {
        $po->suppliers()->sync($suppliers);
    }





    /** save a new PO
     * @param PORequest $request
     * @return mixed
     */
    private function createPO(PORequest $request)
    {
        $po= Auth::user()->po()->create($request->all());    //get authenticated user who saved  PO
        $this->syncTags($po, $request->input('tag_list_po'));
        $this->syncMr($po, $request->input('mr_list'));
        $this->syncMaterial($po, $request->input('material_list'));
        $this->syncSuppliers($po, $request->input('suppliers_list'));

        return $po;
    }

    /**
     * @param int $howMany
     * @return mixed
     */

    public function import()
    {
        $file=Input::file("file");

        Excel::filter('chunk')->load($file)->chunk(250, function ($reader)
        {
            $results = $reader->get();
            foreach($results as $row):
                PO::create([
                    'po_no'                    =>$row->po_no,
                    'po_subject'               =>$row->po_subject,
                    'po_issued'                =>$row->po_issued,
                    'po_confirmation'          =>$row->po_confirmation,
                    'po_loaded_on_ideas'       =>$row->po_loaded_on_ideas,
                    'po_approved_on_ideas'     =>$row->po_approved_on_ideas,
                    'po_memo_to_fin'           =>$row->po_memo_to_fin,
                    'po_delivery_date'         =>$row->po_delivery_date,
                    'po_reminder_delivery_date'=>$row->po_reminder_delivery_date,
                    'po_mr_received_date'      =>$row->po_mr_received_date,
                    'po_mrr_received_date'     =>$row->po_mrr_received_date,
                    'po_mrr_missing_date'      =>$row->po_mrr_missing_date,
                    'po_mrr_rejected_date'     =>$row->po_mrr_rejected_date,
                    'po_invoice_received_date' =>$row->po_invoice_received_date,
                    'po_penalty'               =>$row->po_penalty,
                    'po_cover_invoice'         =>$row->po_cover_invoice,
                    'po_completed'             =>$row->po_completed,
                    'popath'                   =>$row->popath,
                    'user_id'                  =>Auth::user()->id
                ]);
            endforeach;
        });
        return redirect ('pos');
    }
}
