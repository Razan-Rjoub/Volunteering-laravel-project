<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Home.index');
});
Route::get('/form', function () {
    return view('Form');
});
Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
})->name('aboutus');
Route::get('/home', function () {
    return view('Home.index');
})->name('home');
Route::get('/contactus', function () {
    return view('Contact.contactus');
})->name('contact');

Route::get('/',[CategoryController::class,'index']);