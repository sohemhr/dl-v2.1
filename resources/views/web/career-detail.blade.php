<!DOCTYPE html>
<html lang="id">
    <x-apps.head />
    {{-- script New Start --}}
    @foreach ($getCareer as $itemsMeta)
    <meta name="keywords" content="{{ $itemsMeta->career_judul }}">
    <meta name="author" content="dokterlegal.co.id">
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="{{ $itemsMeta->career_judul }}">
    <meta property="og:description" content="{{strip_tags(htmlspecialchars_decode($itemsMeta->career_deskripsi))}}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.dokterlegal.co.id/career/{{ $itemsMeta->career_slug }}">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/storage/{{ $itemsMeta->career_foto }}">
    <link rel="canonical" href="https://www.dokterlegal.co.id/career/{{ $itemsMeta->career_slug }}" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/career/{{ $itemsMeta->career_slug }}",
            "datePublished": "{{ gmdate(DateTime::W3C, strtotime($itemsMeta->updated_at)) }}",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/career/{{ $itemsMeta->career_slug }}"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/career/{{ $itemsMeta->career_slug }}" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/career/{{ $itemsMeta->career_slug }}" />
	<link rel="preconnect" href="https://www.googletagservices.com" />
	<link rel="preconnect" href="https://www.google-analytics.com" />
    <link rel="preconnect" href="https://images.some-other-host.com" />
    <link rel="preconnect" href="https://subdomain.my-cdn.com" />
    <link rel="preconnect" href="https://ssl.google-analytics.com" />
    <link rel="preconnect" href="https://www.googleadservices.com" />
    <link rel="preconnect" href="https://googleads.g.doubleclick.net" >
    <link rel="preconnect" href="https://www.google.com" />
    @endforeach
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
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Breadcum Ends --}}

    {{-- Career Start --}}
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-8">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <div class="text-dark">
                        <div class="card bg-transparent">  
                            @foreach ($getCareer as $items)
                            {{-- <div class="card-body"> --}}
                            <h1 class="display-1 mb-4 header-custom">
                                {{ $items->career_judul }}
                            </h1>
                            <figure class="card-img-top"><img fetchpriority="high" src="/storage/{{ $items->career_foto }}" alt="Dokter Legal" /></figure>
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <p>
                                            {!! $items->career_deskripsi !!}
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                        <div>
                                            <ul class="list-unstyled tag-list mb-0">
                                                &nbsp;
                                            </ul>
                                        </div>
                                        <div class="mb-0 mb-md-2">
                                            <div class="dropdown share-dropdown btn-group">
                                            <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil uil-share-alt"></i> Share </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="whatsapp://send?text={{url('career/'.$items->career_slug)}}" target="_blank"><i class="uil uil-whatsapp"></i></i>WhatsApp</a>

                                                    <a class="dropdown-item" href="http://twitter.com/share?url={{url('career/'.$items->career_slug)}}" target="_blank"><i class="uil uil-twitter"></i>Twitter</a>

                                                    <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u={{url('career/'.$items->career_slug)}}" target="_blank"><i class="uil uil-facebook-f"></i>Facebook</a>

                                                    <a class="dropdown-item" href="https://linkedin.com/sharing/share-offsite/?url={{url('career/'.$items->career_slug)}}" target="_blank"><i class="uil uil-linkedin"></i>Linkedin</a>
                                                </div>
                                                <!--/.dropdown-menu -->
                                            </div>
                                            <!--/.share-dropdown -->
                                        </div>
                                    </div>
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <hr>
                            <div class="mb-15">
                                    <div class="card-header bg-blue">
                                        <h2 class="card-title text-center text-white">Drop Your CV</h2>
                                    </div>
                                <div style="width:100%;height:500px;" data-fillout-id="1R6qZXgdS3us" data-fillout-embed-type="standard" data-fillout-inherit-parameters data-fillout-dynamic-resize></div><script src="https://server.fillout.com/embed/v1/"></script>
                            </div>
                            @endforeach 
                            
                            <!-- /.swiper-container -->
                        {{-- </div> --}}
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
                <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
                <div class="widget">
                    <h4 class="widget-title mb-3">Lowongan Lainnya</h4>
                    <ul class="image-list">
                        @foreach ($getRekomen as $popside)
                        <li>
                            <figure>
                                <a href="/career/{{ $popside->career_slug }}">
                                    <img src="/storage/{{ $popside->career_foto }}" alt="Dokter Legal" />
                                </a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2"> 
                                    <a class="link-dark" href="/career/{{ $popside->career_slug }}">
                                        {{ $popside->career_judul}}
                                    </a> 
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i>
                                        <span>{{ \Carbon\Carbon::parse($popside->career_tanggal_mulai)->format('d F Y') }}</span>
                                    </li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <!-- /.image-list -->
                </div>
                <!-- /.widget -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Career Ends --}}


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