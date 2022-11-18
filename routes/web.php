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
Route::get('artikel', function () {
    return view('artikel');
});
// Route::get('blog', function () {
//     return view('blog');
// });
Route::get('Backend', function () {
    return view('courseBack');
});
Route::get('Frontend', function () {
    return view('courseFront');
});
// Route::get('Ngoding-with-view', function () {
//     return view('singlepost');
// });
// Route::get('blogtemplate', function () {
//     return view('singleblog');
// });
Route::get('dokumentasi', function () {
    return view('dokumentasi');
});
Route::get('privacy', function () {
    return view('privacy');
});
Route::get('terms', function () {
    return view('terms');
});
Route::get('about', function () {
    return view('about');
});
