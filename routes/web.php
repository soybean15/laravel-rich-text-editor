<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('test', function(){
    return 'Hello from the contact form package';
});
