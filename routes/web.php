<?php

use Illuminate\Support\Facades\Route;

// Rotte

Route::get('/', function () {
    // Creazione dati
    $data = [
        'prova1' => 'Prima stringa di prova',
        'prova2' => 'Seconda stringa di prova',
        'prova3' => 'Terza stringa di prova'
    ];

    return view('homepage', $data);
});

Route::get('/home', function () {
    // Creazione dati
    $data = [
        'prova1' => 'Prima stringa di prova',
        'prova2' => 'Seconda stringa di prova',
        'prova3' => 'Terza stringa di prova'
    ];

    return view('homepage', $data);
});
