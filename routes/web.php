<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\OlahController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\StokController;
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
    return view('welcome');
});

Route::resource('Stok', StokController::class);
Route::resource('Olah', OlahController::class);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/Stok', [StokController::class, 'index'])->name('stok.index');
    Route::get('/Kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/Olah', [OlahController::class, 'index'])->name('olah.index');
});

Route::group(['middleware' => ['auth', 'level:admin']], function () {

    //create stok
    Route::get('/Stok/create', [StokController::class, 'create'])->name('stok.create');
    Route::post('/Stok/store', [StokController::class, 'store'])->name('stok.store');

    //edit stok
    Route::get('/Stok/edit/{id}', [StokController::class, 'edit'])->name('stok.edit');
    Route::post('/Stok/update/{id}', [StokController::class, 'update'])->name('stok.update');

    //delete stok
    Route::post('/Stok/delete/{id}', [StokController::class, 'destroy'])->name('stok.destroy');

    //create kategori
    Route::get('/Kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/Kategori/store', [KategoriController::class, 'store'])->name('kategori.store');

    //edit kategori
    Route::get('Kategori/edit/{id_kategori}', [KategoriController::class, 'edit'])->name('kategori.edit');
    Route::post('/Kategori/update/{id_kategori}', [KategoriController::class, 'update'])->name('kategori.update');

    //delete kategori
    Route::post('/Kategori/delete/{id_kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    //create olah
    Route::get('/Olah/create', [OlahController::class, 'create'])->name('olah.create');
    Route::post('/Olah/store', [OlahController::class, 'store'])->name('olah.store');

    //delete olah
    Route::post('/Olah/delete/{id_olah}', [OlahController::class, 'destroy'])->name('olah.destroy');
    
    //cetak olah
    Route::get('/Olah/cetak', [OlahController::class, 'cetak'])->name('olah.cetak');
    // Route::get('cetak', [OlahController::class, 'cetak'])->name('olah.cetak');
    // Route::get('/Olah/cetak', 'OlahController@cetakOlah')->name('olah.cetak');
});
Route::group(['middleware' => ['auth', 'level:owner']], function () {
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
