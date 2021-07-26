<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

//admin side
Route::get('/add/men', function () {
    return view('admin.men');
});



/*Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/logout', function () {
    //ye session ko forget 
    Session::forget('user');
    return redirect('/admin/login');
});*/


Route::post('/admin/login',[UserController::class,'admin_login']);


Route::post('/add/men', [HomeController::class,'addproduct']);
Route::get('/products', [HomeController::class,'viewAll']);
Route::get('/edit/{id}', [HomeController::class,'edit']);//<- joh edit karana h wo record usko lake aayega database  
//product details update
Route::patch('/update/{id}', [HomeController::class,'update']);
Route::get('/delete/{id}', [HomeController::class,'destroy']);
Route::get('/all/order', [HomeController::class,'allOrder']);
//delivary status update
Route::patch('/deliveryupdate/{id}', [HomeController::class,'deliveryupdate']);
Route::get('/admin/home', [HomeController::class,'homepage']);


//client side
Route::get('/user/login', function () {
    return view('login');
});
Route::get('/user/logout', function () {
    //ye session ko forget 
    Session::forget('user');
    return redirect('/user/login');
});

Route::post('/user/login',[UserController::class,'login']);
Route::post('/user/register',[UserController::class,'register']);


Route::get('/user/home', [ProductController::class,'index']);
Route::get('/user/detail/{id}',[ProductController::class,'detail']);
Route::post('/user/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/user/cart',[ProductController::class,'cartList']);
Route::get('/removeitemfromcart/{id}',[ProductController::class,'removeItemfromcart']);
Route::get('/user/ordernow',[ProductController::class,'orderNow']);
Route::post('/user/orderplace',[ProductController::class,'orderPlace']);
Route::get('/user/order',[ProductController::class,'myOrdershistory']);


Route::get('user/men',[ProductController::class,'men']);
Route::get('/user/women',[ProductController::class,'women']);
Route::get('/user/kid',[ProductController::class,'kid']);
Route::get('/user/electronic',[ProductController::class,'electronic']);

Route::get('/user/contact', [ProductController::class,'contact']);
Route::get('/user/about', [ProductController::class,'about']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
