<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter as LivewireCounter;

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
    return view('HOME.home');
});



// Route::get('/counter', LivewireCounter::class);
