<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

use App\Http\Controllers\CatController;
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
    // return view('welcome');

    // 轉址用
    return redirect('/cats');
});




Route::resource('/dogs', DogController::class);


Route::get('/cats_single', [CatController::class, 'single'])->name('apple');
Route::resource('/cats', CatController::class);
