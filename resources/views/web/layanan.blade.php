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
    <meta property="og:url" content="https://www.dokterlegal.co.id/layanan">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/layanan" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/layanan",
            "datePublished": "2025-01-20T11:19:31+0700",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/layanan"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/layanan" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/layanan" />
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
    {{-- Content Start --}}
    {{-- Breadcum Start --}}
    <section class="wrapper bg-pale-blue">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                    <h1 class="display-1 text-blue mb-3">{{ $title }}</h1>
                    <p class="lead px-xxl-10">{{ $subtitle }}</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Breadcum Ends --}}
    
    {{-- List Layanan Start --}}
    {{-- <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14">
            <div class="row">
                <!-- /column -->
                @php
                    $no=1;
                @endphp
                @foreach ($getLayanan as $listLayanan)
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a{{ $no++ }}.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. {{ Number::format($listLayanan->layanan_harga) }}</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">{{ $listLayanan->layanan_nama }}</b><br>
                            {!! $listLayanan->layanan_desk !!}
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/{{ $listLayanan->layanan_slug }}" class="btn btn-xs btn-outline-blue">
                            Detail Layanan &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                @endforeach
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
    </section> --}}


    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-4">
            <div class="row">
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a1.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 4.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Pendirian Perusahaan</b><br>
                            Membantu Anda menjalankan bisnis dengan legalitas serta badan usaha yang bonafide.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/pendirian-perusahaan" class="btn btn-xs btn-outline-blue">
                            Buat PT Sekarang &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a2.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 15.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Penutupan Perusahaan</b><br>
                            Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.&nbsp;
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/penutupan-perusahaan" class="btn btn-xs btn-outline-blue">
                            Penutupan Perusahaan &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a3.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 2.500.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Virtual Office</b><br>
                            Miliki kantor tanpa bentuk fisik yang bisa digunakan sebagai alamat legal perusahaan.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/virtual-office" class="btn btn-xs btn-outline-blue">
                            Lihat Lokasi Virtual &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a4.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 1.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Perizinan Khusus</b><br>
                            Jasa perizinan khusus untuk menjalankan bisnis di bidang usaha atau sektor tertentu.<br>
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/perizinan-khusus" class="btn btn-xs btn-outline-blue">
                            Perizinan Khusus &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a5.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 3.500.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Digital Marketing</b><br>
                            Buat Digital Profile perusahaan lebih mudah.&nbsp;&nbsp; <br> &nbsp;
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/digital-marketing" class="btn btn-xs btn-outline-blue">
                            Buat Digital Profile &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a6.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 3.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Perizinan Usaha</b><br>
                            Membantu Anda memulai usaha tanpa repot mengurus OSS, NIB, dan kebutuhan lain.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/perizinan-usaha" class="btn btn-xs btn-outline-blue">
                            Urus Izin usaha &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a7.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 1.500.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Perpajakan</b><br>
                            Menghitung dan mengelola berbagai keperluan pajak pribadi maupun perusahaan.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/perpajakan" class="btn btn-xs btn-outline-blue">
                            Konsultasi Pajak Sekarang &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a8.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 3.500.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">HAKI</b><br>
                            Pendaftaran Merek, Hak Cipta, Paten, dll untuk melindungi kekayaan intelektual.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/haki" class="btn btn-xs btn-outline-blue">
                            Daftar Merek Sekarang &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a9.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 10.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">PMA</b><br>
                            Membantu warga negara asing mengatasi kerumitan dalam mendirikan bisnis di Indonesia.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/penanaman-modal-asing" class="btn btn-xs btn-outline-blue">
                            Lihat Layanan PMA &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a10.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 2.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Layanan Hukum</b><br>
                            Layanan berbagai kebutuhan dan konsultasi dengan pengacara berpengalaman.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/hukum" class="btn btn-xs btn-outline-blue">
                            Konsultasi Hukum &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a11.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 2.500.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Perizinan Properti</b><br>
                            Solusi profesional untuk mengurus kebutuhan legalitas seputar tanah dan properti.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/perizinan-properti" class="btn btn-xs btn-outline-blue">
                            Urus Izin Properti &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a12.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 2.500.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Layanan Privilege</b><br>
                            Benefit menarik untuk klien Kami, khususnya untuk layanan Pembuatan PT & CV.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/privilege" class="btn btn-xs btn-outline-blue">
                            Klaim Benefit Sekarang &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a13.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 2.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Pembuatan dan Peninjauan Perjanjian</b><br>
                            Memastikan perjanjian tertulis dengan jelas dan mengikat.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/pembuatan-perjanjian" class="btn btn-xs btn-outline-blue">
                            Urus Perjanjian &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a14.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp. 4.000.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Pembuatan & Perubahan Dokumen</b><br>
                            Dokumen untuk memenuhi kebutuhan bisnis Anda.
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/pembuatan-dokumen" class="btn btn-xs btn-outline-blue">
                            Buat Dokumen &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->
                <!-- /column -->
                <div class="col-md-6 col-xl-3 pt-7" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 900ms; animation-direction: normal; animation-fill-mode: both;">
                    <article>
                    <div class="card">
                        <img src="/assets/fe/img/material/layanan/a15.webp" class="card-img-top rounded" alt="Dokter Legal">
                        <div class="card shadow-md position-absolute d-none d-md-block" style="top: 37%; left: 0%; background-color: rgba(255, 255, 255, 0.795); border-width:2px; border-style:solid; border-color:blue; border-radius: 9px;">
                        <div class="card-body py-3 px-3" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <div class="d-flex flex-row align-items-center">
                                <div>
                                    <p class="fs-16 lh-sm mb-0 text-dark">Mulai dari</p>
                                    <h2 class="fs-20 counter mb-0 text-dark" style="visibility: visible;">Rp.  500.000</h2>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                        </div>
                        
                        <p class="p-2 fs-16">
                            <b class="fs-20 text-blue">Layanan Lainnya</b><br>
                            Layanan lain untuk memenuhi kebutuhan bisnis Anda.<br>&nbsp;
                        </p>
                        
                        <!-- /.post-content -->
                        <a href="/layanan/layanan-lainnya" class="btn btn-xs btn-outline-blue">
                            Layanan Lain &nbsp;<i class="uil uil-rocket"></i>
                        </a>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                    </article>
                    <!-- /article -->
                </div>
                <!--/column -->

            </div>
            <!-- /.row -->
        </div>
    </section>
    {{-- List Layanan Ends --}}

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

    {{-- Logo Clients Support Start --}}
    <x-apps.clients-support />
    {{-- Logo Clients Support Ends --}}


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