<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceFormController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::get('/welcome', function () {
    return view('welcome');
});

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
Route::get('/donation',[DonationController::class,'index'])->name('Give Donation');
Route::get('/service',[ServiceController::class,'index'])->name('Give Services');
Route::get('/item',[ItemController::class,'index'])->name('Give Items');
Route::get('/donationform/{id}', [DonationController::class, 'form'])->name('donationform');
Route::get('/submitdonation', [DonationController::class, 'submit'])->name('submitdonate');




Route::post('/service-form', [ServiceFormController::class, 'store'])->name('service-form.store');


Route::get('/service',[ServiceController::class,'index'])->name('service');
Route::get('/dash', function () {
    return view('dashboardbage.home');
});

Route::get('/table', function () {
    return view('dashboardbage.table');
});

Route::get('/Admins', function () {
    return view('dashboardbage.Admins');
});


Route::get('/Users', function () {
    return view('dashboardbage.Users');
});

Route::get('/Categories', function () {
    return view('dashboardbage.Categories');
});

Route::get('/DonatedItems', function () {
    return view('dashboardbage.DonatedItems');
});


Route::get('/DonatedItemsForm', function () {
    return view('dashboardbage.DonatedItemsForm');
});


Route::get('/DonatedServices', function () {
    return view('dashboardbage.DonatedServices');
});


Route::get('/DonatedServicesForm', function () {
    return view('dashboardbage.DonatedServicesForm');
});

Route::get('/DonationForm', function () {
    return view('dashboardbage.DonationForm');
});

Route::get('/Donations', function () {
    return view('dashboardbage.Donations');
});

