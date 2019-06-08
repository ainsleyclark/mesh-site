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

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', 'PagesController@home' );

/*
|--------------------------------------------------------------------------
| Builder
|--------------------------------------------------------------------------
*/

Route::get('/builder', 'Docs\GettingStartedController@builder' );
Route::post('/builder/ajax/render', 'BuilderController@process');
Route::get('/builder/download/{id}', 'DownloadZipController@index');


/*
|--------------------------------------------------------------------------
| Getting Started
|--------------------------------------------------------------------------
*/

Route::get('/documentation/getting-started/introduction', 'Docs\GettingStartedController@introduction' );
Route::get('/documentation/getting-started/installation', 'Docs\GettingStartedController@installation' );
Route::get('/documentation/getting-started/notation', 'Docs\GettingStartedController@notation' );

/*
|--------------------------------------------------------------------------
| Grid
|--------------------------------------------------------------------------
*/

Route::get('/documentation/grid/grid', 'Docs\GridController@grid' );
Route::get('/documentation/grid/flex', 'Docs\GridController@flex' );
Route::get('/documentation/grid/order', 'Docs\GridController@order' );
Route::get('/documentation/grid/display', 'Docs\GridController@display' );

/*
|--------------------------------------------------------------------------
| Utility
|--------------------------------------------------------------------------
*/

Route::get('/documentation/utility/borders', 'Docs\UtilityController@borders' );
Route::get('/documentation/utility/colors', 'Docs\UtilityController@colors' );
Route::get('/documentation/utility/float', 'Docs\UtilityController@float' );
Route::get('/documentation/utility/media', 'Docs\UtilityController@media' );
Route::get('/documentation/utility/position', 'Docs\UtilityController@position' );
Route::get('/documentation/utility/sizing', 'Docs\UtilityController@sizing');
Route::get('/documentation/utility/spacers', 'Docs\UtilityController@spacers' );
Route::get('/documentation/utility/spacing', 'Docs\UtilityController@spacing' );
Route::get('/documentation/utility/text', 'Docs\UtilityController@text' );
Route::get('/documentation/utility/visibility', 'Docs\UtilityController@visibility' );

/*
|--------------------------------------------------------------------------
| Components
|--------------------------------------------------------------------------
*/

Route::get('/documentation/components/alert', 'Docs\ComponentController@alert' );
Route::get('/documentation/components/badges', 'Docs\ComponentController@badges' );
Route::get('/documentation/components/breadcrumb', 'Docs\ComponentController@breadcrumb' );
Route::get('/documentation/components/button', 'Docs\ComponentController@button' );
Route::get('/documentation/components/card','Docs\ComponentController@card' );
Route::get('/documentation/components/collapse', 'Docs\ComponentController@collapse' );
Route::get('/documentation/components/epic', 'Docs\ComponentController@epic' );
Route::get('/documentation/components/form', 'Docs\ComponentController@form' );
Route::get('/documentation/components/header', 'Docs\ComponentController@header' );
Route::get('/documentation/components/list', 'Docs\ComponentController@list' );
Route::get('/documentation/components/media', 'Docs\ComponentController@media' );
Route::get('/documentation/components/modal', 'Docs\ComponentController@modal' );
Route::get('/documentation/components/nav', 'Docs\ComponentController@nav' );
Route::get('/documentation/components/pagination', 'Docs\ComponentController@pagination' );
Route::get('/documentation/components/table', 'Docs\ComponentController@table' );
Route::get('/documentation/components/tabs', 'Docs\ComponentController@tabs' );
Route::get('/documentation/components/toast', 'Docs\ComponentController@toast' );
Route::get('/documentation/components/tooltip', 'Docs\ComponentController@tooltip' );