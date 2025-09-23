<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
require_once base_path('routes\web\movies.php');
require_once base_path('routes\web\categories.php');
require_once base_path('routes\web\actors.php');
require_once base_path('routes\web\studios.php');
require_once base_path('routes\web\directors.php');
