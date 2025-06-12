@extends('components.layouts.app')
@section('content')
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
                                <a href="/admstr/layanan/create">
                                <button type="button" class="btn btn-primary">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    &nbsp;Tambah Data Layanan
                                </button>
                                </a>

                                <a href="/admstr/layanan-jenis">
                                <button type="button" class="btn btn-success">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    &nbsp;Lihat Data Jenis Layanan
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
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>status</th>
                            <th>Action</th>           
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($layanan as $item)
                            <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item['layanan_kode'] }}</td>
                            <td>{{ $item['layanan_nama'] }}</td>
                            <td>
                                <button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-viewJenis{{ $item['layanan_kode'] }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    View
                                </button> 
                            </td>
                            <td>
                                @if ($item['layanan_status'] == 'Private')
                                    <span class="badge badge-warning">{{ $item['layanan_status'] }}</span>
                                @else
                                    <span class="badge badge-success">{{ $item['layanan_status'] }}</span>
                                @endif
                            </td>                            
                            @if (auth('user')->user()->level != '202500')
                            <td>
                                <a href="/admstr/layanan/show/{{ $item['layanan_uuid'] }}">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        &nbsp;Inc                                        
                                    </button>
                                </a>
                                <a href="/admstr/layanan/edit/{{ $item['layanan_uuid'] }}">
                                    <button type="button" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                        &nbsp;Edit
                                    </button>
                                </a>
                            </td>
                            @else
                            <td>
                                <a href="/admstr/layanan/show/{{ $item['layanan_uuid'] }}">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        &nbsp;Inc                                        
                                    </button>
                                </a>
                                <a href="/admstr/layanan/edit/{{ $item['layanan_uuid'] }}">
                                    <button type="button" class="btn btn-xs btn-success">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                        &nbsp;Edit
                                    </button>
                                </a>
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item['layanan_uuid'] }}">
                                <i class="fa fa-trash" aria-hidden="true"></i>
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


            @foreach ($layanan as $key)
            <div class="modal fade" id="modal-delete{{ $key['layanan_uuid'] }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-white">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            Hapus Data Layanan
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin Anda akan menghapus data {{ $key['layanan_nama'] }}&hellip;?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <form action="/admstr/layanan/destroy/{{ $key['layanan_uuid'] }}" method="post">
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


            @foreach ($layanan as $xs)
            <div class="modal fade" id="modal-viewJenis{{ $xs['layanan_kode'] }}">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-white">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            &nbsp; Jenis Layanan {{ $xs->layanan_nama }}
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @php
                                $no = 1;
                                $getJenis = DB::table('jenis')->where('jenis_layanan_kode', $xs->layanan_kode)->orderBy('jenis_kode', 'ASC')->get();
                            @endphp
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                        <th>Total_Harga</th>   
                                        <th>Status</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getJenis as $jns)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $jns->jenis_kode }}</td> 
                                    <td>{{ $jns->jenis_nama }}</td> 
                                    <td class="text-right">{{ Number::format($jns->jenis_harga) }}</td> 
                                    <td class="text-right">{{ Number::format($jns->jenis_diskon) }}</td> 
                                    <td class="text-right">{{ Number::format($jns->jenis_final) }}</td>
                                    <td>
                                        @if ($jns->jenis_status == 'Private')
                                            <span class="badge badge-danger">{{ $jns->jenis_status }}</span>
                                        @else
                                            <span class="badge badge-success">{{ $jns->jenis_status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="modal-footer justify-content-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                          
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
@endsection
</body>
</html>