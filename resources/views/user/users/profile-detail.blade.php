@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.header title="{{ $title }}" subtitle="{{ $subtitle }}" />

    <!-- Main content here -->
    <section class="content">
        <div class="container-fluid">
            @foreach ($users as $items)
            <div class="row">                
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h5><i class="icon fas fa-check"></i> {{ session('success') }}</h5>
                    </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card">
                                <div class="text-center m-0"> 
                                    <img class="rounded" width="100%"
                                        src="/storage/{{ $items->foto }}"
                                        alt="User profile picture">
                                </div>                               
                            </div>
                        </div>
    
                        <div class="col-sm-9">
                            <div class="card card-primary card-outline">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h4>Kode : {{ $items->kode }}</h4> 
                                        </div>
                                        <div class="col-md-2">
                                            <h3></h3>
                                        </div>
                                        <div class="col-md-2">
                                            Nama 
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $items->nama }}
                                        </div>
                                        <div class="col-md-2">
                                            TTL 
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $items->tmp_lahir.', '.\Carbon\Carbon::parse($items->tgl_lahir)->format('d F Y') }}
                                        </div>
                                        <div class="col-md-2">
                                            Email 
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $items->email }}
                                        </div>
                                        <div class="col-md-2">
                                            Handphone 
                                        </div>
                                        <div class="col-md-10">
                                            : {{ $items->no_hp }}
                                        </div>
                                        <div class="col-md-2">
                                            Tgl. Gabung 
                                        </div>
                                        <div class="col-md-10">
                                            : {{ \Carbon\Carbon::parse($items->tgl_masuk)->format('d F Y') }}
                                        </div>
                                        <div class="col-md-2">
                                            Last Seen 
                                        </div>
                                        <div class="col-md-10  mb-20 ">
                                            : {{ \Carbon\Carbon::parse($items->last_seen)->diffForHumans() }}
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">
                                        <i class="fa fa-list" aria-hidden="true"></i>
                                        &nbsp;History..
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{ $totalPerusahaan->count() }} <code class="text-white">*</code></h3>
                                    
                                <h3>&nbsp;</h3>
                                <p>Perusahaan Total</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-building"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $totalTransaksi->count() }} <code class="text-white">*</code></h3>
                                    
                                <h3>&nbsp;</h3>

                                <p>Transaksi Total</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $totalPerusahaanYear->count() }} <sup style="font-size: 14px">Perusahaan</sup></h3>
                                    
                                <h3>{{ $totalTransaksiYear->count() }} <sup style="font-size: 14px">Transaksi</sup></h3>

                                <p>Tahun ini</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-hourglass-half"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $totalPerusahaanMoon->count() }} <sup style="font-size: 14px">Perusahaan</sup></h3>
                                    
                                <h3>{{ $totalTransaksiMoon->count() }} <sup style="font-size: 14px">Transaksi</sup></h3>

                                <p>Bulan ini</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12 mt-12">
                            <div class="card">                
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-building" aria-hidden="true"></i>
                                        &nbsp;History Perusahaan
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Perusahaan</th>
                                            <th>Atas_Nama</th>
                                            <th>No.Hp. An</th>
                                            <th>Tanggal</th>
                                            <th>Action</th>            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($totalPerusahaan as $pshn)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $pshn->perusahaan_kode }}</td>
                                            <td>{{ $pshn->perusahaan_nama }}</td>
                                            <td>{{ $pshn->perusahaan_atas_nama }}</td>
                                            <td>{{ $pshn->perusahaan_an_hp }}</td>
                                            <td>{{ \Carbon\Carbon::parse($pshn->perusahaan_tgl)->format('d-m-Y') }}</td>                    
                                            <td>
                                                <a href="/admstr/perusahaan/details/{{ $pshn->perusahaan_uuid }}">
                                                    <button type="button" class="btn btn-xs btn-warning">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        &nbsp;
                                                    </button>
                                                </a>
                                            </td>                           
                                        </tr> 
                                    @endforeach                   
                                    </tbody>
                                </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">                
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-list" aria-hidden="true"></i>
                                            &nbsp;List Transaction
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                <table id="example3" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Trx</th>
                                            <th>Perusahaan</th>
                                            <th>Total</th>
                                            <th>T_Bayar</th>
                                            <th>Tanggal</th>
                                            <th>Status_Trx</th>
                                            <th>Status_Byr</th>
                                            <th>Action</th>          
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($totalTransaksi as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->trx_kode }}</td>
                                            <td>{{ $item->perusahaan_kode.' || '.$item->perusahaan_nama }}</td>
                                            <td>{{ Number::format($item->trx_total_bayar) }}</td>
                                            @php
                                                $getBayar = DB::table('pembayarans')->where('pembayaran_trx_kode', $item->trx_kode)->get();
                                                $totByr = 0;
                                                foreach ($getBayar as $value) {
                                                    $totByr += $value->pembayaran_jumlah;
                                                }
                                            @endphp
                                            <td>{{ Number::format($totByr) }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item->trx_tgl)->format('d-m-Y') }}</td>
                                            <td>
                                                @if ($item->trx_status == 'Start')
                                                    <span class="badge badge-warning">{{ $item->trx_status }}</span>
                                                @elseif ($item->trx_status == 'OnProcess')
                                                    <span class="badge badge-primary">{{ $item->trx_status }}</span>
                                                @else
                                                    <span class="badge badge-success">{{ $item->trx_status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($item->trx_status_bayar == 'Menunggu Pembayaran')
                                                    <span class="badge badge-danger">{{ $item->trx_status_bayar }}</span>
                                                @elseif ($item->trx_status_bayar == 'DP')
                                                    <span class="badge badge-warning">{{ $item->trx_status_bayar }}</span>
                                                @elseif ($item->trx_status_bayar == 'Dicicil')
                                                    <span class="badge badge-primary">{{ $item->trx_status_bayar }}</span>
                                                @else
                                                    <span class="badge badge-success">{{ $item->trx_status_bayar }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/admstr/transaksi/details/{{ $item->trx_uuid }}">
                                                    <button type="button" class="btn btn-xs btn-warning">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                        
                                                    </button>
                                                </a>
                                            </td>                            
                                        </tr> 
                                    @endforeach                   
                                    </tbody>
                                </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">
                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                        &nbsp;Jumlah Transaksi
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                            <div class="inner">
                                @php
                                    $valtottrx = 0;
                                    $valjmlbyr = 0;
                                    foreach ($totalTransaksi as $valtrx) {
                                        $kodeTrx = $valtrx->trx_kode;
                                        $valtottrx += $valtrx->trx_total_bayar;

                                        $getBayar = DB::table('pembayarans')->where('pembayaran_trx_kode', $valtrx->trx_kode)->get();
                                            $totByr = 0;                                        
                                            foreach ($getBayar as $value) {
                                                $totByr += $value->pembayaran_jumlah;
                                            }
                                            $valjmlbyr += $totByr; 
                                    }
                                    $sisatotbyr = $valtottrx - $valjmlbyr;
                                @endphp
                                <p class="fs-20"><b>Rp. {{ Number::format($valtottrx) }} <code class="text-white float-right">Total_Trx</code></b></p>
                                    
                                <p class="fs-20"><b>Rp. {{ Number::format($valjmlbyr) }} <code class="text-white float-right">Total_Byr</code></b></p>

                                <p class="fs-20"><b>Rp. {{ Number::format($sisatotbyr) }} <code class="text-white float-right">Sisa_T_Byr</code></b></p>
                                <p>Transaksi Total</p>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                            <div class="inner">
                                @php
                                    $valtottrxYear = 0;
                                    $valjmlbyrYear = 0;
                                    foreach ($totalTransaksiYear as $valtrxYear) {
                                        $kodeTrxYear = $valtrxYear->trx_kode;
                                        $valtottrxYear += $valtrxYear->trx_total_bayar;

                                        $getBayarYear = DB::table('pembayarans')->where('pembayaran_trx_kode', $valtrxYear->trx_kode)->get();
                                            $totByrYear = 0;                                        
                                            foreach ($getBayarYear as $valueYear) {
                                                $totByrYear += $valueYear->pembayaran_jumlah;
                                            }
                                            $valjmlbyrYear += $totByrYear; 
                                    }
                                    $sisatotbyrYear = $valtottrxYear - $valjmlbyrYear;
                                @endphp
                                <p class="fs-20"><b>Rp. {{ Number::format($valtottrxYear) }} <code class="text-white float-right">Total_Trx</code></b></p>
                                    
                                <p class="fs-20"><b>Rp. {{ Number::format($valjmlbyrYear) }} <code class="text-white float-right">Total_Byr</code></b></p>

                                <p class="fs-20"><b>Rp. {{ Number::format($sisatotbyrYear) }} <code class="text-white float-right">Sisa_T_Byr</code></b></p>
                                <p>Transaksi Tahun Ini</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                            <div class="inner">
                                @php
                                    $valtottrxMoon = 0;
                                    $valjmlbyrMoon = 0;
                                    foreach ($totalTransaksiMoon as $valtrxMoon) {
                                        $kodeTrxMoon = $valtrxMoon->trx_kode;
                                        $valtottrxMoon += $valtrxMoon->trx_total_bayar;

                                        $getBayarMoon = DB::table('pembayarans')->where('pembayaran_trx_kode', $valtrxMoon->trx_kode)->get();
                                            $totByrMoon = 0;                                        
                                            foreach ($getBayarMoon as $valueMoon) {
                                                $totByrMoon += $valueMoon->pembayaran_jumlah;
                                            }
                                            $valjmlbyrMoon += $totByrMoon; 
                                    }
                                    $sisatotbyrMoon = $valtottrxMoon - $valjmlbyrMoon;
                                @endphp
                                <p class="fs-20"><b>Rp. {{ Number::format($valtottrxMoon) }} <code class="text-white float-right">Total_Trx</code></b></p>
                                    
                                <p class="fs-20"><b>Rp. {{ Number::format($valjmlbyrMoon) }} <code class="text-white float-right">Total_Byr</code></b></p>

                                <p class="fs-20"><b>Rp. {{ Number::format($sisatotbyrMoon) }} <code class="text-white float-right">Sisa_T_Byr</code></b></p>
                                <p>Transaksi Bulan Ini</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-hourglass-half"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                            <div class="inner">
                                <p class="fs-20">{{ $totalPerusahaan->count() }} &nbsp;&nbsp;Perusahaan</b></p>

                                <p class="fs-20">{{ $totalTransaksi->count() }} &nbsp;&nbsp;Transaksi</b></p>

                                <p class="fs-20">{{ $totalTrxSelesai->count() }} &nbsp;&nbsp;Transaksi Selesai</b></p>
                                <p>Total Transaksi Selesai</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-thumbs-up"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-info">
                                <div class="card-header border-transparent">
                                    <h3 class="card-title">
                                        <i class="fa fa-list" aria-hidden="true"></i>
                                        &nbsp;History Bulan di Tahun {{ date('Y') }}
                                    </h3>
        
                                    <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table text-center m-0">
                                            <thead>
                                                <tr>
                                                    <th>Bulan</th>
                                                    <th>Perusahaan</th>
                                                    <th>Transaksi</th>
                                                    <th class="text-right">Total Value Trx.</th>
                                                    <th class="text-right">Total Byr_Trx</th>
                                                    <th class="text-right">Sisa Byr_Trx</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $datesThn = date('Y'); 
                                                    $datesBln = date('m');                                            
                                                @endphp
                                                @foreach ($bulanList as $blnList)
                                                @php
                                                    $bulan = $blnList->bulan_list;
                                                    $searchBln = $datesThn.'-'.$bulan;
                                                    $getPshnBln = DB::table('perusahaans')->where('perusahaan_user_kode', $items->kode)->where('perusahaan_tgl', 'LIKE', "%{$searchBln}%")->get();
        
                                                    $getTrxBln = DB::table('transaksis')->where('trx_user_kode', $items->kode)->where('trx_tgl', 'LIKE', "%{$searchBln}%")->get();
        
                                                    $total_vt_bln = 0;
                                                    $valjmlbyrBln = 0;
                                                    foreach ($getTrxBln as $total_value_trx) {
                                                        $total_vt_bln += $total_value_trx->trx_total_bayar;

                                                        $getBayarBln = DB::table('pembayarans')->where('pembayaran_trx_kode', $total_value_trx->trx_kode)->get();
                                                        $totByrBln = 0;                                        
                                                        foreach ($getBayarBln as $valueBln) {
                                                            $totByrBln += $valueBln->pembayaran_jumlah;
                                                        }
                                                        $valjmlbyrBln += $totByrBln;

                                                    }
                                                    $sisajmlbyrBln = $total_vt_bln - $valjmlbyrBln;
                                                @endphp
                                                <tr>
                                                    <td><a href="#"><b>{{ $bulan }}</b></a></td>
                                                    <td>{{ $getPshnBln->count() }}</td>
                                                    <td>{{ $getTrxBln->count() }}</td>
                                                    <td class="text-right">
                                                        Rp. {{ Number::format($total_vt_bln) }}
                                                    </td>
                                                    <td class="text-right">
                                                        Rp. {{ Number::format($valjmlbyrBln) }}
                                                    </td>
                                                    <td class="text-right">
                                                        Rp. {{ Number::format($sisajmlbyrBln) }}
                                                    </td>
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    
                                </div>
                                <!-- /.card-footer -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                <!-- /.card -->
                </div>    
            </div>    
            @endforeach          
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->  

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}

    {{-- js new end --}}
</body>
</html>