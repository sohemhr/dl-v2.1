<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokter Legal | Trx-Clnt-Byr Cetak</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/be/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/be/dist/css/adminlte.min.css">
    <style>
        @media print {
            a[href]:after {
                content: none !important;
            }
            @page {
                size: A4 portrait;
                margin: 3mm;
            }
            @page :header {
                display: none !important;
            }
            
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        @foreach ($getPembayaran as $trx)
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header">
                    <img class="logo-dark" src="/assets/img/logo-dark.png" srcset="/assets/img/logo-dark@2x.png 2x" alt="Dokter Legal" width="18%">
                    {{-- <i class="fas fa-globe"></i> Dokter Legal --}}
                <small class="float-right">Date: {{ date('d-m-Y') }}</small>
                </h2>
                <p class="float-right">
                &nbsp;
                </p>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col mt-4">
                From
                <address>
                    <strong>Admin, Inc.</strong><br>
                    Citra Grand Cibubur CBD Ruko<br>
                    Marquette Blok AR1 No. 27, <br>
                    RT.002/RW.006, Jatirangga, <br>
                    Kec. Jatisampurna, Kota Bekasi, <br>
                    Jawa Barat 17434.<br><br>
                    Phone: 0898889990<br>
                    Email: info@dokterlegal.co.id
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-5 invoice-col">
                To
                <address>
                    <strong>ID : {{ $trx->perusahaan_kode }}</strong><br>
                    <strong>{{ ucwords(strtolower($trx->perusahaan_nama)) }}</strong><br>
                    Email : {{ $trx->perusahaan_email }}<br>
                    Telp. : {{ $trx->perusahaan_telepon }}<br>
                    Hp. &nbsp;&nbsp; : {{ $trx->perusahaan_hp }}<br>
                    Atas Nama : {{ ucwords(strtolower($trx->perusahaan_atas_nama)) }}<br>
                    Hp. An. : {{ $trx->perusahaan_an_hp }}<br>  
                    Alamat Perusahaan : {{ $trx->perusahaan_alamat }}<br>  
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-3 invoice-col">
                <b>Inv_ID #{{ $trx->pembayaran_kode }}</b><br>
                <br>
                <b>Trx_ID:</b> {{ $trx->pembayaran_trx_kode }}<br>
                <b>Pymnt_Dt:</b> {{ \Carbon\Carbon::parse($trx->pembayaran_tanggal)->format('d F Y') }}<br>
                <b>Acc_Prnt:</b> {{ auth('user')->user()->kode }}
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Rincian</th>
                        <th class="text-right">Jumlah</th>
                        <th class="text-right">Metode</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ \Carbon\Carbon::parse($trx->pembayaran_tanggal)->format('d-m-Y') }}</td>
                    <td>{{ $trx->pembayaran_rincian }}</td>
                    <td class="text-right">{{ Number::format($trx->pembayaran_jumlah) }}</td>
                    <td class="text-right">{{ $trx->pembayaran_metode }}</td>
                </tr>
                </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-6">
            <p>Penyetor : <br>
                {{ $trx->pembayaran_penyetor.' - '.$trx->pembayaran_penyetor_hp }}
            </p>

            <p>Penerima : <br>
                {{ $trx->pembayaran_penerima }}
            </p>

            <p class="lead">Keterangan :</p>  
            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                {!! $trx->pembayaran_keterangan !!}
            </p>
            </div>
            <!-- /.col -->
            <div class="col-6">
            <p class="lead">Amount Stats {{ date('d-m-Y') }}</p>

            <div class="table-responsive">
                <table class="table">
                <tr>
                    <th style="width:50%">Total Bayar Trx:</th>
                    <td class="text-right">{{ Number::format($trx->trx_total_bayar) }}</td>
                </tr>
                <tr>
                    @php
                        $tpm = 0;
                        foreach ($getTotByrMasuk as $key) {
                            $tpm += $key->pembayaran_jumlah;
                        }
                    @endphp
                    <th>Total Pembayaran Masuk:</th>
                    <td class="text-right">{{ Number::format($tpm) }}</td>
                </tr>
                @php
                    $sisa = $trx->trx_total_bayar - $tpm;
                @endphp
                <tr>
                    <th>Sisa Pembayaran:</th>
                    <td class="text-right">
                        {{ Number::format($sisa) }}
                    </td>
                </tr>
                </table>
            </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        @endforeach
    </section>
    <!-- /.content -->
    </div>
    <!-- ./wrapper -->
    <!-- Page specific script -->
    <script>
    window.addEventListener("load", window.print());
    </script>
</body>
</html>
