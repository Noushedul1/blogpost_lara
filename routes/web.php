<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
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
// start for home 
Route::get('/',[UserController::class, 'index'])->name('home');
// end for home 
// start for student 
Route::get('/student', [UserController::class, 'student'])->name('student');
// end for student 
// start for addstudent 
Route::post('/addstudent', [UserController::class, 'addstudent'])->name('addstudent');
// end for addstudent 
// start for blog 
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
// end for blog 
// start for addblog
Route::post('/addblog', [BlogController::class, 'addblog'])->name('addblog');
// end for addblog 