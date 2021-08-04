<?php

use App\Http\Controllers\Frontend\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\Frontend\PagesController@index')->name('index');
Route::get('/contact', 'App\Http\Controllers\Frontend\PagesController@contact')->name('contact');

Route::group(['prefix' => 'products'], function(){
Route::get('/', 'App\Http\Controllers\Frontend\ProductsController@products')->name('products');
Route::get('/{slug}', 'App\Http\Controllers\Frontend\ProductsController@show')->name('products.show');
Route::get('/new/search', 'App\Http\Controllers\Frontend\PagesController@search')->name('search');

Route::get('/categories', 'App\Http\Controllers\Frontend\CategoriesController@index')->name('categories.index');
  Route::get('/category/{id}', 'App\Http\Controllers\Frontend\CategoriesController@show')->name('categories.show');
    });

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'App\Http\Controllers\Backend\AdminProductController@index')->name('admin.index');


  Route::group(['prefix' => '/product'], function(){
  Route::get('/', 'App\Http\Controllers\Backend\AdminProductController@index')->name('admin.products');
  Route::get('/create', 'App\Http\Controllers\Backend\AdminProductController@create')->name('admin.product.create');
  Route::get('edit/{id}', 'App\Http\Controllers\Backend\AdminProductController@edit')->name('admin.product.edit');

  Route::post('/store', 'App\Http\Controllers\Backend\AdminProductController@store')->name('admin.product.store');

  Route::post('/edit/{id}', 'App\Http\Controllers\Backend\AdminProductController@update')->name('admin.product.update');
    Route::post('/delete/{id}', 'App\Http\Controllers\Backend\AdminProductController@delete')->name('admin.product.delete');

    });

    Route::group(['prefix' => '/categories'], function(){
  Route::get('/', 'App\Http\Controllers\Backend\CategoryController@index')->name('admin.categories');
  Route::get('/create', 'App\Http\Controllers\Backend\CategoryController@create')->name('admin.category.create');
  Route::get('edit/{id}', 'App\Http\Controllers\Backend\CategoryController@edit')->name('admin.category.edit');

  Route::post('/store', 'App\Http\Controllers\Backend\CategoryController@store')->name('admin.category.store');

  Route::post('/category/edit/{id}', 'App\Http\Controllers\Backend\CategoryController@update')->name('admin.category.update');
  
    Route::post('/category/delete/{id}', 'App\Http\Controllers\Backend\CategoryController@delete')->name('admin.category.delete');

    });

    Route::group(['prefix' => '/brands'], function(){
  Route::get('/', 'App\Http\Controllers\Backend\BrandsController@index')->name('admin.brands');
  Route::get('/create', 'App\Http\Controllers\Backend\BrandsController@create')->name('admin.brand.create');
  Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BrandsController@edit')->name('admin.brand.edit');

  Route::post('/store', 'App\Http\Controllers\Backend\BrandsController@store')->name('admin.brand.store');

  Route::post('/brand/edit/{id}', 'App\Http\Controllers\Backend\BrandsController@update')->name('admin.brand.update');
  
    Route::post('/brand/delete/{id}', 'App\Http\Controllers\Backend\BrandsController@delete')->name('admin.brand.delete');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
