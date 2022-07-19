<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/login', function(){
    return view('login');
});

Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [AnggotaController::class, 'index']);
Route::get('/anggota', [AnggotaController::class, 'create']);
Route::post('/anggota', [AnggotaController::class, 'store']);
Route::get('/anggota/{anggota}', [AnggotaController::class, 'show']);
Route::put('/anggota/{anggota}', [AnggotaController::class, 'update']);
Route::delete('/anggota/{anggota}', [AnggotaController::class, 'destroy']);


