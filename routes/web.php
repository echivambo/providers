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
})->name('inicio');

Auth::routes();


Route::resource('/registar-cod-confirmacao', 'ConfController');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/admin/gerar-codigo', 'GerarCodController');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::post('gerar-codigo/validacao',   ['uses'=>'GerarCodController@gerarCod']);
});
    Route::resource('/providers', 'ProvidersController');
