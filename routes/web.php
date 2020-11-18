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


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'categoriesController');

Route::resource('sucessStories', 'sucess_storiesController');

Route::resource('settings', 'settingsController');

Route::resource('socials', 'socialController');

Route::resource('subCategories', 'sub_categoriesController');

Route::resource('sliders', 'sliderController');

Route::resource('blogs', 'blogsController');

Route::resource('shopItems', 'shop_itemsController');

Route::resource('bankInformations', 'bank_informationController');

Route::resource('infoBankForms', 'info_bank_formController');

Route::resource('competitions', 'competitionsController');

Route::resource('competitionsForms', 'competitions_formController');