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

Route::get('/masuk', function () {
    return view('auth.masuk');
});

Route::get('/lihat','ControllerIndex@index');
Route::get('/lihatvivo','ControllerIndexVivo@index');
Route::get('/lihatoppo','ControllerIndexOppo@index');

Route::get('/xiomi','Controllerxiomi@index')->middleware('auth');
Route::get('/','Controllerxiomi@index')->middleware('auth');
Route::get('/tambah_xiomi','Controllerxiomi@create')->middleware('auth');
Route::post('/prosestambahxiomi','Controllerxiomi@store')->middleware('auth');
Route::delete('/xiomi/{xiomi}','Controllerxiomi@destroy')->middleware('auth');
Route::get('/editxiomi/{xiomi}','Controllerxiomi@edit')->middleware('auth');
Route::patch('/editxiomi/{xiomi}','Controllerxiomi@update')->middleware('auth');

Route::get('/vivo','Controllervivo@index')->middleware('auth');
Route::get('/','Controllervivo@index')->middleware('auth');
Route::get('/tambah_vivo','Controllervivo@create')->middleware('auth');
Route::post('/prosestambahvivo','Controllervivo@store')->middleware('auth');
Route::delete('/vivo/{vivo}','Controllervivo@destroy')->middleware('auth');
Route::get('/editvivo/{vivo}','Controllervivo@edit')->middleware('auth');
Route::patch('/editvivo/{vivo}','Controllervivo@update')->middleware('auth');

Route::get('/oppo','Controlleroppo@index')->middleware('auth');
Route::get('/','Controlleroppo@index')->middleware('auth');
Route::get('/tambah_oppo','Controlleroppo@create')->middleware('auth');
Route::post('/prosestambahoppo','Controlleroppo@store')->middleware('auth');
Route::delete('/oppo/{oppo}','Controlleroppo@destroy')->middleware('auth');
Route::get('/editoppo/{oppo}','Controlleroppo@edit')->middleware('auth');
Route::patch('/editoppo/{oppo}','Controlleroppo@update')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');