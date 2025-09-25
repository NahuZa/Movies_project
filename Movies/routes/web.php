<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConnectCategoriesStudiosController;
use App\Http\Controllers\ConnectDirectorsMoviesController;
use App\Http\Controllers\ConnectMoviesActorsController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\StudioController;

Route::get('/', function () {
    return view('welcome');
});
require_once base_path('routes\web\movies.php');
require_once base_path('routes\web\categories.php');
require_once base_path('routes\web\actors.php');
require_once base_path('routes\web\studios.php');
require_once base_path('routes\web\directors.php');

Route::resource('actors', ActorController::class);
Route::resource('categories', CategoryController::class);
Route::resource('directors', DirectorController::class);
Route::resource('movies', MovieController::class);
Route::resource('studios', StudioController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::post('/actors', [ActorController::class, 'store'])->name('actors.store');
    Route::get('/actors/create', [ActorController::class, 'create'])->name('actors.create');
    Route::get('/actors/{actor}/edit', [ActorController::class, 'edit'])->name('actors.edit');
	Route::patch('/actors/{actor}', [ActorController::class, 'update'])->name('actors.update');
    Route::delete('/actors/{actor}', [ActorController::class, 'destroy'])->name('actors.destroy');

    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
	Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    Route::post('/directors', [DirectorController::class, 'store'])->name('directors.store');
    Route::get('/directors/create', [DirectorController::class, 'create'])->name('directors.create');
    Route::get('/directors/{director}/edit', [DirectorController::class, 'edit'])->name('directors.edit');
	Route::patch('/directors/{director}', [DirectorController::class, 'update'])->name('directors.update');
    Route::delete('/directors/{director}', [DirectorController::class, 'destroy'])->name('directors.destroy');

    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
	Route::patch('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');

    Route::post('/studios', [StudioController::class, 'store'])->name('studios.store');
    Route::get('/studios/create', [StudioController::class, 'create'])->name('studios.create');
    Route::get('/studios/{studio}/edit', [StudioController::class, 'edit'])->name('studios.edit');
	Route::patch('/studios/{studio}', [StudioController::class, 'update'])->name('studios.update');
    Route::delete('/studios/{studio}', [StudioController::class, 'destroy'])->name('studios.destroy');

    Route::post('/connect_categories_studios', [ConnectCategoriesStudiosController::class, 'store'])->name('connect_categories_studios.store');
    Route::get('/connect_categories_studios/create', [ConnectCategoriesStudiosController::class, 'create'])->name('connect_categories_studios.create');
    Route::get('/connect_categories_studios/{studio}/edit', [ConnectCategoriesStudiosController::class, 'edit'])->name('connect_categories_studios.edit');
	Route::patch('/connect_categories_studios/{connect_categories_studios}', [ConnectCategoriesStudiosController::class, 'update'])->name('connect_categories_studios.update');
    Route::delete('/connect_categories_studios/{connect_categories_studios}', [ConnectCategoriesStudiosController::class, 'destroy'])->name('connect_categories_studios.destroy');

    Route::post('/connect_directors_movies', [ConnectDirectorsMoviesController::class, 'store'])->name('connect_directors_movies.store');
    Route::get('/connect_directors_movies/create', [ConnectDirectorsMoviesController::class, 'create'])->name('connect_directors_movies.create');
    Route::get('/connect_directors_movies/{connect_directors_movies}/edit', [ConnectDirectorsMoviesController::class, 'edit'])->name('connect_directors_movies.edit');
	Route::patch('/connect_directors_movies/{connect_directors_movies}', [ConnectDirectorsMoviesController::class, 'update'])->name('connect_directors_movies.update');
    Route::delete('/connect_directors_movies/{connect_directors_movies}', [ConnectDirectorsMoviesController::class, 'destroy'])->name('connect_directors_movies.destroy');

    Route::post('/connect_movies_actors', [ConnectMoviesActorsController::class, 'store'])->name('connect_movies_actors.store');
    Route::get('/connect_movies_actors/create', [ConnectMoviesActorsController::class, 'create'])->name('connect_movies_actors.create');
    Route::get('/connect_movies_actors/{connect_movies_actors}/edit', [ConnectMoviesActorsController::class, 'edit'])->name('connect_movies_actors.edit');
	Route::patch('/connect_movies_actors/{connect_movies_actors}', [ConnectMoviesActorsController::class, 'update'])->name('connect_movies_actors.update');
    Route::delete('/connect_movies_actors/{connect_movies_actors}', [ConnectMoviesActorsController::class, 'destroy'])->name('connect_movies_actors.destroy');
});

require __DIR__.'/auth.php';

    Route::post('/actors', [ActorController::class, 'index'])->name('actors.index');
    Route::post('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/directors', [DirectorController::class, 'index'])->name('directors.index');
    Route::post('/movies', [MovieController::class, 'index'])->name('movies.index');
    Route::post('/studios', [StudioController::class, 'index'])->name('studios.index');
    Route::post('/connect_categories_studios', [ConnectCategoriesStudiosController::class, 'index'])->name('connect_categories_studios.index');
    Route::post('/connect_directors_movies', [ConnectDirectorsMoviesController::class, 'index'])->name('connect_directors_movies.index');
    Route::post('/connect_movies_actors', [ConnectMoviesActorsController::class, 'index'])->name('connect_movies_actors.index');

    Route::post('/actors', [ActorController::class, 'show'])->name('actors.show');
    Route::post('/categories', [CategoryController::class, 'show'])->name('categories.show');
    Route::post('/directors', [DirectorController::class, 'show'])->name('directors.show');
    Route::post('/movies', [MovieController::class, 'show'])->name('movies.show');
    Route::post('/studios', [StudioController::class, 'show'])->name('studios.show');
    Route::post('/connect_categories_studios', [ConnectCategoriesStudiosController::class, 'show'])->name('connect_categories_studios.show');
    Route::post('/connect_directors_movies', [ConnectDirectorsMoviesController::class, 'show'])->name('connect_directors_movies.show');
    Route::post('/connect_movies_actors', [ConnectMoviesActorsController::class, 'show'])->name('connect_movies_actors.show');
