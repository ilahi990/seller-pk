<?php

use App\Http\Controllers\admin\DashboardController;
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
// routes for web view
Route::get('/', function () {
    return view('web.welcome');
})->name('home');
Route::get('shop', function () {
    return view('web.shop');
})->name('shop');
Route::get('shop/detail', function () {
    return view('web.shopDetail');
})->name('shop.detail');
Route::get('cart', function () {
    return view('web.cart');
})->name('cart');
Route::get('contact', function () {
    return view('web.contact');
})->name('contact');
Route::get('testimonial', function () {
    return view('web.testimonial');
})->name('testimonial');
Route::get('checkout', function () {
    return view('web.checkout');
})->name('checkout');
// end routes for web view

Route::get('/dashboard', [dashboardController::class , 'index'])->name('dashboard');
