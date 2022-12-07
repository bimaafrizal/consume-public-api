<?php

use App\Http\Controllers\FakeStoreController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FakeStoreController::class, 'index']);
Route::get('/show-data/{id}', [FakeStoreController::class, 'getSingleProduct']);
Route::get('/add-product', [FakeStoreController::class, 'addProduct']);
Route::get('/update-data/{id}', [FakeStoreController::class, 'updateProduct']);