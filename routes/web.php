<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/second-buyer-eloquent', 'TestSolutionController@getSecondBuyerEloquent');
Route::get('/second-buyer-no-eloquent', 'TestSolutionController@getSecondBuyerNoEloquent');

Route::get('/purchase-list-eloquent', 'TestSolutionController@getPurchaseListEloquent');
Route::get('/purchase-list-no-eloquent', 'TestSolutionController@getPurchaseListNoEloquent');

Route::get('/sort-js', 'TestSolutionController@getSortJs');
Route::get('/foreach-js', 'TestSolutionController@getForeachJs');
Route::get('/filter-js', 'TestSolutionController@getFilterJs');
Route::get('/map-js', 'TestSolutionController@getMapJs');
Route::get('/reduce-js', 'TestSolutionController@getReduceJs');

Route::get('/animation', 'TestSolutionController@getAnimation');


Route::get('/record-transfer', 'TestSolutionController@getRecordTransfer');
Route::get('/i-m-funny', 'TestSolutionController@getImFunny');
