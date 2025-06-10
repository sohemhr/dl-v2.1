<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Models\Career;
use App\Models\Office;
use App\Models\Artikel;
use App\Models\Contact;
use App\Models\Keyword;
use App\Models\Layanan;
use App\Models\Checking;
use App\Models\Kategori;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use Illuminate\Support\Str;
use App\Models\Contactnomor;
use Illuminate\Http\Request;
use App\Models\Transaksidetail;

class MainController extends Controller
{
    public function index()
    {
        $randomNumber = Contactnomor::inRandomOrder()->limit(1)->get();
        foreach($randomNumber as $key){
            $getRndNumb = $key->cn_hp;
        }
        $getLayanan = Layanan::where('layanan_status', 'Public')->get();
        $getPromo   = Promo::where('promo_status', 'Public')->orderBy('promo_kode', 'DESC')->get();
        $getOffice  = Office::where('office_status', 'Public')->get();
        $getArtikelOne = Artikel::where('artikel_status', 'Public')
                                ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
                                ->join('users', 'artikels.artikel_author', '=', 'users.kode')
                                ->orderBy('artikel_kode', 'DESC')
                                ->limit(1)
                                ->get();
        $getArtikelTwo = Artikel::where('artikel_status', 'Public')
                        ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
                        ->join('users', 'artikels.artikel_author', '=', 'users.kode')
                        // ->orderBy('artikel_kode', 'DESC')
                        ->inRandomOrder()
                        ->limit(2)
                        ->get();
        $data = [
            'title'       => 'Home',
            'subtitle'    => 'Halaman Home',
            'getRndNumb'  => $getRndNumb,
            'getLayanan'  => $getLayanan,
            'getPromo'    => $getPromo,
            'getOffice'   => $getOffice,
            'getArtikelOne'  => $getArtikelOne,
            'getArtikelTwo'  => $getArtikelTwo
        ];

        return view('web.home', $data);
    }

    public function aboutUs()
    {
        $getOffice  = Office::where('office_status', 'Public')->get();
        $data = [
            'title'       => 'About Us',
            'subtitle'    => 'Lebih Dekat Dengan Dokter Legal',
            'getOffice'   => $getOffice
        ];

        return view('web.about-us', $data);
    }

    public function layanan()
    {
        // $getLayanan  = Layanan::where('layanan_status', 'Public')->get();
        $data = [
            'title'       => 'Layanan Kami',
            'subtitle'    => 'Layanan kami membantu Anda, dari persiapan dokumen hingga pengurusan legalitas, sehingga Anda bisa fokus mengembangkan bisnis.',
            // 'getLayanan'  => $getLayanan
        ];

        return view('web.layanan', $data);
    }

    public function pendirianPshn()
    {
        $data = [
            'title'       => 'Pendirian Perusahaan',
            'subtitle'    => 'Membantu Anda menjalankan bisnis dengan legalitas serta badan usaha yang bonafide.'
        ];

        return view('web.layanan.pendirian-perusahaan', $data);
    }

    public function pendirianPt()
    {
        $data = [
            'title'       => 'Pendirian PT',
            'subtitle'    => 'Pendirian PT untuk membantu Anda menjalankan bisnis dengan legalitas serta badan usaha yang bonafide.'
        ];

        return view('web.layanan.pendirian-pt', $data);
    }

    public function pendirianPtPersekutuan()
    {
        $data = [
            'title'       => 'Pendirian PT Persekutuan Modal',
            'subtitle'    => 'Pendirian badan usaha berbentuk perseroan terbatas yang dilakukan oleh dua orang atau lebih.'
        ];

        return view('web.layanan.pendirian-pt-persekutuan-modal', $data);
    }

    public function pendirianPtPerorangan()
    {
        $data = [
            'title'       => 'Pendirian PT Perorangan',
            'subtitle'    => 'Pendirian Badan Usaha berbentuk Perseroan Terbatas yang dapat didirikan oleh satu orang.'
        ];

        return view('web.layanan.pendirian-pt-perorangan', $data);
    }

    public function pendirianCv()
    {
        $data = [
            'title'       => 'Pendirian CV',
            'subtitle'    => 'Untuk Anda yang ingin badan usaha dengan modal minim, sistem pengambilan keputusan yang lebih mudah dan pajak yang lebih rendah.'
        ];

        return view('web.layanan.pendirian-cv', $data);
    }

    public function pendirianFirma()
    {
        $data = [
            'title'       => 'Pendirian Firma',
            'subtitle'    => 'Untuk Anda yang membutuhkan badan usaha berbentuk persekutuan.'
        ];

        return view('web.layanan.pendirian-firma', $data);
    }

    public function pendirianPerdata()
    {
        $data = [
            'title'       => 'Pendirian Persekutuan Perdata',
            'subtitle'    => 'Untuk Anda yang membutuhkan badan usaha berbentuk persekutuan perdata.'
        ];

        return view('web.layanan.pendirian-persekutuan-perdata', $data);
    }

    public function pendirianYayasan()
    {
        $data = [
            'title'       => 'Pendirian Yayasan',
            'subtitle'    => 'Untuk Anda yang ingin mendirikan badan hukum dengan tujuan sosial, agama, dan kemanusiaan.'
        ];

        return view('web.layanan.pendirian-yayasan', $data);
    }

    public function pendirianKoperasi()
    {
        $data = [
            'title'       => 'Pendirian Koperasi',
            'subtitle'    => 'Untuk Anda yang ingin mendirikan organisasi ekonomi berbasis kekeluargaan dengan prinsip ekonomi rakyat.'
        ];

        return view('web.layanan.pendirian-koperasi', $data);
    }

    public function pendirianPerkumpulan()
    {
        $data = [
            'title'       => 'Pendirian Perkumpulan',
            'subtitle'    => 'Untuk Anda yang ingin mendirikan perkumpulan dengan maksud dan tujuan yang sama di bidang tertentu tanpa sistem pembagian keuntungan.'
        ];

        return view('web.layanan.pendirian-perkumpulan', $data);
    }

    public function penutupanPerusahaan()
    {
        $data = [
            'title'       => 'Penutupan Perusahaan',
            'subtitle'    => 'Penyelesaian Administrasi Perusahaan untuk Menghindari Hutang Pajak serta menghentikan kewajiban pelaporan pajak.'
        ];

        return view('web.layanan.penutupan-perusahaan', $data);
    }

    public function virtualOffice()
    {
        $data = [
            'title'       => 'Virtual Office',
            'subtitle'    => 'Sewa Kantor, Virtual Office, Ruang Meeting se-Indonesia. Dapatkan alamat bisnis prestisius di seluruh DKI Jakarta & lokasi lainnya.'
        ];

        return view('web.layanan.virtual-office', $data);
    }

    public function virtualOfficeOne()
    {
        $data = [
            'title'       => 'Virtual Office',
            'subtitle'    => 'Sewa Kantor, Virtual Office, Ruang Meeting se-Indonesia. Dapatkan alamat bisnis prestisius di seluruh DKI Jakarta & lokasi lainnya.'
        ];

        return view('web.layanan.virtual-office-one-page', $data);
    }

    public function perizinanKhusus()
    {
        $data = [
            'title'       => 'Jasa Izin Usaha Khusus',
            'subtitle'    => 'Perizinan yang berkaitan dengan kegiatan suatu PT sesuai dengan kewenangan di bidang usahanya.'
        ];

        return view('web.layanan.perizinan-khusus', $data);
    }

    public function digitalMarketing()
    {
        $data = [
            'title'       => 'Digital Marketing',
            'subtitle'    => 'Layanan pembuatan Digital Profile untuk perusahaan Anda.'
        ];

        return view('web.layanan.digital-marketing', $data);
    }

    public function perizinanUsaha()
    {
        $data = [
            'title'       => 'Perizinan Usaha',
            'subtitle'    => 'Layanan perizinan usaha untuk membantu Anda memulai proses bisnis dengan benar sesuai regulasi yang berlaku.'
        ];

        return view('web.layanan.perizinan-usaha', $data);
    }

    public function perpajakan()
    {
        $data = [
            'title'       => 'Layanan Perpajakan',
            'subtitle'    => 'Layanan konsultasi perpajakan, perhitungan dan pelaporan pajak.'
        ];

        return view('web.layanan.perpajakan', $data);
    }

    public function haki()
    {
        $data = [
            'title'       => 'Layanan HAKI',
            'subtitle'    => 'Pendaftaran Merek, Hak Cipta, Paten, dan lainnya untuk melindungi eksklusivitas identitas dan kekayaan intelektual Anda.'
        ];

        return view('web.layanan.haki', $data);
    }

    public function pendirianPma()
    {
        $data = [
            'title'       => 'Penanaman Modal Asing',
            'subtitle'    => 'Membantu warga negara asing mengatasi kerumitan dalam mendirikan bisnis di Indonesia.'
        ];

        return view('web.layanan.penanaman-modal-asing', $data);
    }

    public function hukum()
    {
        $data = [
            'title'       => 'Layanan Hukum',
            'subtitle'    => 'Dapatkan layanan hukum sesuai dengan kebutuhan anda.'
        ];

        return view('web.layanan.hukum', $data);
    }

    public function perizinanProperti()
    {
        $data = [
            'title'       => 'Perizinan Properti',
            'subtitle'    => 'Solusi profesional untuk mengurus kebutuhan legalitas seputar tanah dan properti.'
        ];

        return view('web.layanan.perizinan-properti', $data);
    }

    public function privilege()
    {
        $data = [
            'title'       => 'Layanan Privilege',
            'subtitle'    => 'Benefit untuk Klien yang menggunakan layanan Kami khususnya untuk Pembuatan PT & CV.'
        ];

        return view('web.layanan.privilege', $data);
    }

    public function pembuatanPerjanjian()
    {
        $data = [
            'title'       => 'Pembuatan dan Peninjauan Perjanjian',
            'subtitle'    => 'Miliki perjanjian tertulis yang jelas dan mengikat dalam berbisnis dan bekerja sama.'
        ];

        return view('web.layanan.pembuatan-perjanjian', $data);
    }

    public function pembuatanDokumen()
    {
        $data = [
            'title'       => 'Pembuatan dan Perubahan Dokumen Perusahaan',
            'subtitle'    => 'Perubahan serta Pembuatan Dokumen Perusahaan lainnya untuk memenuhi kebutuhan bisnis Anda.'
        ];

        return view('web.layanan.pembuatan-dokumen', $data);
    }

    public function layananLainnya()
    {
        $data = [
            'title'       => 'Layanan Lainnya',
            'subtitle'    => 'Detail Layanan.'
        ];

        return view('web.layanan.layanan-lainnya', $data);
    }

    public function layananIdak()
    {
        $getOffice  = Office::where('office_status', 'Public')->get();
        $data = [
            'title'       => 'Layanan Pengurusan IDAK',
            'subtitle'    => 'Detail Layanan Pengurusan IDAK',
            'getOffice'   => $getOffice
        ];

        return view('web.layanan.idak', $data);
    }

    public function layananPpiu()
    {
        $getOffice  = Office::where('office_status', 'Public')->get();
        $data = [
            'title'       => 'Layanan Pengurusan PPIU',
            'subtitle'    => 'Detail Layanan Pengurusan PPIU',
            'getOffice'   => $getOffice
        ];

        return view('web.layanan.ppiu', $data);
    }

    public function sitemap()
    {
        $getCareer  = Career::where('career_status', 'Public')->orderBy('career_kode', 'ASC')->get();
        $getPromo   = Promo::where('promo_status', 'Public')->orderBy('promo_kode', 'ASC')->get();
        $getArtikel = Artikel::where('artikel_status', 'Public')->orderBy('artikel_kode', 'ASC')->get();
        $data = [
            'title'       => 'Sitemap Xml',
            'subtitle'    => 'List Url',
            'getCareer'   => $getCareer,
            'getPromo'    => $getPromo,
            'getArtikel'  => $getArtikel
        ];

        return view('web.sitemap', $data);
    }
    
    
    
    



    public function artikel()
    {
        $getArtikel  = Artikel::where('artikel_status', 'Public')
                                ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
                                ->join('users', 'artikels.artikel_author', '=', 'users.kode')
                                ->orderBy('artikel_kode', 'DESC')
                                ->paginate(9);
        $data = [
            'title'       => 'Artikel Bisnis',
            'subtitle'    => 'Tetap Up-To-Date Dengan Informasi Bisnis Terkini',
            'getArtikel'  => $getArtikel
        ];

        return view('web.artikel', $data);
    }

    public function artikelKategori(string $slug)
    {
        $searchKtgr = Kategori::where('kategori_slug', $slug)->get();
        foreach ($searchKtgr as $value) {
            $kodeKat = $value->kategori_kode;
            $namaKat = $value->kategori_nama;
        }
        $getArtikel  = Artikel::where('artikel_kategori_kode', $kodeKat)
            ->where('artikel_status', 'Public')
            ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
            ->join('users', 'artikels.artikel_author', '=', 'users.kode')
            ->orderBy('artikel_kode', 'DESC')
            ->paginate(9);
        $data = [
            'title'       => 'Artikel Bisnis',
            'subtitle'    => 'List Artikel Bisnis by Kategori '. $namaKat,
            'getArtikel'  => $getArtikel
        ];

        return view('web.artikel', $data);
    }

    public function artikelTahun(string $tahun)
    {
        $getArtikel  = Artikel::where('artikel_tanggal', 'LIKE', '%'.$tahun.'%')
            ->where('artikel_status', 'Public')
            ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
            ->join('users', 'artikels.artikel_author', '=', 'users.kode')
            ->orderBy('artikel_kode', 'DESC')
            ->paginate(9);
        $data = [
            'title'       => 'Artikel Bisnis',
            'subtitle'    => 'List Artikel Bisnis Tahun '. $tahun,
            'getArtikel'  => $getArtikel
        ];

        return view('web.artikel', $data);
    }

    public function artikelSearch(Request $request)
    {
        $srcData = $request->cariartikel;
        $searchVal  = Artikel::where('artikel_judul', 'LIKE', '%' . $srcData . '%')->get();
        if ($searchVal->count() != 0) {
            $getArtikel  = Artikel::where('artikel_judul', 'LIKE', '%' . $srcData . '%')
                ->where('artikel_status', 'Public')
                ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
                ->join('users', 'artikels.artikel_author', '=', 'users.kode')
                ->orderBy('artikel_kode', 'DESC')
                ->paginate(9);
            $data = [
                'title'       => 'Artikel Bisnis',
                'subtitle'    => 'Cari artikel ' . $srcData,
                'searchVal'   => $searchVal,
                'getArtikel'  => $getArtikel
            ];

            return view('web.artikel', $data);
        } else {
            $getKategori = Kategori::orderBy('created_at', 'DESC')->get();            
            $getPop = Artikel::where('artikel_status', 'Public')
                ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
                ->join('users', 'artikels.artikel_author', '=', 'users.kode')
                ->orderBy('artikels.created_at', 'DESC')
                ->limit(9)
                ->get();
            $data = [
                'title'     => 'Artikel',
                'subtitle'  => 'Cari artikel ' . $srcData,
                'getKategori' => $getKategori,
                'getPopular' => $getPop
            ];

            return view('web.artikel-notfound', $data);
        }
    }

    public function artikelDetail(string $slug)
    {
        $getKategori = Kategori::orderBy('created_at', 'DESC')->get();
        $getArtikel = Artikel::where('artikel_slug', $slug)
            ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
            ->join('users', 'artikels.artikel_author', '=', 'users.kode')
            ->get();
        foreach ($getArtikel as $key) {
            $kodeArt = $key->artikel_kode;
            $judul = $key->artikel_judul;
        }
        $getKeyword = Keyword::where('keyword_artikel_kode', $kodeArt)
            ->orderBy('keyword_kode', 'ASC')
            ->get();
        $getPop = Artikel::where('artikel_status', 'Public')
            ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
            ->join('users', 'artikels.artikel_author', '=', 'users.kode')
            ->orderBy('artikels.created_at', 'DESC')
            ->limit(9)
            ->get();
        $data = [
            'title'     => 'Artikel',
            'subtitle'  => $judul,
            'getKategori' => $getKategori,
            'getArtikel' => $getArtikel,
            'getKeyword' => $getKeyword,
            'getPopular' => $getPop
        ];

        return view('web.artikel-detail', $data);
    }

    public function promo()
    {
        $getPromo  = Promo::where('promo_status', 'Public')
            ->orderBy('promo_kode', 'DESC')
            ->paginate(12);
        $data = [
            'title'       => 'Promo',
            'subtitle'    => 'Klaim Promo Dari Dokter Legal',
            'getPromo'  => $getPromo
        ];

        return view('web.promo', $data);
    }

    public function PromoDetail(string $slug)
    {
        $getPromo  = Promo::where('promo_slug', $slug)->get();
        $randomNumber = Contactnomor::inRandomOrder()->limit(1)->get();
        foreach ($randomNumber as $key) {
            $getRndNumb = $key->cn_hp;
        }
        $getOffice  = Office::where('office_status', 'Public')->get();
        $getRekomen  = Promo::where('promo_status', 'Public')
            ->orderBy('promo_kode', 'DESC')
            ->paginate(9);
        $data = [
            'title'       => 'Promo',
            'subtitle'    => 'Klaim Promo Dari Dokter Legal',
            'getPromo'  => $getPromo,
            'getRndNumb'  => $getRndNumb,
            'getOffice'   => $getOffice,
            'getRekomen' => $getRekomen
        ];

        return view('web.promo-detail', $data);
    }

    public function career()
    {
        $getCareer  = Career::where('career_status', 'Public')
            ->orderBy('career_kode', 'DESC')
            ->paginate(9);
        $data = [
            'title'      => 'Career',
            'subtitle'   => 'Up-to-date dengan Informasi Lowongan kerja Dokter Legal Terkini',
            'getCareer'  => $getCareer
        ];

        return view('web.career', $data);
    }

    public function careerDetail(string $slug)
    {
        $getCareer  = Career::where('career_slug', $slug)->get();
        $getRekomen  = Career::where('career_status', 'Public')
            ->orderBy('career_kode', 'DESC')
            ->paginate(9);
        foreach ($getCareer as $value) {
            $subtitle = $value->career_judul;
        }
        $data = [
            'title'      => 'Career',
            'subtitle'   => $subtitle,
            'getCareer'  => $getCareer,
            'getRekomen' => $getRekomen
        ];

        return view('web.career-detail', $data);
    }

    public function faq()
    {
        $data = [
            'title'      => 'FAQ',
            'subtitle'   => 'Pertanyaan Urusan Legalitas Yang Sering Diajukan Kepada Kami'
        ];

        return view('web.faq', $data);
    }

    public function contact()
    {
        $getOffice  = Office::where('office_kode', 'DL001')->get();
        $layanan = Layanan::where('layanan_status', 'Public')->orderBy('layanan_kode', 'ASC')->get();
        $data = [
            'title'      => 'Contact Us',
            'subtitle'   => 'Percayakan Urusan Legalitas Kepada Kami',
            'getOffice'  => $getOffice,
            'layanan'    => $layanan
        ];

        return view('web.contact', $data);
    }

    function storeContact(Request $request)
    {
        $request->validate([
            'fullname'      => ['required', 'max:255',],
            'email'         => ['required', 'max:255', 'email'],
            'phone_number'  => ['required', 'numeric'],
            'services'      => ['required'],
            'message'       => ['required']
        ]);

        
        try {
            // Create a post
            Contact::create([
                'contact_uuid'   => Str::uuid()->toString(),
                'contact_nama'   => $request->fullname,
                'contact_email'  => $request->email,
                'contact_hp'     => $request->phone_number,
                'contact_subjek' => $request->services,
                'contact_isi'    => $request->message,
                'contact_status' => '1'
            ]);
            $message = 'successfully';
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
            'route' => 'contact'
        ]);
    }

    public function kbli()
    {
        $data = [
            'title'      => 'KBLI',
            'subtitle'   => 'Klasifikasi Baku Lapangan Usaha Indonesia'
        ];

        return view('web.kbli-terbaru', $data);
    }

    public function cekNamaPt()
    {
        $data = [
            'title'      => 'Pengecekan Nama PT',
            'subtitle'   => 'Fitur Untuk Pengecekan Nama PT Pilihan Anda.'
        ];

        return view('web.pengecekan-pt', $data);
    }

    function storeChecking(Request $request)
    {
        $request->validate([
            'companyname' => ['required', 'max:255',],
            'fullname'      => ['required'],
            'email'     => ['required', 'max:255', 'email'],
            'phone_number'        => ['required', 'numeric']
        ]);

        try {
            // Create a post
            Checking::create([
                'chk_uuid'      => Str::uuid()->toString(),
                'chk_nama_perusahaan' => $request->companyname,
                'chk_nama'      => $request->fullname,
                'chk_email'     => $request->email,
                'chk_hp'        => $request->phone_number,
                'chk_status'    => '1'
            ]);
            $message = 'successfully';
        } catch (\Exception $exception) {
            $message = $exception->getMessage();
        }
        return response()->json([
            'message' => $message,
            'route' => 'ceknamapt'
        ]);
    }

    public function trackingSystem()
    {
        $data = [
            'title'      => 'Sistem Pelacakan',
            'subtitle'   => 'Fitur Untuk Up-To-Date Status Perusahaan Anda',
            'alert'      => ''
        ];

        return view('web.tracking-system', $data);
    }

    public function searchTrackingSystem(Request $request)
    {
        $kodeTrx = $request->nomor_pendaftaran;
        $getTrx = Transaksi::where('trx_kode', $kodeTrx)
            ->join('perusahaans', 'transaksis.trx_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('users', 'transaksis.trx_user_kode', '=', 'users.kode')
            ->get();
        $getDtlJns = Transaksidetail::where('trxdtl_trx_kode', $kodeTrx)
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->orderBy('trxdtl_kode', 'ASC')
            ->get();
        $getPembayaran = Pembayaran::where('pembayaran_trx_kode', $kodeTrx)
            ->orderBy('pembayaran_kode', 'DESC')
            ->get();
        $data = [
            'title'      => 'Sistem Pelacakan',
            'subtitle'   => 'Fitur Untuk Up-To-Date Status Perusahaan Anda',
            'getTrx'     => $getTrx,
            'getDtlJns'  => $getDtlJns,
            'getPembayaran' => $getPembayaran
        ];

        return view('web.tracking-search', $data);
    }

    public function ebook()
    {
        $data = [
            'title'      => 'Free e-Book',
            'subtitle'   => 'Dapatkan Legal e-Book by dokterlegal.co.id (GRATIS)'
        ];

        return view('web.free-ebook', $data);
    }
    
    public function getContactNomor()
    {
        $users = Contactnomor::select('cn_nama', 'cn_hp', 'office_nama', 'office_kode', 'cn_foto')
                    ->join('offices', 'contact_nomors.cn_office_kode', 'offices.office_kode')
                    ->orderBy('office_kode', 'ASC')
                    ->get();

        // Transform the image path to include the full URL
        $users = $users->map(function ($user) {
            $user->name = $user->cn_nama;
            $user->phone = $user->cn_hp;
            $user->designation = $user->office_nama;
            $user->image = asset('storage/' . $user->cn_foto);
            return $user;
        });

        return response()->json($users);
    }
}
