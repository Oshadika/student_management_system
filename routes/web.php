<?php

use App\Http\Controllers\Studentcontroller;
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


Route::get('/',[Studentcontroller::class,'index'])->name("students.index");


Route::get('/student/create', [Studentcontroller::class, 'create'])->name("students.create");


Route::post('/student/create', [Studentcontroller::class, 'store'])->name("students.store");
Route::get('/student/{id}/edit', [Studentcontroller::class, 'edit'])->name("students.edit");
Route::put('/student/{id}/edit', [Studentcontroller::class, 'update'])->name("students.update");
Route::get('/student/{id}/delete', [Studentcontroller::class, 'destroy'])->name("students.delete");