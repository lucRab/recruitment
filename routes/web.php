<?php

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
    return redirect('/contact');
});

Route::resource('contact', 'App\Http\Controllers\ContactController');

Route::post('/contact', ['App\Http\Controllers\ContactController', 'store'])->name('contacts.store');
Route::post('contact/update/{contact}', ['App\Http\Controllers\ContactController', 'update'])->name('contacts.update');
Route::post('contact/delete/{contact}', ['App\Http\Controllers\ContactController', 'destroy'])->name('contacts.delete');