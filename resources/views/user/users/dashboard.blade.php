@extends('components.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-xxl-3 col-xl-6 col-sm-6">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-3">
                    <span>Perusahaan</span>
                    <h3>{{ $total_perusahaan->count() }} <code class="text-white">*</code></h3>
                    <div id="tickets_resolved" style="margin: -11px 0;"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-12">This Month</span>
                        <i class="material-symbols-outlined text-success">trending_up</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-sm-6">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-3">
                    <span>Transaksi</span>
                    <h3>{{ $total_transaksi->count() }} <code class="text-white">*</code></h3>
                    <div id="in_progress" style="margin: -11px 0;"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-12">Selesai</span>
                        <h5>{{ $total_trx_selesai->count() }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-sm-6">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-3">
                    <span>Transaksi Proses</span>
                    <h3>{{ $total_transaksi->count() }} <code class="text-white">*</code></h3>
                    <div id="tickets_due" style="margin: -11px 0;"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-12">Selesai</span>
                        <h5>{{ $total_trxproses_selesai->count() }}</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-6 col-sm-6">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-3">
                    <span>Transaksi Pembayaran</span>
                    <h3>{{ $total_transaksi->count() }} <code class="text-white">*</code></h3>
                    <div id="tickets_new_open" style="margin: -11px 0;"></div>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fs-12">Selesai</span>
                        <h5>{{ $total_trxbayar_selesai->count() }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- User Sales --}}
    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 p-4">
                <form class="position-relative table-src-form me-0">
                    <input type="text" class="form-control" placeholder="Search here">
                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                </form>
                <a href="add-user" class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line d-none d-sm-inline-block"></i>
                        <span>Tambah Sales</span>
                    </span>
                </a>
            </div>
            <div class="default-table-area style-two all-products">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Sales</th>
                                <th scope="col">Join Date</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Transaksi</th>
                                <th scope="col">Total Transaksi</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getSales as $sales_user)
                                <tr>
                                    @php
                                        $salesDates = date('Y');
                                        $getSalesPshn = DB::table('perusahaans')->where('perusahaan_user_kode', $sales_user->kode)->where('perusahaan_tgl', 'LIKE', "%{$salesDates}%")->orderBy('perusahaan_kode', 'DESC')->get();

                                        $getSalesTrx = DB::table('transaksis')->where('trx_user_kode', $sales_user->kode)->where('trx_tgl', 'LIKE', "%{$salesDates}%")->join('perusahaans', 'transaksis.trx_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')->join('users', 'transaksis.trx_user_kode', '=', 'users.kode')->orderBy('trx_kode', 'DESC')->get();
                                        $tvt = 0;
                                        foreach ($getSalesTrx as $value_trx) {
                                            $tvt += $value_trx->trx_total_bayar;
                                        }
                                    @endphp
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="/storage/{{ $sales_user->foto }}" class="wh-40 rounded-3"
                                                alt="User profile picture">
                                            <div class="ms-2 ps-1">
                                                <h5 class="fw-medium fs-16 mb-0">{{ $sales_user->nama }}</h5>
                                                <small>Last Seen
                                                    {{ \Carbon\Carbon::parse($sales_user->last_seen)->diffForHumans() }}</small><br>
                                                <small>{{ $sales_user->email }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-body">{{ \Carbon\Carbon::parse($sales_user->tgl_masuk)->format('d F Y') }}
                                    </td>
                                    <td class="text-secondary">{{ $getSalesPshn->count() }}</td>
                                    <td class="text-secondary">{{ $getSalesTrx->count() }}</td>
                                    <td class="text-secondary">Rp. {{ Number::format($tvt) }}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1">
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                                data-target="#modal-pshn{{ $sales_user->kode }}">Perusahaan</button>
                                            <button type="button" class="btn btn-outline-success float-right"
                                                data-toggle="modal"
                                                data-target="#modal-trx{{ $sales_user->kode }}">Transaksi</button>
                                                
                                        </div>
                                    </td>
                                </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <div
                    class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap p-4">
                    <span class="fs-13 fw-medium">Items per pages: 10</span>

                    <div class="d-flex align-items-center">
                        <span class="fs-13 fw-medium me-2">1 - 10 of 12</span>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 justify-content-center">
                                <li class="page-item">
                                    <a class="page-link icon" href="users-list" aria-label="Previous">
                                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link icon" href="users-list" aria-label="Next">
                                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End User sales --}}

    <div class="row">
        <div class="col-md-12">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-header bg-blue-200">
                    <h3 class="card-title text-gray font-weight-bold">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        &nbsp;History Tahunan
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus text-primary"></i>
                        </button>
                    </div>
                </div>
                <div class="default-table-area style-two all-products">
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th>Tahun</th>
                                    <th>Perusahaan</th>
                                    <th>Transaksi</th>
                                    <th class="text-right">Total Value Trx.</th>
                                    <th class="text-right">Total Byr_Trx</th>
                                    <th class="text-right">Sisa Byr_Trx</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $dates = date('Y');                                            
                                @endphp

                                @for ($tahun = $dates; $tahun > 2023; $tahun--)
                                    @php
                                        $getPshn = DB::table('perusahaans')->where('perusahaan_tgl', 'LIKE', "%{$tahun}%")->get();

                                        $getTrx = DB::table('transaksis')->where('trx_tgl', 'LIKE', "%{$tahun}%")->get();

                                        $total_vt = 0;
                                        $valjmlbyrThn = 0;
                                        foreach ($getTrx as $total_value_trx) {
                                            $total_vt += $total_value_trx->trx_total_bayar;

                                            $getBayarThn = DB::table('pembayarans')->where('pembayaran_trx_kode', $total_value_trx->trx_kode)->get();
                                            $totByrThn = 0;
                                            foreach ($getBayarThn as $valueThn) {
                                                $totByrThn += $valueThn->pembayaran_jumlah;
                                            }
                                            $valjmlbyrThn += $totByrThn;
                                        }
                                        $sisajmlbyrThn = $total_vt - $valjmlbyrThn;
                                    @endphp
                                    <tr>
                                        <td><a href="#"><b>{{ $tahun }}</b></a></td>
                                        <td>{{ $getPshn->count() }}</td>
                                        <td>{{ $getTrx->count() }}</td>
                                        <td class="text-right">
                                            Rp. {{ Number::format($total_vt) }}
                                        </td>
                                        <td class="text-right">
                                            Rp. {{ Number::format($valjmlbyrThn) }}
                                        </td>
                                        <td class="text-right">
                                            Rp. {{ Number::format($sisajmlbyrThn) }}
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                </div>
                <!-- /.card-footer -->
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-white border-transparent">
                    <h3 class="card-title text-gray font-weight-bold">
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
                <div class="default-table-area style-two all-products">
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

                                {{-- @for ($bulan = $datesBln; $bulan > 0; $bulan--) --}}
                                @foreach ($bulanList as $blnList)
                                    @php
                                        $bulan = $blnList->bulan_list;
                                        $searchBln = $datesThn . '-' . $bulan;
                                        $getPshnBln = DB::table('perusahaans')->where('perusahaan_tgl', 'LIKE', "%{$searchBln}%")->get();

                                        $getTrxBln = DB::table('transaksis')->where('trx_tgl', 'LIKE', "%{$searchBln}%")->get();

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
                                    {{-- @endfor --}}
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

    {{-- Traffic Website --}}
    <div class="row">
                <div class="col-md-12">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-header">
                            <h3 class="card-title text-gray font-weight-bold">
                                <i class="fa fa-globe"></i>
                                &nbsp;Traffic Website
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered style-two table-striped text-center m-0">
                                    <thead>
                                        <tr>
                                            <th>Hari Ini</th>
                                            <th>1 Minggu Terakhir</th>
                                            <th>Bulan Ini</th>
                                            <th>Tahun Ini</th>
                                            <th>Total Pengunjung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ number_format($p_hari_ini->count(), 0, ',', '.') }}</td>
                                            <td>{{ number_format($p_minggu_ini->count(), 0, ',', '.') }}</td>
                                            <td>{{ number_format($p_bulan_ini->count(), 0, ',', '.') }}</td>
                                            <td>{{ number_format($p_tahun_ini->count(), 0, ',', '.') }}</td>
                                            <td>{{ number_format($total_pengunjung->count(), 0, ',', '.') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
@endsection