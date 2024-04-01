<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\TrackingController; 
use App\Http\Controllers\ExperienceController; 
use App\Http\Controllers\CvController; 
use App\Http\Controllers\ReferensiController; 



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

Route::get('/', [HomeController::class, 'index'])->name('home_profile');
Route::get('/profile', [HomeController::class, 'show_profile'])->name('show_profile');
Route::get('/update_profile', [HomeController::class, 'update_profile'])->name('update_profile');
Route::patch('/update_profile', [HomeController::class, 'store_profile'])->name('store_profile');

Route::post('/experience', [ExperienceController::class, 'store_experience'])->name('store_experince');
Route::delete('/experience/delete/{experience}', [ExperienceController::class, 'delete_experience'])->name('hapus_experience');

Route::post('/cv', [CvController::class, 'store_cv'])->name('store_cv');
Route::delete('/cv/delete/{cv}', [CvController::class, 'delete_cv'])->name('delete_cv');

Route::get('/tracking', [trackingController::class, 'show_tracking'])->name('show_tracking');

Route::post('/referensi', [ReferensiController::class, 'store_referensi'])->name('store_referensi');

Route::patch('/update_image', [HomeController::class, 'update_image'])->name('update_image');
Auth::routes();

Route::get('/pengaturan', [HomeController::class, 'show_pengaturan'])->name('show_pengaturan');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
