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

    Route::get('/', "ImagineForSliderController@home");
    Route::post('/', "ImagineForSliderController@add_image")->name('add_image');
    Route::post('/api', "ImagineForSliderController@image_api")->name('api_image');
