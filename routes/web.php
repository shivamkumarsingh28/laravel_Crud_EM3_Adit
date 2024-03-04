<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudControl;
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


Auth::routes();


Route::get('/student', [CrudControl::class, 'index'])->name('student.index');
Route::get('/student/create', [CrudControl::class, 'create'])->name('student.create');
Route::post('/student', [CrudControl::class, 'store'])->name('student.store');
Route::get('/student/{student}/edit', [CrudControl::class, 'edit'])->name('student.edit');
Route::put('/student/{student}/update', [CrudControl::class, 'update'])->name('student.update');
Route::delete('/student/{student}/destroy', [CrudControl::class, 'destroy'])->name('student.destroy');
