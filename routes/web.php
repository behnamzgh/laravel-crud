<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/view/{id}', [ContactController::class, 'show'])->name('contact.view');
Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::get('/update/{id}', [ContactController::class, 'update'])->name('contact.update');
