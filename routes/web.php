<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\MyAccountController;

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

//Index Page
Route::get('/', [PagesController::class, 'index']);

//Reviews Page
Route::get('/reviews', [PagesController::class, 'reviews']);

//Aggelies Page
Route::get('/aggelies', [PagesController::class, 'aggelies']);

//Katastimata Page
Route::get('/katastimata', [ShopsController::class, 'index']);

//Katastima Page
Route::get('/katastima/{slug}', [ShopsController::class, 'shop']);

//Contact page
Route::get('/epikoinonia', [PagesController::class, 'epikoinonia']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//MyaccountPage
Route::get('/my-account', [MyAccountController::class, 'index']);

//Submit edit profile
Route::post('/submit-profile-edit', [MyAccountController::class, 'edit_profile']);

//Submit edit account
Route::post('/submit-account-edit', [MyAccountController::class, 'edit_account']);
