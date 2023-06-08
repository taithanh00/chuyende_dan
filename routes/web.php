<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontEndController;
use App\Http\Controllers\Admin\ListOrderController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(FrontEndController::class)->group(function () {
    Route::post('/frontend/index', 'Index')->name('index');
    // Route::match(['get', 'post'], '/frontend/index', 'Index')->name('index');
    Route::match(['get', 'post'], '/frontend/signup', 'Login_Register')->name('frontend_signup');
    Route::post('/frondend/addtocart','AddtoCart')->name('addtocart');
    Route::match(['get', 'post'], '/frontend/findmatchtable', 'FindTable')->name('find');
    Route::match(['get', 'post'], '/frontend/index', 'CheckType')->name('checktype');
});
require __DIR__.'/auth.php';
