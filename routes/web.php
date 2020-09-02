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
Route::get('Home/','postController@showHome')->name('home');
Route::get('contact/','postController@showContact')->name('contact');
Route::get('post/','postController@showPost')->name('post');
Route::get('blog/','postController@showBlog')->name('blog');
Route::post('insert/','insertCategory@upload')->name('submit');
Route::get('Add-Category/','addCategoryController@addCategory')->name('add');
Route::post('Category/Uploaded','addCategoryController@addImage')->name('imageInsert');
Route::get('view-All-post/','postController@viewAllpost')->name('allpost');

//photo edit update and delete routing
Route::get('edit/{id}','postController@editMethod');
Route::get('show/{id}','postController@showMethod');
Route::get('delete/{id}','postController@deleteMethod');
Route::post('update/post/{id}','postController@updateMethod');
