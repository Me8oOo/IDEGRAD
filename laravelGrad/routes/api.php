<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
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

Route::group([
    'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/Course', 'CourseController@index')->name('Course.index');
    Route::get('/Course/show/{course}', 'CourseController@show')->name('Course.view');
    Route::post('/Course/create', 'CourseController@store')->name('Course.create');
    Route::put('/Course/update/{course}', 'CourseController@update')->name('Course.update');
    Route::delete('/Course/delete/{course}', 'CourseController@destroy')->name('destroy');
});
// Route::get('/Course', 'CourseController@index')->name('Course.index');

// Route::resource('/Course', CourseController::class);
