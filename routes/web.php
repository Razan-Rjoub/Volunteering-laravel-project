<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceFormController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::get('/', function () {
    return view('Home.index');
});
Route::get('/form', function () {
    return view('Form');
});
Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('Contact.contactus');
})->name('contact');

Route::get('/',[CategoryController::class,'index'])->name('home');
Route::get('/donation',[DonationController::class,'index'])->name('donation');




Route::post('/service-form', [ServiceFormController::class, 'store'])->name('service-form.store');


Route::get('/service',[ServiceController::class,'index'])->name('service');
