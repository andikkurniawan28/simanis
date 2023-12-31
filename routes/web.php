<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MataUangController;

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

Route::get('/', function () {
    return view('welcome');
})->name("home");

// Auth
Route::get("login", [AuthController::class, "login"])->name("login");
Route::get("logout", [AuthController::class, "logout"])->name("logout");
Route::post("login", [AuthController::class, "loginProcess"])->name("loginProcess");

// Master
Route::resource("mata_uang", MataUangController::class);
