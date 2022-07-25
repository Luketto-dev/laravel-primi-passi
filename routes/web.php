<?php

use Illuminate\Support\Facades\Route;

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
    $utenti = [
        [
            'name' => 'Luca',
            'surname' => 'Francesconi',
            'role' => 'admin'
        ],
        [
            'name' => 'Ludovica',
            'surname' => 'Capodivento',
            'role' => 'customer'
        ],
        [
            'name' => 'Rita',
            'surname' => 'Bianchini',
            'role' => 'customer'
        ],
        [
            'name' => 'Bernardo',
            'surname' => 'Francesconi',
            'role' => 'customer'
        ]
        ];



    return view('home', [
        "users" => $utenti
    ]);
})->name("home");

Route::get('/chi-siamo', function() {
    return view('chi-siamo');
})-> name('chi-siamo');

Route::get('/prodotti', function() {
    return view('prodotti');
})-> name('prodotti');