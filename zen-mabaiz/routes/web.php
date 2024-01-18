<?php

use App\Http\Controllers\EmailDatabaseCreate;
use App\Http\Middleware\Api;
use App\Livewire\Beranda;
use Illuminate\Http\Middleware\HandleCors;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/", Beranda::class);
Route::post("/add-email", [EmailDatabaseCreate::class, "index"]);