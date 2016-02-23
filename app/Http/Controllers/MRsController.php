<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\MRRequest;
use App\MR;
use App\Tag;


use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;



class MRsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index']]);
    }



    public function index()
    {
       // $mr = MR::latest('updated_at')->published()->get();
        $mr =MR::orderBy('created_at', 'desc')->paginate(10);
        return view ('mrs.index', compact('mr' ));
    }

    public function show(MR $mr)
    {
        return view('mrs.show', compact ('mr'));
    }

    public function create()
    {
        $tags= Tag::lists('name','id')->all();
        return view('mrs.create',compact('tags'));
    }

    /**
     * @param CreateMRRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MRRequest $request)
    {
        //  dd($request->input('tag_list'));
        $this->createMR($request);

        //   flash()->success('The Supplier has been Added');
        flash()->overlay('The Material Request has been Successfully Added!', 'Good Job');
        return redirect ('mrs');
    }

    /**
     * @param MR $mr
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(MR $mr)
    {
        $tags = Tag::lists('name','id')->all();
        return view('mrs.edit',compact('mr','tags'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(MR $mr , MRRequest $request)
    {
        $mr->update($request->all());
        $this->syncTags($mr, $request->input('tag_list_mr'));

        return redirect ('mrs');
    }

    /** sync up the list  of tags in database
     * @param MR $mr
     * @param array $tags
     * @internal param MRRequest $request
     */
    public function syncTags(MR $mr , array $tags)
    {
        $mr->tags()->sync($tags);
    }

    /** save a new mr
     * @param MRRequest $request
     * @return mixed
     */
    private function createMR(MRRequest $request)
    {
        $mr= Auth::user()->mr()->create($request->all());    //get authenticated user who saved  mr
        $this->syncTags($mr, $request->input('tag_list_mr'));
        return $mr;
    }
/*

    public function postUploadCsv(Request $request ,MR $mr ,$id )
    {
        $mr= Auth::user()->mr()->create($request->all());

        $excelFile = public_path() . '/import.xlsx';
        //   Excel::load($excelFile, function($reader);
       // $results = \Excel::load($excelFile, function ($reader)
         Excel::load($excelFile, function($reader) use ($id) {

            // Getting all results
           // $results = $reader->get();

            // ->all() is a wrapper for ->get() and will work the same
            $results = $reader->all();

                 foreach($results as $key => $value)

                    {

                        //   $result = $reader->select(array('mr_no','mr_subject','mr_date',''mr_received_date'))->get();




                            foreach ($value as $key => $value1) {
                                 //value1 = test import mr


                                MR::create([

                                    // 'date' => date("Y-m-d",strtotime($value1->date)),
                                    'mr_no'=>'value1',
                                    'mr_subject' => 'value1',
                                //    'mr_date' => 'value1',
                                //    'mr_received_date' => 'value1',

                                ]);
                            }
                        }


        });

        return view('mrs.import', compact('results'));
    }
*/
    public function import()
    {
       $file=Input::file("file");
      //  $file = public_path() . '/import.xlsx';
        Excel::load($file, function($reader)
        {
            $results = $reader->get();
            foreach($results as $row):
                $vlist=MR::create([
                    'mr_no'                                                     =>$row->mr_no,
                    'mr_subject'                                                =>$row->mr_subject,
                    'mr_date'                                                   =>date("d-M-Y g:i A",strtotime($row->mr_date)),
                    'mr_received_date'                                          =>date("d-M-Y g:i A",strtotime($row->mr_received_date)),
                    'mr_received_by_officer_date'                               =>date("d-M-Y g:i A",strtotime($row->mr_received_by_officer_date)),
                    'mr_estimated_cost'                                         =>date("d-M-Y g:i A",strtotime($row->mr_estimated_cost)),
                    'mr_budgetry_rfq'                                           =>date("d-M-Y g:i A",strtotime($row->mr_budgetry_rfq)),
                    'mr_rfq_budgetry_closing_date'                              =>date("d-M-Y g:i A",strtotime($row->mr_rfq_budgetry_closing_date)),
                    'mr_rfq_budgetry_reminder'                                  =>date("d-M-Y g:i A",strtotime($row->mr_rfq_budgetry_reminder)),
                    'mr_budgetry_memo'                                          =>date("d-M-Y g:i A",strtotime($row->mr_budgetry_memo)),
                    'mr_checked_on_egpc_site'                                   =>date("d-M-Y g:i A",strtotime($row->mr_checked_on_egpc_site)),
                    'mr_rfq'                                                    =>date("d-M-Y g:i A",strtotime($row->mr_rfq)),
                    'mr_rfq_closing_date'                                       =>date("d-M-Y g:i A",strtotime($row->mr_rfq_closing_date)),
                    'mr_rfq_reminder'                                           =>date("d-M-Y g:i A",strtotime($row->mr_rfq_reminder)),
                    'mr_offers_open'                                            =>date("d-M-Y g:i A",strtotime($row->mr_offers_open)),
                    'mr_offers_sent_to_tech_dept'                               =>date("d-M-Y g:i A",strtotime($row->mr_offers_sent_to_tech_dept)),
                    'mr_offers_received_from_tech_dept_closing_date'            =>date("d-M-Y g:i A",strtotime($row->mr_offers_received_from_tech_dept_closing_date)),
                    'mr_offers_received_from_tech_dept_reminder'                =>date("d-M-Y g:i A",strtotime($row->mr_offers_received_from_tech_dept_reminder)),
                    'mr_offers_clarifications_sent_to_suppliers'                =>date("d-M-Y g:i A",strtotime($row->mr_offers_clarifications_sent_to_suppliers)),
                    'mr_offers_clarifications_closing_date'                     =>date("d-M-Y g:i A",strtotime($row->mr_offers_clarifications_closing_date)),
                    'mr_offers_clarifications_received_from_supplier'           =>date("d-M-Y g:i A",strtotime($row->mr_offers_clarifications_received_from_supplier)),
                    'mr_offers_clarifications_received_from_supplier_reminder'  =>date("d-M-Y g:i A",strtotime($row->mr_offers_clarifications_received_from_supplier_reminder)),
                    'mr_offers_clarifications_sent_to_tech'                     =>date("d-M-Y g:i A",strtotime($row->mr_offers_clarifications_sent_to_tech)),
                    'mr_offers_evaluation'                                      =>date("d-M-Y g:i A",strtotime($row->mr_offers_evaluation)),
                    'mr_sent_for_budget_expansion'                              =>date("d-M-Y g:i A",strtotime($row->mr_sent_for_budget_expansion)),
                    'mr_sent_for_budget_expansion_reminder'                     =>date("d-M-Y g:i A",strtotime($row->mr_sent_for_budget_expansion_reminder)),
                    'user_id'                                                   =>Auth::user()->id,
                    'mrpath'                                                    =>$row->mrpath
                ]);
            endforeach;
        });
        return redirect ('mrs');
    }

}
