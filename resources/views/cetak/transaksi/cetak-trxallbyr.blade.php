<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dokter Legal | Trx-Byr-All-Clnt Cetak</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/be/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/be/dist/css/adminlte.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
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

        .watermark {
            position: absolute;
            top: 10%;
            left: 90%;
            transform: translate(-50%, -50%) rotate(-0deg);
            font-size: 50px;
            font-weight: bold;
            text-transform: uppercase;
            /* background-color: #28a745;  */
            /* Green background */
            /* color: #fff;  */
            /* White text for contrast */
            padding: 5px 20px;
            opacity: 0.7; /* Semi-transparent */
            pointer-events: none;
            z-index: 0;
            border-radius: 5px;
        }
    </style>    
</head>
<body>
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        @foreach ($getTrx as $item)
        <!-- title row -->
        <div class="row">
            <div class="col-12">
                <h2 class="page-header">
                    <img class="logo-dark" src="/assets/img/logo-dark.png" srcset="/assets/img/logo-dark@2x.png 2x" alt="Dokter Legal" width="18%">
                    {{-- <i class="fas fa-globe"></i> Dokter Legal --}}
                    <small class="float-right">
                        Date: {{ date('d-m-Y') }}
                    </small>
                </h2>
                <p class="float-right">
                    <strong>#Trx_ID: {{ $item->trx_kode }}</strong>
                </p>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->

    
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
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
        <div class="col-sm-3 invoice-col">
            To
            <address>
                <strong>ID</strong><br>
                Perusahaan<br>
                Email<br>
                Telephone<br>
                Handphone<br>
                Atas Nama<br>
                Handphone An.<br>
                Alamat Perusahaan<br>
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-5 invoice-col">
            &nbsp;
            <address>
            <strong>: {{ $item->perusahaan_kode }}</strong><br>
            : {{ ucwords(strtolower($item->perusahaan_nama)) }}<br>
            : {{ $item->perusahaan_email }}<br>
            : {{ $item->perusahaan_telepon }}<br>
            : {{ $item->perusahaan_hp }}<br>
            : {{ ucwords(strtolower($item->perusahaan_atas_nama)) }}<br>
            : {{ $item->perusahaan_an_hp }}<br>  
            : {{ $item->perusahaan_alamat }}<br>   
            </address>
        </div>
        <!-- /.col -->
    </div>
    <br>
    <!-- /.row -->


    <!-- Table row -->
    <div class="row invoice-info">
        <div class="col-sm-12">
            <table id="example4" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Jenis Layanan</th>
                        <th>Harga Awal</th>
                        <th>Diskon</th>
                        <th>Harga Final</th> 
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                        $jumlah = 0;
                    @endphp
                    @foreach ($getDtlJns as $jns)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $jns->jenis_kode }}</td> 
                        <td>{{ $jns->jenis_nama }}</td> 
                        <td>{{ Number::format($jns->jenis_harga) }}</td> 
                        <td>{{ Number::format($jns->jenis_diskon) }}</td> 
                        <td>{{ Number::format($jns->jenis_final) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">
    <!-- accepted payments column -->
        <div class="col-6">
            <p class="lead">Keterangan :</p>  
            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                {!! $item->trx_keterangan !!}
            </p>
        </div>
        <!-- /.col -->
        <div class="col-6">
            <p class="lead">Tanggal Trx. {{ \Carbon\Carbon::parse($item->trx_tgl)->format('d F Y') }}</p>

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:30%">Jumlah</th>
                        <td>:</td>
                        <td class="text-right">Rp. {{ Number::format($item->trx_jumlah) }}</td>
                    </tr>
                    <tr>
                        <th>Diskon Trx</th>
                        <td>:</td>
                        <td class="text-right">Rp. {{ Number::format($item->trx_diskon) }}</td>
                    </tr>                    
                    <tr>
                        <th>Biaya Lain</th>
                        <td>:</td>
                        <td class="text-right">Rp. {{ Number::format($item->trx_biaya_lain) }}</td>
                    </tr>
                    <tr>
                        <th>Total Bayar</th>
                        <td>:</td>
                        <td class="text-right"><strong>Rp. {{ Number::format($item->trx_total_bayar) }}</strong></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->


    <div class="row invoice-info">
        <div class="col-sm-12">
            <br>
            <hr>
            <div class="col-sm-2 invoice-col">
                Nama Pic<br>
                {{-- Email Pic<br> --}}
                No. Hp. Pic<br>
            </div>
            <!-- /.col -->
            <div class="col-sm-10 invoice-col">
                : {{ $item->nama }}<br>
                {{-- : {{ $item->email }}<br> --}}
                : {{ $item->no_hp }}<br>
            <!-- /.col -->
            <br>
            <hr>
        </div>
    </div>
    <!-- /.row -->
@endforeach
    
    <!-- Table row -->
        <div class="row">
            <h4 class="page-header">
                <i class="fas fa-list"></i> List Pembayaran
            </h4>
            <div class="col-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kode</th>
                            <th class="text-right">Jumlah</th>
                            <th>Metode</th>
                            <th>Penyetor</th>
                            <th>Penyetor Hp.</th>
                            <th>Penerima</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                    $tpm = 0;
                    @endphp
                    @foreach ($getPembayaran as $byr)
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($byr->pembayaran_tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $byr->pembayaran_kode }}</td>
                            <td class="text-right">{{ Number::format($byr->pembayaran_jumlah) }}</td>
                            <td>{{ $byr->pembayaran_metode }}</td>
                            <td>{{ $byr->pembayaran_penyetor }}</td>
                            <td>{{ $byr->pembayaran_penyetor_hp }}</td>
                            <td>{{ $byr->pembayaran_penerima }}</td>
                        </tr>
                        @php
                            $tpm += $byr->pembayaran_jumlah;
                        @endphp
                    @endforeach
                    @foreach ($getTrx as $item)
                    <tr>
                        <td></td>
                        <td  class="text-right">Total Bayar Trx:</td>
                        <td  class="text-right">{{ Number::format($item->trx_total_bayar) }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @php
                        $tbt = $item->trx_total_bayar;
                        $sisa = $tbt - $tpm;
                    @endphp
                    @endforeach
                    <tr>
                        <td></td>
                        <td  class="text-right"> Total Pembayaran Masuk:</td>
                        <td  class="text-right">{{ Number::format($tpm) }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="text-right">Sisa Pembayaran: </td>
                        <td class="text-right">{{ Number::format($sisa) }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
    <!-- /.row -->

    
        
</section>
@if ($sisa == 0)
    <div class="watermark">
        <img src="/img/lunas.jpg" width="190px" alt="lunas">
    </div>
@endif
<!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
    window.addEventListener("load", window.print());
</script>
</body>
</html>
