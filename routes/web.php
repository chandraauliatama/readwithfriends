<?php

use App\Http\Controllers\AcceptFriendRequestController;
use App\Http\Controllers\AddFriendController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DeleteFriendController;
use App\Http\Controllers\FriendIndexController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');
Route::resource('books', BookController::class)->middleware('auth');
Route::get('friend', FriendIndexController::class)->middleware('auth');
Route::post('friends', AddFriendController::class)->middleware('auth');
Route::patch('friends/{friend}', AcceptFriendRequestController::class)->middleware('auth');
Route::delete('friends/{friend}', DeleteFriendController::class)->middleware('auth');
