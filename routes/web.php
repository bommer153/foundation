<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::group(['middleware' => 'isAdmin'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('home', 'App\Http\Controllers\ScoreController@scoreRank')->name('home');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('judge/tally', 'App\Http\Controllers\ScoreController@judgeTally')->name('judge.tally');
	Route::get('score/sil', 'App\Http\Controllers\ScoreController@sil')->name('score.sil');

	Route::post('score/r2', 'App\Http\Controllers\ScoreController@r2')->name('score.r2');
	Route::post('score/r1', 'App\Http\Controllers\ScoreController@r1')->name('score.r1');

	Route::post('dual/change', 'App\Http\Controllers\ScoreController@dualChange')->name('dual.change');
	Route::post('cat/change', 'App\Http\Controllers\ScoreController@catChange')->name('cat.change');
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

Route::group(['middleware' => 'auth'], function () {

	Route::get('api/candidate/{id}', 'App\Http\Controllers\CandidateController@partialCandidate')->name('partial.view');	
	Route::get('api/singleForm/{id}', 'App\Http\Controllers\CandidateController@singleForm')->name('singleForm');
	Route::get('api/single/', 'App\Http\Controllers\CandidateController@single')->name('single');

	Route::get('api/dualCandidate/{id}', 'App\Http\Controllers\CandidateController@dualCandidate')->name('dualCandidate.view');	
	Route::get('api/dualForm/{id}', 'App\Http\Controllers\CandidateController@dualForm')->name('dualForm');
	Route::get('api/dual/', 'App\Http\Controllers\CandidateController@dual')->name('dual');

	Route::get('judge/index', 'App\Http\Controllers\HomeController@indexI')->name('home.judgex');
	Route::get('judge/index/{id}', 'App\Http\Controllers\HomeController@indexJ')->name('home.judge');
	Route::get('judge/dual/{no}', 'App\Http\Controllers\HomeController@dual')->name('home.judgeDual');
	Route::post('judge/index/score/{id}', 'App\Http\Controllers\ScoreController@score')->name('score');
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

