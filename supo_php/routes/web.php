<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AUserController;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Shopcontroller;
use App\Http\Controllers\AProductcontroller;
use App\Http\Controllers\Hoadoncontoller;
use App\Http\Controllers\Cartcontroller;
use App\Http\Controllers\Checkcontroller;
use App\Http\Controllers\Paycontroller;
use App\Http\Controllers\Thongkecontroller;




//login
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});
// Route::get('/oke', function () {
//     return 'okeee';
// });
// Route::resource('/home',Productcontroller::class);
// Route::resource('/shop',Shopcontroller::class);

Route::resource('product', AProductcontroller::class);
Route::resource('hoadon', Hoadoncontoller::class);
Route::resource('check', CheckController::class);
Route::get('/hoadon/{id}', [Hoadoncontoller::class, 'oke'])->name('hoadon.oke');
Route::resource('Apayment', Paycontroller::class);


//search
Route::get('/search', [ProductController::class, 'search'])->name('product.search');

// Route::get('/cart', Cartcontroller::class);

Route::resource('thongke', Thongkecontroller::class);

// Route::get('/onepro', function () {
//     return view('oneProduct');
// });


Route::get('/user', [AUserController::class, 'index'])->name('user.index');



Route::prefix('user')->name('user.')->group(function () {

    Route::get('/home', [Productcontroller::class, 'index'])->name('home');
    Route::get('/oneproduct', [Productcontroller::class, 'view'])->name('oneproduct');
    Route::get('/shop', [Shopcontroller::class, 'index'])->name('shop');
    // cart
    Route::get('/cart', [Cartcontroller::class, 'index'])->name('cart');
    Route::get('/cart/{id}', [Cartcontroller::class, 'addToCart'])->name('add');
    Route::get('/delete/{id}', [Cartcontroller::class, 'deleteCart'])->name('delete');
    Route::get('/update/{id}', [Cartcontroller::class, 'updateCart'])->name('update');
    //onProduct
    Route::get('/oneproduct{id}', [Productcontroller::class, 'show'])->name('oneproduct');

    //order
    Route::get('/hoadon/{payment_id}', [Hoadoncontoller::class, 'oke'])->name('pay_detail');
    // thongke

});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [Productcontroller::class, 'index']);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
