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

Route::get('/companyEdit', 'CompanyController@companyEdit');
Route::post('/companyEdit', 'CompanyController@companyUpdate');

//基本情報
Route::get('/basicAdd', 'BasicController@basicAdd');
Route::post('/basicAdd', 'BasicController@basicCreate');
Route::get('/basicEdit', 'BasicController@basicEdit');
Route::post('/basicEdit', 'BasicController@basicUpdate');

//自分情報
Route::get('/myInfo', 'MyInfoController@index');
Route::get('/myInfoAdd', 'MyInfoController@myInfoAdd');
Route::post('/myInfoAdd', 'MyInfoController@myInfoCreate');
Route::get('/myInfoEdit', 'MyInfoController@myInfoEdit');
Route::post('/myInfoEdit', 'MyInfoController@myInfoUpdate');

//詳細情報
Route::get('/detailAdd', 'DetailController@detailAdd');
Route::post('/detailAdd', 'DetailController@detailCreate');
Route::get('/detailEdit', 'DetailController@detailEdit');
Route::post('/detailEdit', 'DetailController@detailUpdate');

//希望職種
Route::get('/wishJobtypeAdd', 'WishJobtypeController@wishJobtypeAdd');
Route::post('/wishJobtypeAdd', 'WishJobtypeController@wishJobtypeCreate');
Route::get('/wishJobtypeEdit', 'WishJobtypeController@wishJobtypeEdit');
Route::post('/wishJobtypeEdit', 'WishJobtypeController@wishJobtypeUpdate');

//福利厚生
Route::get('/welfareAdd', 'WelfareController@welfareAdd');
Route::post('/welfareAdd', 'WelfareController@welfareCreate');
Route::get('/welfareEdit', 'WelfareController@welfareEdit');
Route::post('/welfareEdit', 'WelfareController@welfareUpdate');

//採用情報
Route::get('/recruitementInfoAdd', 'RecruitementInfoController@recruitementInfoAdd');
Route::post('/recruitementInfoAdd', 'RecruitementInfoController@recruitementInfoCreate');
Route::get('/recruitementInfoEdit', 'RecruitementInfoController@recruitementInfoEdit');
Route::post('/recruitementInfoEdit', 'RecruitementInfoController@recruitementInfoUpdate');

//説明会・面談情報
Route::get('/companyInfomationSessionAdd', 'CompanyInfomationSessionController@companyInfomationSessionAdd');
Route::post('/companyInfomationSessionAdd', 'CompanyInfomationSessionController@companyInfomationSessionCreate');
Route::get('/companyInfomationSessionEdit', 'CompanyInfomationSessionController@companyInfomationSessionEdit');
Route::post('/companyInfomationSessionEdit', 'CompanyInfomationSessionController@companyInfomationSessionUpdate');

//質問
Route::get('/questionsAdd', 'QuestionsController@questionsAdd');
Route::post('/questionsAdd', 'QuestionsController@questionsCreate');
Route::get('/questionsEdit', 'QuestionsController@questionsEdit');
Route::post('/questionsEdit', 'QuestionsController@questionsUpdate');