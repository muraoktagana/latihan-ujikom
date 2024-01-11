<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use PHPUnit\TextUI\Configuration\Source;

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

Route::middleware(['statuslogin'])->group(function (){
    Route::get('/home', [HomeController::class, 'index']);
});

Route::controller(UserController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout');
});

