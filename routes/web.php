<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;
use GuzzleHttp\Promise\Create;
// use App\Models\Suratmasuk;
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

// SURAT MASUK CONTROLLER

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('suratmasuk', SuratmasukController::class);
Route::resource('suratkeluar', SuratkeluarController::class);

Route::get('surat_masuk', [SuratmasukController::class, "index"])->name('halaman.suratmasuk.index');
Route::get('tambah_surat_masuk', [SuratmasukController::class, "create"])->name('halaman.suratmasuk.create');
Route::get('/halaman.suratmasuk.create', function () {
    return view('halaman.suratmasuk.create');
});
Route::post('tambahh', [SuratmasukController::class, "store"]);
Route::get('edit_suratmasuk/{id}', [SuratmasukController::class, "edit"])->name('halaman.suratmasuk.edit');
Route::put('surat_masuk/{id}', [SuratmasukController::class, "update"]);
Route::get('hapus_surat/{id}', [SuratmasukController::class, "delete"]);
Route::delete('surat_masuk/{id}', [SuratmasukController::class, "destroy"]);


// SURAT KELUAR CONTROLLER

Route::get('surat_keluar', [SuratkeluarController::class, "index"])->name('halaman.suratkeluar.index');
Route::get('tambah_surat_keluar', [SuratkeluarController::class, "create"])->name('halaman.suratkeluar.create');
Route::post('tambah', [SuratkeluarController::class, "store"]);
Route::get('edit_suratkeluar/{id}', [SuratkeluarController::class, "edit"])->name('halaman.suratkeluar.edit');
Route::put('surat_keluar/{id}', [SuratkeluarController::class, "update"]);
Route::get('hapus_keluar/{id}', [SuratmasukController::class, "delete"]);
Route::delete('surat_keluar/{id}', [SuratkeluarController::class, "destroy"]);

});


require __DIR__.'/auth.php';

