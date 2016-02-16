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
use App\Vlist;
use Illuminate\Http\Request;
use App\Contracts\Search;
use Maatwebsite\Excel\Facades\Excel;


Route::get('/', function (Search $search ,Request $request) {

    $results = $search->index('getstarted_actors')
               ->get($request->name);
    return view('welcome', compact('results'));
});

Route::get('/search', function (Search $search ,Request $request) {

    $results = $search->index('getstarted_actors')
        ->get($request->name);
    return view('search', compact('results'));
});

Route::resource('vlist','VlistsController');


Route::get('/vlist/{id}/export' , 'VlistsController@export');

Route::post('/vlist/{id}/file' , 'VlistsController@post_upload');


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



Route::resource('mrs','MRsController');
Route::resource('pos','POsController');



Route::get('tags/{tags}', 'TagsController@show');



Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
    ]);

