<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Home'], function(){

	//welcome route
	Route::get('/', 'WelcomeController@index')->name('home');

	Route::get('/success', 'WelcomeController@success')->name('success');
	Route::get('/founder/{id}', 'WelcomeController@founder')->name('founder');

	//profile route
	Route::get('/profile/{id}', 'ProfileController@index')->name('profile.index')->middleware('auth');
	Route::put('/profile/{id}', 'ProfileController@update')->name('profile.update')->middleware('auth');
	Route::get('/My_Course/{id}', 'ProfileController@my_course')->name('my_course')->middleware('auth');

	//Login_Client route
	Route::get('/Login_Client', 'WelcomeController@login')->name('Login_Client');
	Route::get('/Register_Client', 'WelcomeController@register')->name('Register_Client');
	
	//show_course route
	Route::get('/Show_Course/{id}', 'CourseController@ShowCourse')->name('Show_Course');
	Route::get('/Details_Course/{id}', 'CourseController@DetailsCourse')->name('DetailsCourse');

	//Purchase route
	Route::resource('Purchase', 'PurchaseController');
	Route::get('/Purchase_Course/{id}', 'PurchaseController@create')->name('purchase.create')->middleware('auth');

	//show_course route
	Route::get('/show_coache/{id}', 'WelcomeController@show_coache')->name('show_coache');
	Route::get('/show_all_coache', 'WelcomeController@show_all_coache')->name('show_all_coache');

	//certificates route
	Route::get('/certificates', 'WelcomeController@certificates')->name('certificates');
	Route::post('/certificates_store', 'WelcomeController@certificates_store')->name('certificates_store');
	
	Route::post('/advisory_services', 'WelcomeController@advisory_services_store')->name('advisory_services.store');

});//route group Home

Auth::routes();

