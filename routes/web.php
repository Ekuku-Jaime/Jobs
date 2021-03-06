<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);
Route::post('/listings', [ListingController::class, 'store']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
Route::put('/listings/{listing}', [ListingController::class, 'update']);
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// show the job detail
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Users routes

Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
