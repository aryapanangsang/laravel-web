<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController; 



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/profile', [HomeController::class, 'show_profile'])->name('show_profile');
Route::get('/update_profile', [HomeController::class, 'update_profile'])->name('update_profile');
Route::patch('/update_profile', [HomeController::class, 'store_profile'])->name('store_profile');
Route::post('/experience', [HomeController::class, 'store_experience'])->name('store_experince');
Route::delete('/experience/delete/{experience}', [HomeController::class, 'delete_experience'])->name('hapus_experience');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
