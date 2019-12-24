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

/*
 * 在 Laravel 中，我们可以通过在路由后面链式调用 name 方法来为路由指定名称：
 *当我们在页面渲染该路由时， route('help') 最终的渲染结果将如下：
 * http://weibo.test/help ，
 * 这里举一个例子来说明：假如我们的应用中有 10 个地方使用 route('help') 方式书写这个 URL 地
址，因为特殊原因，需要将 http://weibo.test/help 修改为 http://weibo.test/faq ，这时
候，你只需要修改路由定义为以下即可：
Route::get('/faq', 'StaticPagesController@help')->name('help');

 * */

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
Route::delete('logout', 'SessionsController@destroy')->name('logout');