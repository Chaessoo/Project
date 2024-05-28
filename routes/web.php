<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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
    return view('index');
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
Route::get('/index', function()
{
    return view("index");
});
Route::get('/home',function()
{
    return view("home");
});
Route::get('/create',function()
{
    return view("create");
});
Route::get('/masuk',function()
{
    return view("masuk");
});
Route::get('/daftar',function()
{
    return view("register");
});
Route::get('/cari',function()
{
    return view("explore.cari");
});
Route::get('/home',[AdminController::class,"home"]);
Route::post('/create',[AdminController::class,"blog"]);
Route::post('/delete/{id}',[AdminController::class,"delete"]);
Route::post('/update/{id}',[AdminController::class,"edit"]);
Route::post('/edit/{id}',[WebController::class,"edit"]);
// Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
// ->name('logout');
Route::post('/masuk',[WebController::class,"login"]);
Route::get('/logout',[AdminController::class,"logout"]);
Route::post('/reg',[WebController::class,"register"])->name("register");



