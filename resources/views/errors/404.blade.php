{{-- @extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}


<!DOCTYPE html>
<html lang="id">
    <x-apps.head />
    {{-- script New Start --}}
    <meta name="keywords" content="Konsultan legalitas, dokterlegal, legalitas perusahaan, jasa pembuatan cv, jasa pembuatan pt">
    <meta name="author" content="dokterlegal.co.id">
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="Error404">
    <meta property="og:description" content="Dokter Legal melayani lebih dari ratusan perusahaan di Indonesia, ditangani oleh tim yang profesional dan berpengalaman, mulai dari pendirian usaha sampai perizinan khusus lainnya">
    <meta property="og:type" content="article">
    <meta property="og:url" content="https://www.dokterlegal.co.id/about">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/about" />
    {{-- script New Ends --}}
    <x-apps.header />
    {{-- Content Start --}}

    {{-- Start --}}
    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
            <div class="row">
            <div class="col-lg-9 col-xl-8 mx-auto">
                <figure class="mb-10"><img class="img-fluid" src="/assets/fe/img/illustrations/404.png" srcset="/assets/fe/img/illustrations/404@2x.png 2x" alt="Dokter Legal"></figure>
            </div>
            <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center">
                <h1 class="mb-3">Oops! Page Not Found.</h1>
                <p class="lead mb-7 px-md-12 px-lg-5 px-xl-7">Halaman yang Anda cari tidak tersedia atau telah dipindahkan. Coba halaman lain atau buka beranda dengan tombol di bawah ini.</p>
                <a href="/" class="btn btn-primary rounded-pill">Go to Homepage</a>
                <br>
            </div>
            </div>
        </div>
    </section>
    {{-- Ends --}}

    
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
