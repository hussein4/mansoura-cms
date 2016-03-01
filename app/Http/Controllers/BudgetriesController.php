<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\BudgetryRequest;
use App\Budgetry;
use App\Tag;



use Carbon\Carbon;
use Auth;

use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use Session;

class BudgetriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

       $budgetry =Budgetry::orderBy('created_at', 'desc')->paginate(10);
        return view ('budgetries.index', compact('budgetry' ));
    }

    public function show(Budgetry $budgetry)
    {
        return view('budgetries.show', compact ('budgetry'));
    }

    public function create()
    {
        $tags= Tag::lists('name','id')->all();
        return view('budgetries.create',compact('tags'));

    }




    /**
     * @param CreateBudgetryRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(BudgetryRequest $request)
    {
        // dd($request->input('tag_list'));
        $this->createBudgetry($request);

        //   flash()->success('The Supplier has been Added');
        flash()->overlay('The Budgetry Request has been Successfully Added!', 'Good Job');
        return redirect ('budgetries');
    }

    /**
     * @param Budgetry$budgetry
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Budgetry $budgetry)
    {
        $tags = Tag::lists('name','id')->all();
        return view('budgetries.edit',compact('budgetry','tags'));
    }


    public function update(Budgetry $budgetry , BudgetryRequest $request)
    {
       $budgetry->update($request->all());
        $this->syncTags($budgetry, $request->input('tag_list_budgetry'));

        return redirect ('budgetries');
    }

    /** sync up the list  of tags in database
     * @param Budgetry$budgetry
     * @param array $tags
     * @internal param BudgetryRequest $request
     */
    public function syncTags(Budgetry $budgetry , array $tags)
    {
       $budgetry->tags()->sync($tags);
    }

    /** save a new mr
     * @param BudgetryRequest $request
     * @return mixed
     */
    private function createBudgetry(BudgetryRequest $request)
    {
       $budgetry= Auth::user()->budgetry()->create($request->all());    //get authenticated user who saved  mr

        $this->syncTags($budgetry, $request->input('tag_list_budgetry'));
        return $budgetry;
    }


    /*
    
        public function postUploadCsv(Request $request ,Budgetry$budgetry ,$id )
        {
           $budgetry= Auth::user()->mr()->create($request->all());
    
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
    
    
                                    Budgetry::create([
    
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
                Budgetry::create([
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
        return redirect ('budgetries');
    }

}
