<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProudctController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TeamController;



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
    [PagesController::class, 'getPages1']
)->name("Home");
Route::get(
    '/about',
    [PagesController::class, 'getPages4']
)->name("About");
Route::get(
    '/blog',
    [PagesController::class, 'getPages3']
)->name("Blog");
Route::get(
    '/contact',
    [PagesController::class, 'getPages5']
)->name("Contact");
Route::get(
    '/shop',
    [PagesController::class, 'getPages6']
)->name("Shop");
Route::get(
    '/singlepost',
    [PagesController::class, 'getPages7']
)->name("singlepost");
Route::get(
    '/singleproudct',
    [PagesController::class, 'getPages8']
)->name("singleproudct");
Route::get(
    '/thankyou',
    [PagesController::class, 'getPages2']
)->name("thankyou");
Route::get(
    '/team',
    [TeamController::class, 'getteam']
);
Route::get(
    '/team',
    [ProudctController::class, 'getteam']
);
