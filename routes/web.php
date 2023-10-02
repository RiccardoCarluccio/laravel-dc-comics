<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComicController::class, "index"])->name("homepage");
Route::get('/{id}', [ComicController::class, "show"])->name("comic.show");
