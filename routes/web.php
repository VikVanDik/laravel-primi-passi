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
    $name = 'Vincenzo';
    $surname = 'Li Calzi';
    $forum = '/forum';
    $links = '/links';
    $contacts = '/contacts';
    return view('home', compact('name', 'surname', 'forum', 'links', 'contacts'));
});

Route::get('/forum', function () {
    return view('forum');
});

Route::get('/links', function () {
    return view('links');
});

Route::get('/contacts', function() {
    return view('contacts');
});
