<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasswordManager;

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

Route::get('/', [PasswordManager::class, "index"])->name('password.index');
Route::get('/create', [PasswordManager::class, "create"])->name('password.create');
