@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.sales-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.header title="{{ $title }}" subtitle="{{ $subtitle }}" />

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            <h5>
                                <i class="icon fas fa-check"></i> 
                                {{ session('success') }}
                            </h5>
                        </div>
                        @elseif (session('delete'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                            <h5><i class="icon fas fa-check"></i> {{ session('delete') }}</h5>
                        </div>
                        @endif
                        <div class="card card-info">                
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                        &nbsp;List Transaction
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
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
                                @foreach ($getTransaksi as $item)
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
                                            <a href="/sales/transaksi/details/{{ $item->trx_uuid }}">
                                                <button type="button" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                            <a href="/sales/transaksi/show/{{ $item->trx_uuid }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                            {{-- <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item->trx_uuid }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                &nbsp; 
                                            </button>  --}}
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
            </div>
            <!-- /.container-fluid -->


            @foreach ($getTransaksi as $key)
            <div class="modal fade" id="modal-delete{{ $key->trx_uuid }}">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    Hapus Data Include List
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Anda akan menghapus data {{ $key->trx_kode }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/sales/transaksi/destroy/{{ $key->trx_uuid }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>                
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </div>
            <!-- /.modal delete -->
            @endforeach
            


        </section>
        <!-- /.content -->  

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}

    {{-- js new end --}}
</body>
</html>