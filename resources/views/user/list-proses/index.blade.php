@extends('components.layouts.app')
@section('content')
    <!-- Main content here -->
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
                                <a href="/admstr/list-proses/create">
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
                                    <th>No. Urut</th>
                                    <th>kode</th>
                                    <th>Nama Proses</th>
                                    <th>Action</th>           
                                </tr>
                            </thead>
                            <tbody>
                            {{-- @php
                                $no = 1;
                            @endphp --}}
                            @foreach ($listProses as $item)
                                <tr>
                                    {{-- <td>{{ $no++ }}</td> --}}
                                    <td>{{ $item->lp_no_urut }}</td> 
                                    <td>{{ $item->lp_kode }}</td>
                                    <td>{{ $item->lp_nama }}</td>                           
                                    <td>
                                        <a href="/admstr/list-proses/show/{{ $item->lp_uuid }}">
                                            <button type="button" class="btn btn-xs btn-success">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                &nbsp;Edit
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item->lp_uuid }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button> 
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


        @foreach ($listProses as $key)
        <div class="modal fade" id="modal-delete{{ $key->lp_uuid }}">
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
                <p>Yakin Anda akan menghapus data {{ $key->lp_nama }}&hellip;?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form action="/admstr/list-proses/destroy/{{ $key->lp_uuid }}" method="post">
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
@endsection
</body>
</html>