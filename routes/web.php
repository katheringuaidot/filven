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
	//$pdf = PDF::loadView('');
	//return $pdf->stream();
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	//Books
	Route::get('books/{id}/stock', 'BooksController@ingresarStock')->name('books.getstock');//mostrar formulario
	Route::put('books/{id}/plus', 'BooksController@sumarStock')->name('books.sumarStock');
	Route::resource('/books', 'BooksController');

	//Authors
	Route::resource('/authors', 'AuthorsController');

	//Editions
	Route::resource('/editions', 'EditionsController');

	//Iva
	Route::resource('/iva', 'IvaController');

	//Enterprise
	Route::resource('/enterprise', 'EnterpriseController');
	//Cliente
	Route::resource('/cliente', 'ClienteController');
	Route::get('/client/{cedula}','ClienteController@search');


	//Sells
	Route::resource('/sells', 'SellsController');

	//facturapdf
	Route::get('pdf', 'FacturaPdfController@invoice');

	// Report
	Route::get('/report','ReportController@index')->name('report.index');
    Route::post('/report/consult1','ReportController@consult1')->name('report.consult1');
    Route::post('/report/reportpdf','ReportController@reportpdf')->name('reportpdf');


});
