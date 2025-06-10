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
    <meta property="og:url" content="https://www.dokterlegal.co.id/tracking-system/search">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/tracking-system/search" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/tracking-system/search/",
            "datePublished": "2025-01-20T11:19:31+0700",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/tracking-system/search/"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/tracking-system/search/" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/tracking-system/search/" />
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
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Breadcum Ends --}}

    {{-- Tracking System Start --}}
    @if ($getTrx->count() == 0)
        <section class="wrapper bg-light image-wrapper bg-auto no-overlay bg-image text-center py-14 py-md-16 bg-map" data-image-src="/assets/fe/img/map.png">
            <div class="container pt-7 pt-md-11 pb-10">
                <div class="row gx-0 gy-10 align-items-center">
                    <div class="col-md-9 col-lg-7 col-xl-5 mx-auto text-center">
                        <div>                            
                            <form action="/tracking-system/search" method="POST">
                                @csrf
                                <h2 class="display-4 mb-3 text-center">Tracking System</h2>
                                <p class="lead mb-5 px-md-16 px-lg-3"><strong>*</strong> Masukkan No Pendaftaran Perusahaan</p>

                                <div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
                                    <i class="uil uil-times-circle"></i>
                                    <a class="alert-link hover">Data Tidak Ditemukan..!</a>.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                
                                <div class="form-floating mb-4">
                                    <input id="nomor_pendaftaran" type="text" name="nomor_pendaftaran" placeholder="Nama Perusahaan" class="form-control" required>
                                    <label for="nomor_pendaftaran"> No Pendaftaran Perusahaan *</label>
                                    <div class="invalid-feedback"> Masukkan No Pendaftaran Perusahaan Yang Anda Punya..! </div>
                                </div>
                                <button type="submit" class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
                                    Tracking Now <i class="uil uil-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        
    @endif
    <section class="wrapper bg-light">
        <div class="container pt-7 pt-md-11 pb-10">
            <div class="row gx-0 gy-10 align-items-center">
                @foreach ($getTrx as $itemsTrx)
                <div class="col-md-12">
                    <div class="card fs-14">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-2">
                                        {{-- <td>ID</td><br> --}}
                                        <td>Perusahaan</td><br>
                                        <td>Email</td><br>
                                        <td>No. Hp.</td><br>
                                        <td>Alamat</td>
                                    </div>
                                    <div class="col-md-5">
                                        {{-- <td>: <b>{{ $itemsTrx->perusahaan_kode }}</b></td><br> --}}
                                        <td>: <b>{{ Str::upper($itemsTrx->perusahaan_nama) }}</b></td><br>
                                        <td>: {{ $itemsTrx->perusahaan_email }}</td><br>
                                        <td>: {{ $itemsTrx->perusahaan_hp }}</td><br>
                                        <td>: {{ $itemsTrx->perusahaan_alamat }}</td>
                                    </div>
                                    <div class="col-md-2">
                                        <td>Nama Pic.</td><br>
                                        <!--<td>Email. Pic.</td><br>-->
                                        <td>Hp. Pic.</td><br>
                                        <td>Tanggal Pshn. Masuk</td><br>
                                        <td>No. Pendaftaran</td><br>
                                    </div>
                                    <div class="col-md-3">
                                        <td>: <b>{{ $itemsTrx->nama }}</b></td><br>
                                        <!--<td>: {{ $itemsTrx->email }}</td><br>-->
                                        <td>: {{ $itemsTrx->no_hp }}</td><br>
                                        <td>: {{ \Carbon\Carbon::parse($itemsTrx->perusahaan_tgl)->format('d-m-Y') }}</td><br>
                                        <td>: #{{ $itemsTrx->trx_kode }}</td><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 mt-2">
                                        <td>Pshn. Atas Nama</td><br>
                                        <td>AN. No. Hp.</td><br>
                                    </div>
                                    <div class="col-md-4 mt-2">                                        
                                        <td>: <b>{{ $itemsTrx->perusahaan_atas_nama }}</b></td><br>
                                        <td>: {{ $itemsTrx->perusahaan_an_hp }}</td><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped fs-14 mt-4" width="100%">
                        {{-- <thead class="bg-blue">
                            <tr>
                                <th class="text-white">No</th>
                                <th class="text-white">Produk</th>
                                <th class="text-white">Jenis Layanan</th>
                                <th class="text-white">Status</th>
                            </tr>
                        </thead> --}}
                        <tbody>
                            @php
                                $no=1;
                            @endphp
                            @foreach ($getDtlJns as $listDtlJns)
                            <tr class="bg-blue">
                                <th class="text-white">No</th>
                                <th class="text-white">Produk</th>
                                <th class="text-white">Jenis Layanan</th>
                                <th class="text-white">Status</th>
                            </tr>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $listDtlJns->jenis_kode }}</td>
                                <td>{{ $listDtlJns->jenis_nama }}</td>
                                <td><span class="badge bg-purple rounded-pill fs-14">{{ $listDtlJns->trxdtl_status }}</span></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <h5>History Process</h5>
                                                    @php
                                                        $listStsDtl = DB::table('transaksi_detail_statuses')->where('trxdtlsts_dtl_kode', $listDtlJns->trxdtl_kode)
            ->join('list_proses', 'transaksi_detail_statuses.trxdtlsts_nama', '=', 'list_proses.lp_kode')
            ->orderBy('trxdtlsts_kode', 'ASC')
            ->get();
                                                    @endphp
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered text-center ">
                                                            <thead>
                                                                <tr class="bg-pale-blue">
                                                                    <th>
                                                                        <div class="text-blue"><b>No</b></div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="text-blue"><b>Process</b></div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="text-blue"><b>Note</b></div>
                                                                    </th>
                                                                    <th>
                                                                        <div class="text-blue"><b>Status</b></div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $noSts=1;
                                                                @endphp
                                                                @foreach ($listStsDtl as $sts)
                                                                <tr>
                                                                    <td>{{ $noSts++ }}</td>
                                                                    <td class="option text-start">{{ $sts->lp_nama }}</td>
                                                                    <td class="option text-start">{{ $sts->trxdtlsts_keterangan }}</td>
                                                                    <td>
                                                                        {{-- <span class="badge bg-purple rounded-pill fs-14">Completed</span> --}}
                                                                        @if ($sts->trxdtlsts_status == 'Start')
                                                                            <span class="badge bg-yellow rounded-pill">{{ $sts->trxdtlsts_status }}</span>
                                                                        @elseif ($sts->trxdtlsts_status == 'OnProcess')
                                                                            <span class="badge bg-primary rounded-pill">{{ $sts->trxdtlsts_status }}</span>
                                                                        @elseif ($sts->trxdtlsts_status == 'Failed')
                                                                            <span class="badge bg-red rounded-pill">{{ $sts->trxdtlsts_status }}</span>
                                                                        @else
                                                                            <span class="badge bg-green rounded-pill">{{ $sts->trxdtlsts_status }}</span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>                    
                                    {{-- card ends --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                </div>
                @endforeach

                <div class="card bg-transparent text-center mt-8">
                        <div class="col-md-9 col-lg-7 col-xl-5 mx-auto text-center">
                            <a href="/tracking-system" class="btn btn-outline-blue btn-sm btn-icon btn-icon-end rounded-pill">
                                Kembali <i class="uil uil-search"></i>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    {{-- Tracking System Ends --}}


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