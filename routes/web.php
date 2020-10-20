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
    /* return view('welcome'); */
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// Route::get('/homepage', 'RecordController@index')->name('homepage');


Route::resources([
    'testrecord' => 'TestRecordController',
    'resultrecord' => 'ResultRecordsController',
    'updaterecord' => 'RecordController',
]);

Route::post ('/rrecord', 'ResultRecordsController@update');
Route::post ('/urecord', 'RecordController@update');

/* Reports START */
Route::get ('/report', 'ReportsController@index');
Route::post ('/report_load', 'ReportsController@filter_results');
/* Reports END */

// 'updaterecord' => 'ResultRecordsController',