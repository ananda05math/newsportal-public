<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/account', function () {
    return view('frontend.account');
})->name('account');

Route::get('/author-single', function () {
    return view('frontend.author-single');
})->name('author-single');

Route::get('/author', function () {
    return view('frontend.author');
})->name('author');

Route::get('/bangladesh', function () {
    return view('frontend.bangladesh');
})->name('bangladesh');

Route::get('/bd-economy-business', function () {
    return view('frontend.bd-economy-business');
})->name('bd-economy-business');

Route::get('/bd-politics', function () {
    return view('frontend.bd-politics');
})->name('bd-politics');

Route::get('/blog-single', function () {
    return view('frontend.blog-single');
})->name('blog-single');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/category-art-literature', function () {
    return view('frontend.category-art-literature');
})->name('category-art-literature');

Route::get('/category-career', function () {
    return view('frontend.category-career');
})->name('category-career');

Route::get('/category-religion', function () {
    return view('frontend.category-religion');
})->name('category-religion');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/entertainment', function () {
    return view('frontend.entertainment');
})->name('entertainment');

Route::get('/fable', function () {
    return view('frontend.fable');
})->name('fable');

Route::get('/gallery-single', function () {
    return view('frontend.gallery-single');
})->name('gallery-single');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('gallery');

Route::get('/history', function () {
    return view('frontend.history');
})->name('history');

Route::get('/index', function () {
    return view('frontend.index');
})->name('index');

Route::get('/international', function () {
    return view('frontend.international');
})->name('international');

Route::get('/lifestyle-health', function () {
    return view('frontend.lifestyle-health');
})->name('lifestyle-health');

Route::get('/lifestyle-travel', function () {
    return view('frontend.lifestyle-travel');
})->name('lifestyle-travel');

Route::get('/lifestyle', function () {
    return view('frontend.lifestyle');
})->name('lifestyle');

Route::get('/sports', function () {
    return view('frontend.sports');
})->name('sports');

Route::get('/technology', function () {
    return view('frontend.technology');
})->name('technology');

Route::get('/testimonial', function () {
    return view('frontend.testimonial');
})->name('testimonial');

Route::get('/videos', function () {
    return view('frontend.videos');
})->name('videos');

//backend

Route::get('/admin', 'adminController@index')->name('admin');

Route::get('/category', 'adminController@viewCategory')->name('category');
Route::post('/addcategory', 'crudController@insertData')->name('addcategory');
Route::get('edit_category/{id}', 'adminController@updateCategory');
Route::post('updatecategory/{id}','crudController@updateData')->name('updatecategory');
Route::Post('multipledelete','adminController@multipleDelete')->name('deletecategory');

//settings
Route::get('settings','adminController@settings');