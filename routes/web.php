<?php


use App\Models\Sejarah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/struktur', function () {
    return view('struktur', ['title' => 'Struktur Page']);
});
Route::get('/program', function () {
    return view('program', ['title' => 'Program Page']);
});

// Sejarah Page
Route::get('/sejarahs', function () {
    return view('sejarahs', ['title' => 'Sejarah Page', 'sejarahs' => Sejarah::all()]);
});
Route::get('/sejarahs/{sejarah:slug}', function (Sejarah $sejarah) {

    return view('sejarah', [
        'title' => 'Single Sejarah Page',
         'sejarah' => $sejarah]);
});

// Laporan
Route::get('/laporan', function () {
    return view('laporan', ['title' => 'Laporan Page']);
});
