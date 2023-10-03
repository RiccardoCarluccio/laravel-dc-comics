<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/comic/create', [ComicController::class, "create"])->name("comic.create");
Route::post('/', [ComicController::class, "store"])->name("comic.store");

Route::get('/', [ComicController::class, "index"])->name("homepage");
Route::get('/comic/{id}', [ComicController::class, "show"])->name("comic.show");

Route::get("/comic/{id}/edit", [ComicController::class, "edit"])->name("comic.edit");