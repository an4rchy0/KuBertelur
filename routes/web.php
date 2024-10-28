<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/addcont/{userId}', function($userId) {
    return view('Page.addcont', compact('userId'));
})->name('addcont');
Route::get('/addprd/{userId}', function($userId) {
    return view('Page.addprd', compact('userId'));
})->name('addprd');
/*Route::get('/profile', function(){
    return view('Page.Acc.profile');
});*/

//tampil
Route::get('/', [ProductController::class, 'indexhm']);
Route::get('/content/{id}', [ContentController::class, 'show'])->name('content.show');

//tambah
Route::post('/PrdStore', [ProductController::class, 'store']);
Route::post('/BgStore', [CtController::class, 'store']);
//Route::resource("/PrdStore", ProductController::class);

//log
//Route::post('/mylog', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('pslogin');
Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::get('/login', function() {
    return view('Page.Acc.login'); // Gantilah dengan tampilan login Anda
})->name('loginPage');

//Route::get('/profile', [UserController::class, 'index'])->name('profile');
//Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');