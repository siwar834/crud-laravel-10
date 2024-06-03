<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DataTableAjaxCRUDController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource("/student", StudentController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



