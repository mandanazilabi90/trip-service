<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TripController;
use \App\Models\Airport;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//user search
//Route::post('/trip/search', [TripController::class, 'searchTrip'])->name('trip.search.submit');
Route::get('/trip/search', [TripController::class, 'search'])->name('trip.search');
Route::get('/trip/list', [TripController::class, 'list'])->name('trip.search.list');
Route::post('/trip/search/list', [TripController::class, 'searchTrip'])->name('trip.search.submit');

//trip CRUD
Route::get('/trip', [TripController::class, 'index'])->name('trip');
Route::get('/trip/{$id}', [TripController::class, 'get'])->name('trip.get');
Route::post('/trip/create', [TripController::class, 'create'])->name('trip.create');
Route::post('/trip/{$id}', [TripController::class, 'delete'])->name('trip.delete');


