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

/*Route::get('/', function () {
    return realpath(base_path('resources/views'));
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/newtopic','HomeController@newtopic')->name('newtopic');

Route::get('/topicDetail','HomeController@topicDetail')->name('topicDetail');

Route::get('/mcqEdit','HomeController@mcqEdit')->name('mcqEdit');

Route::get('/fitbEdit','HomeController@fitbEdit')->name('fitbEdit');

Route::get('/cbEdit','HomeController@cbEdit')->name('cbEdit');

Route::get('/tfEdit','HomeController@tfEdit')->name('tfEdit');
