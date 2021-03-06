<?php

namespace App\Http\Controllers;

use App\MR;
use App\Vlist;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\TenderRequest;

use App\Tag;
use App\Tender;
use App\PO;


use Carbon\Carbon;
use Auth;

use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;
ini_set('max_execution_time', 0);
class TendersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $search = \Request::get('search');
        $tender = Tender::where('mr_t_no', 'like', '%' . $search . '%')
            ->orWhere("mr_t_subject", 'like', '%' . $search . '%')
            ->orWhere("slug", 'like', '%' . $search . '%')
            ->orderBy('mr_t_no')
            ->paginate(10);
        // $tender = $Tender::latest('updated_at')->published()->get();
     //   $tender =Tender::orderBy('created_at', 'desc')->paginate(10);
        return view ('tenders.index', compact('tender' ));
    }

    public function show(Tender $tender)
    {
        return view('tenders.show', compact ('tender'));
    }

    public function create()
    {
        $tags= Tag::lists('name','id')->all();
        $mr= MR::lists('mr_no','id')->all();
        $suppliers = Vlist::lists('vname','id')->all();
        $po = PO::lists('po_no','id')->all();
        return view('tenders.create',compact('tags','mr','suppliers','po'));
            }




    public function store(TenderRequest $request)
    {

        $this->createTender($request);
        flash()->overlay('The Material Request has been Successfully Added!', 'Good Job');
        return redirect ('tenders');
    }


    public function edit(Tender $tender)
    {
        $tags = Tag::lists('name','id')->all();
        $mr= MR::lists('mr_no','id')->all();
        $suppliers = Vlist::lists('vname','id')->all();
        $po = PO::lists('po_no','id')->all();

        return view('tenders.edit',compact('tender','tags','mr','suppliers','po'));
    }


    public function update(Tender $tender , TenderRequest $request)
    {
        $tender->update($request->all());
        $this->syncTags($tender, $request->input('tag_list_tender'));
        $this->syncMr($tender, $request->input('mr_tender_list'));
        $this->syncSuppliers($tender, $request->input('suppliers_tender_list'));
        $this->syncPo($tender,$request->input('po_tender_list'));
        return redirect ('tenders');
    }

    /** sync up the list  of tags in database
     * @param $Tender $tender
     * @param array $tags
     * @internal param $TenderRequest $request
     */
    public function syncTags(Tender $tender , array $tags)
    {
        $tender->tags()->sync($tags);

    }

    public function syncMr(Tender $tender , array $mr)
    {
        $tender->mr()->sync($mr);
    }

    public function syncSuppliers(Tender $tender , array $suppliers)
    {
        $tender->suppliers()->sync($suppliers);
    }

    public function syncPo(Tender $tender , array $po)
    {
        $tender->po()->sync($po);
    }

    /** save a new tender
     * @param TenderRequest $request
     * @return
     */
    private function createTender(TenderRequest $request)
    {
        $tender= Auth::user()->tender()->create($request->all());    //get authenticated user who saved  mr
        $this->syncTags($tender, $request->input('tag_list_tender'));
        $this->syncMr($tender, $request->input('mr_tender_list'));
        $this->syncSuppliers($tender, $request->input('suppliers_tender_list'));
        $this->syncPo($tender,$request->input('po_tender_list'));

        return $tender;
    }



    public function import()
    {
        $file = Input::file("file");
        $destinationPath = storage_path('app/uploads');
        $fileName = $file->getClientOriginalName();
        $file->move($destinationPath,$fileName);

        $uploadedFileLocation = storage_path('app/uploads') . '/' . $file->getClientOriginalName();
        $storageRelativeLocation = 'uploads' . '/' . $file->getClientOriginalName();

      Excel::load($uploadedFileLocation)->chunk(500, function ($results) {
            foreach($results as $row){
                $tender_data = [
                    'mr_t_no'                                          =>   $row->mr_t_no,
                    'mr_t_subject'                                     =>   $row->mr_t_subject,
                    'mr_t_identity'                                    =>   $row->mr_t_identity,
                    'mr_t_officer'                                     =>   $row->mr_t_officer,
                    'mr_t_tender_send_invitation_fax'                  =>   date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_tender_send_invitation_fax)),
                    'mr_t_closing_date'                                =>   date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_closing_date)),
                    'mr_t_open_tech_envelops'                          =>   date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_open_tech_envelops)),
                    'mr_t_tech_eval_signature'                         =>   date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_tech_eval_signature)),
                    'mr_t_open_commercial_offers'                      =>   date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_open_commercial_offers)),
                    'mr_t_commercial_evaluation_signature'             =>   date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_commercial_evaluation_signature)),

                    'user_id'                                          =>   Auth::user()->id,
                ];
               echo $row->mr_t_no."<br />";
               Tender::updateOrCreate(compact("tender_data"));

            }

        });


        \Storage::delete($storageRelativeLocation);
        return redirect ('tenders');
    }

    public function ImportAllTender()
    {
        $file = Input::file("file");
        $destinationPath = storage_path('app/uploads');
        $fileName = $file->getClientOriginalName();
        $file->move($destinationPath,$fileName);


        $uploadedFileLocation = storage_path('app/uploads') . '/' . $file->getClientOriginalName();
        $storageRelativeLocation = 'uploads' . '/' . $file->getClientOriginalName();

        Excel::load($uploadedFileLocation)->chunk(50, function ($results) use ($uploadedFileLocation)
        {
            $user = Auth::user();
            foreach($results as $row)
            {
                $mr_t_no = $row->mr_t_no;
                $mr_t_subject = $row->mr_t_subject;
                $mr_t_identity = $row->mr_t_identity;
                $mr_t_officer = $row->mr_t_officer;
                $mr_t_tender_send_invitation_fax = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_tender_send_invitation_fax));
                $mr_t_closing_date = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_closing_date));
                $mr_t_open_tech_envelops = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_open_tech_envelops));
                $mr_t_tech_eval_signature = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_tech_eval_signature));
                $mr_t_open_commercial_offers = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_open_commercial_offers));
                $mr_t_commercial_evaluation_signature = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_t_commercial_evaluation_signature));
                // $user_id                            = Auth::user()->id;
                $tender_data = compact('mr_t_no', 'mr_t_subject', 'mr_t_identity', 'mr_t_officer',
                    'mr_t_tender_send_invitation_fax', 'mr_t_closing_date', 'mr_t_open_tech_envelops',
                    'mr_t_tech_eval_signature', 'mr_t_open_commercial_offers', 'mr_t_commercial_evaluation_signature');

                $tender = $user->tender()->updateOrCreate($tender_data);
                $this->storeMRAndPOListsFromFile($tender, $results);

                $vname = $row->vname;
                $user->vlist()->updateOrCreate(compact('vname'));
            }
        });

        return redirect ('tenders');
    }


    protected function storeMRAndPOListsFromFile(Tender $tender, $results)
    {
        $user_id = Auth::user()->id;
        $mrs = [];
        $pos = [];

        foreach ($results as $row)
        {
            if ($tender->mr_t_no == $row->mr_t_no)
            {
                $mr_no = $row->mr_no;
                $mr_received_date = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->mr_received_date));
                $mr = MR::updateOrCreate(compact('mr_no', 'mr_received_date', 'user_id'));
                $mrs[] = $mr->id;

                $po_no = $row->po_no;
                $po_issued = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->po_issued));
                $po_total_cost = intval($row->po_total_cost);
                $po_delivery_date = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->po_delivey_date));
                $po_mrr_received_date = date('d-M-Y g:i A', \PHPExcel_Shared_Date::ExcelToPHP($row->po_mrr_received));
                $po = PO::updateOrCreate(compact('po_no', 'user_id', 'po_issued', 'po_total_cost', 'po_delivery_date', 'po_mrr_received_date'));
                $pos[] = $po->id;

                $this->syncMr($tender, $mrs);
                $this->syncPo($tender, $pos);
            }
        }
    }

            public function exportTender(Tender $tenders)
            {
                Excel::create($tenders->mr_t_no, function ($excel) use ($tenders)
                {
                    $excel->setTitle('Tender Details');
                    $excel->setCreator('Hussein')
                        ->setCompany('Mansoura');

                    $excel->sheet($tenders->mr_t_no, function ($sheet) use ($tenders)
                    {

                        $sheet->loadView('tenders.tenders_excel_template')->with('tenders', $tenders);
                    });
                })->export('xlsx');
            }

            public function exportAll()
            {

                Excel::create('Tender', function ($excel)
                {
                    $excel->setTitle('Tenders');

                    $excel->sheet('Tenders', function ($sheet)
                    {
                        $tenders = Tender::all();
/*
                        $arr = array();
                        foreach ($tenders as $tender)
                        {
                            foreach ($tender->mr as $m)
                                foreach ($tender->suppliers as $supplier)

                                {
                                    $data = array($m->mr_no, $m->mr_estimated_cost, $m->mr_currency,
                                        $tender->mr_t_no, $tender->mr_t_subject, $tender->mr_t_identity,
                                        $tender->mr_t_officer, $supplier->vname,
                                        $tender->mr_t_tender_send_invitation_fax,
                                        $tender->mr_t_closing_date, $tender->mr_t_open_tech_envelops,
                                        $tender->mr_t_tech_eval_signature, $tender->mr_t_open_commercial_offers,
                                        $tender->mr_t_commercial_evaluation_signature

                                    );
                                    array_push($arr, $data);
                                }
                        }

                      //  $sheet->fromArray($tender);
*/
                        $sheet->loadView('tenders.excel_all_tenders')->with('tenders', $tenders);
                    });
                })->export('xls');
            }



}
