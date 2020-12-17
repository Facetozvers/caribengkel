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

Route::get('/', function () {
    return view('index');
});

Auth::routes();


Route::get('/bengkel/{id}', 'BengkelController@show');

Route::get('/cari-bengkel/mobil', 'CariBengkelController@mobil');
Route::get('/cari-bengkel/mobil/jakarta-pusat', 'CariBengkelController@daerah');
Route::get('/cari-bengkel/mobil/jakarta-barat', 'CariBengkelController@daerah');
Route::get('/cari-bengkel/mobil/jakarta-timur', 'CariBengkelController@daerah');
Route::get('/cari-bengkel/mobil/jakarta-utara', 'CariBengkelController@daerah');
Route::get('/cari-bengkel/mobil/jakarta-selatan', 'CariBengkelController@daerah');


Route::get('/search/bengkel', 'SearchController@bengkel');
Route::get('/search/sparepart', 'SearchController@sparepart');

Route::post('/discuss', 'DiscussionController@submitDiscussion');
Route::post('/discuss/reply', 'DiscussionController@submitReply');

