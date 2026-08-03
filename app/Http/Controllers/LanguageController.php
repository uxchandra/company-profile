<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        // Validasi apakah bahasa yang dipilih valid
        if (in_array($locale, config('app.available_locales'))) {
            // Simpan bahasa di session
            Session::put('locale', $locale);
            // Atur bahasa aplikasi
            App::setLocale($locale);
        }

        // Kembali ke halaman sebelumnya
        return redirect()->back();
    }
}