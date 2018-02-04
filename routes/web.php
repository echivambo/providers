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
    Route::get('/viewsProviders', 'viewsProviders@index')->name('viewsProviders');
    Route::resource('/ramo', 'ramoController');
    Route::resource('/users', 'UserController');
    Route::get('/changePassword','HomeController@showChangePasswordForm');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::post('gerar-codigo/validacao',   ['uses'=>'GerarCodController@store']);
//    Route::get('/gerar-codigo/get/all', 'GerarCodController@findAll');

    //Preencher a tabela gerar código
    Route::get('/gerar-codigo/get/all', function (){
        if(Request::ajax()){
            $data = DB::table('prov_cods')
                ->join('users', 'users.id', '=', 'prov_cods.user_id')
                ->select('prov_cods.*', 'users.name as user')
                ->orderByRaw('prov_cods.id DESC')
                ->get();

            return Response::json($data);
        }
    });



});
    Route::post('provider/sava',   ['uses'=>'ProvidersController@store']);
    Route::resource('/providers', 'ProvidersController');
    Route::resource('/mail', 'MailController');

    Route::get('/print-provider', 'printProviderController@index')->name('print-provider');

    //Preencher a tabela gerar código
    Route::get('/get/provincia', function (){
        $pais = DB::table('countries')
            ->select(DB::raw('id'))
            ->where('name', $_GET['pais'])
            ->get();

        if(Request::ajax()){
            $data = DB::table('states')
                ->where('country_id', $pais[0]->id)->get();

            return Response::json($data);
        }
    });

    //Preencher a tabela gerar código
    Route::get('/get/cidade', function (){
        $cidade = DB::table('states')
            ->select(DB::raw('id'))
            ->where('name', $_GET['prov'])
            ->get();

        if(Request::ajax()){
            $data = DB::table('cities')
                ->where('state_id', $cidade[0]->id)->get();

            return Response::json($data);
        }
    });
