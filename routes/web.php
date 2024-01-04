<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\formController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


    Route::get('/', function () { return view('welcome'); });
    Route::get('/Home', function () { return view('dashboard'); });
    Route::get('/Product', function () { return view('Product'); });
    Route::get('/Cart', function () { return view('Cart'); });
    Route::get('/Contact', function () {return view('Contact'); });
    Route::get('/About', function () {  return view('About');});
    Route::get('/admin', function () {  return view('admin.admin'); });
    Route::get('/adminproduct', function () {  return view('admin.Product'); });
  


    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('cart', [CartController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [CartController::class, 'addtoCart'])->name('add_to_Cart');
    Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
    Route::get('remove-from-cart/{id}', [CartController::class, 'deleteProduct'])->name('remove_from_cart');
    //new route yaha banana hai apko


    Route::get('category1', [CategoryController::class, 'category'])->name('category');
    Route::post('category', [CategoryController::class, 'categorysave']);
    Route::get('categoryedit/{id}', [CategoryController::class, 'categoryedit']);
    Route::post('categoryedit/{id}', [CategoryController::class, 'categoryupdate']);
    Route::get('categorydelete/{id}', [CategoryController::class, 'categorydelete']);
 
    
    Route::get('/adminproduct', [ProductController::class, 'index']);
    Route::get('/Product', [ProductController::class, 'product']);
    Route::post('/Product', [ProductController::class, 'Productsave']);
    Route::get('Productedit/{id}', [ProductController::class, 'Productedit']);
    Route::post('Productedit/{id}', [ProductController::class, 'Productupdate']);
    Route::get('Productdelete/{id}', [ProductController::class, 'Productdelete']);

   
    Route::get('/form',[formController::class, 'form']);
    Route::post('form', [formController::class, 'save']);
    Route::get('formedit/{id}', [formController::class, 'formedit']);
    Route::post('formedit/{id}', [formController::class, 'formupdate']);
    Route::get('formdelete/{id}', [formController::class, 'formdelete']);
    // Route::get('/adminproduct', function () {  return view('admin.product'); });


    Route::get('ajax-crud-datatable', [ProductController::class, 'index']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::post('update/{id}', [ProductController::class, 'store']);
    Route::post('/delete', [ProductController::class, 'delete']);

