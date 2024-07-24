<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\GeografisController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\LembagaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\BeritaDesaController;
use App\Http\Controllers\Admin\LembagaAdminController;
use App\Http\Controllers\Admin\SktmController;
use App\Http\Controllers\Admin\SuratUsahaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Admin\StrukturOrganisasiController;
use App\Http\Controllers\Admin\AgendaAdminController;
use App\Http\Controllers\Admin\GaleriAdminController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\GlobalSearchController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Route::get('/',[IndexController::class, 'index'] )->name('/');
Route::get('tentangkami',[AboutController::class, 'index'] )->name('tentang_kami');
Route::get('visimisi',[VisimisiController::class, 'index'] )->name('visi_misi');
Route::get('sejarah',[SejarahController::class, 'index'] )->name('sejarah');
Route::get('geografis',[GeografisController::class, 'index'] )->name('geografis');
Route::get('galeri',[GaleriController::class, 'index'] )->name('galeri');
Route::get('struktur',[StrukturController::class, 'index'] )->name('struktur');
Route::get('agenda',[AgendaController::class, 'index'] )->name('agenda');
Route::get('register',[RegisterController::class, 'index'] )->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// surat surat
Route::prefix('surat')->middleware('auth')->group(function () {
    Route::get('/sktm', [SktmController::class, 'surat'])->name('index.sktm');
    Route::get('/sktm/view', [SktmController::class, 'view'])->name('sktm.view');
    Route::get('/sktm/download/{id}', [SktmController::class, 'downloadPDF'])->name('sktm.download');
    Route::get('/suratusaha', [SuratUsahaController::class, 'suratusaha'])->name('index.suratusaha');
    Route::get('/suratusaha/view', [SuratUsahaController::class, 'view'])->name('suratusaha.view');
    Route::get('/suratusaha/download/{id}', [SuratUsahaController::class, 'downloadPDF'])->name('suratusaha.download');
});

// lembaga
Route::prefix('lembaga')->group(function () {
    Route::get('/', [LembagaController::class, 'index'])->name('index.lembaga');
});

// berita
Route::prefix('berita')->group(function () {
    Route::get('/', [BeritaController::class, 'index'])->name('index.berita');
    Route::get('/{id}', [BeritaController::class, 'show'])->name('berita.show');
});

// admin dashboard
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/{admin}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{admin}', [AdminController::class, 'update'])->name('admin.update');
});

// berita admin
Route::prefix('admin/berita')->middleware('admin')->group(function () {
    Route::get('/', [BeritaDesaController::class, 'index'])->name('berita.index');
    Route::get('/create', [BeritaDesaController::class, 'create'])->name('berita.create');
    Route::post('/', [BeritaDesaController::class, 'store'])->name('berita.store');
    Route::get('/{berita}/edit', [BeritaDesaController::class, 'edit'])->name('berita.edit');
    Route::put('/{berita}', [BeritaDesaController::class, 'update'])->name('berita.update');
    Route::delete('/{berita}', [BeritaDesaController::class, 'destroy'])->name('berita.destroy');
});

// sktm admin
Route::prefix('admin/sktm')->middleware('admin')->group(function () {
    Route::get('/', [SktmController::class, 'index'])->name('sktm.index');
    Route::get('/create', [SktmController::class, 'create'])->name('sktm.create');
    Route::post('/', [SktmController::class, 'store'])->withoutMiddleware(['admin'])->name('sktm.store');
    Route::get('/{sktm}/edit', [SktmController::class, 'edit'])->name('sktm.edit');
    Route::put('/{sktm}', [SktmController::class, 'update'])->name('sktm.update');
    Route::delete('/{sktm}', [SktmController::class, 'destroy'])->withoutMiddleware(['admin'])->name('sktm.destroy');
});

// surat usaha admin
Route::prefix('admin/suratusaha')->middleware('admin')->group(function () {
    Route::get('/', [SuratUsahaController::class, 'index'])->name('suratusaha.index');
    Route::get('/create', [SuratUsahaController::class, 'create'])->name('suratusaha.create');
    Route::post('/', [SuratUsahaController::class, 'store'])->withoutMiddleware(['admin'])->name('suratusaha.store');
    Route::get('/{suratusaha}/edit', [SuratUsahaController::class, 'edit'])->name('suratusaha.edit');
    Route::put('/{suratusaha}', [SuratUsahaController::class, 'update'])->name('suratusaha.update');
    Route::delete('/{suratusaha}', [SuratUsahaController::class, 'destroy'])->withoutMiddleware(['admin'])->name('suratusaha.destroy');
});

// lembaga admin
Route::prefix('admin/lembaga')->middleware('admin')->group(function () {
    Route::get('/', [LembagaAdminController::class, 'index'])->name('lembaga.index');
    Route::get('/create', [LembagaAdminController::class, 'create'])->name('lembaga.create');
    Route::post('/', [LembagaAdminController::class, 'store'])->name('lembaga.store');
    Route::get('/{lembaga}/edit', [LembagaAdminController::class, 'edit'])->name('lembaga.edit');
    Route::put('/{lembaga}', [LembagaAdminController::class, 'update'])->name('lembaga.update');
    Route::delete('/{lembaga}', [LembagaAdminController::class, 'destroy'])->name('lembaga.destroy');
});

// struktur organisasi admin
Route::prefix('admin/struktur')->middleware('admin')->group(function () {
    Route::get('/', [StrukturOrganisasiController::class, 'index'])->name('struktur.index');
    Route::get('/create', [StrukturOrganisasiController::class, 'create'])->name('struktur.create');
    Route::post('/', [StrukturOrganisasiController::class, 'store'])->name('struktur.store');
    Route::get('/{struktur}/edit', [StrukturOrganisasiController::class, 'edit'])->name('struktur.edit');
    Route::put('/{struktur}', [StrukturOrganisasiController::class, 'update'])->name('struktur.update');
    Route::delete('/{struktur}', [StrukturOrganisasiController::class, 'destroy'])->name('struktur.destroy');
});

// agenda admin
Route::prefix('admin/agenda')->middleware('admin')->group(function () {
    Route::get('/', [AgendaAdminController::class, 'index'])->name('agenda.index');
    Route::get('/create', [AgendaAdminController::class, 'create'])->name('agenda.create');
    Route::post('/', [AgendaAdminController::class, 'store'])->name('agenda.store');
    Route::get('/{agenda}/edit', [AgendaAdminController::class, 'edit'])->name('agenda.edit');
    Route::put('/{agenda}', [AgendaAdminController::class, 'update'])->name('agenda.update');
    Route::delete('/admin/agenda/{id}', [AgendaAdminController::class, 'destroy'])->name('agenda.destroy');
});

// Galeri admin
Route::prefix('admin/galeri')->middleware('admin')->group(function () {
    Route::get('/', [GaleriAdminController::class, 'index'])->name('galeri.index');
    Route::get('/create', [GaleriAdminController::class, 'create'])->name('galeri.create');
    Route::post('/', [GaleriAdminController::class, 'store'])->name('galeri.store');
    Route::get('/{galeri}/edit', [GaleriAdminController::class, 'edit'])->name('galeri.edit');
    Route::put('/{galeri}', [GaleriAdminController::class, 'update'])->name('galeri.update');
    Route::delete('/{galeri}', [GaleriAdminController::class, 'destroy'])->name('galeri.destroy');
});

// User admin
Route::prefix('admin/user')->middleware('admin')->group(function () {
    Route::get('/', [UserAdminController::class, 'index'])->name('user.index');
    Route::get('/{user}/edit', [UserAdminController::class, 'edit'])->name('user.edit');
    Route::put('/{user}', [UserAdminController::class, 'update'])->name('user.update');
    Route::delete('/{user}', [UserAdminController::class, 'destroy'])->name('user.destroy');
});

// global search
Route::get('/search', [GlobalSearchController::class, 'search'])->name('global_search');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['reset' => true]);

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');