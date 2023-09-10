<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DonationController;
use App\Http\Controllers\ItemController;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UsertController;
use App\Http\Controllers\DonationFormController;
use App\Http\Controllers\ItemFormController;
use App\Http\Controllers\ServiceFormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShowController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('Home.index');
// });
Route::get('/thankyou', function () {
    return view('Thankyou');
})->name('thankyou');
Route::get('/form', function () {
    return view('Form');
});
Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('Contact.contactus');
})->name('contact');

// Route::get('/',[CategoryController::class,'index'])->name('home');
// Route::get('/donation',[DonationController::class,'index'])->name('Give Donation');
// Route::get('/service',[ServiceController::class,'index'])->name('Give Services');
// Route::get('/item',[ItemController::class,'index'])->name('Give Items');
// Route::get('/donationform/{id}', [DonationController::class, 'form'])->name('donationform');
// Route::post('/submitdonation', [DonationFormController::class, 'store'])->name('submitdonate');



Route::get('/dash', function () {
    return view('dashboardbage.home');
});






Route::resource('/donatione', DonationController::class);
Route::resource('/donateditems', ItemController::class);
Route::resource('/donatedservives', ServiceController::class);
Route::resource('/user', UsertController::class);
Route::resource('/donationform', DonationFormController::class);
Route::resource('/donationitemform', ItemFormController::class);
Route::resource('/donatedservicesform', ServiceFormController::class);
Route::resource('/admin', AdminController::class);
Route::resource('/category',CategoryController::class);

