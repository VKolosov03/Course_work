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

Route::get('/locale/{language}', 'App\Http\Controllers\LolController@getLocale');
Route::middleware(['set_locale'])->group(function() {
    Route::get('/', 'App\Http\Controllers\LolController@getWelcome');
    Route::get('/us', 'App\Http\Controllers\LolController@getUs');
    Route::get('/micro', 'App\Http\Controllers\LolController@getList');
    Route::get('/macro', 'App\Http\Controllers\LolController@getList');
    Route::get('/champions', 'App\Http\Controllers\LolController@getList');
    Route::get('/search', 'App\Http\Controllers\LolController@getSearch');
    Route::get('/news', 'App\Http\Controllers\LolController@getNews');
    Route::post('/result', 'App\Http\Controllers\LolController@getSearch');
    Route::get('/{page}', 'App\Http\Controllers\LolController@getGuide')->name('guides');
    Route::post('/{page}/reply', 'App\Http\Controllers\LolController@setReply');
});
