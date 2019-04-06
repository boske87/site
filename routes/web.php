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
Route::get('/', ['as' => '/', 'uses' => 'IndexController@enter']);
Route::get('/loginMain', ['as' => '/loginMain', 'uses' => 'IndexController@index'])->middleware('basicAuth');
Route::get('/logoutAll', ['as' => '/logoutAll', 'uses' => 'IndexController@logout']);
Route::group(['middleware' => ['auth']], function () {
    Route::get('z/moj-profil', ['as' => '/moj-profil', 'uses' => 'GirlController@index']);
    Route::get('m/moj-profil', ['as' => '/men-moj-profil', 'uses' => 'ManController@index']);
    Route::get('/lista-devojaka', ['as' => '/lista-devojaka', 'uses' => 'ManController@listGirl']);
    Route::get('/profil/{id}', ['as' => '/profil', 'uses' => 'ManController@viewGirl']);

    Route::post('/sendOffer/{menId}', ['as' => '/sendOffer', 'uses' => 'OffersController@sendOffers']);

    Route::get('/offersGirl', ['as' => '/offersGirl', 'uses' => 'OffersController@offersGirl']);

    Route::get('/offersGirlAccepted', ['as' => '/offersGirlAccepted', 'uses' => 'OffersController@accOffers']);
    Route::get('/offersGirlDenied', ['as' => '/offersGirlDenied', 'uses' => 'OffersController@deniedOffers']);
    Route::get('/offersGirlDetails/{offerId}', ['as' => '/offersGirlDetails', 'uses' => 'OffersController@offersGirlDetails']);
    Route::get('/acceptOffer/{offerId}', ['as' => '/acceptOffer', 'uses' => 'OffersController@acceptOffer']);
    Route::get('/deniedOffer/{offerId}', ['as' => '/deniedOffer', 'uses' => 'OffersController@deniedOffer']);

    Route::get('/girl/finishOffer', ['as' => '/girl.finishOffer', 'uses' => 'OffersController@finishOffer']);

    Route::get('men/offers', ['as' => '/men.offers', 'uses' => 'ManController@manOffers']);

    Route::get('men/offers/details/{offerId}', ['as' => '/men.offers.details', 'uses' => 'ManController@manOffersDetails']);

    Route::get('men/offersAccepted', ['as' => '/men.offersAccepted', 'uses' => 'ManController@accOffers']);
    Route::get('men/offersDenied', ['as' => '/men.offersDenied', 'uses' => 'ManController@deniedOffers']);

    Route::get('men/offersFinished', ['as' => '/men.offersFinished', 'uses' => 'ManController@offersFinished']);
});
Route::get('/logout', ['as' => '/logout', 'uses' => 'Admin\IndexController@logout']);
Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    # Save reorder
    Route::post('reorderSave/{tableName}', 'Admin\GirlController@reorderSave');
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

    //girl offers
    //men
    Route::get('/girl/offers/{girlId}', ['as' => 'admin.girl.offers', 'uses' => 'Admin\GirlOffers\OfferController@getOffersById']);
    Route::get('/girl/offer/{offerId}', ['as' => 'admin.girl.offer', 'uses' => 'Admin\GirlOffers\OfferController@getOfferById']);

    Route::get('/men/offers/{menId}', ['as' => 'admin.men.offers', 'uses' => 'Admin\ManOffer\ManOfferController@getOffersById']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
