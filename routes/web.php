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
    return view('frontend.index');
});
Route::get('/about','MainController@about')->name('about');
Route::get('/contact','MainController@contact')->name('contact');




// Category

Route::prefix('category')->group(function(){

Route::get('/add','CategoryController@addCategory')->name('addCategory');
Route::post('/all','CategoryController@allCategory')->name('allCategory');
Route::get('/all','CategoryController@allCategoryOne')->name('allCategoryOne');
route::get('/view/{id}','CategoryController@viewCategory');
route::get('/delete/{id}','CategoryController@deleteCategory');
route::get('/edit/{id}','CategoryController@editCategory');
route::post('/update/{id}','CategoryController@updateCategory');

});


// post********************** 

Route::prefix('Posts')->group(function(){

Route::get('/add','PostController@addPost')->name('addPost');
Route::get('/all','PostController@allPostOne')->name('allPostOne');

});