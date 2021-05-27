<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
//use App\Http\Controllers\StudentsController;

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
//     return view('components.index');
// });

// Route::get('/about', function () {
//     $nama  = "jack";
//     return view('components.about', ["nama" => $nama]);
// });


Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);


// mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);


//Students
// Route::get('/students', [StudentsController::class, 'index']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::patch('/students/{student}', [StudentsController::class, 'update']);

// ini route untuk mengantikan semua route manual yang dibuat diatas^
// permasalan tidak bisa menggunakan use untuk import
Route::resource('students', 'App\Http\Controllers\StudentsController');
