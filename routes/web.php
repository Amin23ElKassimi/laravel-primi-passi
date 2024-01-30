<?php

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
    $name = 'Ben Arrivato nel vasto Mondo del Back-end';
    // Come dare la route o far aprire la pagina web e passare anche i dati a cui si vuole accedere nela view
    return view('home', [
        'scippo' => $name,
        'pippo' => 'Non ti preoccupare durerai poco!'
    ]);
    
});

Route::get('/gotoby', function () { 
    // Come dare la route o far aprire la pagina web e passare anche i dati a cui si vuole accedere nela view
    return view('by');
    
});