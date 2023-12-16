<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProudctController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\PagesController;



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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::view('/welcome', 'welcome');

Route::view('/hello', 'home', ['name' => 'Taylor',"id"=>1]);
Route::get('/proudct/{id}', function (string $id) {
    return view('proudct',["id"=>$id]);
});
Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});
Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});

Route::get('/user/{name?}', function (?string $name = 'John') {
    return $name;
});
Route::get('/user/{id}/{name}', function (string $id, string $name) {
    // ...
})->whereNumber('id')->whereAlpha('name');

Route::get('/user/{name}', function (string $name) {
    // ...
})->whereAlphaNumeric('name');

Route::get('/user/{id}', function (string $id) {
    // ...
})->whereUuid('id');
Route::view('/h', 'proudct');
Route::get(
    '/proudct/{name}',
    [ProudctController::class, 'getProudct']
);
Route::get(
    '/proudcts',
    [ProudctController::class, 'getProudcts']
);
Route::get(
    '/card',
    [CardController::class, 'getCard']
);
Route::resource('photos', HomeController::class);

Route::get(
    '/home',
    [PagesController::class, 'getPages']
)->name("Home");
Route::get(
    '/about',
    [PagesController::class, 'getPages']
)->name("About");
Route::get(
    '/blog',
    [PagesController::class, 'getPages']
)->name("Blog");
Route::get(
    '/contact',
    [PagesController::class, 'getPages']
)->name("Contact");
Route::get(
    '/shop',
    [PagesController::class, 'getPages']
)->name("Shop");
Route::get(
    '/singlepost',
    [PagesController::class, 'getPages']
)->name("singlepost");
Route::get(
    '/singleproudct',
    [PagesController::class, 'getPages']
)->name("singleproudct");
Route::get(
    '/thank',
    [PagesController::class, 'getPages']
)->name("Contact");
