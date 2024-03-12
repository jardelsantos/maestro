<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

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
// HTTP Actions
Route::get('/', [SiteController::class, 'index'] );

Route::get('contato', [SiteController::class, 'contato'])->name('site.contato');

Route::post('contato', [SiteController::class, 'salvar']);
