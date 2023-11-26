<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/' , [HomeController::class,"index"])->name('home');




Route::prefix('/students')->group(function (){

    Route::get('/' , [StudentsController::class,"index"])->name('students');
    Route::post('/store' , [StudentsController::class,"store"])->name('students.store');


});
