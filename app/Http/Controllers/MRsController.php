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

class MRsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['index']]);
    }



    public function index()
    {
       // $mr = MR::latest('updated_at')->published()->get();
        $mr =MR::orderBy('created_at', 'desc')->get();
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
}
