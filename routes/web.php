<?php

use App\Http\Controllers\Page\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/centro-de-interpretacion-cultural', [HomeController::class, 'textil'])->name('textil');
Route::get('/sala-de-exposicion-cultural', [HomeController::class, 'chicha'])->name('chicha');
Route::get('/casa-antigua-a-la-usanza-ancestral-de-chinchero', [HomeController::class, 'casa'])->name('casa');
Route::get('/hospedaje-rural', [HomeController::class, 'hospedaje'])->name('hospedaje');
