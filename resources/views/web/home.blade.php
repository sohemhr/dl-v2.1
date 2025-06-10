<!DOCTYPE html>
<html lang="id">
    <x-apps.head />
    {{-- script New Start --}}
    <meta name="keywords" content="Konsultan legalitas, dokterlegal, legalitas perusahaan, jasa pembuatan cv, jasa pembuatan pt">
    <meta name="author" content="dokterlegal.co.id">
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="Dokter Legal melayani lebih dari ratusan perusahaan di Indonesia, ditangani oleh tim yang profesional dan berpengalaman, mulai dari pendirian usaha sampai perizinan khusus lainnya">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.dokterlegal.co.id/">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/" />
    {{-- Elfsight Google Reviews | Untitled Google Reviews  --}}
    <script src="https://static.elfsight.com/platform/platform.js" async></script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/",
            "datePublished": "2025-01-20T11:19:31+0700",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/" />
	<link rel="preconnect" href="https://www.googletagservices.com" />
	<link rel="preconnect" href="https://www.google-analytics.com" />
    <link rel="preconnect" href="https://images.some-other-host.com" />
    <link rel="preconnect" href="https://subdomain.my-cdn.com" />
    <link rel="preconnect" href="https://ssl.google-analytics.com" />
    <link rel="preconnect" href="https://www.googleadservices.com" />
    <link rel="preconnect" href="https://googleads.g.doubleclick.net" >
    <link rel="preconnect" href="https://www.google.com" />
    {{-- script New Ends --}}
    <x-apps.header />
    {{-- Content Start From Here--}}
    
    {{-- modal pop-up start --}}
    <div class="modal fade modal-popup" id="modal-02" tabindex="-1">
        <button class="btn-close text-white" style="padding-right: 10px" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content text-center"> 
                <div class="row background-transparent">   
                    <!-- slider dari swiffyslider.com -->
                    <div class="swiffy-slider slider-item-show1 slider-nav-round slider-nav-dark slider-nav-sm slider-nav-visible slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-contain slider-item-ratio-1x1" data-slider-nav-autoplay-interval="3000">                
                        <div class="slider-container">
                            @forelse ($getPromo as $popupPromo)                  
                            <div>
                                <figure class="overlay overlay-1 hover-scale">
                                    <a rel="noopener noreferrer" href="/promo/{{ $popupPromo->promo_slug }}"> 
                                        <img src="storage/{{ $popupPromo->promo_foto }}" alt="Dokter Legal" />
                                    </a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Selengkapnya..</h5>
                                        </figcaption>
                                </figure>
                            </div>
                            @empty
                                
                            @endforelse
                        </div>
                        <button type="button" class="slider-nav" aria-label="Go left"></button>
                        <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button> 
                    </div>
                    <!-- slider dari swiffyslider.com end -->
                </div>
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-dialog -->
    </div>
    {{-- modal pop_up ends --}}
    
    {{-- Hero Start --}}
    <section class="wrapper bg-full bg-pale-blue pb-10">
        <div class="container pt-5 pt-md-11 pb-10">
            <div class="row gx-0 gy-10 align-items-center">
                <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                    <h1 class="display-1 text-blue mb-4">Create Business <br /><span class="typer text-yellow text-nowrap" data-delay="100" data-words="Not Companies"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
                    <p class="fs-19 text-dark">Kami membantu Anda memulai bisnis dengan reputasi sebagai perusahaan yang professional.</p>
                    <div>
                        <a href="https://wa.me/{{ $getRndNumb }}?text=Hello!%20Saya%20mempunyai%20pertanyaan%20tentang%20Dokter%20Legal,%20saya%20mengetahuinya%20dari%20situs%20https://www.dokterlegal.co.id" target="_blank" class="btn btn-yellow btn-icon btn-icon-start rounded-pill">
                            <i class="uil uil-whatsapp"></i> Konsultasi Sekarang
                        </a>
                    </div>
                </div>
                {{-- /column --}}
                <div class="col-lg-5 offset-lg-1 mb-n10" data-cues="slideInDown">
                    <div class="position-relative">
                        <div class="btn btn-rounded  pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 65%; left: 1%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                            <span class="card progressbar semi-circle blue p-3" data-value="80" style="top: 70%; left: 80%; transform: translate(-50%, -50%); width: 170px; height: 170px;">Hemat waktu</span>
                        </div>
                        <figure class="rounded px-1">
                            <img fetchpriority="low" src="/assets/fe/img/material/home/hjb_hero.png" srcset="/assets/fe/img/material/home/hjb_hero.png" alt="Dokter Legal">
                        </figure>
                    </div>
                    <div class="card-body py-4 px-5">
                        <div class="d-flex flex-row align-items-center">
                        </div>
                    </div>
                    {{-- /.card-body --}}
                </div>
                {{-- /div --}}
            </div>
            {{-- /.row --}}
        </div>
        {{-- /.container --}}
    </section>
    {{-- hero Ends --}}
    
    {{-- banner slider Start --}}
    <section class="wrapper bg-light py-10">
        <div class="container py-8">
            <div class="swiffy-slider slider-nav-dark slider-nav-sm slider-nav-page slider-item-snapstart slider-nav-autoplay slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9" data-slider-nav-autoplay-interval="3000">
                <div class="slider-container rounded-xl">
                    <div>
                        <a href="/layanan/idak">
                        <img fetchpriority="high" src="/assets/fe/img/material/banner/banner_idak.webp" alt="Dokter Legal" width="100%">
                        </a>
                    </div>
                    <div>
                        <a href="/layanan/ppiu">
                        <img fetchpriority="low" src="/assets/fe/img/material/banner/banner_ppiu.webp" alt="Dokter Legal" width="100%">
                        </a>
                    </div>
                    <div>
                        <a href="/layanan/penanaman-modal-asing">
                        <img fetchpriority="low" src="/assets/fe/img/material/banner/banner_pma2.webp" alt="Dokter Legal" width="100%">
                        </a>
                    </div>
                    
                    <div>
                        <a href="/layanan/perpajakan">
                        <img fetchpriority="low" src="/assets/fe/img/material/banner/banner_pajak.webp" alt="Dokter Legal" width="100%">
                        </a>
                    </div>
                </div>
                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>                
            </div>
        </div>
    </section>
    {{-- banner slider Ends --}}

    {{-- About Start --}}
    <section class="wrapper bg-light">
        <div class="container py-0 py-md-10">    
                @php
                    $aboutThn = date('Y')-2019;
                @endphp           
            <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
            <div class="col-lg-6 position-relative">
                <div class="row gx-md-5 gy-5 align-items-center">
                    <figure class="rounded px-8">
                        <img src="/assets/fe/img/material/about/hjb_about.png" srcset="/assets/fe/img/material/about/hjb_about.png 2x" alt="Dokter Legal">
                    </figure>
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6"> 
                <h3 class="display-5 mb-5">Jasa Konsultan untuk Pengurusan Izin Usaha/Legalitas Perusahaan.</h3>
                <p class="mb-7">Dokter Legal merupakan perusahaan Jasa Konsultan untuk Pengurusan Izin Usaha/ Legalitas Perusahaan yang ditangani oleh Tenaga-tenaga Muda Profesional yang tergabung dalam Team yang telah berpengalaman lebih dari {{ $aboutThn }} tahun.</p>
                <div class="row counter-wrapper gy-6">
                <div class="col-md-4">
                    <h3 class="counter text-blue">1000+</h3>
                    <p>Completed Projects</p>
                </div>
                <!--/column -->
                <div class="col-md-4">
                    <h3 class="counter text-blue">1000+</h3>
                    <p>Satisfied Customers</p>
                </div>
                <!--/column -->
                <div class="col-md-4">
                    <h3 class="counter text-blue">30</h3>
                    <p>Expert Employees</p>
                </div>
                <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- About Ends --}}

    {{-- Services Start --}}
    <section class="wrapper bg-light">
        <div class="container pt-12 pb-5">
            <div class="row mb-3">
                <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                    <h2 class="display-4 mb-3 px-lg-14">Pilih layanan sesuai dengan kebutuhan Anda</h2>
                    <div class="mb-4">
                        <a href="/layanan" class="hover text-blue" rel="category">Lihat Semua Layanan</a>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container">
            <div class="position-relative">
            <div class="swiffy-slider slider-item-show3 slider-nav-round slider-nav-dark slider-nav-sm slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-contain slider-item-ratio-1x1" data-slider-nav-autoplay-interval="3000">
                <div class="slider-container">
                        @foreach ($getLayanan as $listLayanan)
                        <div>
                        <div class="swiper-slide m-5">
                                <div class="card shadow-md">
                                    <div class="card-body">
                                        <div class="svg-bg bg-pale-blue rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                        <h4 class="mt-2 mb-1">{{ strtoupper($listLayanan->layanan_nama) }}</h4>
                                        <p class="mb-2">{!! $listLayanan->layanan_desk !!}</p>
                                        <nav class="nav social mb-0">
                                        <a href="/layanan/{{ $listLayanan->layanan_slug }}" class="btn btn-expand btn-blue rounded-pill">
                                            <i class="uil uil-arrow-right"></i>
                                            <span>Selengkapnya</span>
                                        </a>
                                        </nav>
                                        <!-- /.social -->
                                    </div>
                                <!--/.card-body -->
                                </div>
                                <!-- /.card -->  
                        </div>
                        </div>
                        @endforeach  
                        <!--/.swiper-slide --> 
                </div>
                <button type="button" class="slider-nav" aria-label="Go left"></button>
                <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button> 
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Services Ends --}}

    {{-- Promo Start --}}
    <section class="wrapper bg-light">
        <div class="container py-10 py-md-15">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Promo Dokter Legal</h2>
                    <h3 class="display-4">Dapatkan Penawaran Spesial dari Kami<span class="underline-3 style-2 yellow"></span></h3>
                    <div class="mb-8">
                        <a href="/promo" class="hover text-blue" rel="category">Lihat Semua Promo</a>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="swiffy-slider slider-item-show3 slider-nav-round slider-nav-dark slider-nav-sm slider-nav-page slider-item-snapstart slider-nav-autoplay slider-nav-autopause slider-item-ratio slider-item-ratio-contain slider-item-ratio-3x4" data-slider-nav-autoplay-interval="3000">
                <div class="slider-container">
                    @foreach ($getPromo as $listpromo)
                    <div>
                    <div class="swiper-slide">
                        <figure class="rounded mb-6">
                            <img src="/storage/{{ $listpromo->promo_foto }}" srcset="/storage/{{ $listpromo->promo_foto }} 2x" alt="Dokter Legal" />
                            <a class="item-link" href="/storage/{{ $listpromo->promo_foto }}" data-glightbox data-gallery="projects-group" name="foto-promo">
                                <i class="uil uil-focus-add"></i>
                            </a>
                        </figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <a href="/promo/{{ $listpromo->promo_slug }}" class="btn btn-expand btn-soft-blue rounded-pill">
                            <i class="uil uil-arrow-right"></i>
                            <span>Klaim Promo</span>
                            </a>
                        </div>
                        <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    </div>
                    <!--/.swiper-slide -->
                    @endforeach
                    
                </div>
                <button type="button" class="slider-nav" aria-label="Go left"></button>
                <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button> 
                <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Promo Ends --}}

    {{-- Logo Clients Support Start --}}
    <x-apps.clients-support />
    {{-- Logo Clients Support Ends --}}

    {{-- Section Proses Start --}}
    <section class="wrapper bg-light py-10">
        <div class="container rounded-xl p-10 bg-image bg-overlay" data-image-src="/assets/fe/img/photos/bg3.jpg">
            <div class="row d-flex align-items-start gy-10">
            <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                <img class="img-fluid" src="/assets/fe/img/material/home/hubungi_kami.webp" alt="Dokter Legal" />
            </div>
            <!-- /column -->
            
            <div class="col-lg-6 ms-auto">
                <h3 class="display-2 mb-5 text-light">Bagaimana Cara Kerjanya?</h3>
                <div class="card bg-blue mb-4">
                <div class="card-body d-flex flex-row p-3">
                    <div>
                    <div class="svg-bg bg-pale-primary rounded-xl mx-2"><img src="/assets/fe/img/icons/solid/headphone.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div>
                </div>
                    <div>
                    <h3 class="fs-21 mb-2 text-light">Konsultasi Kebutuhan Perizinan</h3>
                    <p class="mb-0 text-light">Bertukar informasi dalam rangka memastikan perizinan yang di butuhkan</p>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-blue mb-4">
                <div class="card-body d-flex flex-row p-2">
                    <div>
                    <div class="svg-bg bg-pale-primary rounded-xl mx-2"><img src="/assets/fe/img/icons/solid/deal.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div>
                    </div>
                    <div>
                    <h3 class="fs-21 mb-2 text-light">Konfirmasi Layanan</h3>
                    <p class="mb-0 text-light">Mengonfirmasi apakah layanan perizinan sudah sesuai dengan kebutuhan</p>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-blue mb-4">
                <div class="card-body d-flex flex-row p-2">
                    <div>
                    <div class="svg-bg bg-pale-primary rounded-xl mx-2"><img src="/assets/fe/img/icons/solid/currency.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div>
                    </div>
                    <div>
                    <h3 class="fs-21 mb-2 text-light">Pembayaran</h3>
                    <p class="mb-0 text-light">Melakukan pembayaran dari harga layanan perizinan yang sudah dipilih</p>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-blue mb-4">
                <div class="card-body d-flex flex-row p-2">
                    <div>
                    <div class="svg-bg bg-pale-primary rounded-xl mx-2"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div>
                    </div>
                    <div>
                    <h3 class="fs-21 mb-2 text-light">Proses Pengerjaan</h3>
                    <p class="mb-0 text-light">Tahapan yang dilakukan untuk mendapatkan perizinan</p>
                    </div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Section Proses Ends --}}

    {{-- Section Why Choise Dl Start --}}
    <section class="wrapper bg-light">
        <div class="container py-10 py-md-12">
            <div class="row text-center">
            <div class="col-xl-10 mx-auto">
                <h3 class="display-4 mb-10 px-xxl-15">Kenapa Harus Memilih Dokter Legal?</h3>
            </div>
            <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gy-6">
            <div class="col-md-6 col-lg-4">
                <div class="card bg-soft-sky shadow-lg lift h-100">
                <div class="card-body p-5 d-flex flex-row">
                    <div>
                    <span class="avatar bg-green text-white w-11 h-11 fs-20 me-4"><div class="svg-bg bg-sky rounded-xl"><img src="/assets/fe/img/icons/solid/partnership.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div></span>
                    </div>
                    <div>
                    <h3 class="mb-1 text-blue">Pendampingan</h3>
                    <p class="mb-0 text-body">Kami tidak hanya memberi saran, tetapi juga membantu mengarahkan bisnis Anda dengan layanan seperti pendirian usaha, perizinan, dan pendaftaran merek, memastikan legalitas yang kuat.</p>
                    </div>
                </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="card bg-soft-sky shadow-lg lift h-100">
                <div class="card-body p-5 d-flex flex-row">
                    <div>
                    <span class="avatar bg-green text-white w-11 h-11 fs-20 me-4"><div class="svg-bg bg-Yellow rounded-xl"><img src="/assets/fe/img/icons/solid/network.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div></span>
                    </div>
                    <div>
                    <h3 class="mb-1 text-blue">Layanan Terintegrasi</h3>
                    <p class="mb-0 text-body">Dari legalitas hingga perpajakan, manajemen SDM, dan digital marketing, semua kebutuhan bisnis Anda dapat diurus oleh tim ahli kami secara menyeluruh.</p>
                    </div>
                </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="card bg-soft-sky shadow-lg lift h-100">
                <div class="card-body p-5 d-flex flex-row">
                    <div>
                    <span class="avatar bg-yellow text-white w-11 h-11 fs-20 me-4"><div class="svg-bg bg-Green rounded-xl"><img src="/assets/fe/img/icons/solid/target.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div></span>
                    </div>
                    <div>
                    <h3 class="mb-1 text-blue">Komitmen </h3>
                    <p class="mb-0 text-body">Dari legalitas hingga perpajakan, manajemen SDM, dan digital marketing, semua kebutuhan bisnis Anda dapat diurus oleh tim ahli kami secara menyeluruh.</p>
                    </div>
                </div>
                </div>
            </div>
            <!-- /column -->
            </div>
        </div>
        <!-- /.container -->
    </section>
    {{-- Section Why Choice Dl Ends --}}

    {{-- Banner List Satu Hari Start --}}
    <section class="wrapper bg-light">
        <div class="container py-8 py-md-8 bg-full">
            <div class="row">
                <div class="col-xl-12 mx-auto ">
                    <div class="card bg-image bg-overlay" data-image-src="/assets/fe/img/photos/bg3.jpg">
                        <div class="card-body p-9 p-xl-10">
                            <div class="row align-items-center counter-wrapper gy-4 text-center text-light">
                                <div class="col-md-12">
                                    <h2>
                                        <span class="typer text-yellow" data-delay="100" data-words="Pendirian Perusahaan selesai hanya dalam 1 hari kerja" style="font-size: larger;">
                                        </span>
                                        <span class="cursor text-yellow" data-owner="typer"></span>
                                    </h2>
                                    <p>*Syarat dan ketentuan berlaku</p>
                                </div>
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Banner List Satu Hari Ends --}}

    {{-- Feature Start --}}
    <section class="wrapper bg-light py-8">
        <div class="container py-8 py-md-8">
            <div class="row text-center">
            <div class="col-xl-10 mx-auto">
                <h3 class="display-4 mb-10 px-xxl-15">Fitur dokterlegal.co.id</h3>
            </div>
            <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 px-xl-5">
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                <div>
                    <div class="icon btn btn-circle pe-none btn-blue me-4"> <i class="uil uil-award"></i> </div>
                </div>
                <div>
                    <h4>Pengecekan Nama PT</h4>
                    <p class="mb-2">Cek ketersediaan nama PT yang Anda inginkan di sini.</p>
                    <a href="/cek-nama-pt" class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
                    Cek Nama PT <i class="uil uil-search"></i>
                    </a>
                </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                <div>
                    <div class="icon btn btn-circle pe-none btn-blue me-4"> <i class="uil uil-file-search-alt"></i> </div>
                </div>
                <div>
                    <h4>Tracking System</h4>
                    <p class="mb-2">Cek proses pendirian PT Anda dimana saja & kapan saja</p>
                    <a href="/tracking-system" class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
                    Tracking Sistem <i class="uil uil-search"></i>
                    </a>
                </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                <div>
                    <div class="icon btn btn-circle pe-none btn-blue me-4"> <i class="uil uil-book-open"></i> </div>
                </div>
                <div>
                    <h4>KBLI</h4>
                    <p class="mb-2">Cek panduan KBLI untuk pemilihan bidang usaha di NIB</p>
                    <a href="kbli-terbaru" class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
                    Cek KBLI <i class="uil uil-search"></i>
                    </a>
                </div>
                </div>
            </div>
            <!--/column -->
            </div>
            <!--/.row -->
        
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Feature Ends --}}

    {{-- Testimoni Start --}}
    <section class="wrapper bg-light py-8">
        <div class="container-card pt-8 pt-md-8">
            <div class="card image-wrapper bg-full bg-image" data-image-src="/assets/fe/img/photos/bg3.jpg">
            <div class="card-body py-8 px-0">
                <div class="container">
                <div class="row gx-lg-12 gx-xl-12 gy-10 gy-lg-0">
                    <div class="col-lg-6 text-center text-lg-start">
                    <h4 class="display-4 mt-8 mb-3 pe-xxl-15 text-light">Journey Of Service From The Year Of Dokter Legal</h4>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-6 mt-lg-3 text-muted">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-4">
                        <img src="/assets/fe/img/icons/solid/target.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-yellow mb-3" alt="Dokter Legal" />
                        <h3 class="counter text-light">1000+</h3>
                        <p class="mb-0">Completed Projects</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                        <img src="/assets/fe/img/icons/solid/bar-chart.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-yellow mb-3" alt="Dokter Legal" />
                        <h3 class="counter text-light">4x</h3>
                        <p class="mb-0">Revenue Growth</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                        <img src="/assets/fe/img/icons/solid/employees.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-yellow mb-3" alt="Dokter Legal" />
                        <h3 class="counter text-light">99.7%</h3>
                        <p class="mb-0">Customer Satisfaction</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!--/.card-body -->
            </div>
            <!--/.card -->
        </div>
        <!-- /.container-card -->
        <!--<div class="container">-->
        <!--    <div class="grid mb-5">-->
        <!--        <div class="row isotope gy-6 mt-n18">-->
        <!--            <div class="item col-md-6 col-xl-3">-->
        <!--                <div class="card shadow-lg card-border-bottom border-soft-blue">-->
        <!--                    <div class="card-body p-5">-->
        <!--                    <span class="ratings five mb-3"></span>-->
        <!--                    <blockquote class="icon mb-0">-->
        <!--                        <p>“Dokter Legal itu Sangat terpercaya, harga nya masuk akal, proses pembuatan serta pelayanan cepat, tim yang profesional dan hospitality.. Well done with Bu Fauziah Okta..”</p>-->
        <!--                        <div class="blockquote-details">-->
        <!--                            <img class="rounded-circle w-12" src="/assets/fe/img/material/home/ulasan/uls09.png" srcset="/assets/fe/img/material/home/ulasan/uls09.png 2x" alt="Dokter Legal" />-->
        <!--                            <div class="info">-->
        <!--                            <h5 class="mb-1">N. Reynaldi Sitompul</h5>-->
        <!--                            <p class="mb-0">Financial Analyst</p>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </blockquote>-->
        <!--                    </div>-->
                            <!-- /.card-body -->
        <!--                </div>-->
                        <!-- /.card -->
        <!--                </div>-->
                        <!--/column -->
        <!--                <div class="item col-md-6 col-xl-3 ">-->
        <!--                    <div class="card shadow-lg card-border-bottom border-soft-primary">-->
        <!--                        <div class="card-body p-5">-->
        <!--                        <span class="ratings five mb-3"></span>-->
        <!--                            <blockquote class="icon mb-0">-->
        <!--                                <p>“pengurusan data/dokumen legal yang cepat dan profesional, harganya terjangkau..”</p>-->
        <!--                                <div class="blockquote-details">-->
        <!--                                <img class="rounded-circle w-12" src="/assets/fe/img/material/home/ulasan/uls03.png" srcset="/assets/fe/img/material/home/ulasan/uls03.png 2x" alt="Dokter Legal" />-->
        <!--                                    <div class="info">-->
        <!--                                    <h5 class="mb-1">Setiyoso SE</h5>-->
        <!--                                    <p class="mb-0">Financial Analyst</p>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </blockquote>-->
        <!--                        </div>-->
                                <!-- /.card-body -->
        <!--                    </div>-->
                            <!-- /.card -->
        <!--                </div>-->
                        <!--/column -->
        <!--            <div class="item col-md-6 col-xl-3">-->
        <!--                <div class="card shadow-lg card-border-bottom border-soft-primary">-->
        <!--                    <div class="card-body p-5">-->
        <!--                    <span class="ratings five mb-3"></span>-->
        <!--                        <blockquote class="icon mb-0">-->
        <!--                            <p>“Ini adalah yg ke dua kali saya pakai jasa legal di sini, team ramah, response cepat, proses cepat dan harga bersahabat Jangan ragu menggunakan jasa di sini..”</p>-->
        <!--                            <div class="blockquote-details">-->
        <!--                            <img class="rounded-circle w-12" src="/assets/fe/img/material/home/ulasan/uls05.png" srcset="/assets/fe/img/material/home/ulasan/uls05.png 2x" alt="Dokter Legal" />-->
        <!--                                <div class="info">-->
        <!--                                <h5 class="mb-1">Rubys Mediatama</h5>-->
        <!--                                <p class="mb-0">Financial Analyst</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </blockquote>-->
        <!--                    </div>-->
                            <!-- /.card-body -->
        <!--                </div>-->
                        <!-- /.card -->
        <!--            </div>-->
                    <!--/column -->
        <!--            <div class="item col-md-6 col-xl-3">-->
        <!--                <div class="card shadow-lg card-border-bottom border-soft-primary">-->
        <!--                    <div class="card-body p-5 ">-->
        <!--                    <span class="ratings five mb-3"></span>-->
        <!--                        <blockquote class="icon mb-0">-->
        <!--                            <p>“Saya terbantukan sekali dengan jasa Dokter Legal. semua proses berjalan dengan mulus dan cepat. diurus dari awal sampai dicarikan virtual office juga. sangat memuaskan..!”</p>-->
        <!--                            <div class="blockquote-details">-->
        <!--                            <img class="rounded-circle w-12" src="/assets/fe/img/material/home/ulasan/uls02.png" srcset="/assets/fe/img/material/home/ulasan/uls02.png 2x" alt="Dokter Legal" />-->
        <!--                                <div class="info">-->
        <!--                                <h5 class="mb-1">Omega Putranto</h5>-->
        <!--                                <p class="mb-0">Financial Analyst</p>-->
        <!--                                </div>-->
        <!--                            </div>-->
        <!--                        </blockquote>-->
        <!--                    </div>-->
                            <!-- /.card-body -->
        <!--                </div>-->
                        <!-- /.card -->
        <!--            </div>-->
                    <!--/column -->
        <!--        </div>-->
                <!-- /.row -->
        <!--    </div>-->
            <!-- /.grid-view -->
        <!--</div>-->
        <!-- /.container -->
    </section>
    
    
    {{-- Start Embed Google Review --}}
    <section class="wrapper bg-light">
        <div class="container py-2 py-md-8">
            <div class="row">
                <h2 class="text-center mb-4">Testimony Client Kami</h2>
                {{-- <div class="elfsight-app-79be65dd-067c-4a2e-bd3d-3fe6be7bc678" data-elfsight-app-lazy></div> --}}
                <iframe 
                    src="https://istalab.com/review" 
                    width="100%" 
                    height="380px" 
                    frameborder="0"
                    scrolling="no"
                    title="review-on-google"
                    onload="this.style.height = this.contentDocument.body.scrollHeight + 'px'">
                </iframe>
            </div>
        </div>
    </section>
    {{-- Ends Embed Google Review --}}
    
    {{-- Testimoni Ends --}}

    {{-- Price Start --}}
    <section class="wrapper bg-light">
        <div class="container py-2 py-md-2">
            <div class="row">
                <div class="col-lg-10 col-xl-12 col-xxl-10 mx-auto text-center">
                    <h3 class="display-4 mb-6 mb-md-6 px-lg-12">
                        Kami menawarkan harga yang kompetitif, produk premium dan berkualitas untuk bisnis Anda
                    </h3>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="pricing-wrapper position-relative">
            <div class="shape bg-dot rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
            <div class="row gy-6 mt-3 mt-md-5">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center">
                        <div class="card-body">
                            <img src="/assets/fe/img/icons/lineal/house.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="Dokter Legal" />
                            <h4 class="card-title">Pendirian CV</h4>
                            <div class="prices text-dark">
                                <div class="price-show">
                                    <p class="text-blue">Mulai dari</p>
                                    <h3 class="fs-30">Rp. 3.000.000</h3>
                                    <p></p>
                                    <div class="divider-icon my-2"><i class="uil uil-heart"></i></div>
                                </div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-blue mt-12 mb-8 text-start">
                                <li><i class="uil uil-check"></i><span><strong>Cek & Pesan Nama CV </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Akta Pendirian</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>SK Kemenkumham</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>NPWP Perusahaan</strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong>SKT Pajak </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Nomor Induk Berusaha (OSS) </strong></span></li>
                            </ul>
                            <a href="https://wa.me/{{ $getRndNumb }}?text=Hello!%20Saya%20mempunyai%20pertanyaan%20tentang%20Pendirian%20CV,%20saya%20mengetahuinya%20dari%20situs%20https://www.dokterlegal.co.id" target="_blank" class="btn btn-blue mt-12 rounded-pill">
                                Hubungi Kami
                                &nbsp;<i class="uil uil-rocket"></i>
                            </a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4 popular">
                    <div class="pricing card text-center">
                        <div class="card-body">
                            <img src="/assets/fe/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="Dokter Legal" />
                            <h4 class="card-title">Pendirian PT</h4>
                            <div class="prices text-dark">
                                <div class="price-show">
                                    <p class="text-blue">Mulai dari</p>
                                    <h3 class="fs-30">Rp. 4.000.000</h3>
                                    <p></p>
                                    <div class="divider-icon my-2"><i class="uil uil-heart"></i></div>
                                </div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-blue mt-12 mb-8 text-start">
                                <li><i class="uil uil-check"></i><span><strong>Cek & Pesan Nama PT </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Akta Pendirian</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>SK Kemenkumham</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>NPWP Perusahaan</strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong>SKT Pajak </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Nomor Induk Berusaha (OSS) </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>SPPKP</strong></span></li>
                            </ul>
                            <a href="https://wa.me/{{ $getRndNumb }}?text=Hello!%20Saya%20mempunyai%20pertanyaan%20tentang%20Pendirian%20PT,%20saya%20mengetahuinya%20dari%20situs%20https://www.dokterlegal.co.id" target="_blank" class="btn btn-blue mt-7 rounded-pill">
                                Hubungi Kami
                                &nbsp;<i class="uil uil-rocket"></i>
                            </a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
                <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <div class="pricing card text-center">
                        <div class="card-body">
                            <img src="/assets/fe/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-blue mb-3" alt="Dokter Legal" />
                            <h4 class="card-title">Penanaman Modal Asing</h4>
                            <div class="prices text-dark">
                                <div class="price-show">
                                    <p class="text-blue">Mulai dari</p>
                                    <h3 class="fs-30">Rp. 10.000.000</h3>
                                    <p></p>
                                    <div class="divider-icon my-2"><i class="uil uil-heart"></i></div>
                                </div>
                            </div>
                            <!--/.prices -->
                            <ul class="icon-list bullet-bg bullet-soft-blue mt-12 mb-8 text-start">
                                <li><i class="uil uil-check"></i><span><strong>Cek & Pesan Nama PT PMA </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Akta Pendirian</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>SK Kemenkumham</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>NPWP Perusahaan</strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong>SKT Pajak </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Nomor Induk Berusaha (OSS) </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>SPPKP</strong></span></li>
                            </ul>
                            <a href="https://wa.me/{{ $getRndNumb }}?text=Hello!%20Saya%20mempunyai%20pertanyaan%20tentang%20Pendirian%20PMA,%20saya%20mengetahuinya%20dari%20situs%20https://www.dokterlegal.co.id" target="_blank" class="btn btn-blue mt-7 rounded-pill">
                                Hubungi Kami
                                &nbsp;<i class="uil uil-rocket"></i>
                            </a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            </div>
            <!--/.pricing-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Price Ends --}}

    {{-- Lokasi Kami Start --}}
    <section class="wrapper bg-light py-10">
        <div class="container py-10 py-md-8">
            <h2 class="display-4 mb-3 text-center">Lokasi Kami</h2>
            <p class="lead text-center mb-6 px-md-16 px-lg-0">Kami Hadir di Lokasi</p>
            <div class="position-relative">
            <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
            <div class="shape bg-dot primary rellax w-16 h-16" data-rellax-speed="1" style="top: -1rem; left: -1.7rem;"></div>
                <div class="swiper-container mb-10" data-margin="30" data-nav="true" data-dots="true" data-items-xl="4" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                        @foreach ($getOffice as $listOffice)
                            <div class="swiper-slide">
                                <div class="card im card-border-bottom  border-soft-blue">
                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                        <a href="{{ $listOffice->office_lokasi_url }}" target="_blank"> 
                                            <img src="/storage/{{ $listOffice->office_foto }}" alt="Dokter Legal" />
                                        </a>
                                        <figcaption>
                                            <p class="from-top">
                                                {{ $listOffice->office_alamat }} <br>
                                                <a href="{{ $listOffice->office_lokasi_url }}" target="_blank" class="btn btn-sm btn-blue mt-7 rounded-pill">Maps Lokasi</a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <div class="post-header p-0">
                                            <div class="post-category text-line">
                                            <a href="{{ $listOffice->office_lokasi_url }}" target="_blank" class="hover" rel="category">
                                                {{ $listOffice->office_nama }}
                                            </a>
                                            </div>
                                            <!-- /.post-category -->
                                        </div>
                                        <!-- /.post-header -->
                                    </div>
                                    <!--/.card-body -->
                                </div>
                            </div>
                            <!--/.swiper-slide -->
                            @endforeach
                        </div>
                        <!--/.swiper-wrapper -->
                        
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Lokasi Kami Ends --}}

    {{-- Artikel Start --}}
    {{-- <section class="wrapper bg-light">
        <div class="container py-8 py-md-8">
            <div class="row">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                <h3 class="display-4 mb-6 text-center">Info Bisnis</h3>
            </div>
            <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative">
            <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
            <div class="swiper-container dots-closer blog grid-view mb-6" data-margin="0" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        @foreach ($getArtikel as $listArtikel)
                        <div class="swiper-slide">
                            <div class="item-inner">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                            <a href="#"> 
                                                <img src="/storage/{{ $listArtikel->artikel_foto }}" alt="Dokter Legal" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <div class="card-body">
                                            <div class="post-header">
                                                <div class="post-category text-line">
                                                <a href="#" class="hover" rel="category">{{ $listArtikel->kategori_nama }}</a>
                                                </div>
                                                <!-- /.post-category -->
                                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">{{ $listArtikel->artikel_judul }}</a></h2>
                                            </div>
                                            <!-- /.post-header -->
                                            <div class="post-content">
                                                <p>
                                                    {!! Str::words($listArtikel->artikel_deskripsi, 30, ' ...') !!}
                                                </p>
                                            </div>
                                            <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                            <ul class="post-meta d-flex mb-0">
                                                <li class="post-date">
                                                    <i class="uil uil-calendar-alt"></i>
                                                    <span>{{ \Carbon\Carbon::parse($listArtikel->artikel_tanggal)->format('d F Y') }}</span>
                                                </li>
                                            </ul>
                                            <!-- /.post-meta -->
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        @endforeach
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section> --}}
    {{-- hhg --}}
    <section class="wrapper bg-light">
        <div class="container py-8 py-md-8">
            <div class="row align-items-center mb-10">
                <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7 pe-xl-20">
                    <h2 class="display-4 mb-0">Info Bisnis Terkini.</h2>
                </div>
                <!--/column -->
                <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                    <a href="/artikel" class="btn btn-soft-blue rounded-pill mb-0">View All News</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-11 gy-10 blog grid-view">
                <div class="col-lg-8">
                    @foreach ($getArtikelOne as $listArtikelOne)
                    <article class="post">
                        <div class="post-slider rounded mb-6">
                            <div class="swiper-container dots-over" data-margin="5" data-dots="true">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="/storage/{{ $listArtikelOne->artikel_foto }}" alt="Dokter Legal" /></div>
                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                            </div>
                            <!-- /.swiper-container -->
                        </div>
                        <!-- /.post-slider -->
                        <div class="post-header mb-5">
                            <div class="post-category text-line">
                                <a href="/artikel/kategori/{{ $listArtikelOne->kategori_slug }}" class="hover" rel="category">{{ $listArtikelOne->kategori_nama }}</a>
                            </div>
                            <!-- /.post-category -->
                            <h2 class="post-title mt-1 mb-4"><a class="link-dark" href="/artikel/{{ $listArtikelOne->artikel_slug }}">{{ $listArtikelOne->artikel_judul }}</a></h2>
                            <ul class="post-meta mb-0">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($listArtikelOne->artikel_tanggal)->format('d F Y') }}</span></li>
                                <li class="post-author"><i class="uil uil-user"></i><span>By {{ $listArtikelOne->nama }}</span></li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /.post-header -->
                        <div class="post-content">
                            <p>{!! Str::limit(strip_tags($listArtikelOne->artikel_deskripsi), $limit = 300, $end = ' ...') !!}</p>
                        </div>
                        <!-- /.post-content -->
                    </article>
                    <!-- /.post -->
                    @endforeach
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <div class="row gy-10">
                        @foreach ($getArtikelTwo as $listArtikelTwo)
                        <div class="col-md-6 col-lg-12">
                            <article class="post">
                            <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                <a href="/artikel/{{ $listArtikelTwo->artikel_slug }}"> 
                                    <img src="/storage/{{ $listArtikelTwo->artikel_foto }}" alt="Dokter Legal" />
                                </a>
                                <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                            </figure>
                            <div class="post-header">
                                <div class="post-category text-line">
                                <a href="/artikel/kategori/{{ $listArtikelTwo->kategori_slug }}" class="hover" rel="category">{{ $listArtikelTwo->kategori_nama }}</a>
                                </div>
                                <!-- /.post-category -->
                                <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="/artikel/{{ $listArtikelTwo->artikel_slug }}">{{ $listArtikelTwo->artikel_judul }}</a></h2>
                            </div>
                            <!-- /.post-header -->
                            <div class="post-footer">
                                <ul class="post-meta">
                                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($listArtikelTwo->artikel_tanggal)->format('d F Y') }}</span></li>
                                <li class="post-author"><i class="uil uil-user"></i><span>By {{ $listArtikelTwo->nama }}</span></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.post-footer -->
                            </article>
                            <!-- /.post -->
                        </div>
                        <!-- /column -->
                        @endforeach
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    {{-- Artikel Ends --}}
    




    {{-- Content Ends --}}
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-12">
            <div class="row">
            </div>
        </div>
    </section>
    <x-apps.footer />
    <x-apps.js />
    {{-- Js New Start --}}

    {{-- Js New Ends --}}
</body>
</html>