<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.form_login');
})->name('index');
Route::post('login', "Login\LoginController@proses")->name('proseslogin');

/* PEMOHON */
Route::get('pemohon-verified', function() {return view('pages.pemohon.dump.forminput-verified');})->name('pemohon-verified');
Route::get('pemohon-rejected', function() {return view('pages.pemohon.dump.forminput-rejected');})->name('pemohon-rejected');
Route::get('pemohon-pending', function() {return view('pages.pemohon.dump.forminput-pending');})->name('pemohon-pending');
Route::get('pemohon-accepted', function() {return view('pages.pemohon.dump.forminput-accepted');})->name('pemohon-accepted');
Route::get('pemohon-acceptedincondition', function() {return view('pages.pemohon.dump.forminput-accepted-incondition');})->name('pemohon-acceptedincondition');
Route::get('pemohon-new', function() {return view('pages.pemohon.forminput');})->name('pemohon-new');
Route::get('pemohon', function() {return view('pages.pemohon.home');})->name('pemohon');

/* PEMERIKSA */
Route::get('pemeriksa', function() {return view('pages.pemeriksa.home');})->name('pemeriksa');
Route::get('pemeriksa-periksa', function() {return view('pages.pemeriksa.forminput');})->name('pemeriksa-periksa');

// Route::get('pemohon', "PemohonController@index")->name('pemohon');


//Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
//    Route::get('/input-data-pegawai', "Main\MenuController@showInputDataPegawai")->name("admin.inputdatawalpegawai");
//    Route::get('/input-data-pegawai-crud', "Admin\InputDataAwalPegawaiController@crud")->name("admin.inputdatawalpegawai_crud");
//    Route::post('/input-data-pegawai', "Admin\InputDataAwalPegawaiController@save")->name("admin.inputdatawalpegawai_post");
//
//    Route::get('/profil-pegawai', "Main\MenuController@showAdminProfilPegawai")->name("admin.profilpegawai");
//    Route::get('/profil-pegawai-detail', "Main\MenuController@showAdminDetailProfilPegawai")->name("admin.profilpegawaidetail");
//
//    Route::get('/duk', "Main\MenuController@showDUKPegawai")->name("admin.duk");
//});
//Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
//    Route::group(['prefix' => 'informasi'], function () {
//        //user.informasi.profilpribadi
//        Route::get('/profil-pribadi', "Main\MenuController@showProfilPribadi")->name("user.informasi.profilpribadi");
//        Route::get('/profil-keluarga', "Main\MenuController@showProfilKeluarga")->name("user.informasi.profilkeluarga");
//        Route::get('/profil-pegawai', "Main\MenuController@showProfilPegawai")->name("user.informasi.profilpegawai");
//        Route::get('/profil-pendidikan', "Main\MenuController@showProfilPendidikan")->name("user.informasi.profilpendidikan");
//        Route::get('/riwayat-jabatan', "Main\MenuController@showRiwayatJabatan")->name("user.informasi.riwayatjabatan");
//        Route::get('/riwayat-pangkat', "Main\MenuController@showRiwayatPangkat")->name("user.informasi.riwayatpangkat");
//        Route::get('/riwayat-pendidikan-dan-pelatihan', "Main\MenuController@showRiwayatPendidikanDanPelatihan")->name("user.informasi.riwayatpendidikandanpelatihan");
//        Route::get('/riwayat-penghargaan', "Main\MenuController@showRiwayatPenghargaan")->name("user.informasi.riwayatpenghargaan");
//        Route::get('/riwayat-skp-dan-dp3', "Main\MenuController@showRiwayatSKPDanDP3")->name("user.informasi.riwayatskpdandp3");
//        Route::get('/hukuman-disiplin', "Main\MenuController@showHukumanDisiplin")->name("user.informasi.hukumandisiplin");
//
//        //user.informasi.usulankepegawaian
//        Route::get('/usulan-kepegawaian', function () {
//            return view('pages.user.informasi-data-pegawai.form_usulan_kepegawaian');
//        })->name("user.informasi.usulankepegawaian");
//
//        //update dan delete
//        Route::get('/profil-keluarga-crud', "User\DataPegawai\ProfilKeluargaController@crud")->name("user.informasi.profilkeluarga_crud");
//
//        //save
//        Route::post('/profil-pribadi', "User\DataPegawai\ProfilPribadiController@save")->name("user.informasi.profilpribadi_post");
//    });
//});
//
//Route::group(['prefix' => 'api'], function () {
//    Route::get('/daerah', "API\APIController@getDaerah")->name("api.getdaerah");
//});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
