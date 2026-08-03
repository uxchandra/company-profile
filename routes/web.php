<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

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

// Site is temporarily in "coming soon" mode. Swap the line below back to
// Route::get('/', [LandingPageController::class, 'index'])->name('landing');
// to restore the full landing page.
Route::get('/', function () {
    return view('coming-soon');
})->name('landing');

Route::get('language/{locale}', [App\Http\Controllers\LanguageController::class, 'switchLanguage'])->name('change.language');