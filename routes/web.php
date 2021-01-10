<?php

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
/**
 * HOME PAGE
 */

Route::get('/', function () {

    //Get Comics list
    $comics = config('comics');

    //dump&die
    //dd($comics);

    return view('home', compact('comics'));
});->name('home'); //come dare nome alla route
