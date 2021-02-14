<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// page
Route::get('/', function () {
    return view('welcome');
});


// session API
Route::post('/test', function () {
    return response() -> json([
      "test" => true
    ]);
});

Route::post('/login', function () {
    return response() -> json([
      "test" => true
    ]);
});

Route::group(['middleware' => ['auth']], function () {
  Route::post('/auth', function () {
      return response() -> json([
        "auth" => true
      ]);
  });
});


// default
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
