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
    return view('welcome');
});

//get('url', 'コントローラー@フロントエンドやCRUD呼び出しのメソッド')
Route::get('tests/test', 'TestController@index');

// Route::get('contact/show', 'ContactFormController@index');
// Route::get('contact/index', 'ContactFormController@index');

//認証必要：'middleware'=>'auth'
Route::group(['prefix'=>'contact','middleware'=>'auth'], function () {
    Route::get('index', 'ContactFormController@index')->name('contact.index');
    //nameをつけるとviewsを書くときに楽
    Route::get('create', 'ContactFormController@create')->name('contact.create');
    Route::post('store', 'ContactFormController@store')->name('contact.store');
});

//REST
//Route::resource('contacts', 'ContactFormController')->only(['index','show']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
