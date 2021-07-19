<?php

use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {

    Route::get('/', 'WelcomeController@index')->name('welcome');

    //user routes
    Route::resource('users', 'UserController')->except(['show']);

    //categories routes
    Route::resource('categories', 'CategoryController')->except(['show']);

    //categories routes
    Route::resource('courses', 'CourseController')->except(['show']);

    //categories routes
    Route::resource('coaches', 'CoacheContoller')->except(['show']);

    //categories routes
    Route::resource('certificates', 'CertificateController')->except(['show']);

    //AdvisoryService routes
    Route::resource('advisoryServices', 'AdvisoryServiceController')->except(['show']);

    //purchase routes
    Route::resource('purchases', 'PurchaseController');

    //purchase routes
    Route::resource('posts', 'PostController');

    //settings  routes
    Route::post('settings.store', 'SettingController@store')->name('settings.store');
    Route::get('about_index', 'SettingController@about_index')->name('about_index');
    Route::get('links_index', 'SettingController@links_index')->name('links_index');
    Route::get('title_index', 'SettingController@title_index')->name('title_index');
    Route::get('/founder/{id}', 'SettingController@founder')->name('founder');
    Route::put('/founder_update/{id}', 'SettingController@founder_update')->name('founder.update');

});//end of route group
