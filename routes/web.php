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



Auth::routes(['register'=>false]);

Route::get('/', 'AdminController@index');


Route::get('/employees', 'EmployeeController@index');
Route::get('/employee/create', 'EmployeeController@create');
Route::post('/employee/store', 'EmployeeController@store');
Route::get('/employee/{employee}', 'EmployeeController@show');
Route::get('/employee/{employee}/edit', 'EmployeeController@edit');
Route::patch('/employees/{employee}', 'EmployeeController@update');
Route::delete('/employees/{employee}', 'EmployeeController@destroy');


Route::get('/companies', 'CompanyController@index');
Route::get('/companies/create', 'CompanyController@create');
Route::post('/companies/store', 'CompanyController@store');
Route::get('/companies/{id}', 'CompanyController@show');
Route::get('/companies/{id}/edit', 'CompanyController@edit');
Route::patch('/companies/{id}', 'CompanyController@update');
Route::delete('/companies/{id}', 'CompanyController@destroy');
