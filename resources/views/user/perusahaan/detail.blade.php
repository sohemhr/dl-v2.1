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
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h5><i class="icon fas fa-check"></i> {{ session('success') }}</h5>
                    </div>
                    @endif
                    @foreach ($getPerusahaan as $item)
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Perusahaan Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <td>Kode</td><br>
                                        <td>Perusahaan</td><br>
                                        <td>Email</td><br>
                                        <td>No. Hp.</td><br>
                                        <td>Alamat</td>
                                    </div>
                                    <div class="col-md-5">
                                        <td>: <b>{{ $item->perusahaan_kode }}</b></td><br>
                                        <td>: {{ Str::upper($item->perusahaan_nama) }}</td><br>
                                        <td>: {{ $item->perusahaan_email }}</td><br>
                                        <td>: {{ $item->perusahaan_hp }}</td><br>
                                        <td>: {{ $item->perusahaan_alamat }}</td>
                                    </div>
                                    <div class="col-md-2">
                                        <td>Kode Pic.</td><br>
                                        <td>Nama Pic.</td><br>
                                        <td>Email. Pic.</td><br>
                                        <td>Hp. Pic.</td><br>
                                        <td>Tanggal Pshn. Masuk</td><br>
                                    </div>
                                    <div class="col-md-3">                                        
                                        <td>: <b>{{ $item->kode }}</b></td><br>
                                        <td>: {{ $item->nama }}</td><br>
                                        <td>: {{ $item->email }}</td><br>
                                        <td>: {{ $item->no_hp }}</td><br>
                                        <td>: {{ \Carbon\Carbon::parse($item->perusahaan_tgl)->format('d-m-Y') }}</td><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 mt-2">
                                        <td>Pshn. Atas Nama</td><br>
                                        <td>AN. No. Hp.</td><br>
                                    </div>
                                    <div class="col-md-4 mt-2">                                        
                                        <td>: <b>{{ $item->perusahaan_atas_nama }}</b></td><br>
                                        <td>: {{ $item->perusahaan_an_hp }}</td><br>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                
                            </div>
                            <!-- /.card-footer -->
                        
                    </div>
                    @endforeach
                <!-- /.card -->

                    <div class="card  card-info">                
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
                                    <th>Total</th>
                                    <th>Tanggal</th>
                                    <th>Status Trx</th>
                                    <th>Status Byr</th>
                                    <th>PIC</th>
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
                                    <td>{{ Number::format($item->trx_total_bayar) }}</td>
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
                                    <td>{{ $item->nama }}</td>
                                    @if (auth('user')->user()->level != '202500')
                                    <td>
                                        <a href="/admstr/transaksi/details/{{ $item->trx_uuid }}">
                                            <button type="button" class="btn btn-xs btn-warning">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                &nbsp;
                                            </button>
                                        </a>
                                        <a href="/admstr/transaksi/show/{{ $item->trx_uuid }}">
                                            <button type="button" class="btn btn-xs btn-success">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                &nbsp;Edit
                                            </button>
                                        </a>
                                    </td>
                                    @else
                                    <td>
                                        <a href="/admstr/transaksi/details/{{ $item->trx_uuid }}">
                                            <button type="button" class="btn btn-xs btn-warning">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                &nbsp;
                                            </button>
                                        </a>
                                        {{-- <a href="/admstr/transaksi/pembayaran/trx/{{ $item->trx_uuid }}">
                                            <button type="button" class="btn btn-xs btn-info">
                                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                                
                                            </button>
                                        </a> --}}
                                        <a href="/admstr/transaksi/show/{{ $item->trx_uuid }}">
                                            <button type="button" class="btn btn-xs btn-success">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item->trx_uuid }}">
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

                    @foreach ($getPerusahaan as $val)
                    <div class="card card-info">
                        <div class="card-footer">
                            <a href="{{ URL::previous() }}">
                                <button type="button" class="btn btn-default  float-left">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    &nbsp;Kembali
                                </button>
                            </a>

                            <a href="/admstr/transaksi/create/{{ $val->perusahaan_uuid }}">
                                <button type="button" class="btn btn-success float-right">
                                    <i class="fa fa-cogs" aria-hidden="true"></i>
                                    &nbsp;Tambah Transaksi
                                </button>
                            </a>
                        </div>
                    </div>
                    @endforeach


                </div>            
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
                            Hapus Data Transaksi
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
                            <form action="/admstr/transaksi/destroy/{{ $key->trx_uuid }}" method="post">
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