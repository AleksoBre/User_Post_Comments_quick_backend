<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layout');
});

Route::get('/users', function() {
    dd('ovo je users stranica');
});

// Final goal
// forma za crud posta, forma za crud komentara
// 7 ruta



// 0. resim ono oko current page-a

// 1. kreiram stranice
// index, show, create, edit






//2. dodam funkcionalnost
//3. kreiram rute