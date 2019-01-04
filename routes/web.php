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
//  Service Route

  Route::get('/admin/service/create','ServiceController@create')->name('service.create');
  Route::post('/admin/service/store','ServiceController@store')->name('service.store');
  Route::get('/admin/service/view','ServiceController@index')->name('service.view');
  Route::get('/admin/service/edit/{id}','ServiceController@edit')->name('service.edit');
  Route::post('/admin/service/update/{id}','ServiceController@update')->name('service.update');
  Route::get('/admin/service/delete/{id}','ServiceController@delete')->name('service.delete');

//  Personal Skills Route
    Route::get('/admin/personalskills/create','PersonalSkillController@create')->name('personalskills.create');
    Route::post('/admin/personalskills/store','PersonalSkillController@store')->name('personalskills.store');
    Route::get('/admin/personalskills/view','PersonalSkillController@view')->name('personalskills.view');
    Route::get('/admin/personalskills/edit/{id}','PersonalSkillController@edit')->name('personalskills.edit');
    Route::post('/admin/personalskills/update/{id}','PersonalSkillController@update')->name('personalskills.update');
    Route::get('/admin/personalskills/delete/{id}','PersonalSkillController@delete')->name('personalskills.delete');

//    ProfessionalSkills Route
    Route::get('/admin/professionalskills/create','ProfessionalSkillController@create')->name('professionalskills.create');
    Route::post('/admin/professionalskills/store','ProfessionalSkillController@store')->name('professionalskills.store');
    Route::get('/admin/professionalskills/view','ProfessionalSkillController@view')->name('professionalskills.view');
    Route::get('/admin/professionalskills/edit/{id}','ProfessionalSkillController@edit')->name('professionalskills.edit');
    Route::post('/admin/professionalskills/update/{id}','ProfessionalSkillController@update')->name('professionalskills.update');
    Route::get('/admin/professionalskills/delete/{id}','ProfessionalSkillController@delete')->name('professionalskills.delete');

//    SiteController Route
    Route::get('/admin/site','SiteController@index')->name('site');
    Route::post('/admin/site/update/{id}','SiteController@update')->name('site.update');

//    Team Route
    Route::get('/admin/team/create','TeamController@create')->name('team.create');
    Route::post('/admin/team/store','TeamController@store')->name('team.store');
    Route::get('/admin/team/view','TeamController@view')->name('team.view');
    Route::get('/admin/team/edit/{id}','TeamController@edit')->name('team.edit');
    Route::post('/admin/team/update/{id}','TeamController@update')->name('team.update');
    Route::get('/admin/team/delete/{id}','TeamController@delete')->name('team.delete');

    // Portfolio Routes
    Route::get('/admin/portfolio/category/create', 'PortfolioController@createCategory')->name('createCategory');
    Route::post('/admin/portfolio/category/store', 'PortfolioController@storeCategory')->name('storeCategory');
    Route::get('/admin/portfolio/category/view', 'PortfolioController@viewCategory')->name('viewCategory');
    Route::get('/admin/portfolio/category/edit/{id}', 'PortfolioController@editCategory')->name('editCategory');
    Route::post('/admin/portfolio/category/update/{id}', 'PortfolioController@updateCategory')->name('updateCategory');
    Route::get('/admin/delete-category/{id}', 'PortfolioController@deleteCategory')->name('deleteCategory');
});



Route::get('/logout','AdminController@logout')->name('admin.logout');
