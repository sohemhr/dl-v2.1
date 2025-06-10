@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.finance-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                                        &nbsp;List Pembayaran
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode_Byr</th>
                                        <th>Perusahaan</th>
                                        <th>Kode_Trx</th>
                                        <th>Jml_Byr</th>
                                        <th>Metode</th>
                                        <th>Penyetor</th>
                                        <th>Penerima</th>
                                        <th>Tanggal</th>
                                        <th>Rincian</th>
                                        <th>Action</th>          
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($getPembayaran as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->pembayaran_kode }}</td>
                                        <td>{{ $item->perusahaan_kode.' || '.$item->perusahaan_nama }}</td>
                                        <td>{{ $item->pembayaran_trx_kode }}</td>
                                        <td>{{ Number::format($item->pembayaran_jumlah) }}</td>
                                        <td>{{ $item->pembayaran_metode }}</td>
                                        <td>{{ $item->pembayaran_penyetor }}</td>
                                        <td>{{ $item->pembayaran_penerima }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->pembayaran_tanggal)->format('d-m-Y') }}</td>
                                        <td>{{ $item->pembayaran_rincian }}</td>
                                        @if (auth('user')->user()->level != '202500')
                                        <td>
                                            <a href="/admstr/transaksi/pembayaran/cetak/{{ $item->pembayaran_uuid }}" target="_blank" rel="noopener noreferrer">
                                                <button type="button" class="btn btn-xs btn-info">
                                                    <i class="fa fa-print" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                            <a href="/finance/pembayaran/show/{{ $item->pembayaran_uuid }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                        </td>
                                        @else
                                        <td>
                                            <a href="/admstr/transaksi/pembayaran/cetak/{{ $item->pembayaran_uuid }}" target="_blank" rel="noopener noreferrer">
                                                <button type="button" class="btn btn-xs btn-info">
                                                    <i class="fa fa-print" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                            <a href="/finance/pembayaran/show/{{ $item->pembayaran_uuid }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item->pembayaran_uuid }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                &nbsp; 
                                            </button> 
                                        </td>
                                        @endif                            
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


            @foreach ($getPembayaran as $key)
            <div class="modal fade" id="modal-delete{{ $key->pembayaran_uuid }}">
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
                    <p>Yakin Anda akan menghapus data {{ $key->pembayaran_kode }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/finance/pembayaran/destroy/{{ $key->pembayaran_uuid }}" method="post">
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