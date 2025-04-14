<?php

use App\Http\Controllers\Controller;
// use App\Http\Controllers\information;
use App\Http\Controllers\InformationController;
use App\Models\Information;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/saveData', [InformationController::class, 'saveData'])->name('save');
// Route::get('/records', function () {
//     return  view('data');
// });

Route::get('/records', [InformationController::class, 'showData'])->name('show');

Route::delete('/delete/{id}', [InformationController::class, 'deleteData'])->name('delete');


// Route::get('/edit/{id}', [InformationController::class, 'editData'])->name('edit');

Route::get('/showEdit/{id}', [InformationController::class, 'editData'])->name('editEdit');
Route::post('/update', [InformationController::class, 'updateData'])->name('update');

// Route::get('/edit', function () {
//     return view('edit');
// });
// Route::get('/show', [InformationController::class, 'showPage'])->name('show');

// Route::get('page', function () {
//     return view('page');
// });
