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

Route::get('/','FrontEndController@index')->name('frontend.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'/adminLogin','AdminController@login')->name('admin.login');

Route::group(['middleware' => ['auth']] ,function(){
  Route::get('/admindashboard','AdminController@dashboard')->name('admin.dashboard');
  Route::get('/adminprofile/{id}','AdminController@profile')->name('admin.profile');
  Route::post('/adminupdate/{id}','AdminController@update')->name('admin.update');

  // About_Me Routes

  Route::get('/admin/about','AboutController@index')->name('about');
  Route::post('/admin/about/{id}','AboutController@update')->name('about.update');
  // Slider Routes
  Route::get('/admin/slider','SliderController@index')->name('slider');
  Route::post('/admin/slider/{id}','SliderController@update')->name('slider.update');
});


Route::get('/logout','AdminController@logout')->name('admin.logout');
