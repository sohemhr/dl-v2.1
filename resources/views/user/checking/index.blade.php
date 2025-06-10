@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                                    {{-- <a href="/admstr/checking/create">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        &nbsp;Tambah Data
                                    </button>
                                    </a> --}}
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    &nbsp;Checking List
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama_Perusahaan</th>
                                        <th>Nama_PIC</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>            
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($checkingGet as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        @if ($item->chk_status == '1')
                                        <td class="text-warning">{{ $item->chk_nama_perusahaan }}</td>
                                        @else
                                        <td>{{ $item->chk_nama_perusahaan }}</td>
                                        @endif
                                        <td>{{ $item->chk_nama }}</td>
                                        <td>{{ $item->chk_email }}</td>
                                        <td>{{ $item->chk_hp }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}</td>                            
                                        @if (auth('user')->user()->level != '202500')
                                        <td>
                                            <a href="/admstr/checking/show/{{ $item['chk_uuid'] }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                        </td>
                                        @else
                                        <td>
                                            <a href="/admstr/checking/show/{{ $item['chk_uuid'] }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item['chk_uuid'] }}">
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


            @foreach ($checkingGet as $key)
            <div class="modal fade" id="modal-delete{{ $key['chk_uuid'] }}">
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
                    <p>Yakin Anda akan menghapus data {{ $key['chk_nama'] }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/admstr/checking/destroy/{{ $key['chk_uuid'] }}" method="post">
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