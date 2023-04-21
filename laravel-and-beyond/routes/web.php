<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FlexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignController;


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
//Route for the homepage,contact
Route::get('/',[HomeController::class,'show'])->name('homepage');
Route::get('/contact', [ContactController::class, 'show'])->name('contact-us');
Route::post('/contact-submitted', [ContactController::class, 'store'])->name('submitted');

//Route for articles
Route::get('/signs',[SignController::class,'show'])->name('signs');
Route::get('/signs/{sign:slug}',[SignController::class,'showDetail'])->name('sign-detail');

//Route for the flex your meow
Route::get('/flex',[FlexController::class, 'show'])->name('flex-your-meow');
Route::post('/flexSubmitted', [FlexController::class, 'store'])->name('flex-submitted');
