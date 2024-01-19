<?php

use App\Models\Actor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\StarWarsController;

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
    return view('welcome');
});

Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/star-wars/people', [StarWarsController::class, 'people'])->name('star-wars.people');
