<?php

use App\Http\Controllers\EmailController;
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
    return view('home-page');
});

Route::get('/services/web-design', function () {
    return view('web-design');
})->name('web-design');

Route::get('/services/e-commerce', function () {
    return view('e-commerce');
})->name('e-commerce');

Route::get('/services/digital-marketing', function () {
    return view('digital-marketing');
})->name('digital-marketing');

Route::get('/services/erp', function () {
    return view('erp');
})->name('erp');

Route::get('/services/copywriting', function () {
    return view('copywriting');
})->name('copywriting');

Route::get('/services/design', function () {
    return view('design');
})->name('design');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::post('/contact-us', [EmailController::class, 'contactUs'])->name('contact.form');
Route::post('/newsletter', [EmailController::class, 'newsLetter'])->name('newsletter');
