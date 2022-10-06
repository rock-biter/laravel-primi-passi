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
    $data = [
        'nome' => 'Gianluca',
        'cognome' => 'Lomarco',
        'lista_studenti' => [
            'Mario Rossi',
            'Luigi Verdi',
            'Carlo Gialli',
            'Marco Bianchi'
        ],
        'lista_vuota' => []
    ];

    return view('home', $data);
});
