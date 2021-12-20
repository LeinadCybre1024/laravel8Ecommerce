<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Products;
use App\Http\Controllers\Login;


Route::get('/',[Home::class,'index'] )->name('home');

Route::get('/login', [Login::class,'index'])->name('login');
Route::post('/login', [Login::class,'chckLogin'])->name('login');


Route::get('/register', [Register::class,'index'])->name('register');
Route::post('/register', [Register::class,'register'])->name('register');
Route::get('/addproduct', [Products::class,'addShow'])->name('addproduct');
Route::post('/addproduct', [Products::class,'add'])->name('addproduct');
Route::get('/products',[Products::class,'index'])->name('products');