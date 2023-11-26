<?php

use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;

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
    return view("welcome");
});

// SignController routes
Route::prefix("FranJimenez")->group(function() {
    Route::get("/signin/{text1?}/{text2?}/{text3?}/{text4?}",[SignController::class, "signin"])->name('signin');
    Route::get("/signup/{text1?}/{text2?}/{text3?}",[SignController::class,"signup"])->name('signup');
});