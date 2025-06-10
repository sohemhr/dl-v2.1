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
    <meta property="og:url" content="https://www.dokterlegal.co.id/contact">
    <meta property="og:site_name" content="Website Dokter Legal">
    <meta property="og:image" content="https://www.dokterlegal.co.id/img/LogoDL.webp">
    <link rel="canonical" href="https://www.dokterlegal.co.id/contact" />
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebPage",
            "headline": "{{$title}}",
            "url": "https://www.dokterlegal.co.id/contact",
            "datePublished": "2025-01-20T11:19:31+0700",
            "image": "https://www.dokterlegal.co.id/img/LogoDL.webp",
            "thumbnailUrl": "https://www.dokterlegal.co.id/contact"
        }
    </script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/" />
    <link rel="dns-prefetch" href="https://www.dokterlegal.co.id/contact" />
    <link rel="dns-prefetch" href="https://www.googletagservices.com" />
	<link rel="dns-prefetch" href="https://www.google-analytics.com" />
    <link rel="dns-prefetch" href="https://images.some-other-host.com" />
    <link rel="dns-prefetch" href="https://subdomain.my-cdn.com" />
    <link rel="dns-prefetch" href="https://ssl.google-analytics.com" />
    <link rel="dns-prefetch" href="https://www.googleadservices.com">
    <link rel="dns-prefetch" href="https://googleads.g.doubleclick.net" />
    <link rel="dns-prefetch" href="https://www.google.com" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
    <link rel="preconnect" href="https://www.dokterlegal.co.id/contact" />
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

    {{-- Contact Start --}}
    <section class="wrapper bg-light">
        <div class="container py-8 py-md-8">
            <div class="row gy-10 gx-lg-8 gx-xl-12 mb-16 align-items-center">
                <div class="col-lg-7 position-relative">
                    <div class="shape bg-dot primary rellax w-18 h-18" data-rellax-speed="1" style="top: 0; left: -1.4rem; z-index: 0;"></div>
                    <div class="row gx-md-5 gy-5">
                        <div class="col-md-6">
                            <figure class="rounded mt-md-10 position-relative">
                                <img src="/assets/fe/img/material/contact/contact1.jpg" srcset="/assets/fe/img/material/contact/contact1.jpg 2x" alt="Dokter Legal">
                            </figure>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="row gx-md-5 gy-5">
                                <div class="col-md-12 order-md-2">
                                    <figure class="rounded"><img src="/assets/fe/img/material/contact/contact2.jpg" srcset="/assets/fe/img/material/contact/contact2.jpg 2x" alt="Dokter Legal"></figure>
                                </div>
                                <!--/column -->
                                <div class="col-md-10">
                                    <div class="card bg-primary text-center counter-wrapper">
                                        <div class="card-body py-11">
                                            <h3 class="counter text-nowrap text-white">1000+</h3>
                                            <p class="mb-0 text-white">Klien Senang</p>
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!--/.card -->
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
                @foreach ($getOffice as $itemOffice)
                <div class="col-lg-5">
                    <h1 class="mb-8 text-blue header-custom">Bingung urusan legalitas..? <br> Serahkan pada Ahlinya..!</h1>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Alamat</h5>
                            <address>{{ $itemOffice->office_alamat }}</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Nomor Telepon</h5>
                            <p>{{ $itemOffice->office_telepon }}</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row" id="form">
                        <div>
                            <div class="icon text-primary fs-28 me-6 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Alamat Email</h5>
                            <p class="mb-0"><a href="mailto:{{ $itemOffice->office_email }}" class="link-body text-blue">{{ $itemOffice->office_email }}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                    <h2 class="display-4 mb-3 text-center header-custom text-blue">Ajukan pertanyaan kepada Kami</h2>
                    <p class="lead text-center mb-10">Hubungi kami dari formulir berikut dan kami akan segera menghubungi Anda kembali.</p>
                    <form class=" needs-validation mb-16" id="form-insert" method="post" action="{{ route('storeContact') }}">
                        @csrf
                        {{-- <div class="messages"></div> --}}
                        <div class="row gx-4">
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="fullname" type="text" name="fullname" class="form-control" placeholder="Nama Lengkap" required>
                                    <label for="fullname">Nama Lengkap *</label>
                                    <div class="invalid-feedback"> Masukkan Nama Lengkap Anda! </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="email" type="email" name="email" class="form-control" placeholder="Alamat Email" required>
                                    <label for="email">Alamat Email *</label>
                                    <div class="invalid-feedback"> Masukkan Alamat Email Anda! </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-floating mb-4">
                                    <input id="phone_number" type="number" name="phone_number" class="form-control" placeholder="Nomor Telepon" required>
                                    <label for="phone_number">Nomor Telepon *</label>
                                    <div class="invalid-feedback"> Masukkan Nomor Telepon Anda! </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-md-6">
                                <div class="form-select-wrapper mb-4">
                                    <select class="form-select" id="form-select" name="services" required>
                                        <option selected disabled value="">Pilih Layanan</option>
                                        @foreach ($layanan as $listLayanan)
                                            <option value="{{ $listLayanan->layanan_kode }}">{{ $listLayanan->layanan_nama }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback"> Silahkan Memilih Layanan Kami! </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Pesan" style="height: 150px" required></textarea>
                                    <label for="form_message">Masukkan Pesan *</label>
                                    <div class="invalid-feedback"> Silahkan Masukkan Pesan Anda! </div>
                                </div>
                            </div>
                            <!-- /column -->
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Kirim Pesan">
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
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    {{-- Contact Ends --}}


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
                            window.location.href = '/contact';
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