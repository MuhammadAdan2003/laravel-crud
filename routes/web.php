<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\registerController;
use App\Models\Information;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/saveData', [InformationController::class, 'saveData'])->name('save');


Route::get('/records', [InformationController::class, 'showData'])->name('show');

Route::delete('/delete/{id}', [InformationController::class, 'deleteData'])->name('delete');

Route::get('/showEdit/{id}', [InformationController::class, 'editData'])->name('editEdit');
Route::post('/update', [InformationController::class, 'updateData'])->name('update');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/postData', [registerController::class, 'postData'])->name('post');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/loginData2', [registerController::class, 'loginMe'])->name('loginMe');
