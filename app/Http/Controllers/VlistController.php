<?php

namespace App\Http\Controllers;
use App\Http\Requests\VlistRequest;
use App\Tag;
use App\Vlist;
use Gate;
//use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use Request;
use Carbon\Carbon;
use Auth;



class VlistController extends Controller {

    /**
     * Create a New Vlist instance
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    public function index()
    {
      //  $vlist = Vlist::latest('updated_at')->published()->get();
        $vlist = Vlist::orderBy('created_at', 'desc')->paginate(10);
        return view('vlist.index', compact('vlist'));
    }

    public function show(Vlist $vlist)
    {

        return view('vlist.show', compact('vlist'));
    }

    public function create()
    {
        $tags = Tag::lists('name', 'id')->all();

        return view('vlist.create', compact('tags'));
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

        return redirect('vlist');
    }

    /**
     * @param Vlist $vlist
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Vlist $vlist)
    {
        $tags = Tag::lists('name', 'id')->all();

        return view('vlist.edit', compact('vlist', 'tags'));
    }

    /**
     * @param Vlist $vlist
     * @param VlistRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update(Vlist $vlist, VlistRequest $request)
    {
/*
        $vlist->update($request->all());
        $this->syncTags($vlist, $request->input('tag_list'));
        return redirect('vlist');
  */
        $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('desc')+ $request->get('bidbond')) / 4);
        $vlist->update($request->all());
        $vlist->vgrade = $average;
        Auth::user()->vlist()->save($vlist);
        $this->syncTags($vlist, $request->input('tag_list'));
        return redirect('vlist');

    }

    public function average(Vlist $vlist, VlistRequest $request)
    {

        $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('desc')+ $request->get('bidbond')) / 4);
        $vlist->vgrade = $average;
      // $vlist->fill($vlist);
        Auth::user()->vlist()->save($vlist);

        $tags = Tag::lists('name', 'id')->all();
        $this->syncTags($vlist, $request->input('tag_list'));
        return view('vlist.eval', compact('vlist', 'tag_list'));


    }



    /** sync up the list  of tags in database
     * @param Vlist $vlist
     * @param array $tags
     * @internal param VlistRequest $request
     */


    public function syncTags(Vlist $vlist, array $tags)
    {
        $vlist->tags()->sync($tags);
    }

    /** save a new vlist
     * @param VlistRequest $request
     * @return mixed
     */
    private function createVlist(VlistRequest $request)
    {
        /*

           $vlist= Auth::user()->vlist();
        // $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('desc')+ $request->get('bidbond')) / 4, 0, PHP_ROUND_HALF_UP);
            $average =['quality','delivery','bidbond','desc'];


         //  $vlist =Vlist::all();
            $vlist->vgrade = array_sum($request->average) / 4;
            dd($request);
         //  $vlist->vgrade=$average;

            $vlist= Auth::user()->vlist()->create($request->all());

           // $vlist->create($request->all());

           // $vlist= Auth::user()->vlist()->create($request->all());

            //  $vlist= Auth::user()->vlist()->create($request->all());    //get authenticated user who saved  vlist
            //  $vlist->vgrade = array_sum($request->average) / 4;
              $this->syncTags($vlist, $request->input('tag_list'));
            return $vlist;
        */
        $average = round(($request->get('quality') + $request->get('delivery')+ $request->get('desc')+ $request->get('bidbond')) / 4);
        $vlist = new Vlist;
        $vlist->fill($request->all());
        $vlist->vgrade = $average;

        Auth::user()->vlist()->save($vlist);
        $this->syncTags($vlist, $request->input('tag_list'));
        return $vlist;

    }
    public function destroy(Request $request, Vlist $vlist)
    {
       $this->authorize('destroy', $vlist);
        $vlist->delete();

        return redirect('/vlist');
    }
}