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

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function() {

    // Dashboard
    Route::get('/', 'HomeController@index')->name('home');

    // Employees
    Route::get('/employees', 'EmployeeController@index');
    Route::get('/employees/create', 'EmployeeController@create');
    Route::get('/employees/{employee}', 'EmployeeController@show');
    Route::post('/employees', 'EmployeeController@store');


});
