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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/headers', function () {
    return response()->json([
        'name' => 'hola'
    ]);
});

Route::get('/download', function (Request $request) {

    return response()->file(__DIR__ . '/../' . $request->file);
});

Route::get('/error', function (Request $request) {

    return abort('404', 'Not found');
});

Route::view('/axios', 'axios')->middleware('auth');
Route::view('/user2', 'user2')->middleware('auth');
Route::view('/user3', 'user3')->middleware('auth');
Route::view('/tokens', 'tokens')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

