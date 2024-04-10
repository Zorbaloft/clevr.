<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/test-me", function () {
    return 'Hello from Laravel!';
});
Route::get('/cta', function () {
    return response()->json([
        'title' => 'My Title',
        'description' => 'My Description',
        'ctaBackgroundColor' => 'brown darken-4',
        'buttonText' => 'Click me',
        'imageSrc' => '/images/cta/cta4.png',
        'imageAlt' => 'My Image',
    ]);
});