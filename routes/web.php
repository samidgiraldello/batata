<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/index', [App\Http\Controllers\controllerQuiz::class, 'index'])->name('index');
Route::post('/pagina1', [App\Http\Controllers\controllerQuiz::class, 'pagina1'])->name('pagina1');
Route::post('/pagina2', [App\Http\Controllers\controllerQuiz::class, 'pagina2'])->name('pagina2');
Route::post('/pagina3', [App\Http\Controllers\controllerQuiz::class, 'pagina3'])->name('pagina3');


