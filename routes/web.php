<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\VissionMissionController;
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
    return view('index');
});


Route::get('/profil_desa', function () {
    return view('profil_desa');
});


Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/visi-misi', [VissionMissionController::class, 'index']);
Route::post('/admin/vission/create', [VissionMissionController::class, 'storeVission']);
Route::put('/admin/vission/update', [VissionMissionController::class, 'updateVission']);
Route::post('/admin/mission/create', [VissionMissionController::class, 'storeMission']);
Route::put('/admin/mission/update', [VissionMissionController::class, 'updateMission']);

Route::get('/admin/berita', [BlogController::class, 'index']);
Route::get('/admin/berita/create', [BlogController::class, 'create']);
Route::post('/admin/berita/store', [BlogController::class, 'store']);
Route::get('/admin/berita/edit/{slug}', [BlogController::class, 'edit']);
Route::put('/admin/berita/update/{slug}', [BlogController::class, 'update']);
Route::get('/admin/berita/hapus/{slug}', [BlogController::class, 'destroy']);
Route::get('/admin/berita/show/{slug}', [BlogController::class, 'show']);
Route::get('/admin/berita/checkSlug', [BlogController::class, 'checkSlug']);

Route::get('/admin/sejarah', [HistoryController::class, 'index']);
Route::post('/admin/history/create', [HistoryController::class, 'store']);
Route::put('/admin/history/update', [HistoryController::class, 'update']);