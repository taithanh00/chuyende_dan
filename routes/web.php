<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontEndController;
use App\Http\Controllers\Admin\ListOrderController;
use App\Http\Controllers\Admin\UsertableOrderController;
use App\Http\Controllers\Admin\TablesController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\Admin\BillController;
use App\Http\Controllers\Admin\CouponsController;

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
Route::controller(BillController::class)->group(function () {
    Route::get('/admin/all-bills', 'Index')->name('allbills');
    Route::get('/admin/edit-bills', 'EditBills')->name('editbills');
    Route::match(['get', 'post'], '/amdin/storebills', 'StoreBills')->name('storebills');
    Route::get('/admin/edit2bills', 'Edit2Bills')->name('edit2bills');
    Route::match(['get', 'post'], '/admin/update-bills', 'UpdateBills')->name('updatebills');
    // Route::match(['get', 'post'], '/admin/delete-bills', 'DeleteBills')->name('deletebills');
    Route::post('/admin/delete-bills','DeleteBills')->name('deletebills');
    Route::match(['get', 'post'], '/admin/delete-bills', 'DeleteBills_Final')->name('deletebills_final');
    // Route::get('/admin/delete-foods', 'DeleteFoods')->name('deletefoods');
});
Route::controller(CouponsController::class)->group(function () {
    Route::get('/admin/all-coupons', 'Index')->name('allcoupons');
    Route::get('/admin/edit-coupons', 'EditCoupons')->name('editcoupons');
    Route::match(['get', 'post'], '/amdin/storecoupons', 'StoreCoupons')->name('storecoupons');
    Route::get('/admin/edit2coupons', 'Edit2Coupons')->name('edit2coupons');
    Route::match(['get', 'post'], '/admin/update-coupons', 'UpdateCoupons')->name('updatecoupons');
    // Route::match(['get', 'post'], '/admin/delete-coupons', 'DeleteCoupons')->name('deletecoupons');
    Route::post('/admin/delete-coupons','DeleteCoupons')->name('deletecoupons');
    Route::match(['get', 'post'], '/admin/delete-coupons', 'DeleteCoupons_Final')->name('deletecoupons_final');
    // Route::get('/admin/delete-foods', 'DeleteFoods')->name('deletefoods');
});
Route::controller(FoodController::class)->group(function () {
    Route::get('/admin/all-foods', 'Index')->name('allfoods');
    Route::get('/admin/edit-foods', 'EditFoods')->name('editfoods');
    Route::match(['get', 'post'], '/amdin/storefood', 'StoreFoods')->name('storefoods');
    Route::get('/admin/edit2foods', 'Edit2Foods')->name('edit2foods');
    Route::match(['get', 'post'], '/admin/update-foods', 'UpdateFoods')->name('updatefoods');
    Route::match(['get', 'post'], '/admin/delete-foods', 'DeleteFoods')->name('deletefoods');
    Route::match(['get', 'post'], '/admin/delete-foodss', 'DeleteFoods_Final')->name('deletefoods_final');
    // Route::get('/admin/delete-foods', 'DeleteFoods')->name('deletefoods');
});
Route::controller(FrontEndController::class)->group(function () {
    Route::post('/frontend/index', 'Index')->name('index');
    // Route::match(['get', 'post'], '/frontend/index', 'Index')->name('index');
    Route::match(['get', 'post'], '/frontend/signup', 'Login_Register')->name('frontend_signup');
    Route::post('/frondend/addtocart','AddtoCart')->name('addtocart');
    Route::match(['get', 'post'], '/frontend/findmatchtable', 'FindTable')->name('find');
    Route::match(['get', 'post'], '/frontend/index', 'CheckType')->name('checktype');
    Route::match(['get', 'post'], '/frontend/confirm-bill', 'Confirm')->name('confirm_bill');
    Route::match(['get', 'post'], '/admin/alltable-find', 'AlltableFind')->name('alltable-find');
    Route::post('/frontend/alltable','Alltable')->name('alltable');
    Route::get('/frontend/admin','Admin')->name('admin');
});

require __DIR__.'/auth.php';
