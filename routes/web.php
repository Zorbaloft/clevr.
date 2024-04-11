<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
=======
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
Route::get('/{vue_capture?}', function () {
    return view('welcome');
})->where('vue_capture', '[\/\w\.-]*');
>>>>>>> 8315e5486cbf3f9da77507696f09c210ef9218ff
