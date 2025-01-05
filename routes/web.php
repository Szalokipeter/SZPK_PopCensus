<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/population');
Route::resource('/population', PeopleController::class);
