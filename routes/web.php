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
    return view('home');
})->name('home');

Route::get('prodotti', function () {
    $data = [

        'products' => [
            [
                'title' => 'Potato',
                'imgURL' => '/picsum.photos/284/200',
                'description' => 'Una descrizione del prodotto abbastanza significativa',
                'price' => 0.99,
            ],
            [
                'title' => 'Cime di rape',
                'imgURL' => '/picsum.photos/285/200?grayscale',
                'description' => 'Una descrizione del prodotto abbastanza significativa',
                'price' => 7.50,
            ],
            [
                'title' => 'Pizza',
                'imgURL' => '/picsum.photos/288/200?',
                'description' => 'Una descrizione del prodotto abbastanza significativa',
                'price' => 11.84,
            ],
            [
                'title' => 'Bean',
                'imgURL' => '/picsum.photos/286/200?',
                'description' => 'Una descrizione del prodotto abbastanza significativa',
                'price' => 74.54,
            ],
            [
                'title' => 'Pepper',
                'imgURL' => '/picsum.photos/287/200?',
                'description' => 'Una descrizione del prodotto abbastanza significativa',
                'price' => 56.40,
            ],
            [
                'title' => 'Zucchini',
                'imgURL' => '/picsum.photos/290/200?grayscale',
                'description' => 'Una descrizione del prodotto abbastanza significativa',
                'price' => 1.14,
            ],
            [
                'title' => 'Tomato',
                'imgURL' => '/picsum.photos/289/200?grayscale',
                'description' => 'Una descrizione del prodotto abbastanza significativa',
                'price' => 9.32,
            ],
        ],
    ];

    return view('products', $data);
})->name('products');

Route::get('chi-siamo', function () {
    return view('about');
})->name('about');
