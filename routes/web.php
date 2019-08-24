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

    Route::get('contact', 'PagesController@getContact');

    Route::get('blogg', 'PagesController@getBlogg');
    
    Route::resource('posts', 'PostController');

    Route::resource('tasks', 'TaskController');

    Route::resource('newfeeds', 'FeedController');
    
    Route::get('/', function () {
        $task = DB::table('tasks')->get();
        return view('frontend-pages.main');
    });    

Auth::routes([
]);



// Admin Area
Route::get(config('backend.backend_link'), 'AdministratorController@index')->name("dashboard");

 Route::get('/login/admin', 'Auth\AdminLoginController@showAdminLoginForm')->name("login.admin");
 
Route::post('/login/admin', 'Auth\AdminLoginController@adminLogin')->name("admin.login");

Route::get("logout/admin", 'AdminLoginController@logout');


// Editor Area
Route::get(config('backend.editor_link'), 'AdministratorController@index');

 Route::get('/login/editor', 'Auth\EditorLoginController@showEditorLoginForm')->name("login.editor");
 
Route::post('/login/editor', 'Auth\EditorLoginController@editorLogin')->name("editor.login");

Route::get("logout/editor", 'Auth\EditorLoginController@logout');

//Blog
Route::get('/administrator/blogs', ['uses'=>'PostController@index', 'as'=>'posts.bloghist']);

Route::get('/administrator/addnew/blog', ['uses'=>'PostController@create', 'as'=>'posts.create']);

Route::get('blogg/{slug}', ['as'=>'blogg.single', 'uses' => 'BlogController@getSingle']);

Route::get('blog-all', ['uses'=> 'BlogController@getIndex', 'as'=>'blogg.index']);

//Newfeed

Route::get('/administrator/feeds', ['uses'=>'FeedController@index', 'as'=>'newfeeds.newfeedhist']);

Route::get('/administrator/addnew/feed', ['uses'=>'FeedController@create', 'as'=>'newfeeds.create']);

Route::get('newfeed/{slug}', ['as'=>'feeds.single', 'uses' => 'FeedpostController@getSingle']);

Route::get('newfeeds-posts', ['uses'=> 'FeedpostController@getIndex', 'as'=>'feeds.index']);

//setting
Route::get('/administrator/setting', ['uses'=>'TaskController@index', 'as'=>'tasks.setting']);

Route::get('/administrator/setting/customize', ['uses'=>'TaskController@create', 'as'=>'tasks.create']);



//Userdata

Route::get('/administrator/users', ['uses'=>'UserController@index', 'as'=>'users.index']);

//Library

Route::get('/administrator/library', 'LibraryController@index')->name('library');


//member Login


Route::get('/memberlogin', 'Auth\MemberLoginController@showMemberLoginForm')->name("user_login");

Route::post('/memberlogin', 'Auth\MemberLoginController@userLogin')->name("user_login");


Route::get('/register', 'Auth\RegisterController@index')->name("register");


//EditorCreate

Route::group(['prefix' => config("backend.backend_link"),  'middleware' => 'auth:web,admin'], function()
{
     Route::get("editor/data", "AdminEditorController@anyData")->name("editor.data");
    Route::get('management', ['uses'=>'AdminEditorController@index', 'as'=>'editor.management']);
    Route::resource('managementt', 'AdminEditorController');
    Route::get('/administrator/management/create', ['uses'=>'AdminEditorController@create', 'as'=>'editor.create']);
});