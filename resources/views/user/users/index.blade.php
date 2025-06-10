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
                    <div class="card">                
                        @if (auth('user')->user()->level == '202500' || auth('user')->user()->level == '202501')
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="/admstr/users/create">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        &nbsp;Tambah Data
                                    </button>
                                    </a>
                                </h3>
                            </div>
                        @else
                        
                        @endif
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>No</th>
                            @if (auth('user')->user()->level == '202500')
                                <th>Kode</th>
                            @else
                                
                            @endif
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Hp.</th>
                            <th>Akses</th>
                            <th>Status</th>
                            <th>On-Off</th>
                            <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $item)
                            <tr>
                            <td>{{ $no++ }}</td>
                            @if (auth('user')->user()->level == '202500')
                                <td>{{ $item->kode }}</td>
                            @else
                                
                            @endif
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->akses_level }}</td>
                            <td>
                                @if ($item->status == 'Deactive')
                                    <span class="badge badge-danger">{{ $item->status }}</span>
                                @else
                                    <span class="badge badge-success">{{ $item->status }}</span>
                                @endif
                            </td>
                            <td>
                                {{-- {{ $item->isOnline() ? 'Online' : 'Offline' }} --}}

                                @if($item->isOnline())
                                    <span class="text-success"><b>Online</b></span>
                                @else
                                    <span class="text-secondary">Offline</span>
                                @endif
                            </td>
                            @if (auth('user')->user()->level != '202500')
                            <td>
                                <a href="/admstr/users/show/{{ $item->uuid }}">
                                <button type="button" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                    &nbsp;Edit
                                </button>
                                </a>
                            </td>
                            @else
                            <td>
                                <a href="/admstr/users/show/{{ $item->uuid }}">
                                <button type="button" class="btn btn-xs btn-success">
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                    &nbsp;Edit
                                </button>
                                </a>
                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item->uuid }}">
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


            @foreach ($users as $key)
            <div class="modal fade" id="modal-delete{{ $key->uuid }}">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    Hapus Data Users
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Anda akan menghapus data {{ $key->fullname }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/admstr/users/destroy/{{ $key->uuid }}" method="post">
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