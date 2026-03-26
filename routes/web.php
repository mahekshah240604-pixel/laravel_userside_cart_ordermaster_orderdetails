<?php

use App\Http\Controllers\myproductcontroller;
use App\Http\Controllers\Userordercontroller;
use App\Http\Controllers\UserOrdercontroller as ControllersUserOrdercontroller;
use App\Http\Controllers\UserOrderController as HttpControllersUserOrderController;
use App\Http\Controllers\UserSideController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('product',myproductcontroller::class);

Route::get('shop',[UserSideController::class,'ProductListing']);

Route::get('productdetails/{id}',[UserSideController::class,'productdetails']);

Route::post('add-cart-process/{id}',[UserSideController::class,'addtocartprocess']);

Route::get('cart',[UserSideController::class,'cart']);

Route::get('remove-cart/{id}',[UserSideController::class,'removecart']);

Route::post('update-cart/{id}',[UserSideController::class,'updatecart']);


Route::get('/chackout', [UserOrderController::class, 'showCheckout']);

Route::post('/chackout/confirm', [UserOrderController::class, 'placeOrder']);

Route::get('/order',[UserOrderController::class,'myOrders']);