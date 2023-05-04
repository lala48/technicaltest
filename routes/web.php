<?php

use App\Http\Controllers\orderItemsController;
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
    return view('homepage');
});

Route::get('/orderitems', [orderItemsController::class, 'index']);
Route::get('/input-order', [orderItemsController::class, 'create']);
Route::post('/order', [orderItemsController::class, 'store']);
// Route::get('/export', )
