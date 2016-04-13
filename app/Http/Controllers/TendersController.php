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


use Carbon\Carbon;
use Auth;

use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;
class TendersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        // $tender = $Tender::latest('updated_at')->published()->get();
        $tender =Tender::orderBy('created_at', 'desc')->paginate(10);
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
        return view('tenders.create',compact('tags','mr','suppliers'));
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
        return view('tenders.edit',compact('tender','tags','mr','suppliers'));
    }


    public function update(Tender $tender , TenderRequest $request)
    {
        $tender->update($request->all());
        $this->syncTags($tender, $request->input('tag_list_tender'));
        $this->syncMr($tender, $request->input('mr_tender_list'));
        $this->syncSuppliers($tender, $request->input('suppliers_tender_list'));
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

      Excel::selectSheets('Sheet8')->load($uploadedFileLocation)->chunk(500, function ($results) {
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
                Tender::create($tender_data);
            }
        });
        \Storage::delete($storageRelativeLocation);
        return redirect ('tenders');
    }



}
