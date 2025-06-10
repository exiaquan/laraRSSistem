<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\DokterController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Dokter
      Route::controller(DokterController::class)->group(function(){
        Route::get('/all/dokter', 'AllDokter')->name('data.dokter');
        Route::get('/tambah/karyawan', 'TambahKaryawan')->name('add.karyawan');
        Route::post('/save/karyawan', 'SaveKaryawan')->name('karyawan.tambah');
        Route::get('/edit/karyawan/{id}', 'EditKaryawan')->name('edit.karyawan');
        Route::post('/update/karyawan', 'UpdateKaryawan')->name('karyawan.update');
        Route::get('/delete/karyawan/{id}', 'DeleteKaryawan')->name('delete.karyawan');
    });

});

require __DIR__.'/auth.php';
Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
 Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout.page');
