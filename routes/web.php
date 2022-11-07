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

Route::localized( function () {

    Route::get('/', function () {
        return view('home');
    })->name('home');
    
    Route::get(Lang::uri('/contacto'), function () {
        return view('contact');
    })->name('contact');
    
    Route::get(Lang::uri('/estilo-de-vida'), function () {
        return view('lifestyle');
    })->name('lifestyle');
    
    Route::get(Lang::uri('/nosotros'), function () {
        return view('about');
    })->name('about');
    
    Route::get(Lang::uri('/aviso-de-privacidad'), function () {
        return view('privacy-policy');
    })->name('privacy.policy');
    
    Route::get(Lang::uri('/amenidades'), function () {
        return view('amenities');
    })->name('amenities');
    
    Route::get(Lang::uri('/inventario-condominios'), [FrontPagesController::class, 'inventory'])->name('inventory');
    
    Route::get(Lang::uri('/avances-de-obra'), [FrontPagesController::class, 'constructionPage'])->name('construction');
    
    Route::get(Lang::uri('/busqueda'), [FrontPagesController::class, 'search'])->name('search');
    
    Route::get(Lang::uri('/condominio-en-venta').'/{id}', [FrontPagesController::class, 'unit'])->name('unit');
});

Route::post('/send-message', [FrontPagesController::class, 'sendLeadEmail'])->name('send.email');

Route::redirect('/login', '/nova/login', 301);