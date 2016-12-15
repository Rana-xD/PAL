<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::post('login','login@login');
Route::get('budget', function () {
    return view('BudgetManagement');
});
Route::get('work', function () {
    return view('WorkShift');
});
Route::get('kpi', function () {
    return view('L-KPI');
});
