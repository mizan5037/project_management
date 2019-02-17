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



Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){
    Route::get('dashboard','AdminController@index')->name('dashboard');
    Route::resource('category','CategoryController');
    
    Route::resource('service','ServiceController');
    Route::resource('employee','EmployeeController');
    Route::resource('client','ClientController');
    Route::resource('project','ProjectController');

    Route::get('report/client','ReportController@client')->name('report.client');
    Route::get('report/employee','ReportController@employee')->name('report.employee');
    Route::get('report/project','ReportController@project')->name('report.project');
    Route::get('report/between_date','ReportController@betweenDate')->name('report.betweenDate');
    Route::post('report/between_date','ReportController@show')->name('report.show');
    
    

});

Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author']], function (){

		Route::get('dashboard','AuthorController@index')->name('dashboard');
		

	});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

