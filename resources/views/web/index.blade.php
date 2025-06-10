<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <title>
        Dokter Legal - Solusi dan Mitra Perizinan Usaha Anda
    </title>
    <meta name="description" content="Dokter Legal melayani lebih dari ratusan perusahaan di Indonesia, ditangani oleh tim yang profesional dan berpengalaman, mulai dari pendirian usaha sampai perizinan khusus lainnya">

    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <meta name="author" content="dokterlegal.co.id">
    <meta name="robots" content="index,follow" />

    <meta property="og:title" content="{{$blog->title}}">
    <meta property="og:description" content="{{strip_tags(htmlspecialchars_decode($blog->deskripsi))}}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://dokterlegal.co.id/blog/detail/{{$blog->slug}}">
    <meta property="og:site_name" content="Website Dokter Legal">
    {{-- <meta property="og:image" content="{{asset('storage/'.$blog->image)}}"> --}}
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="/img/favicon.ico">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- css -->
    <link rel="stylesheet" href="/assets/fe/css/plugins.css">
    <link rel="stylesheet" href="/assets/fe/css/style.css">
    <link rel="stylesheet" href="/assets/fe/css/colors/aqua.css">
    <link rel="preload" href="/assets/fe/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="/assets/fe/css/blocks.css">    
    <!-- slider dari swiffyslider.com -->
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <!-- slider dari swiffyslider.com end -->

    <style>
    /* whatsapp */
    .act-btn{
        background:green;
        ctaText:,
        display: block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: white;
        font-size: 30px;
        font-weight: bold;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        text-decoration: none;
        transition: ease all 0.3s;
        position: fixed;
        right: 30px;
        bottom: 90px;
        z-index: 1000;
        float: none;
        }
        .act-btn:hover{background: rgb(105, 255, 82)}
    </style>



    {{-- medsos --}}
    <style>
        .container-medsos{background-color: #DD4814;width: 100%;height: 100%;}
        /* Ikon media sosial */
        .sticky-container-medsos{ padding:0px; margin:0px; position:fixed; right:-130px;top:230px; width:210px; z-index: 1100;}
        .sticky li{list-style-type:none;background-color:#fff;color:#efefef;height:43px;padding:0px;margin:0px 0px 1px 0px; -webkit-transition:all 0.25s ease-in-out;-moz-transition:all 0.25s ease-in-out;-o-transition:all 0.25s ease-in-out; transition:all 0.25s ease-in-out; cursor:pointer;}
        .sticky li:hover{margin-left:-115px;}
        .sticky li img{float:left;margin:5px 4px;margin-right:5px;}
        .sticky li p{padding-top:5px;margin:0px;line-height:16px; font-size:11px;}
        .sticky li p a{ text-decoration:none; color:#2C3539;}
        .sticky li p a:hover{text-decoration:underline;}
    </style>
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                <div class="navbar-brand w-100">
                    <a href="./index.html">
                    <img class="logo-dark" src="/assets/img/logo-dark.png" srcset="/assets/img/logo-dark@2x.png 2x" alt="Dokter Legal" width="45%"/>
                    <img class="logo-light" src="/assets/img/logo-dark.png" srcset="/assets/img/logo-dark@2x.png 2x" alt="Dokter Legal" width="45%"/>
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-mega">
                        <a class="nav-link" href="#" data-bs-toggle="">Home</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="">Tentang Kami</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Info Bisnis</a>
                        <div class="dropdown-menu dropdown-lg">
                            <div class="dropdown-lg-content">
                            <div>
                                <h6 class="dropdown-header">Project Pages</h6>
                                <ul class="list-unstyled">
                                <li><a class="dropdown-item" href="./projects.html">Projects I</a></li>
                                <li><a class="dropdown-item" href="./projects2.html">Projects II</a></li>
                                <li><a class="dropdown-item" href="./projects3.html">Projects III</a></li>
                                <li><a class="dropdown-item" href="./projects4.html">Projects IV</a></li>
                                </ul>
                            </div>
                            <!-- /.column -->
                            <div>
                                <h6 class="dropdown-header">Single Projects</h6>
                                <ul class="list-unstyled">
                                <li><a class="dropdown-item" href="./single-project.html">Single Project I</a></li>
                                <li><a class="dropdown-item" href="./single-project2.html">Single Project II</a></li>
                                <li><a class="dropdown-item" href="./single-project3.html">Single Project III</a></li>
                                <li><a class="dropdown-item" href="./single-project4.html">Single Project IV</a></li>
                                </ul>
                            </div>
                            <!-- /.column -->
                            </div>
                            <!-- /auto-column -->
                        </div>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Layanan</a>
                        <ul class="dropdown-menu mega-menu">
                            <li class="mega-menu-content">
                                <div class="row gx-0 gx-lg-">
                                    <!--/column -->
                                    <div class="col-md-12">
                                        <a href="/layanan">
                                            <h3 class="fs-25 dropdown-header text-blue text-center">Pilih Layanan</h3>
                                        </a>
                                        <div class="row p-2 text-dark">
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/pendirian-perusahaan-new">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-building-fill-add" viewBox="0 0 16 16">
                                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
                                                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-3.59 1.787A.5.5 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.5 4.5 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark mb-5" style="align-self: center; font-size: 15px;">
                                                            <b>Pendirian Perusahaan</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Pendirian PT <br /> 
                                                                Pendirian CV
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/pembuatan-perjanjian">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Pembuatan dan Peninjauan Perjanjian</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Perjanjian Kerja <br /> 
                                                                Perjanjian Investasi
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/layanan-perpajakan">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-bank2" viewBox="0 0 16 16">
                                                                <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916zM12.375 6v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zm-2.5 0v7h-1.25V6zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2M.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Perpajakan & Pembukuan</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Laporan Perpajakan <br /> 
                                                                Laporan Pembukuan
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/hukum">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg  height="50" width="50"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024"><path d="M514 192c34-1 61-28 62-62 1-37-29-67-66-66-34 1-61 28-62 62-1 37 29 67 66 66zm464 384h-18L833 330c18-2 36-9 52-16 24-11 29-43 11-62l-1-1c-11-11-28-15-43-8-14 6-34 13-53 13-56 0-81-64-287-64s-231 64-287 64c-20 0-39-6-53-13-15-6-32-3-43 8l-1 1c-18 19-13 50 11 62 16 8 34 14 52 16L64 576H46c-8 0-14 7-13 15 11 64 92 113 191 113s180-49 191-113c1-8-5-15-13-15h-18L257 331c83-7 127-49 191-49v486c-35 0-64 29-64 64h-71c-28 0-57 29-57 64h512c0-35-29-64-71-64h-57c0-35-29-64-64-64V282c64 0 108 42 191 49L640 576h-18c-8 0-14 7-13 15 11 64 92 113 191 113s180-49 191-113c1-8-5-15-13-15zm-658 0H128l96-180 96 180zm384 0 96-180 96 180H704z" fill="#0a4194" class="fill-000000"></path></svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Layanan Hukum</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Solusi Hukum Profesional dengan Biaya yang Transparan <br /> 
                                                                
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row p-2 text-dark">
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/penutupan-perusahaan-new">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-building-fill-dash" viewBox="0 0 16 16">
                                                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1"/>
                                                                <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-3.59 1.787A.5.5 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.5 4.5 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Penutupan Perusahaan</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Penutupan PT <br /> 
                                                                Penutupan CV
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/pembuatan-dokumen">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-file-earmark-medical-fill" viewBox="0 0 16 16">
                                                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-3 2v.634l.549-.317a.5.5 0 1 1 .5.866L7 7l.549.317a.5.5 0 1 1-.5.866L6.5 7.866V8.5a.5.5 0 0 1-1 0v-.634l-.549.317a.5.5 0 1 1-.5-.866L5 7l-.549-.317a.5.5 0 0 1 .5-.866l.549.317V5.5a.5.5 0 1 1 1 0m-2 4.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1m0 2h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Pembuatan dan Perubahan Dokumen Perusahaan</b><br />
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/haki-new">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>HAKI</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Layanan perlindungan Hak kekayaan Intelektual <br /> 
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/properti">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-buildings-fill" viewBox="0 0 16 16">
                                                                <path d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Perizinan Properti</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Solusi legalitas seputar tanah dan properti <br /> 
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row p-2 text-dark">
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/virtual-office-new">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Virtual Office</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Virtual Office Lite <br /> 
                                                                Virtual Office Premium
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/digital-marketing">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-globe-asia-australia" viewBox="0 0 16 16">
                                                                <path d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.48.48 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.6.6 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.45.45 0 0 0 .138-.326M5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.7.7 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52z"/>
                                                                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.88.88 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a7 7 0 0 1 3.425 7.692 1 1 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a1 1 0 0 0 .283.126 7 7 0 0 1-9.49-3.409Z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Digital Marketing</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Pembuatan Website <br /> 
                                                                Pendaftaran Domain
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/penanaman-modal-asing">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                                                                <path d="M0 5a5 5 0 0 0 4.027 4.905 6.5 6.5 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05q-.001-.07.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.5 3.5 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98q-.004.07-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5m16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0m-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>PMA</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                KITAS <br /> 
                                                                KITAP
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/privilege">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-gift-fill" viewBox="0 0 16 16">
                                                                <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Layanan Privilege</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Benefit untuk Klien Pembuatan PT &amp; CV.
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row p-2 text-dark">
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/perizinan-khusus">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                                                                <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707z"/>
                                                                <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Perizinan Khusus</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Perizinan Perusahaan <br /> 
                                                                Perizinan Khusus/Sektoral
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/perizinan-usaha-new">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-shop" viewBox="0 0 16 16">
                                                                <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Perizinan Usaha</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                OSS <br /> 
                                                                NIB
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mt-2">
                                                <div class="card hovernvlink p-2">
                                                    <a style="display: flex;" href="/layanan-lainnya">
                                                        <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0a4194" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
                                                                <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1m9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0z"/>
                                                                </svg>
                                                        </div>
                                                        <span class="text-dark" style="align-self: center; font-size: 15px;">
                                                            <b>Layanan Lainnya</b><br /> 
                                                            <span class="text-muted" style="font-size: 13px;">
                                                                Penerjemah <br /> 
                                                                Pelaporan LKPM
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </li>
                            
                    </ul>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Fitur</a>
                        <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="#">Pengecekan Nama PT</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#">Sintem Tracking</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#">KBLI</a></li>
                        </ul>
                    </li>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                        <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                        <br /> 00 (123) 456 78 90 <br />
                        <nav class="nav social social-white mt-4">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">                
                        <li class="nav-item d-none d-md-block">
                            <a href="./contact.html" class="btn btn-sm me-2 btn-yellow rounded-pill">Hubungi Kami</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->


        <!--/modal wa start -->
        <a href="#" class="act-btn" data-bs-toggle="modal" data-bs-target="#modal-02">
            <img class="icon mb-1" src="/assets/img/whatsapp.svg" style="width:30px" alt="WhatsApp">
        </a>
        
        <div class="modal fade" id="modal-02" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content text-center">
                    <div class="card  bg-image bg-overlay" data-image-src="/assets/fe/img/photos/bg3.jpg">
                        <div class="modal-body">
                            <button class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h3 class="display-4 text-white">Hallo CS Dokter Legal</h3>
                            <p class="mb-6  text-white">Mulai Percakapan Kebutuhan via WhatsApp</p>
                            <div class="row justify-content-center">
                                @php
                                    $getOfficeModal = \App\Helpers\MainHelper::getOffice();
                                @endphp
                                @foreach ($getOfficeModal as $modal_office)
                                <div class="mt-6 text-center">
                                    <h2 class="mb-2 text-white">{{ $modal_office->office_nama }}</h2>
                                </div>
                                    @php
                                        $getHpCs = DB::table('contact_nomors')->where('cn_office_kode', $modal_office->office_kode)->get();
                                    @endphp
                                    @foreach ($getHpCs as $waCs)
                                    <div class="col-md-10 mt-2">
                                        <div class="card hovernavlink p-2">
                                            <a style="display: flex;" href="https://wa.me/{{ $waCs->cn_hp }}?text=Hello!%20Saya%20mempunyai%20pertanyaan%20tentang%20Dokter%20Legal,%20saya%20mengetahuinya%20dari%20situs%20https://www.dokterlegal.co.id" target="_blank">
                                                <div class="rounded img-svg d-none d-lg-block p-2 mb-lg-2">
                                                    <img class="rounded-circle w-11" src="/storage/{{ $waCs->cn_foto }}" alt="Foto CS">
                                                </div>
                                                <span class="text-blue mt-4 mb-5" style="align-self: center; font-size: 20px;">
                                                    <b>&nbsp;&nbsp;{{ $waCs->cn_nama }}</b>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                @endforeach
                            </div>
                            <!-- /.row -->
                        </div>
                        <!--/.modal-body -->
                    </div>
                </div>
                <!--/.modal-content -->
            </div>
            <!--/.modal-dialog -->
        </div>
        <!--/modal wa ends --> 


        {{--  angled lower-end --}}
        <section class="wrapper bg-full bg-pale-blue pb-12">
            <div class="container pt-7 pt-md-11 pb-10">
                <div class="row gx-0 gy-10 align-items-center">
                    <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 text-blue mb-4">Create Business <br /><span class="typer text-yellow text-nowrap" data-delay="100" data-words="Not Companies"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
                        <p class="fs-20">Kami membantu Anda memulai bisnis dengan reputasi sebagai perusahaan yang professional.</p>
                        <div>
                            <a class="btn btn-yellow btn-icon btn-icon-start rounded-pill">
                                <i class="uil uil-whatsapp"></i> Konsultasi Sekarang
                            </a>
                        </div>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                        <div class="position-relative">
                            <div class="btn btn-rounded  pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 65%; left: 1%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                                <span class="card progressbar semi-circle blue p-3" data-value="80" style="top: 65%; left: 40%; transform: translate(-50%, -50%); width: 170px; height: 170px;">Hemat waktu</span>
                            </div>
                            <figure class="rounded shadow-lg"><img src="/assets/fe/img/material/home/banner.png" srcset="/assets/fe/img/material/home/banner.png" alt="Dokter Legal"></figure>
                        </div>
                        <div class="card-body py-4 px-5">
                            <div class="d-flex flex-row align-items-center">
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!-- /div -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- end section Header-->
        <!-- section About-->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
                <div class="col-lg-6 position-relative">
                    <div class="btn btn-circle btn-yellow pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                    <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg">20+</span></h3>
                    <p>Year Experience</p>
                    </div>
                    <div class="row gx-md-5 gy-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                        <div class="col-md-10 offset-md-2">
                            <figure class="rounded"><img src="/assets/fe/img/photos/ab1.jpg" srcset="/assets/fe/img/photos/ab1@2x.jpg 2x" alt="Dokter Legal"></figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-12">
                            <figure class="rounded"><img src="/assets/fe/img/photos/ab2.jpg" srcset="/assets/fe/img/photos/ab2@2x.jpg 2x" alt="Dokter Legal"></figure>
                        </div>
                        <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="/assets/fe/img/photos/ab3.jpg" srcset="/assets/fe/img/photos/ab3@2x.jpg 2x" alt="Dokter Legal"></figure>
                    </div>
                    <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-5 mb-5">Jasa Konsultan untuk Pengurusan Izin Usaha/Legalitas Perusahaan.</h3>
                    <p class="mb-7">Dokter Legal merupakan perusahaan Jasa Konsultan untuk Pengurusan Izin Usaha/ Legalitas Perusahaan yang ditangani oleh Tenaga-tenaga Muda Profesional yang tergabung dalam Team yang telah berpengalaman lebih dari 5 tahun.</p>
                    <div class="row counter-wrapper gy-6">
                    <div class="col-md-4">
                        <h3 class="counter text-blue">518</h3>
                        <p>Completed Projects</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <h3 class="counter text-blue">472</h3>
                        <p>Satisfied Customers</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <h3 class="counter text-blue">20</h3>
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
        <!-- end section About-->

        <!-- section Services-->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row mb-3">
                    <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                        <h2 class="display-4 mb-3 px-lg-14">Pilih layanan sesuai dengan kebutuhan Anda</h2>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
                <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-blue rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Pendirian Perusahaan</h4>
                                <p class="mb-2">Membantu Anda menjalankan bisnis dengan legalitas serta badan usaha yang bonafide.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <div class="card">
                            <div class="card-body">
                                <div class="svg-bg bg-pale-primary rounded-xl"><img src="/assets/fe/img/icons/solid/building.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div><br>
                                <h4 class="mb-1">Penutupan Perusahaan</h4>
                                <p class="mb-2">Penyelesaian administrasi untuk menghindari utang pajak dan menghentikan kewajiban.</p>
                                <nav class="nav social mb-0">
                                <a href="#" class="btn btn-expand btn-blue rounded-pill">
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
                        <!-- /.item-inner -->
                        </div>
                        <!--/.swiper-slide -->
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
        <!-- /section -->
        <!-- end section Services-->

        <!-- section Promo-->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                    <h2 class="fs-15 text-uppercase text-muted mb-3">Promo Dokter Legal</h2>
                    <h3 class="display-4 mb-10">Dapatkan Penawaran Spesial dari Kami<span class="underline-3 style-2 yellow"></span></h3>
                </div>
                <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="swiper-container grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure class="rounded mb-6"><img src="https://dokterlegal.co.id/storage/promo/1737533002-pengurusan-hki-merek.webp" srcset="/assets/fe/img/photos/promo1.png 2x" alt="Dokter Legal" /><a class="item-link" href="https://dokterlegal.co.id/storage/promo/1737533002-pengurusan-hki-merek.webp" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <a href="#" class="btn btn-expand btn-soft-blue rounded-pill">
                            <i class="uil uil-arrow-right"></i>
                            <span>Klaim Promo</span>
                            </a>
                        </div>
                        <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded mb-6"><img src="/assets/fe/img/photos/pd8.jpg" srcset="/assets/fe/img/photos/promo2.png 2x" alt="Dokter Legal" /><a class="item-link" href="/assets/fe/img/photos/pd8-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <a href="#" class="btn btn-expand btn-soft-blue rounded-pill">
                            <i class="uil uil-arrow-right"></i>
                            <span>Klaim Promo</span>
                            </a>
                        </div>
                        <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded mb-6"><img src="/assets/fe/img/photos/pd9.jpg" srcset="/assets/fe/img/photos/promo1.png 2x" alt="Dokter Legal" /><a class="item-link" href="/assets/fe/img/photos/pd9-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <a href="#" class="btn btn-expand btn-soft-blue rounded-pill">
                            <i class="uil uil-arrow-right"></i>
                            <span>Klaim Promo</span>
                            </a>
                        </div>
                        <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded mb-6"><img src="/assets/fe/img/photos/pd10.jpg" srcset="/assets/fe/img/photos/promo2.png 2x" alt="Dokter Legal" /><a class="item-link" href="/assets/fe/img/photos/pd10-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <a href="#" class="btn btn-expand btn-soft-blue rounded-pill">
                            <i class="uil uil-arrow-right"></i>
                            <span>Klaim Promo</span>
                            </a>
                        </div>
                        <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded mb-6"><img src="/assets/fe/img/photos/pd11.jpg" srcset="/assets/fe/img/photos/promo1.png 2x" alt="Dokter Legal" /><a class="item-link" href="/assets/fe/img/photos/pd11-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <a href="#" class="btn btn-expand btn-soft-blue rounded-pill">
                            <i class="uil uil-arrow-right"></i>
                            <span>Klaim Promo</span>
                            </a>
                        </div>
                        <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    <div class="swiper-slide">
                        <figure class="rounded mb-6"><img src="/assets/fe/img/photos/pd12.jpg" srcset="/assets/fe/img/photos/promo2.png 2x" alt="Dokter Legal" /><a class="item-link" href="/assets/fe/img/photos/pd12-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                        <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <a href="#" class="btn btn-expand btn-soft-blue rounded-pill">
                            <i class="uil uil-arrow-right"></i>
                            <span>Klaim Promo</span>
                            </a>
                        </div>
                        <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <!-- end section promo-->

        <!-- section Logo Client-->
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-14 py-md-16">
                <h3 class="text-center mb-8">Telah di Percaya Lebih dari 1000 Clients</h3>
                <div class="swiper-container clients mb-0" data-margin="30" data-dots="false" data-loop="true" data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000" data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-xs="2">
                <div class="swiper">
                    <div class="swiper-wrapper ticker">
                    <div class="swiper-slide px-5">
                        <img src="/assets/fe/img/brands/c1.png" alt="Dokter Legal" />
                    </div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/10.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/9.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/8.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/7.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/6.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/5.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/4.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/3.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/2.webp" alt="Dokter Legal" /></div>
                    <div class="swiper-slide px-5"><img src="/assets/fe/img/material/home/brands/1.webp" alt="Dokter Legal" /></div>
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <!-- End section Logo Client-->
        <!--section Support by-->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0">
                <div class="col-lg-4 mt-lg-2">
                    <h3 class="display-4 mb-3 pe-xxl-5">Dokter Legal Support by:</h3>
                    <p class="lead fs-lg mb-0 pe-xxl-5">We bring solutions to make life easier for our customers.</p>
                </div>
                <!-- /column -->
                <div class="col-lg-8">
                    <div class="row row-cols-2 row-cols-md-4 gx-0 gx-md-8 gx-xl-12 gy-12">
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/BCA.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/BNI.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/BRI.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/UOB.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/Mandiri.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/BPJS.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/Gorebiz.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/AsCom.webp" alt="Dokter Legal" />
                        </figure>
                    </div>
                    <!--/column -->
                    {{-- <div class="col">
                        <figure class="px-3 px-md-0 px-xxl-2">
                            <img src="/assets/fe/img/material/home/banks/SBB.webp" alt="Dokter Legal" />
                        </figure>
                    </div> --}}
                    <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!--end section Support by-->
        <!--section Proses-->
        <section class="wrapper ">
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
        <!-- / end section proses-->
        <!--section why choise-->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row text-center">
                <div class="col-xl-10 mx-auto">
                    <h3 class="display-4 mb-10 px-xxl-15">Kenapa Harus Memilih Dokter Legal?</h3>
                </div>
                <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="row gy-6">
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="card bg-soft-sky shadow-lg lift h-100">
                    <div class="card-body p-5 d-flex flex-row">
                        <div>
                        <span class="avatar bg-green text-white w-11 h-11 fs-20 me-4"><div class="svg-bg bg-sky rounded-xl"><img src="/assets/fe/img/icons/solid/partnership.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div></span>
                        </div>
                        <div>
                        <h3 class="mb-1 text-blue">Pendampingan</h3>
                        <p class="mb-0 text-body">Kami tidak hanya memberi saran, tetapi juga membantu mengarahkan bisnis Anda dengan layanan seperti pendirian usaha, perizinan, dan pendaftaran merek, memastikan legalitas yang kuat.</p>
                        </div>
                    </div>
                    </a>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="card bg-soft-sky shadow-lg lift h-100">
                    <div class="card-body p-5 d-flex flex-row">
                        <div>
                        <span class="avatar bg-green text-white w-11 h-11 fs-20 me-4"><div class="svg-bg bg-Yellow rounded-xl"><img src="/assets/fe/img/icons/solid/network.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div></span>
                        </div>
                        <div>
                        <h3 class="mb-1 text-blue">Layanan Terintegrasi</h3>
                        <p class="mb-0 text-body">Dari legalitas hingga perpajakan, manajemen SDM, dan digital marketing, semua kebutuhan bisnis Anda dapat diurus oleh tim ahli kami secara menyeluruh.</p>
                        </div>
                    </div>
                    </a>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-4">
                    <a href="#" class="card bg-soft-sky shadow-lg lift h-100">
                    <div class="card-body p-5 d-flex flex-row">
                        <div>
                        <span class="avatar bg-yellow text-white w-11 h-11 fs-20 me-4"><div class="svg-bg bg-Green rounded-xl"><img src="/assets/fe/img/icons/solid/target.svg" class="svg-inject icon-svg solid text-navy" alt="Dokter Legal" /></div></span>
                        </div>
                        <div>
                        <h3 class="mb-1 text-blue">Komitmen </h3>
                        <p class="mb-0 text-body">Dari legalitas hingga perpajakan, manajemen SDM, dan digital marketing, semua kebutuhan bisnis Anda dapat diurus oleh tim ahli kami secara menyeluruh.</p>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- /column -->
                </div>
            </div>
            <!-- /.container -->
        </section>
        <!-- end section why choise-->

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-10 bg-full">
                <div class="row">
                <div class="col-xl-12 mx-auto ">
                    <div class="card bg-image bg-overlay " data-image-src="/assets/fe/img/photos/bg3.jpg">
                    <div class="card-body p-9 p-xl-10">
                        <div class="row align-items-center counter-wrapper gy-4 text-center text-light">
                        <div class="col-12">
                            <h2><span class="typer text-yellow text-nowrap" data-delay="100" 
                            data-words="Pendirian Perusahaan selesai hanya dalam 1 hari kerja" style="font-size: larger;">
                            </span><span class="cursor text-yellow" data-owner="typer"></span></h2>
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
        <!-- /section -->

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
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
                        <a class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
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
                        <a class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
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
                        <a class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
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
        <!-- /section Features-->

        <section class="wrapper bg-light">
            <div class="container-card pt-14 pt-md-16">
                <div class="card image-wrapper bg-full bg-image pb-15" data-image-src="/assets/fe/img/photos/bg3.jpg">
                <div class="card-body py-14 px-0">
                    <div class="container">
                    <div class="row gx-lg-12 gx-xl-12 gy-10 gy-lg-0">
                        <div class="col-lg-6 text-center text-lg-start">
                        <h4 class="display-4 mb-3 pe-xxl-15 text-light">Apa kata mereka tentang DokterLegal.co.id</h4>
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
            <div class="container">
                <div class="grid mb-15">
                <div class="row isotope gy-6 mt-n18">
                    <div class="item col-md-6 col-xl-3">
                    <div class="card shadow-lg card-border-bottom border-soft-blue">
                        <div class="card-body p-5">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="icon mb-0">
                            <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta. Cras mattis consectetur.”</p>
                            <div class="blockquote-details">
                                <img class="rounded-circle w-12" src="/assets/fe/img/avatars/te1.jpg" srcset="/assets/fe/img/avatars/te1@2x.jpg 2x" alt="Dokter Legal" />
                                <div class="info">
                                <h5 class="mb-1">Coriss Ambady</h5>
                                <p class="mb-0">Financial Analyst</p>
                                </div>
                            </div>
                        </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3 ">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-5">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="icon mb-0">
                            <p>“Fusce dapibus, tellus ac cursus tortor mauris condimentum fermentum massa justo sit amet purus sit amet fermentum.”</p>
                            <div class="blockquote-details">
                            <img class="rounded-circle w-12" src="/assets/fe/img/avatars/te1.jpg" srcset="/assets/fe/img/avatars/te1@2x.jpg 2x" alt="Dokter Legal" />
                                <div class="info">
                                <h5 class="mb-1">Coriss Ambady</h5>
                                <p class="mb-0">Financial Analyst</p>
                                </div>
                            </div>
                        </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-5">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="icon mb-0">
                            <p>“Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor eu rutrum. Nulla vitae libero.”</p>
                            <div class="blockquote-details">
                            <img class="rounded-circle w-12" src="/assets/fe/img/avatars/te1.jpg" srcset="/assets/fe/img/avatars/te1@2x.jpg 2x" alt="Dokter Legal" />
                                <div class="info">
                                <h5 class="mb-1">Coriss Ambady</h5>
                                <p class="mb-0">Financial Analyst</p>
                                </div>
                            </div>
                        </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    </div>
                    <!--/column -->
                    <div class="item col-md-6 col-xl-3">
                    <div class="card shadow-lg card-border-bottom border-soft-primary">
                        <div class="card-body p-5 ">
                        <span class="ratings five mb-3"></span>
                        <blockquote class="icon mb-0">
                            <p>“Etiam adipiscing tincidunt elit convallis felis suscipit ut. Phasellus rhoncus eu tincidunt auctor nullam rutrum, pharetra augue.”</p>
                            <div class="blockquote-details">
                            <img class="rounded-circle w-12" src="/assets/fe/img/avatars/te1.jpg" srcset="/assets/fe/img/avatars/te1@2x.jpg 2x" alt="Dokter Legal" />
                                <div class="info">
                                <h5 class="mb-1">Coriss Ambady</h5>
                                <p class="mb-0">Financial Analyst</p>
                                </div>
                            </div>
                        </blockquote>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    </div>
                    <!--/column -->
                </div>
                <!-- /.row -->
                </div>
                <!-- /.grid-view -->
            </div>
            <!-- /.container -->
        </section><br>
        <!-- end section Testimoni-->
        
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row">
                <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                    <h3 class="display-4 mb-15 mb-md-6 px-lg-10">Kami menawarkan harga yang kompetitif, produk premium dan berkualitas untuk bisnis Anda</h3>
                </div>
                <!--/column -->
                </div>
                <!--/.row -->
                <div class="pricing-wrapper position-relative">
                <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
                <div class="row gy-6 mt-3 mt-md-5">
                    <div class="col-md-6 col-lg-4">
                    <div class="pricing card text-center">
                        <div class="card-body">
                        <img src="/assets/fe/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Dokter Legal" />
                        <h4 class="card-title">Basic Plan</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">$</span><span class="price-value">9</span> <span class="price-duration">mo</span></div>
                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                            <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                            <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                            <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                            <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li>
                            <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                        </ul>
                        <a href="#" class="btn btn-blue rounded-pill">Choose Plan</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-4 popular">
                    <div class="pricing card text-center">
                        <div class="card-body">
                        <img src="/assets/fe/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Dokter Legal" />
                        <h4 class="card-title">Premium Plan</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">mo</span></div>
                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                            <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                            <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                            <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                            <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                            <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                        </ul>
                        <a href="#" class="btn btn-blue rounded-pill">Choose Plan</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                    <div class="pricing card text-center">
                        <div class="card-body">
                        <img src="/assets/fe/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="Dokter Legal" />
                        <h4 class="card-title">Corporate Plan</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                            <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                            <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                            <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                            <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                            <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                        </ul>
                        <a href="#" class="btn btn-blue rounded-pill">Choose Plan</a>
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
        <!-- /section -->

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <h2 class="display-4 mb-3 text-center">Lokasi Kami</h2>
                <p class="lead text-center mb-6 px-md-16 px-lg-0">Kami Hadir di Lokasi</p>
                <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape bg-dot primary rellax w-16 h-16" data-rellax-speed="1" style="top: -1rem; left: -1.7rem;"></div>
                <div class="swiper-container mb-10" data-margin="30" data-nav="true" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                        <div class="card im">
                            <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="/assets/fe/img/photos/of1.png" alt="Dokter Legal" /></a>
                            <figcaption>
                                <p class="from-top">Citra Grand Cibubur CBD Ruko Marquette Blok AR1 No. 27, RT.002/RW.006, Jatirangga, Kec. Jatisampurna, Kota Bekasi, Jawa Barat 17434</p>
                                <p>
                            </figcaption>
                            </figure>
                            <div class="card-body">
                            <div class="post-header">
                                <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Cibubur</a>
                                </div>
                                <!-- /.post-category -->
                            </div>
                            <!-- /.post-header -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="/assets/fe/img/photos/of2.png" alt="Dokter Legal" /></a>
                            <figcaption>
                                <p class="from-top">Citra Grand Cibubur CBD Ruko Marquette Blok AR1 No. 27, RT.002/RW.006, Jatirangga, Kec. Jatisampurna, Kota Bekasi, Jawa Barat 17434</p>
                                <p>
                            </figcaption>
                            </figure>
                            <div class="card-body">
                            <div class="post-header">
                                <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Cikarang</a>
                                </div>
                                <!-- /.post-category -->
                            </div>
                            <!-- /.post-header -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="/assets/fe/img/photos/of3.png" alt="Dokter Legal" /></a>
                            <figcaption>
                                <p class="from-top">Citra Grand Cibubur CBD Ruko Marquette Blok AR1 No. 27, RT.002/RW.006, Jatirangga, Kec. Jatisampurna, Kota Bekasi, Jawa Barat 17434</p>
                                <p>
                            </figcaption>
                            </figure>
                            <div class="card-body">
                            <div class="post-header">
                                <div class="post-category text-line">
                                <a href="#" class="hover" rel="category">Surabaya</a>
                                </div>
                                <!-- /.post-category -->
                            </div>
                            <!-- /.post-header -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        </div>
                        <!--/.swiper-slide -->
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
        <!-- location section -->

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
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
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <article>
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="/assets/fe/img/photos/b4.jpg" alt="Dokter Legal" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                                </figure>
                                <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Coding</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ligula tristique quis risus</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                </div>
                                <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2022</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
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
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <article>
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="/assets/fe/img/photos/b5.jpg" alt="Dokter Legal" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                                </figure>
                                <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Workspace</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Nullam id dolor elit id nibh</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                </div>
                                <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
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
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <article>
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="/assets/fe/img/photos/b6.jpg" alt="Dokter Legal" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                                </figure>
                                <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Meeting</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Ultricies fusce porta elit</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                </div>
                                <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2022</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
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
                        <div class="swiper-slide">
                        <div class="item-inner">
                            <article>
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale"><a href="#"> <img src="/assets/fe/img/photos/b7.jpg" alt="Dokter Legal" /></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Read More</h5>
                                </figcaption>
                                </figure>
                                <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                    <a href="#" class="hover" rel="category">Business Tips</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="./blog-post.html">Morbi leo risus porta eget</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                </div>
                                <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2022</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
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
        <!-- /section -->

        {{-- banner satu hari kerja Start --}}
        <section class="wrapper bg-light">
            <div class="container py-4 py-md-4 pt-8">
                <div class="row mb-8">
                <div class="col-12 text-center rounded wow animate fadeIn" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="card bg-pale-blue shadow-lg card-border-start border-blue" style="100%">
                    <div class="card-body py-3 py-lg-5">
                        <h1 class="fs-38 font-weight-light mt-5">Pendirian Perusahaan selesai hanya dalam <span class="text-blue"> <strong>1 hari kerja</strong></span>*</h1>
                        <p class="mb-5 font-size-12">*Syarat &amp; Ketentuan Berlaku</p>
                    </div>
                    <!--/.card-body -->
                    </div>
                </div>
                </div>
            </div>
        </section>


        <section class="wrapper bg-light">
            <div class="container py-14 py-md-12">
                <div class="row">
                </div>
            </div>
        </section>


        {{-- Medsos --}}
        <div class="container-medsos">
            <div class="sticky-container-medsos">
                <ul class="sticky">
                    <li>
                        <img src="ikon/facebook-circle.png" width="32" height="32">
                        <p><a href="https://www.facebook.com/codingan" target="_blank">Sukai kami di<br>Facebook</a></p>
                    </li>
                    <li>
                        <img src="ikon/twitter-circle.png" width="32" height="32">
                        <p><a href="#" target="_blank">Ikuti kami di<br>Twitter</a></p>
                    </li>
                    <li>
                        <img src="ikon/gplus-circle.png" width="32" height="32">
                        <p><a href="#" target="_blank">Ikuti kami di<br>Google+</a></p>
                    </li>
                    <li>
                        <img src="ikon/linkedin-circle.png" width="32" height="32">
                        <p><a href="#" target="_blank">Ikuti kami di<br>LinkedIn</a></p>
                    </li>
                    <li>
                        <img src="ikon/youtube-circle.png" width="32" height="32">
                        <p><a href="#" target="_blank">Berlangganan di kanal<br>YouTube kami</a></p>
                    </li>
                    <li>
                        <img src="ikon/pin-circle.png" width="32" height="32">
                        <p><a href="#" target="_blank">Ikuti kami di<br>Pinterest</a></p>
                    </li>
                </ul>
            </div>
        </div>

        <footer class="bg-dark">
            <div class="container">
                <div class="row">
                <div class="col-xl-11 col-xxl-10 mx-auto">
                    <div class="card image-wrapper bg-full bg-image  mt-n50p " data-image-src="/assets/fe/img/photos/bg3.jpg">
                    <div class="card-body p-6 p-md-11 d-lg-flex flex-row align-items-lg-center justify-content-md-between text-center text-lg-start">
                        <h3 class="display-6 mb-6 mb-lg-0 pe-lg-15 pe-xxl-18 text-white">Fokus pada bisnis, biarkan kami yang mengurus legalitasnya</h3>
                        <a href="#" class="btn btn-sm sm-2 btn-yellow rounded-pill mb-0 text-nowrap">Hubungi Kami</a>
                    </div>
                    <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <div class="container pb-12 text-center>
                <div class="row mt-n10 mt-lg-0">
                <div class="col-xl-12 mx-auto">
                    <div class="row mb-3">
                    <div class="col-md-3 text-muted">
                        <div class="widget">
                        <img class="mb-4" src="/assets/fe/img/logo-light.png" srcset="/assets/fe/img/logo-light@2x.png 2x" alt="Dokter Legal" />
                        <p>Jasa Konsultan untuk Pengurusan Izin Usaha/ Legalitas Perusahaan yang ditangani oleh Tenaga-tenaga Muda Profesional yang tergabung dalam Team yang telah berpengalaman lebih dari 6 tahun</p>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!--/column -->
                    <div class="col-md-3 text-muted">
                        <div class="widget">
                        <ul class="image-list">
                            <li>
                            <figure class="rounded"><a href="https://maps.app.goo.gl/FMizpmbAWDh47nzq9"><img src="/assets/fe/img/photos/a4.jpg" alt="Dokter Legal"></a></figure>
                            <div class="post-content">
                                <h6 class="mb-2"> <a class="link-dark text-light" href="https://maps.app.goo.gl/FMizpmbAWDh47nzq9">Head Office</a> </h6>
                                <p><i class="uil uil-comment"></i><span> info@dokterlegal.com</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Sifa</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs April</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Ale</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Tyas</span></p>
                                <!-- /.post-meta -->
                            </div>
                            </li>
                        </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!--/column -->
                    <div class="col-md-3 text-muted">
                        <div class="widget ">
                        <ul class="image-list">
                            <li>
                            <figure class="rounded"><a href="./blog-post.html"><img src="/assets/fe/img/photos/a5.jpg" alt="Dokter Legal"></a></figure>
                            <div class="post-content">
                                <h6 class="mb-2"> <a class="link-dark text-light" href="./blog-post.html">Branch Office Cikarang</a> </h6>
                                <p><i class="uil uil-comment"></i><span> info@dokterlegal.com</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Riyanti</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Sintya</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Adel</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Arfan</span></p>
                                <!-- /.post-meta -->
                            </div>
                            </li>
                        </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!--/column -->
                    <!--/column -->
                    <div class="col-md-3 text-muted">
                        <div class="widget ">
                        <ul class="image-list">
                            <li>
                            <figure class="rounded"><a href="https://maps.app.goo.gl/FMizpmbAWDh47nzq9"><img src="/assets/fe/img/photos/a6.jpg" alt="Dokter Legal"></a></figure>
                            <div class="post-content">
                                <h6 class="mb-2"> <a class="link-dark text-light" href="./blog-post.html">Branch Office Surabaya</a> </h6>
                                <p><i class="uil uil-comment"></i><span> info@dokterlegal.com</span></p>
                                <p><i class="uil uil-whatsapp"></i><span> Cs Fitrah</span></p>
                                <!-- /.post-meta -->
                            </div>
                            </li>
                        </ul>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!--/column -->
                    </div>
                    <!--/.row -->
                    <p>© 2025 Dokterlegal. All rights reserved.</p>
                    <nav class="nav social justify-content-center">
                    <a href="#"><i class="uil uil-twitter"></i></a>
                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                    <a href="#"><i class="uil uil-dribbble"></i></a>
                    <a href="#"><i class="uil uil-instagram"></i></a>
                    <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </footer>

    
        
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="/assets/fe/js/plugins.js"></script>
    <script src="/assets/fe/js/theme.js"></script>
</body>

</html>