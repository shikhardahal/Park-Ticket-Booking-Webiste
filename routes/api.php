<?php

use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// Route::post('/register_user', [AdminController::class, 'register_user'])->name('register_user');

Route::post('/edit_subcategory/{id}', [AdminController::class, 'edit_subcategory'])->name('edit_subcategory');




// Route::post('/add_booking', [AdminController::class, 'add_booking'])->name('add_booking');


Route::get('/register_data', [AdminController::class, 'registerData'])->name('registerData');

Route::post('/print_booking', [AdminController::class, 'print_booking'])->name('print_booking');



Route::post('/create_user', [AdminController::class, 'create_user'])->name('create_user');
