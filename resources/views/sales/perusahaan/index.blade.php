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
                        <div class="card">                
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="/sales/perusahaan/create">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        &nbsp;Tambah Data
                                    </button>
                                    </a>
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
                                @foreach ($getPerusahaan as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->perusahaan_kode }}</td>
                                        <td>{{ $item->perusahaan_nama }}</td>
                                        <td>{{ $item->perusahaan_atas_nama }}</td>
                                        <td>{{ $item->perusahaan_an_hp }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->perusahaan_tgl)->format('d-m-Y') }}</td>                          
                                        <td>
                                            <a href="/sales/perusahaan/details/{{ $item->perusahaan_uuid }}">
                                                <button type="button" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    &nbsp;
                                                </button>
                                            </a>
                                            @php
                                                $getTrxByKode = DB::table('transaksis')->where('trx_perusahaan_kode', $item->perusahaan_kode)->count();
                                            @endphp
                                            @if ($getTrxByKode > 0)
                                                
                                            @else
                                                <a href="/sales/transaksi/create/{{ $item->perusahaan_uuid }}">
                                                <button type="button" class="btn btn-xs btn-primary">
                                                    <i class="fa fa-cogs" aria-hidden="true"></i>
                                                    &nbsp;TrxAdd  
                                                </button>
                                            </a>
                                            @endif
                                            
                                            <a href="/sales/perusahaan/show/{{ $item->perusahaan_uuid }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
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
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->


            @foreach ($getPerusahaan as $key)
            <div class="modal fade" id="modal-delete{{ $key->perusahaan_uuid }}">
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
                    <p>Yakin Anda akan menghapus data {{ $key->perusahaan_nama }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/sales/perusahaan/destroy/{{ $key->perusahaan_uuid }}" method="post">
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