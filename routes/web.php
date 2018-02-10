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

Route::get('/', 'PagesController@showHome');
Route::get('/about-crystal', 'PagesController@showAboutCrystal');
Route::get('/about-rejuvenation', 'PagesController@showAboutRejuvenation');
Route::get('/facility', 'PagesController@showFacility');
Route::get('/faq', 'PagesController@showFaq');
Route::get('/contact', 'PagesController@showContact');
Route::Post('/sendemail', 'PagesController@contactform');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
