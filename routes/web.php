<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\{
    UserController,
    DashboardController,
    IncludelistController,
    LayananController,
    JenislayananController,
    ListprosesController,
    PerusahaanController,
    TransaksiController,
    MainprocessController,
    PembayaranController,
    KategoriController,
    ArtikelController,
    PromoController,
    CareerController,
    CheckingController,
    ContactController,
    OfficeController,
    CetakController,
    BackupController,
    RekeningController
};
use App\Http\Controllers\Sales\{
    DashboardsalesController,
    ContactsalesController,
    CheckingsalesController,
    LayanansalesController,
    PerusahaansalesController,
    MainprosessalesController
};

use App\Http\Controllers\Ops\{
    DashboardopsController,
    ContactopsController,
    CheckingopsController,
    LayananopsController,
    PerusahaanopsController,
    MainprocessopsController
};

use App\Http\Controllers\Finance\{
    DashboardfinanceController,
    LayananfinanceController,
    PerusahaanfinanceController,
    PembayaranfinanceController
};

use App\Http\Controllers\Publisher\{
    DashboardpublisherController,
    KategoripublisherController,
    ArtikelpublisherController,
    PromopublisherController,
    CareerpublisherController
};


// Route::get('/test', function () {
//     return view('web.index');
// });

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/home', [MainController::class, 'index'])->name('home.index');

Route::get('/about-us', [MainController::class, 'aboutUs'])->name('about.us');

Route::get('/layanan', [MainController::class, 'layanan'])->name('layanan');
Route::get('/layanan/pendirian-perusahaan', [MainController::class, 'pendirianPshn'])->name('layanan.pendirianperusahaan');
    Route::get('/layanan/pendirian-pt', [MainController::class, 'pendirianPt'])->name('layanan.pendirianpt');
        Route::get('/layanan/pendirian-pt-persekutuan-modal', [MainController::class, 'pendirianPtPersekutuan'])->name('layanan.pendirianptpersekutuan');
        Route::get('/layanan/pendirian-pt-perorangan', [MainController::class, 'pendirianPtPerorangan'])->name('layanan.pendirianptperorangan');

    Route::get('/layanan/pendirian-cv', [MainController::class, 'pendirianCv'])->name('layanan.pendiriancv');
    Route::get('/layanan/pendirian-firma', [MainController::class, 'pendirianFirma'])->name('layanan.pendirianfirma');
    Route::get('/layanan/pendirian-persekutuan-perdata', [MainController::class, 'pendirianPerdata'])->name('layanan.pendirianperdata');
    Route::get('/layanan/penanaman-modal-asing', [MainController::class, 'pendirianPma'])->name('layanan.pendirianpma');
    Route::get('/layanan/pendirian-yayasan', [MainController::class, 'pendirianYayasan'])->name('layanan.pendirianyayasan');
    Route::get('/layanan/pendirian-koperasi', [MainController::class, 'pendirianKoperasi'])->name('layanan.pendiriankoperasi');
    Route::get('/layanan/pendirian-perkumpulan', [MainController::class, 'pendirianPerkumpulan'])->name('layanan.pendirianperkumpulan');

Route::get('/layanan/penutupan-perusahaan', [MainController::class, 'PenutupanPerusahaan'])->name('penutupan.perusahaan');
Route::get('/layanan/virtual-office', [MainController::class, 'virtualOffice'])->name('virtual.office');
Route::get('/layanan/virtual-office-one-page', [MainController::class, 'virtualOfficeOne'])->name('virtual.officeone');
Route::get('/layanan/perizinan-khusus', [MainController::class, 'perizinanKhusus'])->name('perizinan.khusus');
Route::get('/layanan/digital-marketing', [MainController::class, 'digitalMarketing'])->name('digital.marketing');
Route::get('/layanan/perizinan-usaha', [MainController::class, 'perizinanUsaha'])->name('perizinan.usaha');
Route::get('/layanan/perpajakan', [MainController::class, 'perpajakan'])->name('layanan.perpajakan');
Route::get('/layanan/haki', [MainController::class, 'haki'])->name('layanan.haki');
Route::get('/layanan/hukum', [MainController::class, 'hukum'])->name('layanan.hukum');
Route::get('/layanan/perizinan-properti', [MainController::class, 'perizinanProperti'])->name('perizinan.properti');
Route::get('/layanan/privilege', [MainController::class, 'privilege'])->name('layanan.privilege');
Route::get('/layanan/pembuatan-perjanjian', [MainController::class, 'pembuatanPerjanjian'])->name('pembuatan.perjanjian');
Route::get('/layanan/pembuatan-dokumen', [MainController::class, 'pembuatanDokumen'])->name('pembuatan.dokumen');
Route::get('/layanan/layanan-lainnya', [MainController::class, 'layananLainnya'])->name('layanan.lainnya');

Route::get('/layanan/idak', [MainController::class, 'layananIdak'])->name('layanan.idak');
Route::get('/layanan/ppiu', [MainController::class, 'layananPpiu'])->name('layanan.ppiu');

        


Route::get('/artikel', [MainController::class, 'artikel'])->name('artikel');
Route::get('/artikel/kategori/{slug}', [MainController::class, 'artikelKategori'])->name('artikel.kategori');
Route::get('/artikel/tahun/{tahun}', [MainController::class, 'artikelTahun'])->name('artikel.tahun');
Route::get('/artikel/{slug}', [MainController::class, 'artikelDetail'])->name('artikel.detail');
Route::post('/artikel/search', [MainController::class, 'artikelSearch'])->name('searchArtikel');

Route::get('/promo', [MainController::class, 'promo'])->name('promo');
Route::get('/promo/{slug}', [MainController::class, 'promoDetail'])->name('promo.detail');

Route::get('/career', [MainController::class, 'career'])->name('career');
Route::get('/career/{slug}', [MainController::class, 'careerDetail'])->name('career.detail');

Route::get('/faq', [MainController::class, 'faq'])->name('faq');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::post('/contact/store', [MainController::class, 'storeContact'])->name('storeContact');

Route::get('/kbli-terbaru', [MainController::class, 'kbli'])->name('kbli');

Route::get('/cek-nama-pt', [MainController::class, 'cekNamaPt'])->name('ceknamapt');
Route::post('/checking/store', [MainController::class, 'storeChecking'])->name('storeChecking');

Route::get('/tracking-system', [MainController::class, 'trackingSystem'])->name('tracking.system');
Route::post('/tracking-system/search', [MainController::class, 'searchTrackingSystem'])->name('searchTrackingSystem');

Route::get('/e-book', [MainController::class, 'ebook'])->name('e-book');

Route::get('/get-contact-nomor', [MainController::class, 'getContactNomor'])->name('getcontactnomor');

Route::get('/sitemap.xml', [MainController::class, 'sitemap'])->name('sitemap.xml');







Route::get('/auth_admstr', [AuthController::class,'index'])->name('users.login');
Route::post('/auth_admstr/login', [AuthController::class,'login'])->name('users.login.post');
Route::get('/my-forgot-password', [AuthController::class, 'forgotPassword'])->name('users.forgotpassword');
Route::post('/my-forgot-password/searchemail', [AuthController::class, 'searchEmail'])->name('users.searchemail');
Route::get('/my-forgot-password/reset-password/{uuid}', [AuthController::class, 'resetPassword'])->name('users.reset-password');
Route::post('/my-forgot-password/submit-new-password/{uuid}', [AuthController::class, 'submitNewPassword'])->name('users.submitnewpassword');

Route::middleware(['AuthUsers', 'UserOnlineStatus'])->group(function () {
    Route::get('/auth_admstr/logout', [AuthController::class, 'logout'])->name('users.logout');
    Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::put('/admstr/users/update/{uuid}', [UserController::class, 'update'])->name('users.update');
    Route::get('/ulang-tahun', [AuthController::class, 'ulangTahun'])->name('user.ulangtahun');
    
    // Cetak
    Route::get('/admstr/transaksi/cetak/{uuid}', [CetakController::class, 'cetakTransaksi'])->name('cetaktransaksi.cetaktrx');
    Route::get('/admstr/transaksi/pembayaran/cetak/{uuid}', [CetakController::class, 'cetakPembayaranById'])->name('cetaktransaksibyr.cetaktrxbyr');
    Route::get('/admstr/transaksi/pembayaran/all-cetak/{uuid}', [CetakController::class, 'cetakTrxAllByr'])->name('cetaktransaksibyrall.cetaktrxbyrall');
    Route::get('/print-data/layanan/jenis/cetak', [CetakController::class, 'cetakJenisLayanan'])->name('cetaklayanan.cetakjenis');

});

//new middleware 
Route::middleware(['AuthNextAkses', 'UserOnlineStatus'])->group(function () {
    // Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/admstr/dashboard', [DashboardController::class, 'index'])->name('users.dashboard');

    Route::get('/admstr/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/admstr/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/admstr/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/admstr/users/show/{uuid}', [UserController::class, 'show'])->name('users.show');
    // Route::put('/admstr/users/update/{uuid}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/admstr/users/destroy/{uuid}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::get('/admstr/includelist', [IncludelistController::class, 'index'])->name('includelist.index');
    Route::get('/admstr/includelist/create', [IncludelistController::class, 'create'])->name('includelist.create');
    Route::post('/admstr/includelist/store', [IncludelistController::class, 'store'])->name('includelist.store');
    Route::get('/admstr/includelist/show/{uuid}', [IncludelistController::class, 'show'])->name('includelist.show');
    Route::put('/admstr/includelist/update/{uuid}', [IncludelistController::class, 'update'])->name('includelist.update');
    Route::delete('/admstr/includelist/destroy/{uuid}', [IncludelistController::class, 'destroy'])->name('includelist.destroy');

    Route::get('/admstr/layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::get('/admstr/layanan/create', [LayananController::class, 'create'])->name('layanan.create');
    Route::post('/admstr/layanan/store', [LayananController::class, 'store'])->name('layanan.store');
    Route::get('/admstr/layanan/show/{uuid}', [LayananController::class, 'show'])->name('layanan.show');
    Route::get('/admstr/layanan/edit/{uuid}', [LayananController::class, 'edit'])->name('layanan.edit');
    Route::put('/admstr/layanan/update/{uuid}', [LayananController::class, 'update'])->name('layanan.update');
    Route::delete('/admstr/layanan/destroy/{uuid}', [LayananController::class, 'destroy'])->name('layanan.destroy');
    Route::post('/admstr/layanan/addrolelayinc', [LayananController::class, 'addRoleLayInc'])->name('layanan.addrolelayinc');
    Route::delete('/admstr/layanan/destroyrolelayinc/{id}', [LayananController::class, 'destroyrolelayinc'])->name('layanan.destroyrolelayinc');
    Route::get('/admstr/layanan/editrolelayinc/{id}', [LayananController::class, 'editRoleLayinc'])->name('editrolelayinc.edit');
    Route::post('/admstr/layanan/updaterolelayinc/update', [LayananController::class, 'updateRoleLayinc'])->name('updaterolelayinc.update');
    Route::get('/admstr/layanan/getjenislayanan', [LayananController::class, 'getJenisLayanan'])->name('layanan.getjenislayanan');

    Route::get('/admstr/layanan-jenis', [JenislayananController::class, 'index'])->name('layananjenis.index');
    Route::get('/admstr/layanan-jenis/create/{uuid}', [JenislayananController::class, 'create'])->name('layananjenis.create');
    Route::post('/admstr/layanan-jenis/store/{uuid}', [JenislayananController::class, 'store'])->name('layananjenis.store');
    Route::get('/admstr/layanan-jenis/show/{uuid}/{jnsuuid}', [JenislayananController::class, 'show'])->name('layananjenis.show');
    Route::put('/admstr/layanan-jenis/update/{uuid}/{jnsuuid}', [JenislayananController::class, 'update'])->name('layananjenis.update');
    Route::delete('/admstr/layanan-jenis/destroyjenis/{id}', [JenislayananController::class, 'destroyJenis'])->name('layananjenis.destroyjenis');
    Route::get('/admstr/layanan-jenis/editrolelayincjns/{id}', [JenislayananController::class, 'editRoleLayincjns'])->name('editrolelayincjns.edit');
    Route::post('/admstr/layanan-jenis/updaterolelayincjns/update', [JenislayananController::class, 'updateRoleLayincjns'])->name('updaterolelayincjns.update');
    Route::post('/admstr/layanan-jenis/addrolelayincjns', [JenislayananController::class, 'addRoleLayIncjns'])->name('layananjenis.addrolelayincjns');
    Route::delete('/admstr/layanan-jenis/destroyrolelayincjns/{id}', [JenislayananController::class, 'destroyrolelayincjns'])->name('layananjenis.destroyrolelayincjns');

    Route::get('/admstr/list-proses', [ListprosesController::class, 'index'])->name('listproses.index');
    Route::get('/admstr/list-proses/create', [ListprosesController::class, 'create'])->name('listproses.create');
    Route::post('/admstr/list-proses/store', [ListprosesController::class, 'store'])->name('listproses.store');
    Route::get('/admstr/list-proses/show/{uuid}', [ListprosesController::class, 'show'])->name('listproses.show');
    Route::put('/admstr/list-proses/update/{uuid}', [ListprosesController::class, 'update'])->name('listproses.update');
    Route::delete('/admstr/list-proses/destroy/{uuid}', [ListprosesController::class, 'destroy'])->name('listproses.destroy');

    Route::get('/admstr/perusahaan', [PerusahaanController::class, 'index'])->name('perusahaan.index');
    Route::get('/admstr/perusahaan/create', [PerusahaanController::class, 'create'])->name('perusahaan.create');
    Route::post('/admstr/perusahaan/store', [PerusahaanController::class, 'store'])->name('perusahaan.store');
    Route::get('/admstr/perusahaan/show/{uuid}', [PerusahaanController::class, 'show'])->name('perusahaan.show');
    Route::get('/admstr/perusahaan/details/{uuid}', [PerusahaanController::class, 'details'])->name('perusahaan.details');
    Route::put('/admstr/perusahaan/update/{uuid}', [PerusahaanController::class, 'update'])->name('perusahaan.update');
    Route::delete('/admstr/perusahaan/destroy/{uuid}', [PerusahaanController::class, 'destroy'])->name('perusahaan.destroy');

    Route::get('/admstr/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/admstr/transaksi/create/{uuid}', [TransaksiController::class, 'create'])->name('transaksi.create');
    Route::post('/admstr/transaksi/store/{uuid}', [TransaksiController::class, 'store'])->name('transaksi.store');
    Route::get('/admstr/transaksi/details/{uuid}', [TransaksiController::class, 'details'])->name('transaksi.details');
    Route::get('/admstr/transaksi/show/{uuid}', [TransaksiController::class, 'show'])->name('transaksi.show');
    Route::put('/admstr/transaksi/update/{uuid}', [TransaksiController::class, 'update'])->name('transaksi.update');
    Route::delete('/admstr/transaksi/destroy/{uuid}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy');
    Route::post('/admstr/transaksi/addjenis', [TransaksiController::class, 'addJenis'])->name('transaksi.addjenis');
    Route::delete('/admstr/transaksi/destroyjenis/{id}', [TransaksiController::class, 'destroyJenis'])->name('transaksi.destroyjenis');
    Route::post('/admstr/transaksi/addjenisdtl', [TransaksiController::class, 'addJenisDtl'])->name('transaksi.addjenisdtl');
    Route::delete('/admstr/transaksi/destroydtl/{id}', [TransaksiController::class, 'destroyDetail'])->name('transaksi.destroydtl');
    Route::get('/admstr/transaksi/editjnsdtl/{id}', [TransaksiController::class, 'editJenisDetail'])->name('editjnsdtl.edit');
    Route::post('/admstr/transaksi/updatejenisdetail/update', [TransaksiController::class, 'updateJenisDetail'])->name('updatejenisdetail.update');

    Route::get('/admstr/main-process/start', [MainprocessController::class, 'start'])->name('mainprocess.start');
    Route::get('/admstr/main-process/start/{uuid}', [MainprocessController::class, 'startGetUuid'])->name('mainprocess.startgetuuid');
    Route::put('/admstr/main-process/start/update/{uuid}', [MainprocessController::class, 'updateNotes'])->name('mainprocess.startupdatenotes');
    Route::get('/admstr/main-process/start/startprocess/{uuid}', [MainprocessController::class, 'startProcess'])->name('mainprocess.startprocess');

    Route::get('/admstr/main-process/onprocess', [MainprocessController::class, 'onProcess'])->name('mainprocess.onprocess');
    Route::get('/admstr/main-process/onprocess/{uuid}', [MainprocessController::class, 'onprocessGetUuid'])->name('mainprocess.onprocessgetuuid');
    Route::put('/admstr/main-process/onprocess/update/{uuid}', [MainprocessController::class, 'updateNotesOn'])->name('mainprocess.startupdatenoteson');
    Route::post('/admstr/main-process/onprocess/creatests', [MainprocessController::class, 'addDetailStatus'])->name('mainprocess.creatests');
    Route::get('/admstr/main-proces/onprocess/editdetailprocess/{id}', [MainprocessController::class, 'editDetailStatus'])->name('mainprocess.editdetailprocess');
    Route::post('/admstr/main-proces/onprocess/updatedetailprocess/status/{kode}', [MainprocessController::class, 'updateDetailStatus'])->name('mainprocess.updatedetailprocessstatus');
    
    Route::get('/admstr/main-process/pending', [MainprocessController::class, 'pending'])->name('mainprocess.pending');

    Route::get('/admstr/main-process/completed', [MainprocessController::class, 'completed'])->name('mainprocess.completed');
    Route::get('/admstr/main-process/completed/{uuid}', [MainprocessController::class, 'completedGetUuid'])->name('mainprocess.completedgetuuid');

    Route::get('/admstr/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
    Route::get('/admstr/pembayaran/create/{uuid}', [PembayaranController::class, 'create'])->name('pembayaran.create');
    Route::post('/admstr/pembayaran/store', [PembayaranController::class, 'store'])->name('pembayaran.store');
    Route::get('/admstr/pembayaran/show/{uuid}', [PembayaranController::class, 'show'])->name('pembayaran.show');
    Route::put('/admstr/pembayaran/update/{uuid}', [PembayaranController::class, 'update'])->name('pembayaran.update');
    Route::delete('/admstr/pembayaran/destroy/{uuid}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');
    Route::delete('/admstr/pembayaran/destroybayar/{uuid}', [PembayaranController::class, 'destroyBayar'])->name('pembayaran.destroybayar');

    Route::get('/admstr/kategori', [KategoriController::class, 'index'])->name('kategori.index');
    Route::get('/admstr/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/admstr/kategori/store', [KategoriController::class, 'store'])->name('kategori.store');
    Route::get('/admstr/kategori/show/{uuid}', [KategoriController::class, 'show'])->name('kategori.show');
    Route::put('/admstr/kategori/update/{uuid}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/admstr/kategori/destroy/{uuid}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    Route::get('/admstr/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
    Route::get('/admstr/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/admstr/artikel/store', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/admstr/artikel/show/{uuid}', [ArtikelController::class, 'show'])->name('artikel.show');
    Route::put('/admstr/artikel/update/{uuid}', [ArtikelController::class, 'update'])->name('artikel.update');
    Route::delete('/admstr/artikel/destroy/{uuid}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
    Route::post('/admstr/artikel/addkeyword', [ArtikelController::class, 'addKeyword'])->name('artikel.addkeyword');
    Route::delete('/admstr/artikel/destroykeyword/{id}', [ArtikelController::class, 'destroyKeyword'])->name('artikel.destroykeyword');
    Route::get('/admstr/artikel/getlinks', [ArtikelController::class, 'getLinks'])->name('artikel.getlinks');

    Route::get('/admstr/promo', [PromoController::class, 'index'])->name('promo.index');
    Route::get('/admstr/promo/create', [PromoController::class, 'create'])->name('promo.create');
    Route::post('/admstr/promo/store', [PromoController::class, 'store'])->name('promo.store');
    Route::get('/admstr/promo/show/{uuid}', [PromoController::class, 'show'])->name('promo.show');
    Route::put('/admstr/promo/update/{uuid}', [PromoController::class, 'update'])->name('promo.update');
    Route::delete('/admstr/promo/destroy/{uuid}', [PromoController::class, 'destroy'])->name('promo.destroy');

    Route::get('/admstr/career', [CareerController::class, 'index'])->name('career.index');
    Route::get('/admstr/career/create', [CareerController::class, 'create'])->name('career.create');
    Route::post('/admstr/career/store', [CareerController::class, 'store'])->name('career.store');
    Route::get('/admstr/career/show/{uuid}', [CareerController::class, 'show'])->name('career.show');
    Route::put('/admstr/career/update/{uuid}', [CareerController::class, 'update'])->name('career.update');
    Route::delete('/admstr/career/destroy/{uuid}', [CareerController::class, 'destroy'])->name('career.destroy');

    Route::get('/admstr/checking', [CheckingController::class, 'index'])->name('checking.index');
    Route::get('/admstr/checking/create', [CheckingController::class, 'create'])->name('checking.create');
    Route::post('/admstr/checking/store', [CheckingController::class, 'store'])->name('checking.store');
    Route::get('/admstr/checking/show/{uuid}', [CheckingController::class, 'show'])->name('checking.show');
    Route::put('/admstr/checking/update/{uuid}', [CheckingController::class, 'update'])->name('checking.update');
    Route::delete('/admstr/checking/destroy/{uuid}', [CheckingController::class, 'destroy'])->name('checking.destroy');
    Route::post('/admstr/checking/chats/{uuid}', [CheckingController::class, 'chats'])->name('checking.chats');

    Route::get('/admstr/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/admstr/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/admstr/contact/store', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/admstr/contact/show/{uuid}', [ContactController::class, 'show'])->name('contact.show');
    Route::put('/admstr/contact/update/{uuid}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/admstr/contact/destroy/{uuid}', [ContactController::class, 'destroy'])->name('contact.destroy');
    Route::post('/admstr/contact/chats/{uuid}', [ContactController::class, 'chats'])->name('contact.chats');

    Route::get('/admstr/office', [OfficeController::class, 'index'])->name('office.index');
    Route::get('/admstr/office/create', [OfficeController::class, 'create'])->name('office.create');
    Route::post('/admstr/office/store', [OfficeController::class, 'store'])->name('office.store');
    Route::get('/admstr/office/show/{uuid}', [OfficeController::class, 'show'])->name('office.show');
    Route::put('/admstr/office/update/{uuid}', [OfficeController::class, 'update'])->name('office.update');
    Route::get('/admstr/office/details/{uuid}', [OfficeController::class, 'details'])->name('office.details');
    Route::delete('/admstr/office/destroy/{uuid}', [OfficeController::class, 'destroy'])->name('office.destroy');
    Route::get('/admstr/office/nomor/create/{uuid}', [OfficeController::class, 'createNomor'])->name('nomoroffice.create');
    Route::post('/admstr/office/nomor/store/{uuid}', [OfficeController::class, 'storeNomor'])->name('nomoroffice.store');
    Route::get('/admstr/office/nomor/show/{uuid}/{uuidnomor}', [OfficeController::class, 'showNomor'])->name('nomoroffice.show');
    Route::put('/admstr/office/nomor/update/{uuid}/{uuidnomor}', [OfficeController::class, 'updateNomor'])->name('nomoroffice.update');
    Route::delete('/admstr/office/nomor/destroy/{uuid}/{uuidnomor}', [OfficeController::class, 'destroyNomor'])->name('nomoroffice.destroy');
    
    Route::get('/admstr/backup', [BackupController::class, 'index'])->name('backup.index');
    Route::get('/admstr/backup-database', [BackupController::class, 'backup'])->name('backup.database');

    Route::get('/admstr/user/profile/dtl/{uuid}', [DashboardController::class, 'profileDetail'])->name('users.profiledetail');

    Route::get('/admstr/rekening', [RekeningController::class, 'index'])->name('rekening.index');
    Route::get('/admstr/rekening/create', [RekeningController::class, 'create'])->name('rekening.create');
    Route::post('/admstr/rekening/store', [RekeningController::class, 'store'])->name('rekening.store');
    Route::get('/admstr/rekening/show/{uuid}', [RekeningController::class, 'show'])->name('rekening.show');
    Route::put('/admstr/rekening/update/{uuid}', [RekeningController::class, 'update'])->name('rekening.update');
    Route::delete('/admstr/rekening/destroy/{uuid}', [RekeningController::class, 'destroy'])->name('rekening.destroy');
});


//new middleware Finance
Route::middleware(['AuthFinance', 'UserOnlineStatus'])->group(function () {
    // Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/finance/dashboard', [DashboardfinanceController::class, 'index'])->name('finance.dashboard');

    Route::get('/finance/layanan', [LayananfinanceController::class, 'index'])->name('financelayanan.index');
    Route::get('/finance/layanan/show/{uuid}', [LayananfinanceController::class, 'show'])->name('financelayanan.show');
    Route::get('/finance/layanan-jenis/show/{uuid}/{jnsuuid}', [LayananfinanceController::class, 'showJenis'])->name('financelayananjenis.showjenis');
    Route::get('/finance/layanan-jenis', [LayananfinanceController::class, 'indexJenis'])->name('financelayananjenis.index');

    Route::get('/finance/perusahaan', [PerusahaanfinanceController::class, 'index'])->name('financeperusahaan.index');
    Route::get('/finance/perusahaan/details/{uuid}', [PerusahaanfinanceController::class, 'details'])->name('financeperusahaan.details');

    Route::get('/finance/transaksi', [PerusahaanfinanceController::class, 'indexTransaksi'])->name('financetransaksi.index');
    Route::get('/finance/transaksi/show/{uuid}', [PerusahaanfinanceController::class, 'showTransaksi'])->name('financetransaksi.show');
    Route::put('/finance/transaksi/update/{uuid}', [PerusahaanfinanceController::class, 'updateTransaksi'])->name('financetransaksi.update');
    Route::get('/finance/transaksi/details/{uuid}', [PerusahaanfinanceController::class, 'detailsTransaksi'])->name('financetransaksi.details');

    Route::get('/finance/transaksi/onprocess/{uuid}', [PerusahaanfinanceController::class, 'onprocessGetUuid'])->name('financetransaksi.prosesdetails');

    Route::get('/finance/pembayaran', [PembayaranfinanceController::class, 'index'])->name('financepembayaran.index');
    Route::get('/finance/pembayaran/create/{uuid}', [PembayaranfinanceController::class, 'create'])->name('financepembayaran.create');
    Route::post('/finance/pembayaran/store', [PembayaranfinanceController::class, 'store'])->name('financepembayaran.store');
    Route::get('/finance/pembayaran/show/{uuid}', [PembayaranfinanceController::class, 'show'])->name('financepembayaran.show');
    Route::put('/finance/pembayaran/update/{uuid}', [PembayaranfinanceController::class, 'update'])->name('financepembayaran.update');
    Route::delete('/finance/pembayaran/destroy/{uuid}', [PembayaranfinanceController::class, 'destroy'])->name('financepembayaran.destroy');
    Route::delete('/finance/pembayaran/destroybayar/{uuid}', [PembayaranfinanceController::class, 'destroyBayar'])->name('financepembayaran.destroybayar');
});


//new middleware Sales
Route::middleware(['AuthSales', 'UserOnlineStatus'])->group(function () {
    // Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');

    Route::get('/sales/dashboard', [DashboardsalesController::class, 'index'])->name('sales.dashboard');

    Route::get('/sales/contact', [ContactsalesController::class, 'index'])->name('salescontact.index');
    Route::get('/sales/contact/show/{uuid}', [ContactsalesController::class, 'show'])->name('salescontact.show');
    Route::post('/sales/contact/chats/{uuid}', [ContactsalesController::class, 'chats'])->name('salescontact.chats');

    Route::get('/sales/checking', [CheckingsalesController::class, 'index'])->name('saleschecking.index');
    Route::get('/sales/checking/show/{uuid}', [CheckingsalesController::class, 'show'])->name('saleschecking.show');
    Route::post('/sales/checking/chats/{uuid}', [CheckingsalesController::class, 'chats'])->name('saleschecking.chats');

    Route::get('/sales/layanan', [LayanansalesController::class, 'index'])->name('saleslayanan.index');
    Route::get('/sales/layanan/show/{uuid}', [LayanansalesController::class, 'show'])->name('saleslayanan.show');
    Route::get('/sales/layanan-jenis/show/{uuid}/{jnsuuid}', [LayanansalesController::class, 'showJenis'])->name('saleslayananjenis.showjenis');
    Route::get('/sales/layanan-jenis', [LayanansalesController::class, 'indexJenis'])->name('saleslayananjenis.index');

    Route::get('/sales/perusahaan', [PerusahaansalesController::class, 'index'])->name('salesperusahaan.index');
    Route::get('/sales/perusahaan/create', [PerusahaansalesController::class, 'create'])->name('salesperusahaan.create');
    Route::post('/sales/perusahaan/store', [PerusahaansalesController::class, 'store'])->name('salesperusahaan.store');
    Route::get('/sales/perusahaan/show/{uuid}', [PerusahaansalesController::class, 'show'])->name('salesperusahaan.show');
    Route::get('/sales/perusahaan/details/{uuid}', [PerusahaansalesController::class, 'details'])->name('salesperusahaan.details');
    Route::put('/sales/perusahaan/update/{uuid}', [PerusahaansalesController::class, 'update'])->name('salesperusahaan.update');

    Route::get('/sales/transaksi', [PerusahaansalesController::class, 'indexTransaksi'])->name('salestransaksi.index');
    Route::get('/sales/transaksi/create/{uuid}', [PerusahaansalesController::class, 'createTransaksi'])->name('salestransaksi.create');
    Route::post('/sales/transaksi/store/{uuid}', [PerusahaansalesController::class, 'storeTransaksi'])->name('salestransaksi.store');
    Route::post('/sales/transaksi/addjenis', [PerusahaansalesController::class, 'addJenis'])->name('salestransaksi.addjenis');
    Route::delete('/sales/transaksi/destroyjenis/{id}', [PerusahaansalesController::class, 'destroyJenis'])->name('salestransaksi.destroyjenis');
    Route::get('/sales/transaksi/show/{uuid}', [PerusahaansalesController::class, 'showTransaksi'])->name('salestransaksi.show');
    Route::get('/sales/transaksi/editjnsdtl/{id}', [PerusahaansalesController::class, 'editJenisDetail'])->name('saleseditjnsdtl.edit');
    Route::post('/sales/transaksi/updatejenisdetail/update', [PerusahaansalesController::class, 'updateJenisDetail'])->name('salesupdatejenisdetail.update');
    Route::delete('/sales/transaksi/destroydtl/{id}', [PerusahaansalesController::class, 'destroyDetail'])->name('salestransaksi.destroydtl');
    Route::put('/sales/transaksi/update/{uuid}', [PerusahaansalesController::class, 'updateTransaksi'])->name('salestransaksi.update');
    Route::get('/sales/transaksi/details/{uuid}', [PerusahaansalesController::class, 'detailsTransaksi'])->name('salestransaksi.details');

    Route::get('/sales/main-process/start', [MainprosessalesController::class, 'start'])->name('salesmainprocess.start');
    Route::get('/sales/main-process/start/{uuid}', [MainprosessalesController::class, 'startGetUuid'])->name('salesmainprocess.startgetuuid');
    Route::put('/sales/main-process/start/update/{uuid}', [MainprosessalesController::class, 'updateNotes'])->name('salesmainprocess.startupdatenotes');

    Route::get('/sales/main-process/onprocess', [MainprosessalesController::class, 'onProcess'])->name('salesmainprocess.onprocess');
    Route::get('/sales/main-process/onprocess/{uuid}', [MainprosessalesController::class, 'onprocessGetUuid'])->name('salesmainprocess.onprocessgetuuid');
    Route::put('/sales/main-process/onprocess/update/{uuid}', [MainprosessalesController::class, 'updateNotesOn'])->name('salesmainprocess.startupdatenoteson');
    
    Route::get('/sales/main-process/pending', [MainprosessalesController::class, 'pending'])->name('salesmainprocess.pending');
    
    Route::get('/sales/main-process/completed', [MainprosessalesController::class, 'completed'])->name('salesmainprocess.completed');
    Route::get('/sales/main-process/completed/{uuid}', [MainprosessalesController::class, 'completedGetUuid'])->name('salesmainprocess.completedgetuuid');
});


//new middleware Ops
Route::middleware(['AuthOps', 'UserOnlineStatus'])->group(function () {
    // Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/ops/dashboard', [DashboardopsController::class, 'index'])->name('ops.dashboard');

    Route::get('/ops/contact', [ContactopsController::class, 'index'])->name('opscontact.index');
    Route::get('/ops/contact/show/{uuid}', [ContactopsController::class, 'show'])->name('opscontact.show');
    Route::post('/ops/contact/chats/{uuid}', [ContactopsController::class, 'chats'])->name('opscontact.chats');

    Route::get('/ops/checking', [CheckingopsController::class, 'index'])->name('opschecking.index');
    Route::get('/ops/checking/show/{uuid}', [CheckingopsController::class, 'show'])->name('opschecking.show');
    Route::post('/ops/checking/chats/{uuid}', [CheckingopsController::class, 'chats'])->name('opschecking.chats');

    Route::get('/ops/layanan', [LayananopsController::class, 'index'])->name('opslayanan.index');
    Route::get('/ops/layanan/show/{uuid}', [LayananopsController::class, 'show'])->name('opslayanan.show');
    Route::get('/ops/layanan-jenis/show/{uuid}/{jnsuuid}', [LayananopsController::class, 'showJenis'])->name('opslayananjenis.showjenis');
    Route::get('/ops/layanan-jenis', [LayananopsController::class, 'indexJenis'])->name('opslayananjenis.index');

    Route::get('/ops/perusahaan', [PerusahaanopsController::class, 'index'])->name('opsperusahaan.index');
    Route::get('/ops/perusahaan/details/{uuid}', [PerusahaanopsController::class, 'details'])->name('opsperusahaan.details');

    Route::get('/ops/transaksi', [PerusahaanopsController::class, 'indexTransaksi'])->name('opstransaksi.index');
    Route::get('/ops/transaksi/show/{uuid}', [PerusahaanopsController::class, 'showTransaksi'])->name('opstransaksi.show');
    Route::put('/ops/transaksi/update/{uuid}', [PerusahaanopsController::class, 'updateTransaksi'])->name('opstransaksi.update');
    Route::get('/ops/transaksi/details/{uuid}', [PerusahaanopsController::class, 'detailsTransaksi'])->name('opstransaksi.details');

    Route::get('/ops/main-process/start', [MainprocessopsController::class, 'start'])->name('opsmainprocess.start');
    Route::get('/ops/main-process/start/{uuid}', [MainprocessopsController::class, 'startGetUuid'])->name('opsmainprocess.startgetuuid');
    Route::put('/ops/main-process/start/update/{uuid}', [MainprocessopsController::class, 'updateNotes'])->name('opsmainprocess.startupdatenotes');
    Route::get('/ops/main-process/start/startprocess/{uuid}', [MainprocessopsController::class, 'startProcess'])->name('opsmainprocess.startprocess');

    Route::get('/ops/main-process/onprocess', [MainprocessopsController::class, 'onProcess'])->name('opsmainprocess.onprocess');
    Route::get('/ops/main-process/onprocess/{uuid}', [MainprocessopsController::class, 'onprocessGetUuid'])->name('opsmainprocess.onprocessgetuuid');
    Route::put('/ops/main-process/onprocess/update/{uuid}', [MainprocessopsController::class, 'updateNotesOn'])->name('opsmainprocess.startupdatenoteson');
    Route::post('/ops/main-process/onprocess/creatests', [MainprocessopsController::class, 'addDetailStatus'])->name('opsmainprocess.creatests');
    Route::get('/ops/main-proces/onprocess/editdetailprocess/{id}', [MainprocessopsController::class, 'editDetailStatus'])->name('opsmainprocess.editdetailprocess');
    Route::post('/ops/main-proces/onprocess/updatedetailprocess/status/{kode}', [MainprocessopsController::class, 'updateDetailStatus'])->name('opsmainprocess.updatedetailprocessstatus');

    Route::get('/ops/main-process/pending', [MainprocessopsController::class, 'pending'])->name('opsmainprocess.pending');
    
    Route::get('/ops/main-process/completed', [MainprocessopsController::class, 'completed'])->name('opsmainprocess.completed');
    Route::get('/ops/main-process/completed/{uuid}', [MainprocessopsController::class, 'completedGetUuid'])->name('opsmainprocess.completedgetuuid');
});


//new middleware Publisher
Route::middleware(['AuthPublisher', 'UserOnlineStatus'])->group(function () {
    // Route::get('/profile', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/publisher/dashboard', [DashboardpublisherController::class, 'index'])->name('publisher.dashboard');

    Route::get('/publisher/kategori', [KategoripublisherController::class, 'index'])->name('publisherkategori.index');
    Route::get('/publisher/kategori/create', [KategoripublisherController::class, 'create'])->name('publisherkategori.create');
    Route::post('/publisher/kategori/store', [KategoripublisherController::class, 'store'])->name('publisherkategori.store');
    Route::get('/publisher/kategori/show/{uuid}', [KategoripublisherController::class, 'show'])->name('publisherkategori.show');
    Route::put('/publisher/kategori/update/{uuid}', [KategoripublisherController::class, 'update'])->name('publisherkategori.update');
    Route::delete('/publisher/kategori/destroy/{uuid}', [KategoripublisherController::class, 'destroy'])->name('publisherkategori.destroy');

    Route::get('/publisher/artikel', [ArtikelpublisherController::class, 'index'])->name('publisherartikel.index');
    Route::get('/publisher/artikel/create', [ArtikelpublisherController::class, 'create'])->name('publisherartikel.create');
    Route::post('/publisher/artikel/store', [ArtikelpublisherController::class, 'store'])->name('publisherartikel.store');
    Route::get('/publisher/artikel/show/{uuid}', [ArtikelpublisherController::class, 'show'])->name('publisherartikel.show');
    Route::put('/publisher/artikel/update/{uuid}', [ArtikelpublisherController::class, 'update'])->name('publisherartikel.update');
    Route::delete('/publisher/artikel/destroy/{uuid}', [ArtikelpublisherController::class, 'destroy'])->name('publisherartikel.destroy');
    Route::post('/publisher/artikel/addkeyword', [ArtikelpublisherController::class, 'addKeyword'])->name('publisherartikel.addkeyword');
    Route::delete('/publisher/artikel/destroykeyword/{id}', [ArtikelpublisherController::class, 'destroyKeyword'])->name('publisherartikel.destroykeyword');

    Route::get('/publisher/promo', [PromopublisherController::class, 'index'])->name('publisherpromo.index');
    Route::get('/publisher/promo/create', [PromopublisherController::class, 'create'])->name('publisherpromo.create');
    Route::post('/publisher/promo/store', [PromopublisherController::class, 'store'])->name('publisherpromo.store');
    Route::get('/publisher/promo/show/{uuid}', [PromopublisherController::class, 'show'])->name('publisherpromo.show');
    Route::put('/publisher/promo/update/{uuid}', [PromopublisherController::class, 'update'])->name('publisherpromo.update');
    Route::delete('/publisher/promo/destroy/{uuid}', [PromopublisherController::class, 'destroy'])->name('publisherpromo.destroy');

    Route::get('/publisher/career', [CareerpublisherController::class, 'index'])->name('publishercareer.index');
    Route::get('/publisher/career/create', [CareerpublisherController::class, 'create'])->name('publishercareer.create');
    Route::post('/publisher/career/store', [CareerpublisherController::class, 'store'])->name('publishercareer.store');
    Route::get('/publisher/career/show/{uuid}', [CareerpublisherController::class, 'show'])->name('publishercareer.show');
    Route::put('/publisher/career/update/{uuid}', [CareerpublisherController::class, 'update'])->name('publishercareer.update');
    Route::delete('/publisher/career/destroy/{uuid}', [CareerpublisherController::class, 'destroy'])->name('publishercareer.destroy');
});



