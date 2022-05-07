<?php

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>');
});

Route::get('/listings/{id}', function($id){
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});

Route::get('/search', function (Request $request) {
    dd($request);
});
