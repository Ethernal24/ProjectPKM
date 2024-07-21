<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\QrisController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\CoupunController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HistoryController;
use App\Http\Controllers\Frontend\InvoiceController;
use App\Http\Controllers\Frontend\InvoicePLNController;
use App\Http\Controllers\Frontend\InvoicePDAMController;
use App\Http\Controllers\Frontend\ShopPLNController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\ShopPDAMController;
use App\Http\Controllers\Frontend\ShopDetailController;

// Route::get('/test', function () {
//     return view('welcome');
// })->name('test.route');;


// khusus untuk diakses qris
Route::get("/apidoang", [QrisController::class, "lunasin_dong"]);
// end

Route::get("/", [HomeController::class, "index"]);

Route::get("/contact", [ContactController::class, "index"]);
Route::get("/shop-detail", [ShopDetailController::class, "index"]);
Route::post("/shop-detail", [ShopDetailController::class, "store"]);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get("/register", [RegisterController::class,"store"])->name('index.store');
Route::get("/profile", [UserController::class, "index"]);
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get("/profile/setting", [UserController::class, "index"]);
Route::get("/profile/voucher", [CoupunController::class, "index"]);
Route::get("/profile/history", [HistoryController::class, "index"]);

Route::post('upload-image', [UserController::class, 'uploadImage'])->name('user.image.upload');
Route::post('/profile/setting/update/name', [UserController::class, 'updateName'])->name('user.update.name');
Route::post('/profile/setting/update/email', [UserController::class, 'updateEmail'])->name('user.update.email');

Route::get("/shop-detail/invoice", [InvoiceController::class, "detail"]);
Route::get("/shop/invoice-pln", [InvoicePLNController::class, "detailPLN"]);
Route::get("/shop/invoice-pdam", [InvoicePDAMController::class, "index"]);

Route::get("/profile/history/invoice", [InvoiceController::class, "index"]);

Route::get("/shop/pdam", [ShopPDAMController::class, "index"]);
Route::post("/shop/pdam/check", [ShopPDAMController::class, "cek_no_pdam"]);

Route::get("/shop/pln", [ShopPLNController::class, "index"]);
Route::post("/shop/pln/check", [ShopPLNController::class, "cek_no_pln"]);

Route::post("/shop-detail/invoice", [InvoiceController::class, "submit"])->name('shop-detail.invoice');
Route::post("/shop/invoice-pln", [InvoicePLNController::class, "submit"])->name('shop.invoice-pln');
Route::post("/shop/invoice-pdam", [InvoicePDAMController::class, "submit"])->name('shop.invoice-pdam');
