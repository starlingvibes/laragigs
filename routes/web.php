<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// Common resource routes:
// index- show all listings
// show - show single listing
// create - show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

// All listings
Route::get(
    '/',
    [ListingController::class, 'index']
);

// Create listing form
Route::get('/listings/create', [ListingController::class, 'create']);

// Single listing
Route::get(
    'listings/{listing}',
    [ListingController::class, 'show']
    // $listing = Listing::find($id);

    // if ($listing) {
    //     return view('listing', ['listing' => $listing]);
    // } else {
    //     abort(404);
    // }
);