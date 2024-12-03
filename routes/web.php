<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register'); // Mengarah ke resources/views/register.blade.php
});

Route::get('/index', function () {
    return view('index'); // Mengarah ke resources/views/register.blade.php
});

Route::get('/acne', function () {
    return view('acne'); // Mengarah ke resources/views/register.blade.php
});

Route::get('/oily', function () {
    return view('oily'); // Mengarah ke resources/views/register.blade.php
});

Route::get('/dry', function () {
    return view('dry'); // Mengarah ke resources/views/register.blade.php
});

Route::get('/kemerahan', function () {
    return view('kemerahan'); // Mengarah ke resources/views/register.blade.php
});

Route::get('/kusam', function () {
    return view('kusam'); // Mengarah ke resources/views/register.blade.php
});