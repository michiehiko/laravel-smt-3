<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\Ras_hewanController;
use App\Http\Controllers\Admin\Jenis_hewanController;
use App\Http\Controllers\Admin\Data_pemilikController;
use App\Http\Controllers\Admin\Data_dokterController;
use App\Http\Controllers\Admin\Data_hewanController;
use App\Http\Controllers\Admin\Data_kategoriController;
use App\Http\Controllers\Admin\Kategori_klinisController;
use App\Http\Controllers\Admin\Kode_tindakanController;

Route::get('/', function () {
    return view('site.home');
    
});

route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/about', [SiteController::class, 'about'])->name('site.about');
Route::get('/layanan', [SiteController::class, 'layanan'])->name('site.layanan');
Route::get('/struktur', [SiteController::class, 'struktur'])->name('site.struktur');
Route::get('/visimisi', [SiteController::class, 'visimisi'])->name('site.visimisi');

Auth::routes();
route::middleware('isAdministrator')->group(function() {
    route::get('Dashboard_admin', [DashboardController::class, 'Dashboard'])->name('Dashboard_admin');
    route::get('data_master', [DashboardController::class, 'DataMaster'])->name('data_master');
    route::get('data_user', [UserController::class, 'DataUser'])->name('data_user');
    route::get('data_role', [RoleController::class, 'DataRole'])->name('data_role');
    route::get('ras_hewan', [Ras_hewanController::class, 'DataRasHewan'])->name('ras_hewan');
    route::get('jenis_hewan', [Jenis_hewanController::class, 'DataJenisHewan'])->name('jenis_hewan');
    route::get('data_pemilik', [Data_pemilikController::class, 'DataPemilik'])->name('data_pemilik');
    route::get('data_dokter', [Data_dokterController::class, 'DataDokter'])->name('data_dokter');
    route::get('data_hewan', [Data_hewanController::class, 'DataHewan'])->name('data_hewan');
    route::get('data_kategori', [Data_kategoriController::class, 'DataKategori'])->name('data_kategori');
    route::get('data_kategori_klinis', [Kategori_klinisController::class, 'DataKategoriKlinis'])->name('data_kategori_klinis');
    route::get('data_kode_tindakan', [Kode_tindakanController::class, 'DataKodeTindakanTerapi'])->name('data_kode_tindakan');

});

Auth::routes();
route::middleware('isPerawat')->group(function() {
    route::get('Dashboard_perawat', [App\Http\Controllers\Perawat\DashboardPerawatController::class, 'Dashboard'])->name('Dashboard_perawat');

});

Auth::routes();
route::middleware('isDokter')->group(function() {
    route::get('Dashboard_dokter', [App\Http\Controllers\Dokter\DashboardDokterController::class, 'Dashboard'])->name('Dashboard_dokter');

});

Auth::routes();
route::middleware('isResepsionis')->group(function() {
    route::get('Dashboard_resepsionis', [App\Http\Controllers\Resepsionis\DashboardResepsionisController::class, 'Dashboard'])->name('Dashboard_resepsionis');

});

Auth::routes();
route::middleware('isPemilik')->group(function() {
    route::get('Dashboard_pemilik', [App\Http\Controllers\Pemilik\DashboardPemilikController::class, 'Dashboard'])->name('Dashboard_pemilik');

});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
