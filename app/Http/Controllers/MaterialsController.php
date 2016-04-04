<?php

namespace App\Http\Controllers;
use App\Http\Requests\MaterialRequest;
use Illuminate\Http\Request;
use App\Material;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use App\MR;
use App\Vlist;


use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;


class MaterialsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // $material = Material::latest('updated_at')->published()->get();
       $material =Material::orderBy('created_at', 'desc')->paginate(10);
        return view ('materials.index', compact('material' ));
    }



    /**
     * @param Material$material
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Material $material)
    {
        //dd($material->po_issued->format('d-M-Y'));
        return view('materials.show', compact ('material'));
    }

    public function create()
    {
        $tags= Tag::lists('name','id')->all();


        return view('materials.create',compact('tags' ));
    }

    /**
     * @param CreateMaterialRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MaterialRequest $request)
    {
        //  dd($request->input('tag_list'));
        $this->createMaterial($request);

        //   flash()->success('The Supplier has been Added');
        flash()->overlay('The Material has been Successfully Added!', 'Good Job');
        return redirect ('materials');
    }

    /**
     * @param Material$material
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Material $material)
    {
        $tags = Tag::lists('name','id')->all();


        return view('materials.edit',compact('material','tags','mr','suppliers'));
    }

    /**
     * @param Material$material
     * @param MaterialRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @internal param $id
     */
    public function update(Material$material , MaterialRequest $request)
    {
       $material->update($request->all());

        $this->syncTags($material, $request->input('tag_material_list'));


        return redirect ('materials');
    }

    /** sync up the list  of tags in database
     * @param Material$material
     * @param array $tags
     * @internal param MaterialRequest $request
     */
    public function syncTags(Material$material , array $tags)
    {
       $material->tags()->sync($tags);
    }








    /** save a new Material
     * @param MaterialRequest $request
     * @return mixed
     */
    private function createMaterial(MaterialRequest $request)
    {
       $material= Auth::user()->material()->create($request->all());    //get authenticated user who saved  Material
        $this->syncTags($material, $request->input('tag_material_list'));



        return $material;
    }

    /**
     * @param int $howMany
     * @return mixed
     */

    protected function import()
    {
        $file=Input::file("file");

        //Excel::load($file)->chunk(10, function ($reader)
      
      Excel::load($file)->chunk(200, function ($results) {
      //Excel::filter('chunk')->load($file, function ($reader)
      // Excel::filter('chunk')->load($file)->chunk(250, function($results)
     //  {

           //    Excel::load($file, function($reader)

            $reader->ignoreEmpty();
            $results = $reader->get();
       print_r($results);
            foreach($results as $row):
               echo $row->m_code."<br />";
               Material::create([
                   'm_code'                    =>$row->m_code,
                 /*  'm_description'             =>$row->m_description,
                   'm_unit'                    =>$row->m_unit,
                   'm_consumption'             =>$row->m_consumption,
                   'm_last_unit_price'         =>$row->m_last_unit_price,
                   'm_last_unit_price_currency'=>$row->m_last_unit_price_currency,
                   'm_max'                     =>$row->m_max,
                   'm_min'                     =>$row->m_min,
                   'm_remarks'                 =>$row->m_remarks,
                   'm_required'                =>$row->m_required,
                   'm_stock'                   =>$row->m_stock,
                   'm_usage'                   =>$row->m_usage,
                   'm_requesting_dept'         =>$row->m_requesting_dept,
                   'm_identity'                =>$row->m_identity,
                   'm_company'                 =>$row->m_company,
                   'm_location'                =>$row->m_location,
                   'm_reorder'                 =>$row->m_reorder,
                   'm_last_update_date'        =>date("d-M-Y g:i A",strtotime($row->m_last_update_date)),
                   'm_mesc'                    =>$row->m_mesc,
                   'user_id'                   =>Auth::user()->id
                //   'm_company'                 =>$row->m_company,
                 //  'm_location'                =>$row->m_location,
                 //  'm_reorder'                 =>$row->m_reorder,
                 //  'm_last_update_date'        =>date("d-M-Y g:i A",strtotime($row->m_last_update_date)),
                  // 'm_mesc'                    =>$row->m_mesc, */
                   'user_id'                   =>Auth::user()->id,
                   'slug'                        =>Auth::user()->id
                   
                   

                ]);
            endforeach;

        });
    //   return redirect ('materials' );
    }



}
