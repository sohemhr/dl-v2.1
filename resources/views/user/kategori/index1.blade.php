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
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="/admstr/kategori/create">
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
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Warna</th>
                                        <th>Action</th>           
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($getKategori as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->kategori_kode }}</td>
                                        <td>{{ $item->kategori_nama }}</td>
                                        <td>{{ $item->kategori_warna }}</td> 
                                        <td>
                                            <a href="/admstr/kategori/show/{{ $item->kategori_uuid }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                    &nbsp;Edit
                                                </button>
                                            </a>
                                            @php
                                                $getArt = DB::table('artikels')->where('artikel_kategori_kode', $item->kategori_kode)->count();
                                            @endphp
                                            @if ($getArt == 0)
                                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $item->kategori_uuid }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                            @endif
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


            @foreach ($getKategori as $key)
            <div class="modal fade" id="modal-delete{{ $key->kategori_uuid }}">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    Hapus Data Kategori
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Anda akan menghapus data {{ $key->kategori_nama }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/admstr/kategori/destroy/{{ $key->kategori_uuid }}" method="post">
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