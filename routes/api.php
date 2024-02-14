<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('contacts', ['App\Http\Controllers\ContactController', 'store'])->name('contacts.store');
Route::post('contact/update/{contact}', ['App\Http\Controllers\ContactController', 'update'])->name('contacts.update');
Route::post('contact/delete/{contact}', ['App\Http\Controllers\ContactController', 'destroy'])->name('delete.update');