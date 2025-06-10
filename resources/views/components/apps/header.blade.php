    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="https://www.dokterlegal.co.id/img/favicon.ico">
    <link rel="shortcut icon" href="https://www.dokterlegal.co.id/img/favicon.ico">
    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    {{-- css --}}
    <link rel="stylesheet" href="/assets/fe/css/plugins.css">
    <link rel="stylesheet" href="/assets/fe/css/style.css">
    <link rel="stylesheet" href="/assets/fe/css/colors/aqua.css">
    <link rel="preload" href="/assets/fe/css/fonts/thicccboi.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="/assets/fe/css/blocks.css">    
    {{-- slider dari swiffyslider.com --}}
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider-extensions.min.js" crossorigin="anonymous" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    {{-- slider dari swiffyslider.com end --}}
    {{-- wa src start --}}
    <link rel="stylesheet" href="/assets/fe/wa-chat/whatsapp-chat.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/assets/fe/wa-chat/whatsapp-chat.js"></script>
    {{-- wa src ends --}}
    <style>
    /* whatsapp */
    .act-btn{
        background:green;
        /* ctaText:, */
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
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="https://www.dokterlegal.co.id">
                        <img class="logo-dark" src="/assets/img/logo-dark.png" srcset="/assets/img/logo-dark@2x.png 2x" alt="Dokter Legal" width="60%"/>
                        <img class="logo-light" src="/assets/img/logo-dark.png" srcset="/assets/img/logo-dark@2x.png 2x" alt="Dokter Legal" width="60%"/>
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">DokterLegal</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link" href="https://www.dokterlegal.co.id/home" data-bs-toggle="">Home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="https://www.dokterlegal.co.id/about-us" data-bs-toggle="">About Us</a>
                                </li>

                                <li class="nav-item dropdown dropdown-mega">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Layanan</a>
                                    <ul class="dropdown-menu mega-menu">
                                        <li class="mega-menu-content">
                                            <div class="row gx-0 gx-lg-">
                                                {{-- <!--/column --> --}}
                                                <div class="col-md-12">
                                                    <a href="https://www.dokterlegal.co.id/layanan">
                                                        <h3 class="fs-25 dropdown-header text-blue text-center">Pilih Layanan</h3>
                                                    </a>
                                                    <div class="row p-2 text-dark">
                                                        <div class="col-sm-3 mt-2">
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/pendirian-perusahaan">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/pembuatan-perjanjian">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/perpajakan">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/hukum">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/penutupan-perusahaan">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/pembuatan-dokumen">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/haki">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/perizinan-properti">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/virtual-office">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/digital-marketing">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/penanaman-modal-asing">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/privilege">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/perizinan-khusus">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/perizinan-usaha">
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
                                                            <div class="card hovernavlink p-2">
                                                                <a style="display: flex;" href="https://www.dokterlegal.co.id/layanan/layanan-lainnya">
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
                                                {{-- <!--/column --> --}}
                                            </div>
                                            {{-- <!--/.row --> --}}
                                        </li>
                                        
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Fitur</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="https://www.dokterlegal.co.id/cek-nama-pt">Pengecekan Nama PT</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="https://www.dokterlegal.co.id/tracking-system">System Tracking</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="https://www.dokterlegal.co.id/kbli-terbaru">KBLI</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Info Bisnis</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="dropdown-item" href="https://www.dokterlegal.co.id/artikel">Berita Terkini</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="https://www.dokterlegal.co.id/career">Career</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="https://www.dokterlegal.co.id/faq">FAQ</a></li>
                                    </ul>
                                </li>

                                {{-- <li class="nav-item dropdown">
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
                                </li> --}}

                                <li class="nav-item ">
                                    <a class="nav-link" href="https://wa.me/628158818875?text=Hello!%20Admin%20DokterLegal,%20Saya%20Tertarik%20untuk%20kolaborasi%20dengan%20DokterLegal%20dengan%20menjadi%20*Rekan%20Penjualan%20(Reseller)*" target="_blank">Program Reseller</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.dokterlegal.co.id/promo">Promo</a>
                                </li>
                                {{-- <!-- /.navbar-nav --> --}}
                                <div class="offcanvas-footer d-lg-none">
                                    <div>
                                        <a href="https://www.dokterlegal.co.id/contact" class="btn btn-sm me-2 btn-yellow rounded-pill mb-14">Hubungi Kami</a>
                                        <a href="mailto:info@dokterlegal.co.id" class="link-inverse">info@dokterlegal.co.id</a>
                                        <br /> (+6221) 22176576  <br />
                                        <nav class="nav social social-white mt-4">
                                            <a href="#"><i class="uil uil-twitter"></i></a>
                                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                                            <a href="#"><i class="uil uil-dribbble"></i></a>
                                            <a href="#"><i class="uil uil-instagram"></i></a>
                                            <a href="#"><i class="uil uil-youtube"></i></a>
                                        </nav>
                                        {{-- <!-- /.social --> --}}
                                    </div>
                                </div>
                                {{-- <!-- /.offcanvas-footer --> --}}
                            </ul>
                        </div>
                        {{-- <!-- /.offcanvas-body --> --}}
                    </div>
                    {{-- <!-- /.navbar-collapse --> --}}
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">                
                            <li class="nav-item d-none d-md-block">
                                <a href="https://www.dokterlegal.co.id/contact" class="btn btn-sm me-2 btn-yellow rounded-pill">Hubungi Kami</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn" title="btn-mobile-menu" name="btn-mobile-menu"><span></span></button>
                            </li>
                        </ul>
                        {{-- <!-- /.navbar-nav --> --}}
                    </div>
                    {{-- <!-- /.navbar-other --> --}}
                </div>
                {{-- <!-- /.container --> --}}
            </nav>
            {{-- <!-- /.navbar --> --}}
        </header>
        {{-- <!-- /header --> --}}




    {{-- <!--/modal wa start --> --}}
    {{-- <a href="#" class="act-btn" data-bs-toggle="modal" data-bs-target="#modal-02">
        <img class="icon mb-1" src="/assets/img/whatsapp.svg" style="width:30px" alt="WhatsApp">
    </a> --}}
    
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
                                            <div class="rounded img-svg p-2 mb-lg-2">
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
                        {{-- <!-- /.row --> --}}
                    </div>
                    {{-- <!--/.modal-body --> --}}
                </div>
            </div>
            {{-- <!--/.modal-content --> --}}
        </div>
        {{-- <!--/.modal-dialog --> --}}
    </div>
    {{-- <!--/modal wa ends -->  --}}