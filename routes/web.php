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

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');

// Admin Area
Route::get(config('backend.backend_link'), 'AdministratorController@index');

 Route::get('/login/admin', 'Auth\AdminLoginController@showAdminLoginForm')->name("login.admin");

 
Route::post('/login/admin', 'Auth\AdminLoginController@adminLogin')->name("admin.login");

Route::get("logout/admin", 'AdminLoginController@logout');



// Editor Area
Route::get(config('backend.editor_link'), 'AdministratorController@index');

 Route::get('/login/editor', 'Auth\EditorLoginController@showEditorLoginForm')->name("login.editor");
 
Route::post('/login/editor', 'Auth\EditorLoginController@editorLogin')->name("editor.login");

Route::get("logout/editor", 'EditorLoginController@logout');

// Dashboard 

Route::get('/administrator/dashboard', 'DashboardController@index')->name('dashboard');

//Blog

Route::get('/administrator/addnew/blog', 'BlogController@index')->name('blog');

//Newfeed
Route::get('/administrator/addnew/newfeed', 'NewfeedController@index')->name('newfeed');

//setting
Route::get('/administrator/setting', 'SettingController@index')->name('setting');
