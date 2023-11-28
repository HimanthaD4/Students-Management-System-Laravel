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

Route::get('/' , [HomeController::class,"index"])->name('home');

//Student routes
Route::prefix('/students')->group(function (){
    Route::get('/' , [StudentsController::class,"index"])->name('students');
    Route::post('/store' , [StudentsController::class,"store"])->name('students.store');
    Route::get('/edit' , [StudentsController::class,"edit"])->name('students.edit');
    Route::post('/{student_id}/update' , [StudentsController::class,"update"])->name('students.update');
    Route::get('/{student_id}/delete' , [StudentsController::class,"delete"])->name('students.delete');
    Route::get('/{student_id}/active' , [StudentsController::class,"active"])->name('students.active');
});

