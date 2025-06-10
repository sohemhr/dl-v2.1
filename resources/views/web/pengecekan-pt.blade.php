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
    <meta property="og:url" content="https://www.dokterlegal.co.id/cek-nama-pt">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/cek-nama-pt" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/cek-nama-pt",
            "datePublished": "2025-01-20T11:19:31+0700",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/cek-nama-pt"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/cek-nama-pt" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/cek-nama-pt" />
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
                <div class="col-md-12 col-lg-10 col-xl-8 mx-auto">
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

    {{-- Pengecekan Nama PT Start --}}
    <section class="wrapper bg-light">
        <div class="container py-8 py-md-8">
            <div class="row gy-6 mb-12 mb-md-15">
                <div class="col-lg-5">
                    <h2 class="fs-15 text-uppercase text-line text-blue mb-3">Detail Fitur</h2>
                    <h3 class="display-4 mb-3 header-custom">Cek Nama PT Anda..!</h3>
                    <p class="mb-4">Kami membantu anda melakukan pengecekan nama PT pilihan Anda.</p>
                    <p style="font-size:15px; text-align:justify;"><b>Disclaimer:</b></br><span class="text-muted">Layanan pengecekan nama PT akan dilakukan melalui website Kemenkumham, namun hasil dari pengecekan nama PT bukan merupakan janji kesediaan nama tersebut. Untuk mendapatkan hasil yang lebih akurat disarankan untuk melakukan pengecekan dan pemesanan nama PT dengan membayar PNBP.</span></p>
                </div>
                <!--/column -->
                <div class="col-lg-7">
                    <div class="col-lg-12 offset-lg-1 col-xl-10 offset-xl-2">
                        <form class="contact-form needs-validation" id="form-insert" method="post" action="{{route('storeChecking')}}">
                            @csrf
                            {{-- <div class="messages"></div> --}}
                            <div class="row gx-4">
                                <p class="lead text-left mb-4 text-blue"><b>Nama Perusahaan yang Anda Inginkan</b></p>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="companyname" type="text" name="companyname" placeholder="Nama Perusahaan" class="form-control" required>
                                        <label for="companyname"> Nama Perusahaan *</label>
                                        <div class="invalid-feedback"> Masukkan Nama Perusahaan Yang Anda Inginkan! </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <p class="lead text-left mb-4 text-blue"><b>Data Diri Anda</b></p>
                                <div class="col-md-12">
                                    <div class="form-floating mb-4">
                                        <input id="fullname" type="text" name="fullname" placeholder="Nama Lengkap" class="form-control" required>
                                        <label for="fullname"> Nama Lengkap *</label>
                                        <div class="invalid-feedback"> Masukkan Nama Lengkap Anda! </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="email" type="email" name="email" placeholder="Alamat Email" class="form-control" required>
                                        <label for="email"> Alamat Email *</label>
                                        <div class="invalid-feedback"> Masukkan Alamat Email Anda! </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-md-6">
                                    <div class="form-floating mb-4">
                                        <input id="phone_number" type="number" name="phone_number" placeholder="Nomor Telepon" class="form-control" required>
                                        <label for="phone_number"> Nomor Telepon *</label>
                                        <div class="invalid-feedback"> Masukkan Nomor Telepon Anda! </div>
                                    </div>
                                </div>
                                <!-- /column -->
                                <div class="col-12 text-left mt-4">
                                    <input type="submit" class="btn btn-blue  borderdokleg btn-send mb-3" value="Cek Nama Perusahaan">
                                    <p class="text-muted"><strong>*</strong> Kolom ini wajib diisi.</p>
                                </div>
                                <!-- /column -->
                            </div>
                            <!-- /.row -->
                        </form>
                        <!-- /form -->
                    </div>
                    <!-- /column -->
                </div>
                <!--/column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Pengecekan Nama PT Ends --}}


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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#form-insert").submit(function(e) {
            e.preventDefault();
            let data = new FormData(this);
            let that = this;
            $("#loading").show(); //show loading
            $.ajax({
                url: that.action,
                type: 'POST',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(res) {
                    if (res.message == "successfully") {
                        // let url = "{{url('admin','url')}}"
                        //     url = url.replace("url",res.route);

                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil Terkirim..! Team Kami Akan Menghubungi Anda',
                            showConfirmButton: false,
                        })
                        $(that)[0].reset();
                        setTimeout(() => {
                            window.location.href = '/cek-nama-pt';
                        }, 2000);
                    }
                },
                complete: function() {
                    $("#loading").hide(); //hide loading here
                },
                error: function(err) {
                    if (err.status == 422) { // when status code is 422, it's a validation issue
                        let errors = [];
                        for (key in err.responseJSON.errors) {
                            errors.push(err.responseJSON.errors[key])
                        }
                        let html = '';
                        errors.map(e => {
                            html += `${e},`
                        })
                        Swal.fire({
                            icon: 'error',
                            html: listErrors = html.split(",").join("</br>")
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            html: err.responseJSON.errors
                        })
                    }
                }
            })
        })
    </script>
    {{-- Js New Ends --}}
</body>
</html>


