<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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



Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');

Route::get('/createmachine', [Controllers\MachineController::class, 'create'])->name('machine.create');
Route::post('/createmachine', [Controllers\MachineController::class, 'store']);
Route::get('/machine/{machine}', [Controllers\MachineController::class, 'show'])->name('machine.details');

require __DIR__ . '/auth.php';
