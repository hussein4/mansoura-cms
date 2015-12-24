<?php

namespace App\Http\Controllers;
use App\Http\Requests\VlistRequest;
use App\Tag;
use App\Vlist;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Carbon\Carbon;
use Auth;



class VlistController extends Controller
{

    /**
     * Create a New Vlist instance
     */

   public function __construct()
    {
       $this->middleware('auth', ['except'=> ['index', 'show']]);
    }



    public function index()
    {
        $vlist = Vlist::latest('updated_at')->published()->get();
        return view ('vlist.index', compact('vlist' ));
    }

    public function show(Vlist $vlist)
    {
        return view('vlist.show', compact ('vlist'));
    }

    public function create()
    {
        $tags= Tag::lists('name','id')->all();
        return view('vlist.create',compact('tags'));
    }

    /**
     * @param CreateVlistRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(VlistRequest $request)
    {
      //  dd($request->input('tag_list'));
       $this->createVlist($request);

     //   flash()->success('The Supplier has been Added');
        flash()->overlay('The Supplier has been Successfully Added!', 'Good Job');
        return redirect ('vlist');
    }

    /**
     * @param Vlist $vlist
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Vlist $vlist)
    {
        $tags = Tag::lists('name','id')->all();
        return view('vlist.edit',compact('vlist','tags'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Vlist $vlist , VlistRequest $request)
    {
        $vlist->update($request->all());
        $this->syncTags($vlist, $request->input('tag_list'));

        return redirect ('vlist');
    }

    /** sync up the list  of tags in database
     * @param Vlist $vlist
     * @param array $tags
     * @internal param VlistRequest $request
     */
    public function syncTags(Vlist $vlist , array $tags)
    {
        $vlist->tags()->sync($tags);
    }

    /** save a new vlist
     * @param VlistRequest $request
     * @return mixed
     */
    private function createVlist(VlistRequest $request)
    {
          $vlist= Auth::user()->vlist()->create($request->all());    //get authenticated user who saved  vlist
          $this->syncTags($vlist, $request->input('tag_list'));
        return $vlist;
    }
}
