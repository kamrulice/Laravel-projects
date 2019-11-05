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

 Route::get('/','WelcomeController@index');


 Route::get('/show/Details/{id}','WelcomeController@productDetails');

 //Customer info

 Route::post('/customer/registration','customerController@addCustomer');
 Route::post('/login/customer','customerController@loginCustomer');
 Route::get('/customer/list','customerController@customer')->name('/customer/list');
 Route::get('/delete/customer/{id}','customerController@customerDelete')->name('/delete/customer/');
Auth::routes();

Route::get('/dashboard', 'HomeController@index');

//chapter info

Route::get('/add/chapter','chapterController@createChapter');
Route::post('/save/Chapter','chapterController@storeChapter');
Route::get('/manage/chapter','chapterController@manageChapter');
Route::get('/edit/chapter/{id}','chapterController@editChapter');
Route::post('/update/Chapter','chapterController@updateChapter');
Route::get('/delete/chapter/{id}','chapterController@deleteChapter');

//product info
Route::get('/add/product','productController@createProduct');
Route::post('/save/product','productController@storeProduct');
Route::get('/manage/product','productController@manageProduct');

// Question Info
Route::get('/add/question','questionController@addQuestion');
Route::post('/save/question','questionController@storeQuestion');
Route::get('/manage/question','questionController@manageQuestion');
Route::get('/edit/question/{id}','questionController@editQuestion');
Route::post('/update/question','questionController@updateQuestion');
Route::get('/short/question{id}','questionController@shortQuestion')->name('short/question');

//Sciencetist info
Route::get('/add/বিজ্ঞানী','scienceController@addSciencetist')->name('/add/বিজ্ঞানী');
Route::post('/save/বিজ্ঞানী','scienceController@store')->name('/save/বিজ্ঞানী');
Route::get('/manage/বিজ্ঞানী','scienceController@manage')->name('/manage/বিজ্ঞানী');






