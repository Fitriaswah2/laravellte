<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
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
    return view('admin/home');
});

Route::get('setting', function () {
    return view('admin/setting');
});

Route::get('admin', function () {
    return view('admin/admin');
});
Route::get('berita', [BeritaController::class, 'index']);