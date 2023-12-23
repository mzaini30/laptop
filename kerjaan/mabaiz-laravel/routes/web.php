<?php

use App\Livewire\Index;
use App\Livewire\Lokasi;
use App\Livewire\Program;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Index::class);
Route::get('/program', Program::class);
Route::get('/lokasi', Lokasi::class);
Route::get('/pendaftaran', Index::class);
Route::get('/login', Index::class);