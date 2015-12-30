<?php

namespace App\Http\Controllers;
use App\Http\Requests\PORequest;
use Illuminate\Http\Request;
use App\PO;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;

use Carbon\Carbon;
use Auth;



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
        return view('pos.create',compact('tags'));
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
        return view('pos.edit',compact('po','tags'));
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




    /** save a new PO
     * @param PORequest $request
     * @return mixed
     */
    private function createPO(PORequest $request)
    {
        $po= Auth::user()->po()->create($request->all());    //get authenticated user who saved  PO
        $this->syncTags($po, $request->input('tag_list_po'));

        return $po;
    }

    /**
     * @param int $howMany
     * @return mixed
     */


}
