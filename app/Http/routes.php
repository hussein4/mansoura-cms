<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Controllers\VlistsController;
use App\Tag;
use App\Vlist;
use Illuminate\Http\Request;
use App\Contracts\Search;
use Maatwebsite\Excel\Facades\Excel;


Route::get('/', function (Search $search ,Request $request) {

    $results = $search->index('mrs')
        ->get($request->name);
    return view('welcome', compact('results'));
});

Route::get('/search/vlist', function (Search $search ,Request $request) {

    $results = $search->index('vlist')
        ->get($request->name);
    return view('search', compact('results'));
});






Route::get('/vlist/{id}/export' , 'VlistsController@export');

Route::post('/vlist/{id}/file' , 'VlistsController@post_upload');

Route::get('v_list/import', function () {
    return view('vlist.upload_vlist');
});
Route::put('v_list/import','VlistsController@import');

Route::resource('vlist','VlistsController');


/*

Route::get('vlist/{id}/eval', array('as' => 'vlist.eval', function($id)
{
    // return our view and Nerd information

    return View('vlist.eval') // pulls app/views/nerd-edit.blade.php
   ->with('vlist', \App\Vlist::find($id))
     ->with('tags', \App\Tag::find($id));
}));



Route::get('vlist/{vlist}/eval','VlistsController@average');

/*
Route::get('vlist/{vlist}/eval','VlistsController@average', function($id)
{
    return View('vlist.eval')
        ->with('vlist', \App\Vlist::find($id));
});
*/
// route to process the form


Route::get('budgetry_s/import', function () {
    return view('budgetries.upload_budgetries');
});

Route::put('budgetry_s/import','BudgetriesController@import');

Route::resource('budgetries','BudgetriesController');





Route::get('mr_s/import', function () {
    return view('mrs.upload_mrs');
});

Route::put('mr_s/import','MRsController@import');

Route::get('po_s/exportExcel/{pos}','POsController@exportExcel');

Route::resource('mrs','MRsController');





Route::get('po_s/import', function () {
    return view('pos.upload_pos');
});
Route::put('po_s/import','POsController@import');
Route::get('po_s/exportExcel/{pos}','POsController@exportExcel');

Route::resource('pos','POsController');




Route::get('tender_s/import', function () {
    return view('tenders.upload_tenders');
});
Route::put('tender_s/import','TendersController@import');

Route::resource('tenders','TendersController');




Route::get('material_s/import', function () {
    return view('materials.upload_materials');
});
Route::put('material_s/import','MaterialsController@import');

Route::resource('materials','MaterialsController');


Route::get('tags/{tags}', 'TagsController@show');



Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
]);
