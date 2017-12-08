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
    return view('home.index');
});
Route::resource('home','sign_in_upcontroller');
Route::get('/home','sign_in_upcontroller@index')->name('home');
Route::resource('userinfo','userinfocontroller');
Route::get('/userinfo','userinfocontroller@index')->name('userinfo');
Route::get('/logout','userinfocontroller@logout')->name('logout');
Route::resource('/question','questioncontroller');
Route::get('/like_up/{id}','questioncontroller@like_update')->name('like_update');
Route::get('/dislike_up/{id}','questioncontroller@dislike_update')->name('dislike_update');
Route::get('/see_ans/{id}','questioncontroller@see_ans')->name('see_ans');

Route::get('/ques_ans_like/{id}','questioncontroller@ques_ans_like')->name('ques_ans_like');
Route::get('/ques_ans_dislike/{id}','questioncontroller@ques_ans_dislike')->name('ques_ans_dislike');


Route::resource('notification','notificationcontroller');
Route::resource('exam','examcontroller');
Route::resource('complain','coplaincontroller');

//Route::get('/exam/check/{id}','examcontroller@check_paper');


