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

Route::get('/sort-js', 'TestJsSolutionController@getSortJs');
Route::get('/foreach-js', 'TestJsSolutionController@getForeachJs');
Route::get('/filter-js', 'TestJsSolutionController@getFilterJs');
Route::get('/map-js', 'TestJsSolutionController@getMapJs');
Route::get('/reduce-js', 'TestJsSolutionController@getReduceJs');
Route::get('/i-m-funny', 'TestJsSolutionController@getImFunny');
Route::get('/animation', 'TestJsSolutionController@getAnimation');
Route::get('/define-callback-js', 'TestJsSolutionController@getDefineCallbackJs');



Route::get('/record-transfer', 'TestRecordSolutionController@getRecordTransfer');

