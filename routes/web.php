<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

/*---------------------- Admin Route ---------------------*/

Route::prefix('admin')->group(function(){

    Route::get('/login',[AdminController::class,'index'])->name('login_form');

    Route::get('/login/owner',[AdminController::class,'login'])->name('admin.login');
    
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    
});

/*---------------------- Admin Route ---------------------*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
