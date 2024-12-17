<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

route::view('register','register')->name('register');
route::view('login','login')->name('login');
route::post('/register',[RegisterController::class,'register'])->name('registersave');
route::post('/login',[LoginController::class,'login'])->name('loginmatch');
route::get('/dashboard',[LoginController::class,'dashboard'])->name('dashboard');