<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\CategoriaController; 
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\BlogController; 
use App\Http\Controllers\ContatoController; 

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/produtos', [CategoriaController::class, 'index'])->name('produtos');

Route::get('/produtos/{slug}', [CategoryController::class, 'show'])->name('produto');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::view('/sobre', 'sobre')->name('sobre');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::post('/contato', [ContatoController::class, 'contact']);


