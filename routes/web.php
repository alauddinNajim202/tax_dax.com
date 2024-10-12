<?php

use App\Http\Controllers\Web\backend\AdminController;
use App\Http\Controllers\Web\backend\ClientController;
use App\Http\Controllers\Web\front_end\HomeController;
use App\Http\Controllers\Web\backend\TaxPrepareController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// front end landing page routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/join', [HomeController::class, 'join'])->name('home.join');
Route::get('/join-as-prepare', [HomeController::class, 'join_tax_prepare'])->name('home.prepare');




Auth::routes();


// admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.index');
});


// client routes
Route::middleware(['auth', 'role:client'])->group(function () {

    Route::get('/client/dashboard', [ClientController::class, 'index'])->name('client.index');
    Route::get('/client/bookmarks', [ClientController::class, 'bookmark'])->name('client.bookmarks');
    Route::get('/client/bookings', [ClientController::class, 'booking'])->name('client.booking');
    Route::get('/client/profile-bookings', [ClientController::class, 'profile_booking'])->name('client.profile_booking');
    Route::get('/client/document-center', [ClientController::class, 'document_center'])->name('client.document_center');

});


// tax prepare dashboard routes
Route::middleware(['auth', 'role:tax_prepare'])->group(function () {

    Route::get('/tax-prepare/dashboard', [TaxPrepareController::class, 'index'])->name('tax_prepare.index');
    Route::get('/tax-prepare/appointment', [TaxPrepareController::class, 'appointment'])->name('tax_prepare.appointment');
    Route::get('/tax-prepare/profile', [TaxPrepareController::class, 'profile'])->name('tax_prepare.profile');

});
