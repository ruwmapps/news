<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('country','Country\CountryController@country');
Route::get('news','News\NewsController@news');
Route::get('topnews','News\NewsController@topnews');
Route::post('addnews','News\NewsController@addnews');
Route::post('like/up','Like\LikeController@uplike');
Route::post('like/down','Like\LikeController@downlike');
