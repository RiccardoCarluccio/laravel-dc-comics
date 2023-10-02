<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/create', [ComicController::class, "create"])->name("comic.create");
Route::post('/', [ComicController::class, "store"])->name("comic.store");

Route::get('/', [ComicController::class, "index"])->name("homepage");
Route::get('/{id}', [ComicController::class, "show"])->name("comic.show");