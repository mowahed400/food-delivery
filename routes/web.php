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
    return view('registerAsDriver');
});


Route::get('/registerAsRestaurant', function () {


    $nationalities_path = public_path('assets/nationalities_en.json');
    $nationalities_contents = file_get_contents($nationalities_path);
    $nationalities_jsonData = json_decode($nationalities_contents, true);
    return view('registerAsRestaurant', compact('nationalities_jsonData'));

})->name('registerAsRestaurant');


Route::get('/registerAsDriver', function () {

    $nationalities_path = public_path('assets/nationalities_en.json');
    $nationalities_contents = file_get_contents($nationalities_path);
    $nationalities_jsonData = json_decode($nationalities_contents, true);
    return view('registerAsDriver', compact('nationalities_jsonData'));
})->name('registerAsDriver');
