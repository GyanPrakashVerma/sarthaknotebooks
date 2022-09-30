<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontcontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SubscribeUsController;
use App\Http\Controllers\SettingController;

use App\Http\Controllers\PdfController;
use App\Http\Controllers\mainController;

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

Route::get('/', function () {
    return view('comingsoon');
});
// Route::get('/home',[FrontController::class,'index'])->name('home');
// Route::get('/category',[FrontController::class,'category'])->name('category');
Route::get('/header',[FrontController::class,'header'])->name('header');
Route::get('/contact',[FrontController::class,'contact'])->name('contact');
Route::get('/about',[FrontController::class,'about'])->name('about');
Route::get('/Notebook-Design',[FrontController::class,'design'])->name('design');
Route::get('/gallery',[FrontController::class,'gallery'])->name('gallery');
Route::get('/all-products',[FrontController::class,'product_s'])->name('products');
Route::get('/product-detail/{id}',[FrontController::class,'product_detail'])->name('product_detail');
Route::post('/contact_sotre',[FrontController::class,'Contact_store'])->name('Contact_store');




Route::get('/logout-user',[UserController::class,'logout'])->name('logout');

Route::group(['middleware'=>'customermulti'], function(){
// Route::get('/',[FrontController::class,'index']);
Route::get('/home',[FrontController::class,'home'])->name('home');

Route::get('/login',[FrontController::class,'login'])->name('login');
// Route::get('/register',[FrontController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'register'])->name('register_create');
Route::get('/forget-password',[FrontController::class,'passforget'])->name('forget-password');



Route::get('/product/{id}',[FrontController::class,'product'])->name('product');
Route::get('/items/{categ?}',[FrontController::class,'product_s']);
Route::post('/items/{categ?}',[FrontController::class,'product_s'])->name('items');
Route::post('/subscrib',[SubscribeUsController::class,'store'])->name('subscribe_store');

Route::post('/login_confirm',[UserController::class,'login'])->name('login_confirm');
    Route::group(['middleware'=>'loginn'], function(){
        Route::get('/profile',[FrontController::class,'profile'])->name('profile');
        Route::get('/profile-edit',[FrontController::class,'update'])->name('update_profile');
        Route::resource('/cart',AddToCartController::class);
        Route::post('/delcart',[AddToCartController::class,'deleteall'])->name('delcarts');
        Route::resource('/wishlist',WishlistController::class);
        Route::post('/delwishlist',[WishlistController::class,'deleteall'])->name('delwish'); 

   

        // orders 
        Route::get('/checkout',[CheckoutController::class,'checkout'])->name('checkout');
        Route::post('/checkout-order',[CheckoutController::class,'order'])->name('order_checkout');
        Route::get('/orders',[OrderController::class,'allorder'])->name('orders');
        Route::get('/order-cancel/{id}',[OrderController::class,'order_cancel'])->name('order_cancel');
        Route::get('/order-delete/{id}',[OrderController::class,'delete'])->name('order_del');
        
        // Payment Route
        Route::get('/payment', [PaymentController::class, 'index']);
        Route::get('/payment-process', [PaymentController::class, 'process']);
        Route::post('/payment-success', [PaymentController::class, 'success']);

// // Invoice Pdf
        Route::get('/generate-pdf/{id}', [PdfController::class, 'generatePDF'])->name('generate');
        
    });




});

// routeing for backend module


Route::get('/adminlogin',[LoginController::class,'page']);
Route::post('/adminlogin',[LoginController::class,'authentic']);
Route::get('/logout',[LoginController::class,'logout']);
Route::group(['middleware' => ['adminpage'], 'prefix' =>'/admin'],function(){
    Route::get('/dashboard',[mainController::class,'main'])->name('dash');

    Route::resource('gallery',GalleryController::class);
    Route::resource('enquiry',EnquiryController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
    Route::get('/orders', [ProductController::class,'orders'])->name('custo_order');
    Route::get('/order_status/{id}', [ProductController::class,'order_status'])->name('order_status');
     // top product 
     Route::get('/top_product',[ProductController::class,'top_product'])->name('top_product');
     Route::post('/top_update/{id}',[ProductController::class,'top_product_updt'])->name('top_product_updt');
     Route::post('/top_product_remove/{id}',[ProductController::class,'top_product_remove'])->name('top_product_remove');

    Route::post('/update_orders', [ProductController::class,'order_update'])->name('order_update');

    Route::resource('subscribe', SubscribeController::class);
    Route::resource('user', CustomerController::class);
    Route::resource('testimonial',FeedbackController::class);
    Route::resource('setting',SettingController::class);

    // Route::post('/search', [ProductController::class,'search'])->name('order.search');
    // Route::get('/banner', [OfferController::class,'banner'])->name('banner');
    // Route::get('/banner_create', [OfferController::class,'bannerCreate'])->name('banner.create');
    // Route::post('/banner_store', [OfferController::class,'bannerStore'])->name('banner.store');
    // Route::get('/banner_edit/{id}', [OfferController::class,'bannerEdit'])->name('banner.edit');
    // Route::post('/banner_update/{id}', [OfferController::class,'bannerUpdate'])->name('banner.update');

});
