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
    <meta property="og:url" content="https://www.dokterlegal.co.id/promo">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/promo" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/promo",
            "datePublished": "2025-01-20T11:19:31+0700",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/promo"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/promo" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/promo" />
	<link rel="preconnect" href="https://www.googletagservices.com" />
	<link rel="preconnect" href="https://www.google-analytics.com" />
    <link rel="preconnect" href="https://images.some-other-host.com" />
    <link rel="preconnect" href="https://subdomain.my-cdn.com" />
    <link rel="preconnect" href="https://ssl.google-analytics.com" />
    <link rel="preconnect" href="https://www.googleadservices.com" />
    <link rel="preconnect" href="https://googleads.g.doubleclick.net" >
    <link rel="preconnect" href="https://www.google.com" />
    <x-apps.header />
    {{-- Content Start --}}

    {{-- Breadcum Start --}}
    {{-- <section class="wrapper bg-pale-blue">
        <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
            <div class="row">
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h1 class="display-1 text-blue mb-3">{{ $title }}</h1>
                    <p class="lead px-xxl-10">{{ $subtitle }}</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section> --}}
    {{-- Breadcum Ends --}}
    
    {{-- banner slider Start --}}
    <section class="wrapper bg-light">
        <div class="container"> 
            <!--<div class="row">-->
                {{-- <div class="swiffy-slider slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9 slider-nav-page slider-item-snapstart slider-nav-autoplay" data-slider-nav-autoplay-interval="3000"> --}}
                <div class="swiffy-slider slider-nav-dark slider-nav-sm slider-nav-page slider-item-snapstart slider-nav-autoplay slider-item-ratio slider-item-ratio-contain slider-item-ratio-32x9" data-slider-nav-autoplay-interval="3000">
                <div class="slider-container">
                    <div>
                        <img src="/assets/fe/img/material/banner/banner_idak.webp" alt="Dokter Legal" width="100%" />
                    </div>
                    <div>
                        <img src="/assets/fe/img/material/banner/banner_ppiu.webp" alt="Dokter Legal" width="100%" />
                    </div>
                    <div>
                        <img src="/assets/fe/img/material/banner/banner_pma2.webp" alt="Dokter Legal" width="100%" />
                    </div>
                    <div>
                        <img src="/assets/fe/img/material/banner/banner_pajak.webp" alt="Dokter Legal" width="100%" />
                    </div>
                </div>

                <button type="button" class="slider-nav"></button>
                <button type="button" class="slider-nav slider-nav-next"></button>                
            </div>
                <!-- /column -->
            <!--</div>-->
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- banner slider Ends --}}

    {{-- Promo Start --}}
    <section class="wrapper bg-light">
        <div class="container py-4 py-md-4">
            <div class="position-relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            @foreach ($getPromo as $listPromo)
                            <div class="col-md-3 mt-6">
                                <article>
                                    <div class="card bg-blue">
                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                            <a href="/promo/{{ $listPromo->promo_slug }}"> 
                                                <img src="/storage/{{ $listPromo->promo_foto }}" alt="Dokter Legal" />
                                            </a>
                                            <figcaption>
                                                <h5 class="from-top mb-0">Read More</h5>
                                            </figcaption>
                                        </figure>
                                        <h6 class="post-title text-center mt-2 p-2">
                                            <a class="link-dark text-light" href="/promo/{{ $listPromo->promo_slug }}">
                                                {{ $listPromo->promo_judul }}
                                            </a>
                                        </h6>
                                    </div>
                                    <!-- /.card -->
                                </article>
                                <!-- /article -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row mt-12">
                    <nav class="d-flex justify-content-center" aria-label="pagination">
                        {!! $getPromo->links('web.pagination') !!}
                    <!-- /.pagination -->
                    </nav>
                    <!-- /nav -->
                </div>
                </div>
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Promo Ends --}}


    {{-- Content Ends --}}    

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