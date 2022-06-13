<?php

Route::post('/login', 'LoginController@login');
Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('superadmin')) {
            return redirect('/superadmin');
        } elseif (Auth::user()->hasRole('pengadu')) {
            return redirect('/pengadu');
        } elseif (Auth::user()->hasRole('pengawas')) {
            return redirect('/pengawas');
        } elseif (Auth::user()->hasRole('penyidik')) {
            return redirect('/penyidik');
        }
    }
    return view('welcome');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/superadmin', 'SuperadminController@beranda');
    Route::get('/superadmin/listpengaduan', 'SuperadminController@listpengaduan');
    Route::get('/superadmin/listpengaduan/create', 'SuperadminController@listpengaduancreate');
    Route::post('/superadmin/listpengaduan/create', 'SuperadminController@listpengaduanstore');
    Route::get('/superadmin/listpengaduan/edit/{id}', 'SuperadminController@listpengaduanedit');
    Route::post('/superadmin/listpengaduan/edit/{id}', 'SuperadminController@listpengaduanupdate');
    Route::get('/superadmin/listpengaduan/delete/{id}', 'SuperadminController@listpengaduandelete');

    Route::get('/superadmin/penanganan', 'SuperadminController@penanganan');
    Route::get('/superadmin/penanganan/edit/{id}', 'SuperadminController@penangananedit');
    Route::post('/superadmin/penanganan/edit/{id}', 'SuperadminController@penangananupdate');

    Route::get('/superadmin/penanganan/suratpenunjukan/{id}', 'SuperadminController@surat1');
    Route::get('/superadmin/penanganan/suratpanggilan/{id}', 'SuperadminController@surat2');

    Route::get('/superadmin/jenispengaduan', 'SuperadminController@jenispengaduan');
    Route::get('/superadmin/jenispengaduan/create', 'SuperadminController@jenispengaduancreate');
    Route::post('/superadmin/jenispengaduan/create', 'SuperadminController@jenispengaduanstore');
    Route::get('/superadmin/jenispengaduan/edit/{id}', 'SuperadminController@jenispengaduanedit');
    Route::post('/superadmin/jenispengaduan/edit/{id}', 'SuperadminController@jenispengaduanupdate');
    Route::get('/superadmin/jenispengaduan/delete/{id}', 'SuperadminController@jenispengaduandelete');

    Route::get('/superadmin/pengadu', 'SuperadminController@pengadu');
    Route::get('/superadmin/pengadu/create', 'SuperadminController@pengaducreate');
    Route::post('/superadmin/pengadu/create', 'SuperadminController@pengadustore');
    Route::get('/superadmin/pengadu/edit/{id}', 'SuperadminController@pengaduedit');
    Route::post('/superadmin/pengadu/edit/{id}', 'SuperadminController@pengaduupdate');
    Route::get('/superadmin/pengadu/delete/{id}', 'SuperadminController@pengadudelete');

    Route::get('/superadmin/pengawas', 'SuperadminController@pengawas');
    Route::get('/superadmin/pengawas/create', 'SuperadminController@pengawascreate');
    Route::post('/superadmin/pengawas/create', 'SuperadminController@pengawasstore');
    Route::get('/superadmin/pengawas/edit/{id}', 'SuperadminController@pengawasedit');
    Route::post('/superadmin/pengawas/edit/{id}', 'SuperadminController@pengawasupdate');
    Route::get('/superadmin/pengawas/delete/{id}', 'SuperadminController@pengawasdelete');

    Route::get('/superadmin/penyidik', 'SuperadminController@penyidik');
    Route::get('/superadmin/penyidik/create', 'SuperadminController@penyidikcreate');
    Route::post('/superadmin/penyidik/create', 'SuperadminController@penyidikstore');
    Route::get('/superadmin/penyidik/edit/{id}', 'SuperadminController@penyidikedit');
    Route::post('/superadmin/penyidik/edit/{id}', 'SuperadminController@penyidikupdate');
    Route::get('/superadmin/penyidik/delete/{id}', 'SuperadminController@penyidikdelete');

    Route::get('/superadmin/perusahaan', 'SuperadminController@perusahaan');
    Route::get('/superadmin/perusahaan/create', 'SuperadminController@perusahaancreate');
    Route::post('/superadmin/perusahaan/create', 'SuperadminController@perusahaanstore');
    Route::get('/superadmin/perusahaan/edit/{id}', 'SuperadminController@perusahaanedit');
    Route::post('/superadmin/perusahaan/edit/{id}', 'SuperadminController@perusahaanupdate');
    Route::get('/superadmin/perusahaan/delete/{id}', 'SuperadminController@perusahaandelete');


    Route::get('/superadmin/laporan', 'SuperadminController@laporan');
    Route::post('/superadmin/laporan', 'SuperadminController@exportpdf');
});

Route::group(['middleware' => ['auth', 'role:pengadu']], function () {
    Route::get('/pengadu', 'PengaduController@beranda');
});

Route::group(['middleware' => ['auth', 'role:pengawas']], function () {
    Route::get('/pengawas', 'PengawasController@beranda');
});

Route::group(['middleware' => ['auth', 'role:penyidik']], function () {
    Route::get('/penyidik', 'PenyidikController@beranda');
});
