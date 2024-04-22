<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    // return this json
    // {id: 1, name: 'John Doe'}
    return response()->json([
        'id' => 1,
        'name' => 'John Doe'
    ]);
});