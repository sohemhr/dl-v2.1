<!DOCTYPE html>
<html lang="id">
    <x-apps.head />
    {{-- script New Start --}}
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
                        <div class="form-floating mb-0">
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
                            <div class="alert alert-danger alert-icon" role="alert">
                                <i class="uil uil-times-circle"></i> 
                                <h4>Mohon maaf artikel yang anda cari tidak ditemukan..!!?</h4>
                            </div>                            
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
                                                            {{-- <p>{!! Str::words($pop->artikel_deskripsi, 15, ' ...') !!}</p> --}}
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
                                                                <a><i class="uil uil-user"></i>
                                                                    <span>By {{ $pop->nama }}</span>
                                                                </a>
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
                                    <h1>
                                        <span class="typer text-yellow" data-delay="100" data-words="Pendirian Perusahaan selesai hanya dalam 1 hari kerja" style="font-size: larger;">
                                        </span>
                                        <span class="cursor text-yellow" data-owner="typer"></span>
                                    </h1>
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