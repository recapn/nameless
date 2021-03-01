<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'home'])->name('home');
// Route::get('/nome-que-aparece-na-url', [SiteController::class, 'nome-da-funcao-que-vc-escreve-no-controller'])->name('nome interno para chamar no php route('essenome'));
Route::get('/mapas', [SiteController::class, 'mapas'])->name('mapas');
