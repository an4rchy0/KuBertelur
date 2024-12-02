<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; 
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CtController;

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

Route::get('/', function(){
    return view('Page.home');
});
Route::get('/about', function(){
    return view('Page.about');
});
Route::get('/develop', function(){
    return view('Page.develope');
});
Route::get('/regis', function(){
    return view('Page.Acc.register');
});
Route::get('/buycart', function(){
    return view('Page.buycart');
});
Route::get('/addcont/{userId}', function($userId) {
    return view('Page.addcont', compact('userId'));
})->name('addcont');
Route::get('/addprd/{userId}', function($userId) {
    return view('Page.addprd', compact('userId'));
})->name('addprd');

Route::get('/', [ProductController::class, 'indexhm']);
Route::get('/buyPd/{id}/{ide}', [ProductController::class, 'show'])->name('pd.show')->middleware('auth');
//Route::get('/shCt/{id}', [CtController::class, 'show'])->name('ct.show');
Route::get('/shCt/{id}', [CtController::class, 'showall'])->name('ct.showII')->middleware('auth');
Route::get('/pd.up{id}', [ProductController::class, 'ups'])->name('pd.up');
Route::get('/ct.up/{id}', [CtController::class, 'ups'])->name('ct.up');
Route::get('/pd.del/{id}', [ProductController::class, 'del'])->name('pd.del');
Route::get('/ct.del/{id}', [CtController::class, 'del'])->name('ct.del');

Route::post('/PrdStore', [ProductController::class, 'store']);
Route::post('/stbuy', [ProductController::class, 'store']); //koreksi lagi
Route::post('/BgStore', [CtController::class, 'store']);
Route::post('/UsReg', [UserController::class, 'store']);
Route::post('/upCT/{id}', [CtController::class, 'up']);
Route::post('/upPD/{id}', [ProductController::class, 'up']);

//Route::get('/del/{id}', [ProductController::class, "del"]);
//Route::get('/del/{id}', [CtController::class, "del"]);

//Route::get('/profile/{id}', [UserController::class, 'showProfile'])->name('profile')->middleware('auth');
Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::post('/login', [UserController::class, 'login'])->name('pslogin');
Route::get('/login', function() {
    return view('Page.Acc.login'); // Gantilah dengan tampilan login Anda
})->name('loginPage');

Route::post('/logout', function () { 
    Auth::logout(); 
    session()->flush(); 
    return redirect('/'); 
})->name('logout');