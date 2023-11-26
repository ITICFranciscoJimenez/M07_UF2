<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(["admin_db"])->group(function() {
    Route::get('admin',function() {
        return view('Admin.admin');
    })->name('admin');
    Route::get('centres',[AdminController::class,'centres'])->name('centres');
    Route::post('user',[AdminController::class,'checkUser'])->name('users');
    Route::get('schoolsList',[AdminController::class,'showSchools'])->name('schools');
    Route::get('teachersList',[AdminController::class,'showTeachers'])->name('teachers');
    Route::get('studentsList',[AdminController::class,'showStudents'])->name('students');
});