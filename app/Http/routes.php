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

use App\Http\Controllers\VlistController;
use Illuminate\Http\Request;
use App\Contracts\Search;


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

Route::resource('vlist','VlistController');



Route::resource('mrs','MRsController');
Route::resource('pos','POsController');



Route::get('tags/{tags}', 'TagsController@show');



Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController',
    ]);

