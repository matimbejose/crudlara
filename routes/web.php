<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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



Route::get('/', [CrudController::class, 'index']);
// Route::post('crud/store', [CrudController::class, 'store']);
Route::resource('crud', CrudController::class);

// Route::get('/', function () {
//     return view('home');
// });
