<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

// Route::get('acceuil', function () {
//   return view('acceuil');  //acceuil est le nom de la vue
// });
//
// Route::get('service', function () {
//     return view('service');  //service est le nom de la vue
// });
//
// Route::get('contact', function () {
//     return view('contact');  //contact est le nom de la vue
// });

Route::get('/', 'GoldenController@index');

Route::get('news', 'GoldenController@news');

Route::get('team', 'GoldenController@team');

Route::get('schedule', 'GoldenController@schedule');

Route::get('about', 'GoldenController@about');

Route::get('contact', 'GoldenController@contact');

Route::post('contact', 'GoldenController@newMessage');

Route::get('highlights', 'GoldenController@highlights');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
