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

        //  return view('$tenders.create_b',compact('tags'));
    }




    /**
     * @param Create$TenderRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(TenderRequest $request)
    {

        $this->createTender($request);

        flash()->overlay('The Material Request has been Successfully Added!', 'Good Job');
        return redirect ('tenders');
    }

    /**
     * @param $Tender $tender
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Tender $tender)
    {
        $tags = Tag::lists('name','id')->all();
        $mr= MR::lists('mr_no','id')->all();
        $suppliers = Vlist::lists('vname','id')->all();
        return view('tenders.edit',compact('tender','tags','mr','suppliers'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

    /** save a new mr
     * @param $TenderRequest $request
     * @return mixed
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
        $file=Input::file("file");

        Excel::load($file, function($reader)
        {
            $results = $reader->get();
            foreach($results as $row):
                Tender::create([
                    'mr_t_no'                                          =>$row->mr_t_no,
                    'mr_t_subject'                                     =>$row->mr_t_subject,
                    'mr_t_identity'                                    =>$row->mr_t_identity,
                    'mr_t_officer'                                     =>$row->mr_t_officer,
                    'mr_t_willing_fax'                                 =>date("d-M-Y g:i A",strtotime($row->mr_t_willing_fax)),
                    'mr_t_willing_fax_closing_date'                    =>date("d-M-Y g:i A",strtotime($row->mr_t_willing_fax_closing_date)),
                    'mr_t_prepare_draft'                               =>date("d-M-Y g:i A",strtotime($row->mr_t_prepare_draft)),
                    'mr_t_sub_bid_committee_formation_memo'            =>date("d-M-Y g:i A",strtotime($row->mr_t_sub_bid_committee_formation_memo)),
                    'mr_t_tender_criteria_memo'                        =>date("d-M-Y g:i A",strtotime($row->mr_t_tender_criteria_memo)),
                    'mr_t_tender_criteria_memo_reply'                  =>date("d-M-Y g:i A",strtotime($row->mr_t_tender_criteria_memo_reply)),
                    'mr_t_tender_call_for_tender_memo'                 =>date("d-M-Y g:i A",strtotime($row->mr_t_tender_call_for_tender_memo)),
                    'mr_t_tender_call_for_tender_signature'            =>date("d-M-Y g:i A",strtotime($row->mr_t_tender_call_for_tender_signature)),
                    'mr_t_tender_send_invitation_fax'                  =>date("d-M-Y g:i A",strtotime($row->mr_t_tender_send_invitation_fax)),
                    'mr_t_closing_date'                                =>date("d-M-Y g:i A",strtotime($row->mr_t_closing_date)),
                    'mr_t_clarifications_sent_to_tech_dept'            =>date("d-M-Y g:i A",strtotime($row->mmr_t_clarifications_sent_to_tech_dept)),
                    'mr_t_clarifications_received_from_tech_dept'      =>date("d-M-Y g:i A",strtotime($row->mr_t_clarifications_received_from_tech_dept)),
                    'mr_t_clarifications_reply_fax'                    =>date("d-M-Y g:i A",strtotime($row->mr_t_clarifications_reply_fax)),
                    'mr_t_open_tech_envelops'                          =>date("d-M-Y g:i A",strtotime($row->mr_t_open_tech_envelops)),
                    'mr_t_received_tech_clarifications_from_tech_dept' =>date("d-M-Y g:i A",strtotime($row->mr_t_received_tech_clarifications_from_tech_dept)),
                    'mr_t_sending_tech_clarifications_to_suppliers'    =>date("d-M-Y g:i A",strtotime($row->mr_t_sending_tech_clarifications_to_suppliers)),
                    'mr_t_receive_tech_clarifications_reply'           =>date("d-M-Y g:i A",strtotime($row->mr_t_receive_tech_clarifications_reply)),
                    'mr_t_send_tech_clarifications_reply_to_tech_dept' =>date("d-M-Y g:i A",strtotime($row->mr_t_send_tech_clarifications_reply_to_tech_dept)),
                    'mr_t_receive_tech_evaluation_report'              =>date("d-M-Y g:i A",strtotime($row->mr_t_receive_tech_evaluation_report)),
                    'mr_t_issue_tech_evaluation'                       =>date("d-M-Y g:i A",strtotime($row->mr_t_issue_tech_evaluation)),
                    'mr_t_tech_eval_signature'                         =>date("d-M-Y g:i A",strtotime($row->mr_t_tech_eval_signature)),
                    'mr_t_open_commercial_offers'                      =>date("d-M-Y g:i A",strtotime($row->mr_t_open_commercial_offers)),
                    'mr_t_issue_commercial_evaluation'                 =>date("d-M-Y g:i A",strtotime($row->mr_t_issue_commercial_evaluation)),
                    'mr_t_commercial_evaluation_signature'             =>date("d-M-Y g:i A",strtotime($row->mr_t_commercial_evaluation_signature)),
                    'mr_t_sending_awarding_faxes'                      =>date("d-M-Y g:i A",strtotime($row->mr_t_sending_awarding_faxes)),
                    'mr_t_sending_fin_memo'                            =>date("d-M-Y g:i A",strtotime($row->mr_t_sending_fin_memo)),
                    'mr_t_finished'                                    =>$row->mr_t_finished,

                    'user_id'                                          =>Auth::user()->id,

                ]);
            endforeach;
        });
        return redirect ('tenders');
    }



}
