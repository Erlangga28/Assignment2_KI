<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignPadController;

  

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

});

  

Auth::routes();

  

/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {

  

    Route::get('/home', [HomeController::class, 'index'])->name('home');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {

  

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

});

Route::get('/home/signpad', [SignPadController::class, 'index']);
Route::post('/home/signpad', [SignPadController::class, 'save'])->name('signpad.save');