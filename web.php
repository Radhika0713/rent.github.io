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
Route::get('/', function () {
    return view('welcome');
});
Route::get('sign1', function () {
    return view('sign1');
});
Route::get('signs', function () {
    return view('signs');
});
Route::get('shine', function () {
    return view('shine');
});
Route::get('sign', function () {
    return view('sign');
});
Route::get('contact1', function () {
    return view('contact1');
});
Route::get('info', function () {
    return view('info');
});
Route::get('fft', function () {
    return view('fft');
});
Route::get('fcl', function () {
    return view('fcl');
});
Route::get('fa', function () {
    return view('fa');
});
Route::get('mft', function () {
    return view('mft');
});
Route::get('ma', function () {
    return view('ma');
});
Route::get('mcl', function () {
    return view('mcl');
});
Route::get('/ta','signss@data');
Route::post('/formdata','signss@formdata');
Route::get('/ta/{ta}','signss@ed');
Route::get('/ta/{table}/ed','signss@ed');
 Route::patch('/ta/{ta}','signss@update');
 Route::delete('/ta/{ta}','signss@destroy'); 
 */
 Route::get('sign', function () {
    return view('sign');
});
  Route::get('taa', function () {
    return view('taa');
});
 Route::get('comment', function () {
    return view('comment');
});
 Route::get('/taa','CommentsController@data');
Route::post('/formdata','CommentsController@formdata');
