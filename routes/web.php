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
    return 'oo';
});

Route::any('/wechat', 'WeChatController@serve');


//登陆页面
Route::get('login', 'LoginController@loginView')->name('login');
Route::post('login', 'LoginController@login')->name('login');

//Route::post('posts/uploadImage', 'Admin\PostsController@uploadImage')->name('posts.uploadImage');
Route::group(['namespace' => 'Admin', 'middleware'=>'auth'], function (){
    //Route::get('dashboard', 'AdminController@dashboardView')->name('dashboard');
    Route::post('logout', 'AdminController@logout')->name('logout');
    Route::resource('posts', 'PostsController', ['except'=>['show']]);
    Route::resource('tags', 'TagsController');
    Route::post('uploadImage', 'PostsController@uploadImage')->name('posts.uploadImage');
});

//微信视图
Route::group(['namespace' => 'Weixin', 'prefix' => 'weixin'], function (){

    Route::any('{all}', 'PagesController@trainingView')->name('pages.training');
    //互动
    Route::get('/interaction', 'PagesController@interactionView')->name('pages.interaction');
    //考勤
    Route::get('/punchcard', 'PagesController@punchcardView')->name('pages.punchcard');

});


