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
    <meta property="og:url" content="https://www.dokterlegal.co.id/artikel">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/artikel" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/artikel",
            "datePublished": "2025-01-20T11:19:31+0700",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/artikel"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/artikel" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/artikel" />
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
                <div class="col-md-9 col-lg-7 col-xl-5 mx-auto">
                    <h1 class="display-1 text-blue mb-3">{{ $title }}</h1>
                    <p class="lead px-xxl-10">{{ $subtitle }}</p>
                    
                    <form class="search-form" action="/artikel/search" method="POST">
                        @csrf 
                        <div class="form-floating  mt-8 mb-0">
                            <input id="search-form" type="text" name="cariartikel" class="form-control" placeholder="Search" required>
                            <label for="search-form">Search</label>
                        </div>
                    </form>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Breadcum Ends --}}

    {{-- Artikel Start --}}
    <section class="wrapper bg-light">
        <div class="container py-8 py-md-8">
            <div class="position-relative">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            @foreach ($getArtikel as $listArtikel)
                            <div class="col-md-4 mt-6">
                                <article>
                                    <div class="card">
                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                            <a href="/artikel/{{ $listArtikel->artikel_slug }}"> 
                                                <img src="/storage/{{ $listArtikel->artikel_foto }}" alt="Dokter Legal" />
                                            </a>
                                        <figcaption>
                                            <h5 class="from-top mb-0">Read More</h5>
                                        </figcaption>
                                        </figure>
                                        <div class="card-body">
                                        <div class="post-header">
                                            <div class="post-category text-line">
                                            <a href="/artikel/kategori/{{ $listArtikel->kategori_slug }}" class="hover" rel="category">
                                                {{ $listArtikel->kategori_nama }}
                                            </a>
                                            </div>
                                            <!-- /.post-category -->
                                            <h5 class="post-title h5 mt-1 mb-3">
                                                <a class="link-dark" href="/artikel/{{ $listArtikel->artikel_slug }}">
                                                    {{ $listArtikel->artikel_judul }}
                                                </a>
                                            </h5>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content fs-16">
                                            <p>{!! Str::limit(strip_tags($listArtikel->artikel_deskripsi), $limit = 150, $end = ' ...') !!}</p>
                                        </div>
                                        <!-- /.post-content -->
                                        </div>
                                        <!--/.card-body -->
                                        <div class="card-footer">
                                        <ul class="post-meta d-flex mb-0">
                                            <li class="post-date">
                                                <i class="uil uil-calendar-alt"></i>
                                                <span>{{ \Carbon\Carbon::parse($listArtikel->artikel_tanggal)->format('d F Y') }}</span>
                                            <br>
                                                <i class="uil uil-user"></i>
                                                    <span>By {{ $listArtikel->nama }}</span>
                                                
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
                            @endforeach
                        </div>
                    </div>
                    <div class="row mt-12">
                        <div class="col-md-12">
                            <nav class="d-flex justify-content-center" aria-label="pagination">
                                {!! $getArtikel->links('web.pagination') !!}
                            <!-- /.pagination -->
                            </nav>
                            <!-- /nav -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Artikel Ends --}}


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