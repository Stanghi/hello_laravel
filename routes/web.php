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

// home page
Route::get('/', function () {
    $saluto = "Ciao";
    $user = "Stanghi";
    $print_paragraph = true;
    $colors = ['red', 'green', 'blue', 'yellow', 'violet'];

    return view('home', compact('saluto', 'user', 'print_paragraph', 'colors'));
});

// abot page
Route::get('/about', function () {
    $team = [
        [
            'name' => 'ugo',
            'surname' => 'De ughi',
            'email' => 'ugo@gmail.com'
        ],
        [
            'name' => 'Mattia',
            'surname' => 'Stangherlin',
            'email' => 'stanghi@gmail.com'
        ],
        [
            'name' => 'Letizia',
            'surname' => 'De angelis',
            'email' => 'leti@gmail.com'
        ],
    ];

    return view('about', compact('team'));
});
