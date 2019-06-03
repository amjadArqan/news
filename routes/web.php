<?php

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
    return view('mainPage.first');
});
Route::group(['prefix' => 'admin','middleware' =>'auth'],function() {

    Route::view('/', 'admin.index2');
    Route::get('/adminAdd', 'AdminController@adminAdd')->name('adminAdd');
    Route::post('/storeAdmin', ['as' => 'storeAdmin', 'uses' => 'AdminController@storeAdmin']);
    Route::get('/gameType', 'AdminController@gameType')->name('gameType');
    Route::post('/storeCategory', ['as' => 'storeCategory', 'uses' => 'AdminController@storeCategory']);
    Route::get('/addNews', 'AdminController@addNews')->name('addNews');
    Route::post('/storeNews', ['as' => 'storeNews', 'uses' => 'AdminController@storeNews']);

    Route::get('/news', 'AdminController@news')->name('news');

    Route::get('/newsEdit/{id}',['as' => 'newsEdit', 'uses' => 'AdminController@newsEdit']);
    Route::get('/nDestroy/{id}',['as' => 'nDestroy', 'uses' => 'AdminController@nDestroy']);
    Route::post('/updateNews', ['as' => 'updateNews', 'uses' => 'AdminController@updateNews']);

});

Route::view('index','mainPage.main');

Route::view('first','mainPage.first');

Route::view('second','mainPage.second');

Route::view('third','mainPage.third');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
