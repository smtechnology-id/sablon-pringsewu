<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AuthController::class, 'index'])->name('index');

// login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');

// register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerPost', [AuthController::class, 'registerPost'])->name('registerPost');

// logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


// Navigate
Route::get('/product', [AuthController::class, 'product'])->name('product');
Route::get('/product/{slug}', [AuthController::class, 'productDetail'])->name('product.detail');

// admin middleware
Route::group(['middleware' => ['auth.check:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    // Product
    Route::get('/admin/product', [AdminController::class, 'product'])->name('admin.product');
    Route::get('/admin/product/create', [AdminController::class, 'productCreate'])->name('admin.product.create');
    Route::post('/admin/product/store', [AdminController::class, 'productStore'])->name('admin.product.store');
    Route::get('/product/edit/{id}', [AdminController::class, 'productEdit'])->name('admin.product.edit');
    Route::post('/product/update', [AdminController::class, 'productUpdate'])->name('admin.product.update');
    Route::get('/product/delete/{id}', [AdminController::class, 'productDelete'])->name('admin.product.destroy');
});

// user middleware
Route::group(['middleware' => ['auth.check:user']], function () {
    Route::get('/cart', [UserController::class, 'cart'])->name('cart');
    Route::post('/cart/add', [UserController::class, 'cartAdd'])->name('cart.add');
    Route::get('/cart/remove/{id}', [UserController::class, 'cartRemove'])->name('cart.remove');

    // checkout
    Route::get('/checkout-page/{code_order}', [UserController::class, 'checkoutPage'])->name('checkout.page');
    Route::post('/checkout', [UserController::class, 'checkout'])->name('checkout');
});

