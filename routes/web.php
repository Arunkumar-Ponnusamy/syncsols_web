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
                'uses'      =>  'WebController@showHome'
            ]
    );

    Route::get(
         'home',
            [
                'as'        =>  'showHomepage',
                'uses'      =>  'WebController@showHome'
            ]
    );

    Route::get(
         'aboutus',
            [
                'as'        =>  'showAboutpage',
                'uses'      =>  'WebController@showAbout'
            ]
    );

    Route::get(
         'contact',
            [
                'as'        =>  'showContactpage',
                'uses'      =>  'WebController@showContact'
            ]
    );

    Route::get(
         'service',
            [
                'as'        =>  'showServicepage',
                'uses'      =>  'WebController@showService'
            ]
    );

    Route::get(
         'service1',
            [
                'as'        =>  'showService1page',
                'uses'      =>  'WebController@showService1'
            ]
    );

    // Route::get(
    //      'test',
    //         [
    //             'as'        =>  'showTestpage',
    //             'uses'      =>  'WebController@showTestpage'
    //         ]
    // );

    Route::get(
         'projects',
            [
                'as'        =>  'showProjectpage',
                'uses'      =>  'WebController@showProjectpage'
            ]
    );

    Route::get(
         'services',
            [
                'as'        =>  'showServicepage',
                'uses'      =>  'WebController@showTestpage'
            ]
    );

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
