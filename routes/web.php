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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('post','DataController@postRequest');
//Route::get('get','DataController@getRequest');

//Route::post('store', 'GuzzlePostController@store');
//Route::get('index', 'GuzzlePostController@index');

//Route::get('coba','GuzzleController@getRemoteData');
Auth::routes();
//Route::post('/login')->middleware('LevelMiddleware');

//Route::get('/', array('as' => 'admin', 'uses'=> 'LoginController@index'))->middleware('LevelMiddleware');

//Route::group(['middleware' => ['web','auth','level:1']], function () {
//    Route::auth();
    Route::get('/', 'HomeController@admin');    
    Route::get('/list', function () {
        return view('admin.list');
    });

    Route::get('/add', function () {
        return view('admin.add');
    });

    Route::get('/history', function () {
        return view('admin.history');
    });

    Route::get('/confirm', function () {
        return view('admin.konfirm');
    });

//});

//Route::group(['middleware' => ['web','auth','level:2']], function () {
//    Route::auth();
    Route::get('/', 'HomeController@mhs');
    Route::get('/inventaris', array(
        'as'=>'inventaris',
        'uses'=>'Inventaris\InventarisController@index'
    ));
    Route::post('/inventaris/lab', array('as'=>'inventarislab', 'uses'=>'Inventaris\InventarisController@inventarislab'));

    Route::get('/pinjam', function () {
        return view('peminjam.pinjam');
    });

    Route::get('/kontak', function () {
        return view('peminjam.kontak');
    });

    Route::get('/tentang', function () {
        return view('peminjam.tentang');
    });

    Route::get('/home', function () {
        return view('peminjam.beranda');
    });

//});