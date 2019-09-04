<?php
use Illuminate\Support\Facades\Route;
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

// 博客列表页
Route::get('/', 'BlogListController');

//  博客详情页
Route::get('/blog/{id}', 'BlogController@index');

// 新增评论
Route::post('/comment/add', 'BlogController@addComment');
