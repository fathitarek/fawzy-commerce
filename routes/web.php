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


Route::group(['prefix' =>"admin" ], function () {
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
  Route::resource('categoryBlogs', 'category_blogController');
  Route::resource('newsletters', 'newslettersController');
  Route::resource('partners', 'partnersController');
  Route::resource('orders', 'ordersController');
  Route::resource('orderDetails', 'order_detailsController');
Route::resource('reports', 'reportsController');
Route::resource('reportsForms', 'reports_formController');
Route::resource('customOrders', 'custom_orderController');
Route::resource('customOrderForms', 'custom_order_formController');
Route::resource('donations', 'donationController');
Route::resource('donationForms', 'donation_formController');
});
Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get("remove_image_item/{id}","shop_itemsController@removeImage");
Route::get("remove_image_project/{id}","projectsController@removeImage");
Route::get('subcat/{category_id}','shop_itemsController@getSubCategories')->name('subcat');
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
Route::GET('our-infoBank', 'infoBankPageController@infoBanksPage');
Route::GET('inner-infoBank/{id}', 'infoBankPageController@innerInfoBank');
Route::GET('our-products-with-category/{category_id}', 'productsPageController@productsByCategoryPage');
Route::GET('our-products-with-sub_category/{sub_category_id}', 'productsPageController@productsBySubCategoryPage');
Route::GET('inner-product/{id}', 'productsPageController@productInnerPage');
Route::GET('our-blogs', 'blogPageController@blogPage');
Route::GET('add_to_cart/{product_id}/{customer_id}/{quantity}', 'CartController@addToCart');
Route::GET('my-cart', 'CartController@getCart');
Route::GET('remove_cart/{id}', 'CartController@deleteCart');
Route::GET('our-blogs-with-category/{category_id}', 'blogPageController@blogsByCategoryPage');
Route::GET('inner_blog/{id}', 'blogPageController@innerBlog');
Route::GET('add_to_wishlist/{product_id}/{customer_id}', 'WishlistsController@addToWishlist');
Route::GET('my-wishlist', 'WishlistsController@getWishlist');
Route::GET('remove_wishlist/{id}', 'WishlistsController@deleteWishlist');
Route::POST('send_mail', 'ContactFormController@send');
Route::GET('search-successful-stories', 'sucessStoriesPageController@search');
Route::GET('search-projects', 'projectsPageController@search');
Route::GET('search-infoBank', 'infoBankPageController@search');
Route::GET('search-competitions', 'competitionsPageController@search');
Route::GET('search-certifcate', 'liveCertificatePageController@search');
Route::GET('search-product', 'productsPageController@search');
Route::GET('profile', 'CustomerController@profile');
Route::GET('search-blogs', 'blogPageController@search');
Route::GET('/', 'IndexController@index');
Route::GET('checkout', 'CheckoutPageController@checkoutPage');
Route::post('profile_update', 'CustomerController@update');

Route::GET('our-reports', 'ReportsPageController@reportsPage');
Route::GET('inner-report/{id}', 'ReportsPageController@innerReport');
Route::GET('search-report', 'ReportsPageController@search');

Route::GET('donation', 'CustomeOrderPageController@donation');

Route::GET('custom_order', 'CustomeOrderPageController@index');
Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});
Auth::routes(['verify' => true]);





