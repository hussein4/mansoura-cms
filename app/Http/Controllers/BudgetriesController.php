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

        $this->createBudgetry($request);

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



    public function import()
    {
        $file=Input::file("file");


        Excel::load($file, function($reader)
        {
            $results = $reader->get();
            foreach($results as $row):
                Budgetry::create([
                    'mr_b_no'                           =>$row->mr_b_no,
                    'mr_b_subject'                      =>$row->mr_b_subject,
                    'mr_b_estimated_cost'               =>$row->mr_b_estimated_cost,
                    'mr_b_currency'                     =>$row->mr_b_currency,
                    'mr_b_date'                         =>date("d-M-Y g:i A",strtotime($row->mr_b_date)),
                    'mr_b_received_date'                =>date("d-M-Y g:i A",strtotime($row->mr_b_received_date)),
                    'mr_b_officer'                      =>$row->mr_b_officer,
                    'mr_b_received_by_officer_date'     =>date("d-M-Y g:i A",strtotime($row->mr_b_received_by_officer_date)),
                    'mr_budgetry_rfq'                  =>date("d-M-Y g:i A",strtotime($row->mr_budgetry_rfq)),
                    'mr_rfq_budgetry_closing_date'     =>date("d-M-Y g:i A",strtotime($row->mr_rfq_budgetry_closing_date)),
                    'mr_rfq_budgetry_reminder'         =>date("d-M-Y g:i A",strtotime($row->mr_rfq_budgetry_reminder)),
                    'mr_budgetry_memo'                 =>date("d-M-Y g:i A",strtotime($row->mr_budgetry_memo)),
                    'mr_b_finished'                    =>$row->mr_b_finished,
                    'user_id'                          =>Auth::user()->id,


                ]);
            endforeach;
        });
        return redirect ('budgetries');
    }

}
