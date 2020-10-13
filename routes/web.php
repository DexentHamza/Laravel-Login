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

use App\Http\Controllers\Auth\GoogleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
// Route::get('auth/google', function (){
//     return view('home');
// });
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
// Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('login/facebook', [GoogleController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [GoogleController::class, 'handleFacebookCallback']);