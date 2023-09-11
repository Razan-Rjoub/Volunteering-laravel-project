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

use App\Http\Controllers\AdminController;

use App\Http\Controllers\ShowController;


// Route::get('/', function () {
//     return view('welcome');
// });
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
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/thankyou', function () {
    return view('Thankyou');
})->name('thankyou');
// Route::get('/', function () {
//     return view('Home.index');
// });

Route::get('/form', function () {
    return view('Form');
});



Route::get('/aboutus', [CategoryController::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [CategoryController::class, 'contactus'])->name('contact');

Route::get('/', [CategoryController::class, 'inCategory'])->name('home');
Route::get('/donation', [DonationController::class, 'inDonation'])->name('Give Donation');
Route::get('/service', [ServiceController::class, 'inService'])->name('Give Services');
Route::get('/item', [ItemController::class, 'inItem'])->name('Give Items');

//Route::get('/',[CategoryController::class,'index'])->name('home');

//Route::get('/item',[ItemController::class,'index'])->name('Give Items');






Route::get('/donationform/{id}', [DonationController::class, 'formDonation'])->name('donationform');
Route::post('/submitdonation', [DonationFormController::class, 'stoDonation'])->name('submitdonate');

Route::get('payment/{price}', [PaypalController::class, 'payment'])->name('payment');
Route::get('cancel', [PaypalController::class, 'cancel'])->name('payment.cancel');
Route::get('payment/success', [PaypalController::class, 'success'])->name('payment.success');

Route::get('/itemform/{id}', [ItemController::class, 'formItem'])->name('itemform');
Route::post('/storeitem', [ItemFormController::class, 'stoItem'])->name('storeitem');

Route::get('/logout', [ProfileController::class, 'destroy'])->name('logout');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/editprofile', [ProfileController::class, 'edit'])->name('editprofile');

Route::get('/pdf', [ProfileController::class, 'pdf'])->name('pdf');
Route::get('/success', [PaypalController::class, 'successview'])->name('paysuccess');
Route::get('/cancel', [PaypalController::class, 'cancelview'])->name('cancel');
// Route::get('/success', function () {
//     return view('Thankyou');
// })->name('paysuccess');

// Route::get('/cancel', function () {
//     return view('cancel');
// })->name('cancel');

Route::get('/cancel', function () {
    return view('cancel');
})->name('cancel');

Route::get('/serviceform/{id}', [ServiceController::class, 'formService'])->name('serviceform');
Route::post('/serviceform', [ServiceFormController::class,'stoService'])->name('service.store');
Route::get('/service',[ServiceController::class,'inService'])->name('Give Services');
Route::get('/serviceform',[ServiceFormController::class,'infoService'])->name('Servicesform');


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

