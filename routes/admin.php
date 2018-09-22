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

// Route::get('/', function () {
//     return view('welcome');
// });

    Route::get(
         '/',
            [
                'as'        =>  'showHomepage',
                'uses'      =>  'AdminController@showHome'
            ]
    );

    Route::get(
         'home',
            [
                'as'        =>  'showHomepage',
                'uses'      =>  'WebController@showHome'
            ]
    );

Route::post('/login',    'AdminController@login')->name('login');
Route::get('/dashboard',    'AdminController@dashboard')->name('dashboard');
Route::get('/setting',    'AdminController@setting')->name('setting');

