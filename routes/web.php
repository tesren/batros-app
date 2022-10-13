<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPagesController;

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
    return view('home');
})->name('home');

Route::get('/contacto', function () {
    return view('contact');
})->name('contact');

Route::get('/estilo-de-vida', function () {
    return view('lifestyle');
})->name('lifestyle');

Route::get('/avances-de-obra', [FrontPagesController::class, 'constructionPage'])->name('construction');

Route::post('/send-message', [FrontPagesController::class, 'sendLeadEmail'])->name('send.email');
