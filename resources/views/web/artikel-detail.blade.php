<!DOCTYPE html>
<html lang="id">
    <x-apps.head />
    {{-- script New Start --}}
    @foreach ($getArtikel as $itemsMeta)
    <meta name="keywords" content="{{ $itemsMeta->artikel_judul }}">
    <meta name="author" content="dokterlegal.co.id">
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="{{ $itemsMeta->artikel_judul }}">
    <meta property="og:description" content="{{strip_tags(htmlspecialchars_decode($itemsMeta->artikel_deskripsi))}}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.dokterlegal.co.id/artikel/{{ $itemsMeta->artikel_slug }}">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/storage/{{ $itemsMeta->artikel_foto }}">
    <link rel="canonical" href="https://www.dokterlegal.co.id/artikel/{{ $itemsMeta->artikel_slug }}" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@dokterlegal_tm">
    <meta property="twitter:title" content="{{ $itemsMeta->artikel_judul }}">
    <meta name="twitter:image" content="https://www.dokterlegal.co.id/storage/{{ $itemsMeta->artikel_foto }}">
    <meta property="twitter:description" content="{{strip_tags(htmlspecialchars_decode($itemsMeta->artikel_deskripsi))}}">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{ $itemsMeta->artikel_judul }}",
            "url": "https://www.dokterlegal.co.id/artikel/{{ $itemsMeta->artikel_slug }}",
            "datePublished": "{{ gmdate(DateTime::W3C, strtotime($itemsMeta->updated_at)) }}",
            "image": "https://www.dokterlegal.co.id/storage/{{ $itemsMeta->artikel_foto }}",
            "thumbnailUrl": "https://www.dokterlegal.co.id/artikel/{{ $itemsMeta->artikel_slug }}"
        }
    </script>
    <script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "NewsArticle",
			"mainEntityOfPage": {
				"@type": "WebPage",
				"@id": "https://www.dokterlegal.co.id/artikel/{{ $itemsMeta->artikel_slug }}"
			},
			"headline": "{{ $itemsMeta->artikel_judul }}",
			"image": {
				"@type": "ImageObject",
				"url": "https://www.dokterlegal.co.id/storage/{{ $itemsMeta->artikel_foto }}",
				"height": 600,
				"width": 1200
			},
			"datePublished": "{{ gmdate(DateTime::W3C, strtotime($itemsMeta->created_at)) }}",
			"dateModified": "{{ gmdate(DateTime::W3C, strtotime($itemsMeta->updated_at)) }}",
			"author": {
				"@type": "Person",
				"name": "{{ $itemsMeta->nama }}"
			},
			"publisher": {
				"@type": "Organization",
				"name": "DokterLegal.com",
				"logo": {
					"@type": "ImageObject",
					"url": "https://www.dokterlegal.co.id/img/LogoDL.webp",
					"width": 150,
					"height": 150
				}
			},
			"description": "{{ strip_tags($itemsMeta->artikel_deskripsi) }}"
		}
	</script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/artikel/{{ $itemsMeta->artikel_slug }}" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/artikel/{{ $itemsMeta->artikel_slug }}" />
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
        <div class="container py-14 py-md-8">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8">
                    <div class="text-dark">
                        <div class="card bg-transparent">  
                            @foreach ($getArtikel as $items)
                            {{-- <div class="card-body"> --}}
                            <h1 class="display-1 mb-4 header-custom">
                                {{ $items->artikel_judul }}
                            </h1>
                            <p>
                                <i class="uil uil-user-circle"></i> 
                                By {{ $items->nama }} &nbsp;
                                <i class="uil uil-folder-open"></i> 
                                {{ $items->kategori_nama }} &nbsp;
                                <i class="uil uil-calendar-alt"></i> 
                                {{ \Carbon\Carbon::parse($items->artikel_tanggal)->format('d F Y') }}
                            </p>
                            <figure class="card-img-top"><img fetchpriority="high" src="/storage/{{ $items->artikel_foto }}" alt="Dokter Legal" /></figure>
                            <div class="classic-view">
                                <article class="post">
                                    <div class="post-content mb-5">
                                        <p>
                                            {!! $items->artikel_deskripsi !!}
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                    <div class="post-footer d-md-flex flex-md-row justify-content-md-between align-items-center mt-8">
                                        <div>
                                            <ul class="list-unstyled tag-list mb-0">
                                                @if (isset($getKeyword))
                                                    @foreach ($getKeyword as $itemkey)

                                                    <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill mb-0">{{ $itemkey->keyword_nama }}</a></li>

                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="mb-0 mb-md-2">
                                            <div class="dropdown share-dropdown btn-group">
                                            <button class="btn btn-sm btn-red rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="uil uil-share-alt"></i> Share </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="whatsapp://send?text={{url('artikel/'.$items->artikel_slug)}}" target="_blank"><i class="uil uil-whatsapp"></i></i>WhatsApp</a>

                                                    <a class="dropdown-item" href="http://twitter.com/share?url={{url('artikel/'.$items->artikel_slug)}}" target="_blank"><i class="uil uil-twitter"></i>Twitter</a>

                                                    <a class="dropdown-item" href="https://www.facebook.com/sharer/sharer.php?u={{url('artikel/'.$items->artikel_slug)}}" target="_blank"><i class="uil uil-facebook-f"></i>Facebook</a>

                                                    <a class="dropdown-item" href="https://linkedin.com/sharing/share-offsite/?url={{url('artikel/'.$items->artikel_slug)}}" target="_blank"><i class="uil uil-linkedin"></i>Linkedin</a>
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
                            @endforeach 
                            <hr />



                            <h3 class="mb-6">Artikel Terkait</h3>
                            <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($getPopular as $pop)
                                        <div class="swiper-slide">
                                            <div class="item-inner">
                                                <article>
                                                    <div class="card">
                                                        <figure class="card-img-top overlay overlay-1 hover-scale">
                                                            <a href="/artikel/{{ $pop->artikel_slug }}"> 
                                                                <img src="/storage/{{ $pop->artikel_foto }}" alt="Dokter Legal" />
                                                            </a>
                                                        <figcaption>
                                                            <h5 class="from-top mb-0">Read More</h5>
                                                        </figcaption>
                                                        </figure>
                                                        <div class="card-body">
                                                        <div class="post-header">
                                                            <div class="post-category text-line">
                                                            <a href="/artikel/kategori/{{ $pop->kategori_slug }}" class="hover" rel="category">
                                                                {{ $pop->kategori_nama }}
                                                            </a>
                                                            </div>
                                                            <!-- /.post-category -->
                                                            <h5 class="post-title h5 mt-1 mb-3">
                                                                <a class="link-dark" href="/artikel/{{ $pop->artikel_slug }}">
                                                                    {{ $pop->artikel_judul }}
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <!-- /.post-header -->
                                                        <div class="post-content fs-16">
                                                            {!! Str::limit(strip_tags($pop->artikel_deskripsi), $limit = 150, $end = ' ...') !!}
                                                        </div>
                                                        <!-- /.post-content -->
                                                        </div>
                                                        <!--/.card-body -->
                                                        <div class="card-footer">
                                                        <ul class="post-meta d-flex mb-0">
                                                            <li class="post-date">
                                                                <i class="uil uil-calendar-alt"></i>
                                                                <span>{{ \Carbon\Carbon::parse($pop->artikel_tanggal)->format('d F Y') }}</span>
                                                            <br>
                                                                <i class="uil uil-user"></i>
                                                                    <span>By {{ $pop->nama }}</span>
                                                                
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
                    <h4 class="widget-title mb-3">Popular Posts</h4>
                    <ul class="image-list">
                        @foreach ($getPopular as $popside)
                        <li>
                            <figure>
                                <a href="/artikel/{{ $popside->artikel_slug }}">
                                    <img src="/storage/{{ $popside->artikel_foto }}" alt="Dokter Legal" />
                                </a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2"> 
                                    <a class="link-dark" href="/artikel/{{ $popside->artikel_slug }}">
                                        {{ $popside->artikel_judul}}
                                    </a> 
                                </h6>
                                <ul class="post-meta">
                                    <li class="post-date">
                                        <i class="uil uil-calendar-alt"></i>
                                        <span>{{ \Carbon\Carbon::parse($popside->artikel_tanggal)->format('d F Y') }}</span>
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
                <div class="widget">
                    <h4 class="widget-title mb-3">Categories</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        @foreach ($getKategori as $kategori)
                        <li><a href="/artikel/kategori/{{ $kategori->kategori_slug }}">{{ $kategori->kategori_nama }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Tags</h4>
                    <ul class="list-unstyled tag-list">
                        @if (isset($getKeyword))
                            @foreach ($getKeyword as $xkey)
                            <li>
                                <a href="#" class="btn btn-soft-ash btn-sm rounded-pill">{{ $xkey->keyword_nama }}</a>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Archive</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        @for ($i = date('Y'); $i>2023; $i--)
                        <li><a href="/artikel/tahun/{{ $i }}">{{ $i }}</a></li>
                        @endfor
                    </ul>
                </div>
                <!-- /.widget -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!-- /.row -->
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