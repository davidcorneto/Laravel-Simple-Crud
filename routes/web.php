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

// Route::get('/halamanku',function(){
//   return view('halamanku');
// });
//
// Route::get('/halamanmu',function(){
//   return view('halamanmu');
// });

Route::get('/crud','CrudController@halamanmu');

Route::get('/halamanmu','CrudController@halamanMu');

Route::get('/crud/add','CrudController@add');

Route::post('/crud','CrudController@store');

Route::get('/crud/{id}/edit','CrudController@ubah');

Route::put('/crud/{id}','CrudController@update');

Route::delete('/crud/{id}','CrudController@delete');
