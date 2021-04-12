<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WatchlistController;

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

Route::get('/', [AnimeController::class, 'animes'])->name('/.animes');

Route::get('/anime/{id}', [AnimeController::class, 'listAnimes'])->name('/anime/{id}.listAnimes');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//   return view('dashboard');
// })->name('dashboard');

Route::get('/anime/{id}/new_review', function ($id) {
  return view('new_review');
});

Route::post('/anime/{id}', [ReviewController::class, 'getReview']);

Route::get('/anime/{id}/new_review', [ReviewController::class, 'addReview']);


Route::get('/login', function () {
  return view('login');
});

Route::post('/login', [AuthController::class, 'authLogin'])->name('/login.authLogin');

Route::get('/signup', function () {
  return view('signup');
});

Route::post('signup', [AuthController::class, 'authSignup'])->name('/signup.auth');

Route::post('signout', [AuthController::class, 'authSignout'])->name('/signout.auth');

Route::get('/top', function () {
  return view('top');
});
Route::post('/add_to_watch_list', function () {
  return redirect('/anime');
});


Route::get('/anime/{{ id }}/add_to_watch_list', [WatchlistController::class, 'getWatchlist']);
