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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/appeartest', 'AppeartestController@index');
Route::get('/addtest', 'AppeartestController@add');
Route::post('/addtest', 'AppeartestController@create');

Route::get('/', 'RecnoteController@index');
Route::get('/companyDetail', 'RecnoteController@companyDetail');
Route::get('/companyAdd', 'RecnoteController@companyAdd');
Route::post('/companyAdd', 'RecnoteController@companyCreate');

Route::get('/companyEdit', 'CompanyController@edit');
Route::post('/companyEdit', 'CompanyController@update');

//基本情報
Route::get('/basicAdd', 'BasicController@basicAdd');
Route::post('/basicAdd', 'BasicController@basicCreate');