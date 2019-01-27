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
                'uses'      =>  'AdminController@showHome'
            ]
    );

    Route::post('/login',    'AdminController@login')->name('login');
    Route::get('/dashboard',    'AdminController@dashboard')->name('dashboard');
    Route::get('/setting',    'AdminController@setting')->name('setting');

    Route::post('/setting',    'AdminController@update_setting')->name('setting');

    Route::get(
         'banners',
            [
                'as'        =>  'showBanners',
                'uses'      =>  'AdminController@showBanners'
            ]
    );

    Route::get(
         'features',
            [
                'as'        =>  'showFeatures',
                'uses'      =>  'AdminController@showFeatures'
            ]
    );

    Route::get(
         'ourservices',
            [
                'as'        =>  'showOurServices',
                'uses'      =>  'AdminController@showOurServices'
            ]
    );

    Route::get(
         'team',
            [
                'as'        =>  'showTeam',
                'uses'      =>  'AdminController@showTeam'
            ]
    );

    Route::get(
         'works',
            [
                'as'        =>  'showWorks',
                'uses'      =>  'AdminController@showWorks'
            ]
    );

    Route::get(
         'counts',
            [
                'as'        =>  'showCounts',
                'uses'      =>  'AdminController@showCounts'
            ]
    );

    Route::get(
         'testimonials',
            [
                'as'        =>  'showTestimonials',
                'uses'      =>  'AdminController@showTestimonials'
            ]
    );

    Route::get(
         'about',
            [
                'as'        =>  'showAboutcontent',
                'uses'      =>  'AdminController@showAboutcontent'
            ]
    );

    Route::get(
         'projects',
            [
                'as'        =>  'showProjects',
                'uses'      =>  'AdminController@showProjects'
            ]
    );

    Route::get(
         'services',
            [
                'as'        =>  'showServices',
                'uses'      =>  'AdminController@showServices'
            ]
    );


Route::get('/dropify',    'AdminController@dropify')->name('dropify');
