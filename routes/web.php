<?php

use Illuminate\Support\Facades\Route;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactFormController;

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

Route::get('/contact', function () {
    return view('welcome');
});

Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');

Route::get('/form-success', function () {
    return view('success');
})->name('form.success');