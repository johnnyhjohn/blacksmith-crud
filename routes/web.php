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

// Route::get('/', 'MainController@index')->where('any', '.*');
Route::get('/', 'MainController@index');

Route::group(['prefix' => '/imperio'], function(){
    Route::get('/', 'ImperioController@index');
    Route::delete('/{imperioId}', 'ImperioController@delete');
    Route::get('/create', 'ImperioController@create');
    Route::get('/update/{imperioId}', 'ImperioController@edit');
    Route::post('/create', 'ImperioController@store');
    Route::put('/update', 'ImperioController@update');
});

Route::group(['prefix' => '/reino'], function(){
    Route::get('/', 'ReinoController@index');
    Route::get('/create','ReinoController@create');
    Route::post('/create','ReinoController@store');
    Route::get('/update/{impvariavel}','ReinoController@edit');
    

});
