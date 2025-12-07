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

    //data role
    route::get('data_role', [RoleController::class, 'DataRole'])->name('data_role');
    route::get('create_role', [RoleController::class, 'Create'])->name('create_role');
    route::post('tambah_role', [RoleController::class, 'Store'])->name('tambah_role');
    route::get('edit_role/{id}', [RoleController::class, 'Edit'])->name('edit_role');
    route::put('update_role/{id}', [RoleController::class, 'Update'])->name('update_role');
    route::patch('status_role/{id}', [RoleController::class, 'ToggleStatus'])->name('status_role');      
    route::delete('hapus_role/{id}', [RoleController::class, 'Destroy'])->name('hapus_role');

    //data ras hewan
    route::get('ras_hewan', [Ras_hewanController::class, 'DataRasHewan'])->name('ras_hewan');
    route::get('create_ras_hewan', [Ras_hewanController::class, 'Create'])->name('create_ras_hewan');
    route::post('tambah_ras_hewan', [Ras_hewanController::class, 'Store'])->name('tambah_ras_hewan');
    route::get('edit_ras_hewan/{id}', [Ras_hewanController::class, 'Edit'])->name('edit_ras_hewan');
    route::put('update_ras_hewan/{id}', [Ras_hewanController::class, 'Update'])->name('update_ras_hewan');      
    route::delete('hapus_ras_hewan/{id}', [Ras_hewanController::class, 'Destroy'])->name('hapus_ras_hewan');

    //data jenis hewan
    route::get('jenis_hewan', [Jenis_hewanController::class, 'DataJenisHewan'])->name('jenis_hewan');
    route::get('create_jenis_hewan', [Jenis_hewanController::class, 'Create'])->name('create_jenis_hewan');
    route::post('tambah_jenis_hewan', [Jenis_hewanController::class, 'Store'])->name('tambah_jenis_hewan');
    route::get('edit_jenis_hewan/{id}', [Jenis_hewanController::class, 'Edit'])->name('edit_jenis_hewan');
    route::put('update_jenis_hewan/{id}', [Jenis_hewanController::class, 'Update'])->name('update_jenis_hewan');
    route::delete('hapus_jenis_hewan/{id}', [Jenis_hewanController::class, 'Destroy'])->name('hapus_jenis_hewan');

    //data pemilik
    route::get('data_pemilik', [Data_pemilikController::class, 'DataPemilik'])->name('data_pemilik');
    route::get('create_pemilik', [Data_pemilikController::class, 'Create'])->name('create_pemilik');
    route::post('tambah_pemilik', [Data_pemilikController::class, 'Store'])->name('tambah_pemilik');
    route::get('edit_pemilik/{id}', [Data_pemilikController::class, 'Edit'])->name('edit_pemilik');
    route::put('update_pemilik/{id}', [Data_pemilikController::class, 'Update'])->name('update_pemilik');
    route::delete('hapus_pemilik/{id}', [Data_pemilikController::class, 'Destroy'])->name('hapus_pemilik');
    
    //data dokter
    route::get('data_dokter', [Data_dokterController::class, 'DataDokter'])->name('data_dokter');
    route::get('create_dokter', [Data_dokterController::class, 'Create'])->name('create_dokter');
    route::post('tambah_dokter', [Data_dokterController::class, 'Store'])->name('tambah_dokter');
    route::get('edit_dokter/{id}', [Data_dokterController::class, 'Edit'])->name('edit_dokter');
    route::put('update_dokter/{id}', [Data_dokterController::class, 'Update'])->name('update_dokter');
    Route::put('data_dokter/{id}/status', [Data_dokterController::class, 'updateStatus'])->name('update_status_dokter');
    Route::delete('hapus_dokter/{id}', [Data_dokterController::class, 'Destroy'])->name('hapus_dokter');
    
    //data hewan
    route::get('data_hewan', [Data_hewanController::class, 'DataHewan'])->name('data_hewan');
    route::get('create_hewan', [Data_hewanController::class, 'Create'])->name('create_hewan');
    route::post('tambah_hewan', [Data_hewanController::class, 'Store'])->name('tambah_hewan');
    route::get('edit_hewan/{id}', [Data_hewanController::class, 'Edit'])->name('edit_hewan');
    route::put('update_hewan/{id}', [Data_hewanController::class, 'Update'])->name('update_hewan');
    route::delete('hapus_hewan/{id}', [Data_hewanController::class, 'Destroy'])->name('hapus_hewan');   
    
    //data kategori
    route::get('data_kategori', [Data_kategoriController::class, 'DataKategori'])->name('data_kategori');
    route::get('create_kategori', [Data_kategoriController::class, 'Create'])->name('create_kategori');
    route::post('tambah_kategori', [Data_kategoriController::class, 'Store'])->name('tambah_kategori');
    route::get('edit_kategori/{id}', [Data_kategoriController::class, 'Edit'])->name('edit_kategori');  
    route::put('update_kategori/{id}', [Data_kategoriController::class, 'Update'])->name('update_kategori');
    route::delete('hapus_kategori/{id}', [Data_kategoriController::class, 'Destroy'])->name('hapus_kategori');  

    //data kategori klinis
    route::get('data_kategori_klinis', [Kategori_klinisController::class, 'DataKategoriKlinis'])->name('data_kategori_klinis');
    route::get('create_kategori_klinis', [Kategori_klinisController::class, 'Create'])->name('create_kategori_klinis');
    route::post('tambah_kategori_klinis', [Kategori_klinisController::class, 'Store'])->name('tambah_kategori_klinis');         
    route::get('edit_kategori_klinis/{id}', [Kategori_klinisController::class, 'Edit'])->name('edit_kategori_klinis');  
    route::put('update_kategori_klinis/{id}', [Kategori_klinisController::class, 'Update'])->name('update_kategori_klinis');
    route::delete('hapus_kategori_klinis/{id}', [Kategori_klinisController::class, 'Destroy'])->name('hapus_kategori_klinis');

    //data kode tindakan
    route::get('data_kode_tindakan', [Kode_tindakanController::class, 'DataKodeTindakanTerapi'])->name('data_kode_tindakan');
    route::get('create_kode_tindakan', [Kode_tindakanController::class, 'Create'])->name('create_kode_tindakan');
    route::post('tambah_kode_tindakan', [Kode_tindakanController::class, 'Store'])->name('tambah_kode_tindakan');         
    route::get('edit_kode_tindakan/{id}', [Kode_tindakanController::class, 'Edit'])->name('edit_kode_tindakan');  
    route::put('update_kode_tindakan/{id}', [Kode_tindakanController::class, 'Update'])->name('update_kode_tindakan');
    route::delete('hapus_kode_tindakan/{id}', [Kode_tindakanController::class, 'Destroy'])->name('hapus_kode_tindakan');
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
