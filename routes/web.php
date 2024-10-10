<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
//home
Route::get('/home', function () {
    return view('home');
});

//signup
Route::view('/signup', 'auth.signup');
Route::post('/store', [RegisterController::class, 'store']);

//login
Route::view('/login', 'auth.login');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [LoginController::class, 'logout']);
//Single product
Route::view('/singleproduct', 'singleproduct');

//confirmation
Route::view('/confirmation', 'confirmation');

//checkout
Route::view('/checkout', 'checkout');

//contact
Route::view('/contact', 'contact');

//category
Route::view('/category', 'category');

//cart
Route::view('/cart', 'cart');

//profile
Route::view('/profile', 'profile');

//admin panel
Route::view('/adminprofile', 'admin.adminprofile');

//seller Register
Route::view('/seller', 'seller'); // Named seller route
Route::post('register', [RegisterController::class, 'register'])->name('register'); // Define route for the post request

//seller dashboard  
Route::view('/sellerpanal', 'dashboard.sellerpanal');

//product post
Route::view('productpost', 'dashboard.productpost');
