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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', 'WelcomeController@index');

Route::get('/', 'WelcomeController@index');
Route::get('category', 'WelcomeController@categoryPage');
Route::get('single', 'WelcomeController@singlePage');
// Route::get('/single/singlePage/{id}', 'WelcomeController@singlePage')->name('single.news');
Route::get('/single/news/{id}/{slug}', 'WelcomeController@singlePage');



Route::get('/cumtomers', 'CumtomersController@cumtomers');
Route::post('/store', 'CumtomersController@store');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/dashboard', 'HomeController@index')->name('home');


Route::group(['middleware'=>'authenticateMiddleware'], function(){
// user 
Route::get('/user/add', 'UserController@createUser');
Route::post('/user/save', 'UserController@storeUser');
Route::get('/user/manage', 'UserController@manageUser');
Route::get('/user/edit/{id}', 'UserController@editUser');
Route::post('/user/update', 'UserController@updateUser');
Route::get('/user/delete/{id}', 'UserController@deleteUser');

// category 
Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@editCategory');
Route::post('/category/update', 'CategoryController@updateCategory');
Route::get('/category/delete/{id}', 'CategoryController@deleteCategory');

// sub category 
Route::get('/sub_category/add', 'SubCategoryController@createSubCategory');
Route::post('/sub_category/save', 'SubCategoryController@storeSubCategory');
Route::get('/sub_category/manage', 'SubCategoryController@manageSubCategory');
Route::get('/subCategory/edit/{id}', 'SubCategoryController@editSubCategory');
Route::post('/sub_category/update', 'SubCategoryController@updateSubCategory');
Route::get('/subCategory/delete/{id}', 'SubCategoryController@deleteSubCategory');

// tag
Route::post('/tag/save', 'TagController@storeTag');
Route::get('/tag/manage', 'TagController@manageTag');
Route::get('/tag/delete/{id}', 'TagController@deleteTag');

// Photo
Route::post('/photo/save', 'PhotoController@storePhoto');
Route::get('/photo/manage', 'PhotoController@managePhoto');
Route::get('/photo/edit/{id}', 'PhotoController@editPhoto');
Route::post('/photo/update', 'PhotoController@updatePhoto');
Route::get('/photo/delete/{id}', 'PhotoController@deletePhoto');

// post 
Route::get('/post/add', 'PostController@createPost');
Route::post('/post/save', 'PostController@storePost');
Route::get('/post/manage', 'PostController@managePost');
Route::get('/post/view/{id}', 'PostController@viewPost');
Route::get('/post/edit/{id}', 'PostController@editPost');
Route::post('/post/update', 'PostController@updatePost');
Route::get('/post/delete/{id}', 'PostController@deletePost');
Route::get('/search', 'PostController@search');

// logo
Route::get('/logo/add', 'LogoController@createLogo');
Route::post('/logo/save', 'LogoController@storeLogo');
Route::get('/logo/manage', 'LogoController@manageLogo');
Route::get('/logo/edit/{id}', 'LogoController@editLogo');
Route::post('/logo/update', 'LogoController@updateLogo');
Route::get('/logo/delete/{id}', 'LogoController@deleteLogo');

// favicon
Route::get('/favicon/add', 'FaviconController@createFavicon');
Route::post('/favicon/save', 'FaviconController@storeFavicon');
Route::get('/favicon/manage', 'FaviconController@manageFavicon');
Route::get('/favicon/edit/{id}', 'FaviconController@editFavicon');
Route::post('/favicon/update', 'FaviconController@updateFavicon');
Route::get('/favicon/delete/{id}', 'FaviconController@deleteFavicon');

// setting
Route::get('/setting/add', 'GeneralSettingController@createSetting');
Route::post('/setting/save', 'GeneralSettingController@storeSetting');
Route::get('/setting/manage', 'GeneralSettingController@manageSetting');
Route::get('/setting/edit/{id}', 'GeneralSettingController@editSetting');
Route::post('/setting/update', 'GeneralSettingController@updateSetting');
Route::get('/setting/delete/{id}', 'GeneralSettingController@deleteSetting');

// my profile
Route::get('/profile/manage', 'MyProfileController@manageProfile');

});
