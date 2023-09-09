<?php

use App\Http\Controllers\DonationFormController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceFormController;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UsertController;
use App\Http\Controllers\ItemFormController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
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

require __DIR__ . '/auth.php';









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

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::get('/donation', [DonationController::class, 'indexDonation'])->name('Give Donation');
Route::get('/service', [ServiceController::class, 'index'])->name('Give Services');
Route::get('/item', [ItemController::class, 'index'])->name('Give Items');

Route::get('/',[CategoryController::class,'index'])->name('home');
Route::get('/donation',[DonationController::class,'index'])->name('Give Donation');

Route::get('/item',[ItemController::class,'index'])->name('Give Items');



Route::get('/donationform/{id}', [DonationController::class, 'form'])->name('donationform');
Route::post('/submitdonation', [DonationFormController::class, 'store'])->name('submitdonate');

Route::get('payment/{price}', [PaypalController::class, 'payment'])->name('payment');
Route::get('cancel', [PaypalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PaypalController::class, 'success'])->name('payment.success');
Route::get('/itemform/{id}', [ItemController::class, 'form'])->name('itemform');
Route::post('/storeitem', [ItemFormController::class, 'store'])->name('storeitem');







Route::get('/success', function () {
    return view('Thankyou');
})->name('paysuccess');
Route::get('/cancel', function () {
    return view('cancel');
})->name('cancel');
Route::get('/serviceform/{id}', [ServiceController::class, 'joinForm'])->name('serviceform');
Route::post('/serviceform', [ServiceFormController::class,'store'])->name('service.store');
Route::get('/service',[ServiceController::class,'index'])->name('Give Services');
Route::get('/serviceform',[ServiceFormController::class,'index'])->name('Servicesform');


Route::get('/dash', function () {
    return view('dashboardbage.home');
});



Route::get('/Admins', function () {
    return view('dashboardbage.Admins');
});




Route::get('/Categories', function () {
    return view('dashboardbage.Categories');
});



Route::get('/DonatedItemsForm', function () {
    return view('dashboardbage.DonatedItemsForm');
});



Route::get('/DonatedServicesForm', function () {
    return view('dashboardbage.DonatedServicesForm');
});

// Route::get('/DonationForm', function () {
//     return view('dashboardbage.DonationForm');
// });






Route::namespace('Admin')->group(function () {
 
    Route::resource('/donatione', DonationController::class);
Route::resource('/donateditems', ItemController::class);
Route::resource('/donatedservives', ServiceController::class);
Route::resource('/user', UsertController::class);
Route::resource('/donationform', DonationFormController::class);
});