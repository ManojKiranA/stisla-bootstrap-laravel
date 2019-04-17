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

Route::group(['prefix' => 'pages'], function () 
{
    
    Route::get('/generaldashboard', function () {
        return view('pages.generaldashboard');
    })->name('pages.generaldashboard');

    Route::get('/ecommercedashboard', function () {
        return view( 'pages.ecommercedashboard');
    })->name( 'pages.ecommercedashboard');
    
});


Route::group(['prefix' => 'layouts'], function () 
{
    
    Route::get( '/defaultlayout', function () {
        return view( 'layouts.defaultlayout');
    })->name( 'layouts.defaultlayout');

    Route::get('/ecommercedashboard', function () {
        return view( 'pages.ecommercedashboard');
    })->name( 'pages.ecommercedashboard');
    
});

Route::view('/','pages.generaldashboard')->name('landing.dashboardpage');

Auth::routes();

