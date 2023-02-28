<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\masyarakatController;
use App\Http\Controllers\petugasController;
use App\Http\Controllers\registerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('tampilan',[
        'title'=>'Halaman Utama',
    ]);
})->middleware('guest');

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::get('/logout', [loginController::class, 'logout']);

Route::get('/logout', [adminController::class, 'logout' ]);
Route::get('/dashboard/create', [adminController::class, 'create' ]);

Route::get('/register', [registerController::class, 'index' ]);
Route::post('/register', [registerController::class, 'store' ]);

Route::post('/tambah', [registerController::class, 'tambah' ])->middleware('admin');


Route::get('/home', [masyarakatController::class, 'index' ])->middleware('auth');
Route::get('/pengaduan', [masyarakatController::class, 'pengaduan' ])->name('pengaduan')->middleware('auth');

Route::get('/petugas', [petugasController::class, 'petugas' ])->name('petugas')->middleware('auth');




Route::get('/edit/{id}', [adminController::class, 'edit' ])->middleware('admin');
Route::put('/edit/{id}', [adminController::class, 'update' ])->middleware('admin');

 Route::get('/laporan', [adminController::class, 'dashboard'])->middleware('admin');
 Route::get('/dashboard', [adminController::class, 'index'])->middleware('admin');
 Route::delete('/dashboard/{id}', [adminController::class, 'destroy']);




