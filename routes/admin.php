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

    Route::post(
         'banners',
            [
                'as'        =>  'addBanners',
                'uses'      =>  'AdminController@addBanners'
            ]
    );

    Route::get(
         'banners/{id}',
            [
                'as'        =>  'editBanners',
                'uses'      =>  'AdminController@editBanners'
            ]
    );

    Route::post(
         'banners/{id}',
            [
                'as'        =>  'updateBanners',
                'uses'      =>  'AdminController@updateBanners'
            ]
    );

    Route::get(
         'banners/delete/{id}',
            [
                'as'        =>  'deleteBanners',
                'uses'      =>  'AdminController@deleteBanners'
            ]
    );

    Route::get(
         'features',
            [
                'as'        =>  'showFeatures',
                'uses'      =>  'AdminController@showFeatures'
            ]
    );

    Route::post(
         'features',
            [
                'as'        =>  'addFeatures',
                'uses'      =>  'AdminController@addFeatures'
            ]
    );

    Route::get(
         'features/{id}',
            [
                'as'        =>  'editFeatures',
                'uses'      =>  'AdminController@editFeatures'
            ]
    );

    Route::post(
         'features/{id}',
            [
                'as'        =>  'updateFeatures',
                'uses'      =>  'AdminController@updateFeatures'
            ]
    );

    Route::get(
         'features/delete/{id}',
            [
                'as'        =>  'deleteFeatures',
                'uses'      =>  'AdminController@deleteFeatures'
            ]
    );

    Route::get(
         'ourservices',
            [
                'as'        =>  'showOurServices',
                'uses'      =>  'AdminController@showOurServices'
            ]
    );


    Route::post(
         'ourservices',
            [
                'as'        =>  'addOurServices',
                'uses'      =>  'AdminController@addOurServices'
            ]
    );

    Route::get(
         'ourservices/{id}',
            [
                'as'        =>  'editOurServices',
                'uses'      =>  'AdminController@editOurServices'
            ]
    );

    Route::post(
         'ourservices/{id}',
            [
                'as'        =>  'updateOurServices',
                'uses'      =>  'AdminController@updateOurServices'
            ]
    );

    Route::get(
         'ourservices/delete/{id}',
            [
                'as'        =>  'deleteOurServices',
                'uses'      =>  'AdminController@deleteOurServices'
            ]
    );

    Route::get(
         'teams',
            [
                'as'        =>  'showTeams',
                'uses'      =>  'AdminController@showTeams'
            ]
    );

    Route::post(
         'teams',
            [
                'as'        =>  'addTeams',
                'uses'      =>  'AdminController@addTeams'
            ]
    );

    Route::get(
         'teams/{id}',
            [
                'as'        =>  'editTeams',
                'uses'      =>  'AdminController@editTeams'
            ]
    );

    Route::post(
         'teams/{id}',
            [
                'as'        =>  'updateTeams',
                'uses'      =>  'AdminController@updateTeams'
            ]
    );

    Route::get(
         'teams/delete/{id}',
            [
                'as'        =>  'deleteTeams',
                'uses'      =>  'AdminController@deleteTeams'
            ]
    );

    Route::get(
         'works',
            [
                'as'        =>  'showWorks',
                'uses'      =>  'AdminController@showWorks'
            ]
    );

    Route::post(
         'works',
            [
                'as'        =>  'addWorks',
                'uses'      =>  'AdminController@addWorks'
            ]
    );

    Route::get(
         'works/{id}',
            [
                'as'        =>  'editWorks',
                'uses'      =>  'AdminController@editWorks'
            ]
    );

    Route::post(
         'works/{id}',
            [
                'as'        =>  'updateWorks',
                'uses'      =>  'AdminController@updateWorks'
            ]
    );

    Route::get(
         'works/delete/{id}',
            [
                'as'        =>  'deleteWorks',
                'uses'      =>  'AdminController@deleteWorks'
            ]
    );

    Route::get(
         'counts',
            [
                'as'        =>  'showCounts',
                'uses'      =>  'AdminController@showCounts'
            ]
    );

    Route::post(
         'counts',
            [
                'as'        =>  'addCounts',
                'uses'      =>  'AdminController@addCounts'
            ]
    );

    Route::get(
         'counts/{id}',
            [
                'as'        =>  'editCounts',
                'uses'      =>  'AdminController@editCounts'
            ]
    );

    Route::post(
         'counts/{id}',
            [
                'as'        =>  'updateCounts',
                'uses'      =>  'AdminController@updateCounts'
            ]
    );

    Route::get(
         'counts/delete/{id}',
            [
                'as'        =>  'deleteCounts',
                'uses'      =>  'AdminController@deleteCounts'
            ]
    );

    Route::get(
         'testimonials',
            [
                'as'        =>  'showTestimonials',
                'uses'      =>  'AdminController@showTestimonials'
            ]
    );

    Route::post(
         'testimonials',
            [
                'as'        =>  'addTestimonials',
                'uses'      =>  'AdminController@addTestimonials'
            ]
    );

    Route::get(
         'testimonials/{id}',
            [
                'as'        =>  'editTestimonials',
                'uses'      =>  'AdminController@editTestimonials'
            ]
    );

    Route::post(
         'testimonials/{id}',
            [
                'as'        =>  'updateTestimonials',
                'uses'      =>  'AdminController@updateTestimonials'
            ]
    );

    Route::get(
         'testimonials/delete/{id}',
            [
                'as'        =>  'deleteTestimonials',
                'uses'      =>  'AdminController@deleteTestimonials'
            ]
    );

    Route::get(
         'abouts',
            [
                'as'        =>  'showAbouts',
                'uses'      =>  'AdminController@showAbouts'
            ]
    );

    Route::post(
         'abouts',
            [
                'as'        =>  'addAbouts',
                'uses'      =>  'AdminController@addAbouts'
            ]
    );

    Route::get(
         'abouts/{id}',
            [
                'as'        =>  'editAbouts',
                'uses'      =>  'AdminController@editAbouts'
            ]
    );

    Route::post(
         'abouts/{id}',
            [
                'as'        =>  'updateAbouts',
                'uses'      =>  'AdminController@updateAbouts'
            ]
    );

    Route::get(
         'abouts/delete/{id}',
            [
                'as'        =>  'deleteAbouts',
                'uses'      =>  'AdminController@deleteAbouts'
            ]
    );

    Route::get(
         'careers',
            [
                'as'        =>  'showCareers',
                'uses'      =>  'AdminController@showCareers'
            ]
    );

    Route::post(
         'careers',
            [
                'as'        =>  'addCareers',
                'uses'      =>  'AdminController@addCareers'
            ]
    );

    Route::get(
         'careers/{id}',
            [
                'as'        =>  'editCareers',
                'uses'      =>  'AdminController@editCareers'
            ]
    );

    Route::post(
         'careers/{id}',
            [
                'as'        =>  'updateCareers',
                'uses'      =>  'AdminController@updateCareers'
            ]
    );

    Route::get(
         'careers/delete/{id}',
            [
                'as'        =>  'deleteCareers',
                'uses'      =>  'AdminController@deleteCareers'
            ]
    );

    Route::get(
         'projects',
            [
                'as'        =>  'showProjects',
                'uses'      =>  'AdminController@showProjects'
            ]
    );

    Route::post(
         'projects',
            [
                'as'        =>  'addProjects',
                'uses'      =>  'AdminController@addProjects'
            ]
    );

    Route::get(
         'projects/{id}',
            [
                'as'        =>  'editProjects',
                'uses'      =>  'AdminController@editProjects'
            ]
    );

    Route::post(
         'projects/{id}',
            [
                'as'        =>  'updateProjects',
                'uses'      =>  'AdminController@updateProjects'
            ]
    );

    Route::get(
         'projects/delete/{id}',
            [
                'as'        =>  'deleteProjects',
                'uses'      =>  'AdminController@deleteProjects'
            ]
    );

    Route::get(
         'services',
            [
                'as'        =>  'showServices',
                'uses'      =>  'AdminController@showServices'
            ]
    );

    Route::post(
         'services',
            [
                'as'        =>  'addServices',
                'uses'      =>  'AdminController@addServices'
            ]
    );

    Route::get(
         'services/{id}',
            [
                'as'        =>  'editServices',
                'uses'      =>  'AdminController@editServices'
            ]
    );

    Route::post(
         'services/{id}',
            [
                'as'        =>  'updateServices',
                'uses'      =>  'AdminController@updateServices'
            ]
    );

    Route::get(
         'services/delete/{id}',
            [
                'as'        =>  'deleteServices',
                'uses'      =>  'AdminController@deleteServices'
            ]
    );


Route::get('/dropify',    'AdminController@dropify')->name('dropify');
