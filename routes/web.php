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

Route::get('/logout', ['as' => '/logout', 'uses' => 'Admin\IndexController@logout']);
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\IndexController@index');

    Route::get('/devojke', ['as' => 'admin.devojke', 'uses' => 'Admin\GirlController@index']);
    Route::get('/devojka/{id}', ['as' => 'admin.devojka', 'uses' => 'Admin\GirlController@editGirl']);
    Route::patch('devojka/{id}', ['as' => 'admin.devojka.update', 'uses' => 'Admin\GirlController@updateGirl']);


    Route::get('/add-devojke', ['as' => 'admin.devojke.add', 'uses' => 'Admin\GirlController@addGirl']);
    Route::post('/add-devojke', ['as' => 'admin.devojke.add', 'uses' => 'Admin\GirlController@storeGirl']);
    Route::delete('/delete-devojke/{id}', ['as' => 'admin.devojke.delete', 'uses' => 'Admin\GirlController@deleteGirl']);


    Route::get('/devojka/gallery/{id}', ['as' => 'admin.devojka.galerija', 'uses' => 'Admin\GirlGallController@gallery']);

    Route::get('/devojka/gallery/add/{id}', ['as' => 'admin.devojka.galerija.add', 'uses' => 'Admin\GirlGallController@galleryAdd']);
    Route::post('/devojka/gallery/add/{id}', ['as' => 'admin.devojka.galerija.add', 'uses' => 'Admin\GirlGallController@galleryStore']);
    Route::delete('/devojka/gallery/delete/{id}', ['as' => 'admin.devojka.galerija.delete', 'uses' => 'Admin\GirlGallController@galleryDeleteImage']);



    //men
    Route::get('/men', ['as' => 'admin.men', 'uses' => 'Admin\MenController@index']);
    Route::get('/add-men', ['as' => 'admin.men.add', 'uses' => 'Admin\MenController@addMen']);
    Route::post('/add-men', ['as' => 'admin.men.add', 'uses' => 'Admin\MenController@storeMen']);
    Route::delete('/delete-men/{id}', ['as' => 'admin.men.delete', 'uses' => 'Admin\MenController@deleteMen']);
    Route::get('/men-id/{id}', ['as' => 'admin.men-id', 'uses' => 'Admin\MenController@editMen']);
    Route::patch('men-id/{id}', ['as' => 'admin.men-id.update', 'uses' => 'Admin\MenController@updateMen']);
});