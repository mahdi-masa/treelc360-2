<?php

use App\Http\Controllers\CampainController;
use Illuminate\Routing\Route as RoutingRoute;
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
    return view('Pages/landing');
})->name('landing');

Route::get('/booklets', function () {
    return view('Pages/booklet');
})->name('booklet');


Route::get('/palestine', function () {
    return view('Pages/palestine');
})->name('palestine');

Route::get('/season', function () {
    return view('Pages/season');
})->name('seasons');

Route::get('/motherseeder', function () {
    return view('Pages/motherseeder');
})->name('motherseeder');

Route::get('/seederplant', function () {
    return view('Pages/seederseason');
})->name('seeder');

Route::get('/plantseason', function () {
    return view('Pages/plantseason');
})->name('palestineseason');

Route::get('/hosseinplant', function () {
    return view('Pages/sign-of-hossein');
})->name('hosseinplant');

Route::get('/forms/profile', function () {
    return view('Pages/profileForm');
})->name('profileForm');

Route::get('/forms/plant', function () {
    return view('Pages/plantForm');
})->name('plantForm');

Route::get('/cutting-season', function () {
    return view('Pages/cutting-season');
})->name('cutting-season');

Route::get('/test', function () {
    return view('Pages/form');
})->name('test');

Route::get('/testapi', function () {
    return view('Pages/landing2');
})->name('testapi');

Route::get('/campain', function () {
    return view('Pages/form');
})->name('campain');


Route::post('/campain/submit', [CampainController::class, 'submit'])->name('campain-submit');



Route::prefix('booklets')->name("booklets.")->group(function(){

    Route::get('/list', function () {
        return view('Pages/booklet-1');
    })->name("list");

    Route::get('/1', function () {
        return view('Pages/booklet-1');
    })->name('book-1');

    Route::get('/2', function () {
        return view('Pages/booklet-2');
    })->name("book-2");

    Route::get('/3', function () {
        return view('Pages/booklet-3');
    })->name("book-3");
});




