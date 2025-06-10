<!DOCTYPE html>
<html lang="id">
    <x-apps.head />
    {{-- script New Start --}}
    @foreach ($getPromo as $itemsMeta)
    <meta name="keywords" content="{{ $itemsMeta->promo_judul }}">
    <meta name="author" content="dokterlegal.co.id">
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="{{ $itemsMeta->promo_judul }}">
    <meta property="og:description" content="{{strip_tags(htmlspecialchars_decode($itemsMeta->promo_deskripsi))}}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.dokterlegal.co.id/promo/{{ $itemsMeta->promo_slug }}">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/storage/{{ $itemsMeta->promo_foto }}">
    <link rel="canonical" href="https://www.dokterlegal.co.id/promo/{{ $itemsMeta->promo_slug }}" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/promo/{{ $itemsMeta->promo_slug }}",
            "datePublished": "{{ gmdate(DateTime::W3C, strtotime($itemsMeta->updated_at)) }}",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/promo/{{ $itemsMeta->promo_slug }}"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/promo/{{ $itemsMeta->promo_slug }}" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/promo/{{ $itemsMeta->promo_slug }}" />
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

    {{-- Promo Start --}}
    <section class="wrapper bg-light">
        <div class="container py-8 py-md-8">
            @foreach ($getPromo as $items)
            <div class="row gx-lg-12 gx-xl-12">
                <div class="col-md-10 mt-6">
                    <h3 class="display-1 mb-4 header-custom">
                        {{ $items->promo_judul }}
                    </h3>
                </div>
                <div class="col-md-2 mt-6 text-right">
                    <div class="mb-0 mb-md-2">
                        <div class="dropdown share-dropdown btn-group">
                        <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="uil uil-share-alt"></i> Share </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="whatsapp://send?text={{url('promo/'.$items->promo_slug)}}" target="_blank"><i class="uil uil-whatsapp"></i></i>WhatsApp</a>
            
                            <a class="dropdown-item" href="http://twitter.com/share?url={{url('promo/'.$items->promo_slug)}}" target="_blank"><i class="uil uil-twitter"></i>Twitter</a>
            
                            <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u={{url('promo/'.$items->promo_slug)}}" target="_blank"><i class="uil uil-facebook-f"></i>Facebook</a>
            
                            <a class="dropdown-item" href="https://linkedin.com/sharing/share-offsite/?url={{url('promo/'.$items->promo_slug)}}" target="_blank"><i class="uil uil-linkedin"></i>Linkedin</a>
                        </div>
                        <!--/.dropdown-menu -->
                        </div>
                        <!--/.share-dropdown -->
                    </div>
                </div>
                
                
                <div class="col-md-4 mt-6">
                    <figure class="card-img-top"><img fetchpriority="high" src="/storage/{{ $items->promo_foto }}" alt="Dokter Legal" /></figure>
                </div>
                <div class="col-md-8 mt-6 border rounded">
                    <p>
                        {!! $items->promo_deskripsi !!}
                    </p>
                </div>
                <div class="mt-6 text-center">
                    <a href="https://wa.me/{{ $getRndNumb }}?text=Hello!%20Saya%20mempunyai%20pertanyaan%20tentang%20Dokter%20Legal,%20saya%20mengetahuinya%20dari%20situs%20https://www.dokterlegal.co.id" target="_blank" class="btn btn-blue rounded-pill">Dapatkan Sekarang &nbsp;<i class="uil uil-rocket"></i></a>
                </div>
            </div>
            @endforeach

            <div class="row justify-content-center">
                <div class="mt-6 text-center">
                <h4 class="mt-8">Informasi lebih lanjut, hubungi kami :</h4>
                </div>

                @foreach ($getOffice as $listOffice)
                <div class="mt-6 text-center">
                    <h2 class="mb-6">{{ $listOffice->office_nama }}</h2>
                </div>
                    @php
                        $getNomor = DB::table('contact_nomors')->where('cn_office_kode', $listOffice->office_kode)
                                    ->orderBy('created_at')
                                    ->get();
                    @endphp
                    @foreach ($getNomor as $listNomor)
                    <div class="col-md-3 mt-2">
                        <div class="card hovernavlink p-2">
                            <a style="display: flex;" href="https://wa.me/{{ $listNomor->cn_hp }}?text=Hello!%20Saya%20mempunyai%20pertanyaan%20tentang%20Dokter%20Legal,%20saya%20mengetahuinya%20dari%20situs%20https://www.dokterlegal.co.id" target="_blank">
                                <div class="rounded img-svg p-2 mb-lg-2">
                                    <img class="rounded-circle w-12" src="/storage/{{ $listNomor->cn_foto }}" alt="Foto CS">
                                </div>
                                <span class="text-blue mt-4 mb-5" style="align-self: center; font-size: 18px;">
                                    <b>&nbsp;{{ $listNomor->cn_nama }}</b>
                                </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                @endforeach
            </div>

            <div class="row gx-lg-12 gx-xl-12">
                <div class="col-lg-12">
                    <div class="text-dark">
                        <div class="card bg-transparent">              
                        {{-- <div class="card-body"> --}}
                            <hr />
                            <h3 class="mb-6">Promo Lainnya</h3>
                            <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-md="3" data-items-xs="1">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($getRekomen as $rekom)
                                        <div class="swiper-slide">
                                            <div class="item-inner">
                                                <article>
                                                    <div class="card">
                                                    <figure class="card-img-top overlay overlay-1 hover-scale">
                                                        <a href="{{url('promo/'.$rekom->promo_slug)}}"> 
                                                        <img src="/storage/{{ $rekom->promo_foto }}" alt="Dokter Legal" />
                                                        </a>
                                                        <figcaption>
                                                        <h5 class="from-top mb-0">Selengkapnya..</h5>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="post-content p-2">
                                                        <h5 class="post-title h3 mt-1 mb-1">
                                                        <a class="link-dark" href="{{url('promo/'.$rekom->promo_slug)}}">
                                                            {{ $rekom->promo_judul }}
                                                        </a>
                                                        </h5>
                                                    </div>
                                                    <!--/.card-body -->
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
                        {{-- </div> --}}
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.blog -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
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