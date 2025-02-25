<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OnePageWebsiteController;

Route::get('/onepagewebsite', [OnePageWebsiteController::class, 'index'])->name('onepagewebsite.index');

Route::get('/', function () {
    return redirect()->route('onepagewebsite.index');
});


/* Route::get('/', function () {
    return view('welcome');
return redirect()->route('onepagewebsite.index'); //轉址
 }); */


Route::get('/students_excel', [StudentController::class, 'excel']);
Route::get('/students_hello', [StudentController::class, 'sayHello']);
Route::resource('students', StudentController::class);