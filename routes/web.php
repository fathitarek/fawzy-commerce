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
Route::resource('liveCertificates', 'live_certificateController');
Route::resource('liveCertificateForms', 'live_certificate_formController');
Route::resource('projects', 'projectsController');
Route::resource('projectsForms', 'projects_formController');
Route::resource('aboutUses', 'about_usController');
Route::get("remove_image_item/{id}","shop_itemsController@removeImage");
Route::get("remove_image_project/{id}","projectsController@removeImage");
Route::get('subcat/{category_id}','shop_itemsController@getSubCategories')->name('subcat');
Route::resource('categoryBlogs', 'category_blogController');
Route::GET('changelanguage', 'LanguageController@changelanguage');

//front
Route::GET('contact', 'ContactPageController@contactPage');
Route::GET('about', 'aboutPageController@aboutPage');
Route::GET('successful-stories', 'sucessStoriesPageController@sucessStoriesPage');
Route::GET('our-competitions', 'competitionsPageController@competitionsPage');
Route::GET('inner-successful-stories/{id}', 'sucessStoriesPageController@innerSucessStory');
Route::GET('inner-competition/{id}', 'competitionsPageController@innerCompetition');
Route::GET('our-projects', 'projectsPageController@projectsPage');
Route::GET('inner-project/{id}', 'projectsPageController@innerProject');
Route::GET('our-certifcate', 'liveCertificatePageController@certificatesPage');
Route::GET('inner-certifcate/{id}', 'liveCertificatePageController@innerCertificate');
Route::GET('our-products', 'productsPageController@productsPage');


