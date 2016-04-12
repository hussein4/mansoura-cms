<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\MRRequest;
use App\MR;
use App\Tag;
use App\Material;


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
        $materials = Material::lists('m_description','id')->all();
        return view('mrs.create',compact('tags','materials'));

    }

    /**
     * @param CreateMRRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(MRRequest $request)
    {
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
        $materials = Material::lists('m_description','id')->all();
        return view('mrs.edit',compact('mr','tags','materials'));
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
        $this->syncMaterials($mr , $request->input('material_mr_list'));
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

    public function syncMaterials(MR $mr , array $materials)
    {
        $mr->materials()->sync($materials);
    }

    /** save a new mr
     * @param MRRequest $request
     * @return mixed
     */
    private function createMR(MRRequest $request)
    {
        $mr= Auth::user()->mr()->create($request->all());    //get authenticated user who saved  mr
        $this->syncTags($mr, $request->input('tag_list_mr'));
        $this->syncMaterials($mr , $request->input('material_mr_list'));
        return $mr;
    }


    public function import()
    {
        $file = Input::file("file");
        $destinationPath = storage_path('app/uploads');
        $fileName = $file->getClientOriginalName();
        $file->move($destinationPath,$fileName);


        $uploadedFileLocation = storage_path('app/uploads') . '/' . $file->getClientOriginalName();
        $storageRelativeLocation = 'uploads' . '/' . $file->getClientOriginalName();

        Excel::selectSheets('Required')->load($uploadedFileLocation)->byConfig("excel.import.sheets", function($sheet) use ($uploadedFileLocation)
        {
            $mr_no = $sheet->mr_no;
            $mr_date = date('d-m-Y', \PHPExcel_Shared_Date::ExcelToPHP($sheet->mr_date));
            $mr_date = Carbon::createFromFormat('m-d-Y', $mr_date)->format('d-M-Y g:i A');
            $mr_requesting_dept = $sheet->mr_requesting_dept;
            $mr_estimated_cost = $sheet->mr_estimated_cost;
            $mr_subject = $sheet->mr_subject;
            $mr_data = compact("mr_no","mr_date","mr_requesting_dept","mr_estimated_cost","mr_subject");
            $mr = Auth::user()->mr()->create($mr_data);
            $this->storeMRMaterialsListFromFile($mr,$uploadedFileLocation);
        });

        return redirect ('mrs');
    }

    protected function storeMRMaterialsListFromFile(MR $mr, $file)
    {
        Excel::selectSheets('Required')->load($file, function($reader) use ($mr)
        {
          foreach ($reader as $result) {
            $maxDataCol = $result->getActiveSheet()->getHighestDataColumn();
            $maxDataRow = $result->getActiveSheet()->getHighestDataRow() - 8;
            $result_array = $result->getActiveSheet()->rangeToArray('A9:'.$maxDataCol.$maxDataRow, true, true, true);

            $materials = [];
            foreach ($result_array as $row) {
              $m_required = $row[1];
              $m_unit = $row[2];
              $m_description = $row[3];
              $m_code = $row[7];
              $m_consumption = $row[9];
              $m_stock = $row[10];
              $m_mesc = $row[11];
              $m_max = $row[17];
              $m_min = $row[18];
              $m_remarks = $row[19];
              $user_id = Auth::user()->id;
              $slug = Auth::user()->id;

              $material = Material::updateOrCreate(compact("m_required","m_unit","m_description","m_code","m_consumption","m_stock","m_mesc","m_max","m_min", "user_id", "slug"));
              $materials[] = $material->id;
            }
            $this->syncMaterials($mr, $materials);
            break;
          }
        });

    }


}
