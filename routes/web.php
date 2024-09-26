<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KoperasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Member\UserProfileController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PosController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
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

if (config('app.env') === 'production') {
    if (isset($_SERVER['HTTP_HOST']) && !empty($_SERVER['HTTP_HOST'])) {
        Route::get('/login', function () {
            return view('dashboard.auth.login');
        })->name('login');

        Route::post('/dologin', [LoginController::class, 'dologin']);


        // Route::get('/dashboard', [HomeController::class, 'index']);

        Route::get('/tambah_anggota', [AnggotaController::class, 'create']);
        Route::get('/tambah_primkop', [KoperasiController::class, 'primkop']);
        Route::get('/tambah_puskop', [KoperasiController::class, 'puskop']);
        Route::get('/tambah_inkop', [KoperasiController::class, 'inkop']);

        Route::get('/simpanan', [KoperasiController::class, 'simpanan']);
        Route::get('/pinjaman', [KoperasiController::class, 'pinjaman']);
        Route::get('/tambah_simpanan', [KoperasiController::class, 'tambah_simpanan']);

        Route::get('/logout', [KoperasiController::class, 'logout']);
        Route::get('/setting', [KoperasiController::class, 'setting']);

        Route::get('/dashboard-new', function () {
            return view('dashboard.index');
        });

        Route::get('/dashboard', [KoperasiController::class, 'dashboard'])->name('overview');

        Route::get('/list_inkop', [KoperasiController::class, 'list_inkop'])->name('view-inkop');

        Route::get('/list_puskop', [KoperasiController::class, 'list_puskop'])->name('view-puskop');

        Route::get('/list_puskop_inkop/{id}', [KoperasiController::class, 'list_puskop_inkop'])->name('view-puskop');

        Route::get('/list_primkop', [KoperasiController::class, 'list_primkop'])->name('view-primkop');

        Route::get('/list_primkop_puskop/{id}', [KoperasiController::class, 'list_primkop_puskop'])->name('view-primkop');

        Route::get('/list_anggota', [AnggotaController::class, 'list_anggota'])->name('view-anggota');

        Route::get('/list_anggota_primkop/{id}', [AnggotaController::class, 'list_anggota_primkop'])->name('view-anggota-primkop');

        Route::get('/list_pengajuan', [AnggotaController::class, 'list_pengajuan'])->name('view-pengajuan');

        Route::get('/list_kategori_produk', [ProductController::class, 'list_kategori_produk'])->name('view-kategori');

        Route::get('/list_produk', [ProductController::class, 'list_produk'])->name('view-produk');

        Route::get('/pos', [PosController::class, 'pos'])->name('view-pos');

        Route::get('/checkout/{id_order}', [PosController::class, 'checkout'])->name('view-pos');
        Route::get('/detail-order/{id_order}', [PosController::class, 'detail_order'])->name('view-detail-order');

        Route::get('/history-pos', [PosController::class, 'history_pos'])->name('view-history-pos');


        Route::get('/', function () {
            return redirect()->route('login');
        })->name('home');

        // Routing anggota melalui primkopnya
        Route::get('/pendaftaran/anggota/{nis}', function ($nis) {
            $anggota = DB::table('tbl_anggota')->where('nis', $nis)->where('approval',0)->first();
            if(!$anggota){
                return view('error');
            }
            return view('dashboard.registrasi.registrasi-anggota', compact('anggota', 'nis'));
        })->name('pendaftaran.anggota');

        // Routing registrasi inkop melalui RKI
        Route::get('/pendaftaran/inkop/{nis}', function ($nis) {

            $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 1)->first();
            if (!$koperasi) {
                return view('error');
            }
            $list_puskop = DB::table('tbl_koperasi')->join("tbl_pengurus", "tbl_pengurus.id_koperasi", "=", "tbl_koperasi.id")->where('id_inkop', $koperasi->id)->where('approval', 0)->get();
            $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

            // return dd($list_puskop);
            return view('dashboard.registrasi.registrasi-inkop', compact('nis', 'koperasi', 'pengurus', 'list_puskop'));
        })->name('pendaftaran.inkop');

        // Routing registrasi puskop melalui inkop
        Route::get('/pendaftaran/puskop/{nis}', function ($nis) {

            $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 2)->first();
            if (!$koperasi) {
                return view('error');
            }
            $list_primkop = DB::table('tbl_koperasi')->join("tbl_pengurus", "tbl_pengurus.id_koperasi", "=", "tbl_koperasi.id")->where('id_puskop', $koperasi->id)->where('approval', 0)->get();
            $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

            // return dd($list_primkop);
            return view('dashboard.registrasi.registrasi-puskop', compact('nis', 'koperasi', 'pengurus', 'list_primkop'));
        })->name('pendaftaran.puskop');

        // Routing registrasi puskop melalui inkop
        Route::get('/pendaftaran/primkop/{nis}', function ($nis) {

            $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 3)->first();
            if (!$koperasi) {
                return view('error');
            }
            $list_anggota = DB::table('tbl_koperasi')->join("tbl_anggota", "tbl_anggota.id_koperasi", "=", "tbl_koperasi.id")->where('tbl_anggota.id_koperasi', $koperasi->id)->where('tbl_koperasi.approval', 0)->get();
            $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

            // return dd($list_anggota);
            return view('dashboard.registrasi.registrasi-primkop', compact('nis', 'koperasi', 'pengurus', 'list_anggota'));
        })->name('pendaftaran.primkop');


        // =========================================================================================================================================================
        // Member Routing
        // =========================================================================================================================================================
        Route::prefix('member')->name('member.')->group(function () {
            // Authentication
            Route::get('/login', [MemberController::class, 'loginform'])->name('login');
            Route::post('/dologin', [MemberController::class, 'loginprocess'])->name('login');
            Route::get('/logout', [MemberController::class, 'logout'])->name('logout');
            Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile');
            Route::get('/ubah_password', [UserProfileController::class, 'ubah_password'])->name('ubah_password');
            // Dashboard
            Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('overview');

            // Simpanan
            Route::get('/simpanan', [MemberController::class, 'simpanan'])->name('simpanan');

            // Pinjaman
            Route::get('/pinjaman', [MemberController::class, 'pinjaman'])->name('pinjaman');
            Route::get('/tambah_pinjaman', [MemberController::class, 'tambah_pinjaman'])->name('tambah.pinjaman');
            Route::post('/insert/pinjaman', [MemberController::class, 'create'])->name('store.pinjaman');
            Route::get('/delete/pinjaman/{id}', [MemberController::class, 'destroy'])->name('delete.pinjaman');
        });
        // =========================================================================================================================================================
        // End Member Routing
        // =========================================================================================================================================================
    } else if ($_SERVER['HTTP_HOST'] == 'registrasi.rkicoop.co.id') {
        Route::get('/login', function () {
            return view('dashboard.auth.login');
        })->name('login');

        Route::post('/dologin', [LoginController::class, 'dologin']);


        // Route::get('/dashboard', [HomeController::class, 'index']);

        Route::get('/tambah_anggota', [AnggotaController::class, 'create']);
        Route::get('/tambah_primkop', [KoperasiController::class, 'primkop']);
        Route::get('/tambah_puskop', [KoperasiController::class, 'puskop']);
        Route::get('/tambah_inkop', [KoperasiController::class, 'inkop']);

        Route::get('/simpanan', [KoperasiController::class, 'simpanan']);
        Route::get('/pinjaman', [KoperasiController::class, 'pinjaman']);
        Route::get('/tambah_simpanan', [KoperasiController::class, 'tambah_simpanan']);

        Route::get('/logout', [KoperasiController::class, 'logout']);

        Route::get('/dashboard-new', function () {
            return view('dashboard.index');
        });

        Route::get('/dashboard', [KoperasiController::class, 'dashboard'])->name('overview');

        Route::get('/list_inkop', [KoperasiController::class, 'list_inkop'])->name('view-inkop');

        Route::get('/list_puskop', [KoperasiController::class, 'list_puskop'])->name('view-puskop');

        Route::get('/list_puskop_inkop/{id}', [KoperasiController::class, 'list_puskop_inkop'])->name('view-puskop');

        Route::get('/list_primkop', [KoperasiController::class, 'list_primkop'])->name('view-primkop');

        Route::get('/list_primkop_puskop/{id}', [KoperasiController::class, 'list_primkop_puskop'])->name('view-primkop');

        Route::get('/list_anggota', [AnggotaController::class, 'list_anggota'])->name('view-anggota');

        Route::get('/list_anggota_primkop/{id}', [AnggotaController::class, 'list_anggota_primkop'])->name('view-anggota-primkop');

        Route::get('/list_pengajuan', [AnggotaController::class, 'list_pengajuan'])->name('view-pengajuan');

        Route::get('/list_kategori_produk', [ProductController::class, 'list_kategori_produk'])->name('view-kategori');

        Route::get('/list_produk', [ProductController::class, 'list_produk'])->name('view-produk');

        Route::get('/pos', [PosController::class, 'pos'])->name('view-pos');

        Route::get('/checkout/{id_order}', [PosController::class, 'checkout'])->name('view-pos');
        Route::get('/detail-order/{id_order}', [PosController::class, 'detail_order'])->name('view-detail-order');

        Route::get('/history-pos', [PosController::class, 'history_pos'])->name('view-history-pos');


        Route::get('/', function () {
            return redirect()->route('login');
        })->name('home');

        // Routing anggota melalui primkopnya
        Route::get('/pendaftaran/anggota/{nis}', function ($nis) {
            $anggota = DB::table('tbl_anggota')->where('nis', $nis)->where('approval',0)->first();
            if(!$anggota){
                return view('error');
            }
            return view('dashboard.registrasi.registrasi-anggota', compact('anggota', 'nis'));
        })->name('pendaftaran.anggota');

        // Routing registrasi inkop melalui RKI
        Route::get('/pendaftaran/inkop/{nis}', function ($nis) {

            $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 1)->first();
            if (!$koperasi) {
                return view('error');
            }
            $list_puskop = DB::table('tbl_koperasi')->join("tbl_pengurus", "tbl_pengurus.id_koperasi", "=", "tbl_koperasi.id")->where('id_inkop', $koperasi->id)->where('approval', 0)->get();
            $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

            // return dd($list_puskop);
            return view('dashboard.registrasi.registrasi-inkop', compact('nis', 'koperasi', 'pengurus', 'list_puskop'));
        })->name('pendaftaran.inkop');

        // Routing registrasi puskop melalui inkop
        Route::get('/pendaftaran/puskop/{nis}', function ($nis) {

            $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 2)->first();
            if (!$koperasi) {
                return view('error');
            }
            $list_primkop = DB::table('tbl_koperasi')->join("tbl_pengurus", "tbl_pengurus.id_koperasi", "=", "tbl_koperasi.id")->where('id_puskop', $koperasi->id)->where('approval', 0)->get();
            $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

            // return dd($list_primkop);
            return view('dashboard.registrasi.registrasi-puskop', compact('nis', 'koperasi', 'pengurus', 'list_primkop'));
        })->name('pendaftaran.puskop');

        // Routing registrasi puskop melalui inkop
        Route::get('/pendaftaran/primkop/{nis}', function ($nis) {

            $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 3)->first();
            if (!$koperasi) {
                return view('error');
            }
            $list_anggota = DB::table('tbl_koperasi')->join("tbl_anggota", "tbl_anggota.id_koperasi", "=", "tbl_koperasi.id")->where('tbl_anggota.id_koperasi', $koperasi->id)->where('tbl_koperasi.approval', 0)->get();
            $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

            // return dd($list_anggota);
            return view('dashboard.registrasi.registrasi-primkop', compact('nis', 'koperasi', 'pengurus', 'list_anggota'));
        })->name('pendaftaran.primkop');


        // =========================================================================================================================================================
        // Member Routing
        // =========================================================================================================================================================
        Route::prefix('member')->name('member.')->group(function () {
            // Authentication
            Route::get('/login', [MemberController::class, 'loginform'])->name('login');
            Route::post('/dologin', [MemberController::class, 'loginprocess'])->name('login');
            Route::get('/logout', [MemberController::class, 'logout'])->name('logout');
            Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile');
            Route::get('/ubah_password', [UserProfileController::class, 'ubah_password'])->name('ubah_password');
            // Dashboard
            Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('overview');

            // Simpanan
            Route::get('/simpanan', [MemberController::class, 'simpanan'])->name('simpanan');

            // Pinjaman
            Route::get('/pinjaman', [MemberController::class, 'pinjaman'])->name('pinjaman');
            Route::get('/tambah_pinjaman', [MemberController::class, 'tambah_pinjaman'])->name('tambah.pinjaman');
            Route::post('/insert/pinjaman', [MemberController::class, 'create'])->name('store.pinjaman');
            Route::get('/delete/pinjaman/{id}', [MemberController::class, 'destroy'])->name('delete.pinjaman');
        });
        // =========================================================================================================================================================
        // End Member Routing
        // =========================================================================================================================================================
    }
} else {
    Route::get('/login', function () {
        return view('dashboard.auth.login');
    })->name('login');

    Route::post('/dologin', [LoginController::class, 'dologin']);


    // Route::get('/dashboard', [HomeController::class, 'index']);

    Route::get('/tambah_anggota', [AnggotaController::class, 'create']);
    Route::get('/tambah_primkop', [KoperasiController::class, 'primkop']);
    Route::get('/tambah_puskop', [KoperasiController::class, 'puskop']);
    Route::get('/tambah_inkop', [KoperasiController::class, 'inkop']);

    Route::get('/simpanan', [KoperasiController::class, 'simpanan']);
    Route::get('/pinjaman', [KoperasiController::class, 'pinjaman']);
    Route::get('/tambah_simpanan', [KoperasiController::class, 'tambah_simpanan']);

    Route::get('/logout', [KoperasiController::class, 'logout']);
    Route::get('/setting', [KoperasiController::class, 'setting']);
    Route::get('/ubah-password', [KoperasiController::class, 'ubah_password']);

    Route::get('/dashboard-new', function () {
        return view('dashboard.index');
    });

    Route::get('/dashboard', [KoperasiController::class, 'dashboard'])->name('overview');

    Route::get('/list_inkop', [KoperasiController::class, 'list_inkop'])->name('view-inkop');

    Route::get('/list_puskop', [KoperasiController::class, 'list_puskop'])->name('view-puskop');

    Route::get('/list_puskop_inkop/{id}', [KoperasiController::class, 'list_puskop_inkop'])->name('view-puskop');

    Route::get('/list_primkop', [KoperasiController::class, 'list_primkop'])->name('view-primkop');

    Route::get('/list_primkop_puskop/{id}', [KoperasiController::class, 'list_primkop_puskop'])->name('view-primkop');

    Route::get('/list_anggota', [AnggotaController::class, 'list_anggota'])->name('view-anggota');

    Route::get('/list_anggota_primkop/{id}', [AnggotaController::class, 'list_anggota_primkop'])->name('view-anggota-primkop');

    Route::get('/list_pengajuan', [AnggotaController::class, 'list_pengajuan'])->name('view-pengajuan');

    Route::get('/list_kategori_produk', [ProductController::class, 'list_kategori_produk'])->name('view-kategori');

    Route::get('/list_produk', [ProductController::class, 'list_produk'])->name('view-produk');

    Route::get('/pos', [PosController::class, 'pos'])->name('view-pos');

    Route::get('/checkout/{id_order}', [PosController::class, 'checkout'])->name('view-pos');
    Route::get('/detail-order/{id_order}', [PosController::class, 'detail_order'])->name('view-detail-order');

    Route::get('/history-pos', [PosController::class, 'history_pos'])->name('view-history-pos');


    Route::get('/', function () {
        return redirect()->route('login');
    })->name('home');

    // Routing anggota melalui primkopnya
    Route::get('/pendaftaran/anggota/{nis}', function ($nis) {
        $anggota = DB::table('tbl_anggota')->where('nis', $nis)->where('approval',0)->first();
        if(!$anggota){
            return view('error');
        }
        return view('dashboard.registrasi.registrasi-anggota', compact('anggota', 'nis'));
    })->name('pendaftaran.anggota');

    // Routing registrasi inkop melalui RKI
    Route::get('/pendaftaran/inkop/{nis}', function ($nis) {

        $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 1)->first();
        if (!$koperasi) {
            return view('error');
        }
        $list_puskop = DB::table('tbl_koperasi')->join("tbl_pengurus", "tbl_pengurus.id_koperasi", "=", "tbl_koperasi.id")->where('id_inkop', $koperasi->id)->where('approval', 0)->get();
        $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

        // return dd($list_puskop);
        return view('dashboard.registrasi.registrasi-inkop', compact('nis', 'koperasi', 'pengurus', 'list_puskop'));
    })->name('pendaftaran.inkop');

    // Routing registrasi puskop melalui inkop
    Route::get('/pendaftaran/puskop/{nis}', function ($nis) {

        $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 2)->first();
        if (!$koperasi) {
            return view('error');
        }
        $list_primkop = DB::table('tbl_koperasi')->join("tbl_pengurus", "tbl_pengurus.id_koperasi", "=", "tbl_koperasi.id")->where('id_puskop', $koperasi->id)->where('approval', 0)->get();
        $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

        // return dd($list_primkop);
        return view('dashboard.registrasi.registrasi-puskop', compact('nis', 'koperasi', 'pengurus', 'list_primkop'));
    })->name('pendaftaran.puskop');

    // Routing registrasi puskop melalui inkop
    Route::get('/pendaftaran/primkop/{nis}', function ($nis) {

        $koperasi = DB::table('tbl_koperasi')->where('nis', $nis)->where('approval', 0)->where('id_tingkatan_koperasi', 3)->first();
        if (!$koperasi) {
            return view('error');
        }
        $list_anggota = DB::table('tbl_koperasi')->join("tbl_anggota", "tbl_anggota.id_koperasi", "=", "tbl_koperasi.id")->where('tbl_anggota.id_koperasi', $koperasi->id)->where('tbl_koperasi.approval', 0)->get();
        $pengurus = DB::table('tbl_pengurus')->where('id_koperasi', $koperasi->id)->get();

        // return dd($list_anggota);
        return view('dashboard.registrasi.registrasi-primkop', compact('nis', 'koperasi', 'pengurus', 'list_anggota'));
    })->name('pendaftaran.primkop');


    // =========================================================================================================================================================
    // Member Routing
    // =========================================================================================================================================================
    Route::prefix('member')->name('member.')->group(function () {
        // Authentication
        Route::get('/login', [MemberController::class, 'loginform'])->name('login');
        Route::post('/dologin', [MemberController::class, 'loginprocess'])->name('login');
        Route::get('/logout', [MemberController::class, 'logout'])->name('logout');
        Route::get('/user-profile', [UserProfileController::class, 'index'])->name('user-profile');
        Route::get('/ubah_password', [UserProfileController::class, 'ubah_password'])->name('ubah_password');
        // Dashboard
        Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('overview');

        // Simpanan
        Route::get('/simpanan', [MemberController::class, 'simpanan'])->name('simpanan');

        // Pinjaman
        Route::get('/pinjaman', [MemberController::class, 'pinjaman'])->name('pinjaman');
        Route::get('/tambah_pinjaman', [MemberController::class, 'tambah_pinjaman'])->name('tambah.pinjaman');
        Route::post('/insert/pinjaman', [MemberController::class, 'create'])->name('store.pinjaman');
        Route::get('/delete/pinjaman/{id}', [MemberController::class, 'destroy'])->name('delete.pinjaman');
    });
    // =========================================================================================================================================================
    // End Member Routing
    // =========================================================================================================================================================

}
