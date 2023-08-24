<?php

use App\Http\Controllers\AdminController;



use Illuminate\Support\Facades\Route;

Route::get('/add_subcategory', [AdminController::class, 'add_subcategory'])->name('add_subcategory');