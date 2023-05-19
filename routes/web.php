<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPagesController;
use Spatie\Honeypot\ProtectAgainstSpam;

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

    Route::get('/landing-page', function () {
        return view('landing-pages.landing');
    })->name('landing');

    Route::get('/cotizador', [FrontPagesController::class, 'quoter'] )->name('quoter');

    Route::get('/estilo-de-vida-landing', function () {
        return view('landing-pages.lifestyle');
    })->name('landing.lifestyle');

    Route::get('/agendar-cita', function () {
        return view('landing-pages.appointment');
    })->name('landing.appointment');
    
    Route::get(Lang::uri('/inventario-condominios'), [FrontPagesController::class, 'inventory'])->name('inventory');
    
    Route::get(Lang::uri('/avances-de-obra'), [FrontPagesController::class, 'constructionPage'])->name('construction');
    
    Route::get(Lang::uri('/busqueda'), [FrontPagesController::class, 'search'])->name('search');
    
    Route::get(Lang::uri('/condominio-en-venta').'/{id}', [FrontPagesController::class, 'unit'])->name('unit');
});

Route::post('/send-message', [FrontPagesController::class, 'sendLeadEmail'])->name('send.email')->middleware(ProtectAgainstSpam::class);
Route::post('/create-appointment', [FrontPagesController::class, 'sendDateEmail'])->name('create.appointment')->middleware(ProtectAgainstSpam::class);

Route::post('/send-pdfmessage', [FrontPagesController::class, 'sendPdfEmail'])->name('send.pdf.email');

Route::redirect('/login', '/nova/login', 301);

Route::get('/optimize', function () {
    Artisan::call('optimize');
    return 'Optimization complete.';
})->name('artisan.optimize');

Route::get('/route-cache', function () {
    Artisan::call('route:cache');
    return 'Route cache completed.';
})->name('artisan.route');

Route::get('/config-cache', function () {
    Artisan::call('config:cache');
    return 'Config cache completed.';
})->name('artisan.config');


//cookies
Route::get('/setAgentCookie', [FrontPagesController::class, 'setAgentCookie'])->name('set.agent.cookie');
Route::get('/getAgentCookie', [FrontPagesController::class, 'getAgentCookie'])->name('get.agent.cookie');