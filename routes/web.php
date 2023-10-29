<?php

use App\Http\Controllers\Admin\AccordingToageController;
use App\Http\Controllers\Admin\AccordingToeducationController;
use App\Http\Controllers\Admin\AccordingTogenderController;
use App\Http\Controllers\Admin\AccordingToincomeController;
use App\Http\Controllers\Admin\AccordingToworkController;
use App\Http\Controllers\Admin\AdministrativeOfficialsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ConsultativeBodyController;
use App\Http\Controllers\Admin\HalmetController;
use App\Http\Controllers\Admin\HalmetOfficeController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\TotalPopulationController;
use App\Http\Controllers\Admin\VillageProductsController as AdminVillageProductsController;
use App\Http\Controllers\Admin\VissionController;
use App\Http\Controllers\User\GovernmentController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\VillageDataController;
use App\Http\Controllers\User\VillageProfileController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/home', function () {
    return view('index');
});
Route::get('/profil_desa', function () {
    return view('profil_desa');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/profil-desa', [VillageProfileController::class, 'index'])->name('profilDesa');
Route::get('/profil-desa/sejarah', [VillageProfileController::class, 'showSejarah'])->name('showSejarah');

Route::get('/pemerintahan', [GovernmentController::class, 'index'])->name('index-pemerintahan');

Route::get('/produk-desa', [VillageDataController::class, 'index'])->name('index-produkDesa');

Route::get('/data-desa', [VillageDataController::class, 'index'])->name('index-dataDesa');

Route::get('/berita', [NewsController::class, 'index'])->name('index-berita');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('show-berita');



// ADMIN
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/berita', [BlogController::class, 'index']);
Route::get('/admin/berita/create', [BlogController::class, 'create']);
Route::post('/admin/berita/store', [BlogController::class, 'store']);
Route::get('/admin/berita/edit/{slug}', [BlogController::class, 'edit']);
Route::put('/admin/berita/update/{slug}', [BlogController::class, 'update']);
Route::get('/admin/berita/hapus/{slug}', [BlogController::class, 'destroy']);
Route::get('/admin/berita/show/{slug}', [BlogController::class, 'show']);
Route::get('/admin/berita/checkSlug', [BlogController::class, 'checkSlug']);

Route::resource('/admin/produk', AdminVillageProductsController::class);
Route::get('/admin/produk/delete/{id}', [AdminVillageProductsController::class, 'destroy']);

Route::resource('/admin/sejarah', HistoryController::class);
Route::get('/admin/sejarah/delete/{id}', [HistoryController::class, 'destroy']);

Route::resource('/admin/visi', VissionController::class);
Route::get('/admin/visi/delete/{id}', [VissionController::class, 'destroy']);

Route::resource('/admin/mission', MissionController::class);
Route::get('/admin/mission/delete/{id}', [MissionController::class, 'destroy']);

Route::resource('/admin/pejabat-administrasi', AdministrativeOfficialsController::class);
Route::get('/admin/pejabat-administrasi/hapus/{id}', [AdministrativeOfficialsController::class, 'destroy']);

Route::resource('/admin/badan-permusyawaratan', ConsultativeBodyController::class);
Route::get('/admin/badan-permusyawaratan/hapus/{id}', [ConsultativeBodyController::class, 'destroy']);

Route::resource('/admin/dusun', HalmetController::class);
Route::get('/admin/dusun/hapus/{id}', [HalmetController::class, 'destroy']);

Route::get('/admin/dusun/{id}/data-pejabat', [HalmetOfficeController::class, 'index']);
Route::get('/admin/pejabat-dusun/create/{id}', [HalmetOfficeController::class, 'create']);
Route::post('/admin/pejabat-dusun/store', [HalmetOfficeController::class, 'store']);
Route::get('/admin/dusun/{idOne}/data-pejabat/edit/{idTwo}', [HalmetOfficeController::class, 'edit']);
Route::put('/admin/pejabat-dusun/update/{id}', [HalmetOfficeController::class, 'update']);
Route::get('/admin/pejabat-dusun/hapus/{id}', [HalmetOfficeController::class, 'destroy']);

Route::resource('/admin/jumlah-penduduk', TotalPopulationController::class);
Route::get('/admin/jumlah-penduduk/hapus/{id}', [TotalPopulationController::class, 'destroy']);

Route::resource('/admin/jenis-kelamin', AccordingTogenderController::class);
Route::get('/admin/jenis-kelamin/hapus/{id}', [AccordingTogenderController::class, 'destroy']);

Route::resource('/admin/umur', AccordingToageController::class);
Route::get('/admin/umur/hapus/{id}', [AccordingToageController::class, 'destroy']);

Route::resource('/admin/pendidikan', AccordingToeducationController::class);
Route::get('/admin/pendidikan/hapus/{id}', [AccordingToeducationController::class, 'destroy']);

Route::resource('/admin/pekerjaan', AccordingToworkController::class);
Route::get('/admin/pekerjaan/hapus/{id}', [AccordingToworkController::class, 'destroy']);

Route::resource('/admin/penghasilan', AccordingToincomeController::class);
Route::get('/admin/penghasilan/hapus/{id}', [AccordingToincomeController::class, 'destroy']);
// AKHIR ADMIN