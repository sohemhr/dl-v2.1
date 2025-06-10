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
                                <a href="/admstr/artikel/create">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        &nbsp;Tambah Data
                                    </button>
                                </a>
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-getLinks">
                                    <i class="fa fa-briefcase" aria-hidden="true"></i>
                                    &nbsp;Get Links
                                </button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($getArtikel as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->artikel_judul }}</td>
                                            <td>{{ $item->kategori_nama }}</td>
                                            <td>
                                                @if ($item->artikel_status == 'Private')
                                                    <span class="badge badge-warning">{{ $item->artikel_status }}</span>
                                                @else
                                                    <span class="badge badge-success">{{ $item->artikel_status }}</span>
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($item->artikel_tanggal)->format('d-m-Y') }}</td>
                                            <td>
                                                <a href="https://www.dokterlegal.co.id/artikel/{{ $item->artikel_slug }}"
                                                    target="_blank">
                                                    <button type="button" class="btn btn-xs btn-info">
                                                        <i class="fa fa-globe" aria-hidden="true"></i>

                                                    </button>
                                                </a>
                                                <a href="/admstr/artikel/show/{{ $item->artikel_uuid }}">
                                                    <button type="button" class="btn btn-xs btn-success">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                        &nbsp;Edit
                                                    </button>
                                                </a>
                                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"
                                                    data-target="#modal-delete{{ $item->artikel_uuid }}">
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


        @foreach ($getArtikel as $key)
            <div class="modal fade" id="modal-delete{{ $key->artikel_uuid }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-white">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Hapus Data Artikel
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin Anda akan menghapus data {{ $key->artikel_judul }}&hellip;?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <form action="/admstr/artikel/destroy/{{ $key->artikel_uuid }}" method="post">
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


        {{-- modal get links --}}
        <div class="modal fade" id="modal-getLinks">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-white">
                    <div class="modal-header bg-success">
                        <h4 class="modal-title">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            Get Links For Indexing Ping
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://www.dokterlegal.co.id/admstr/artikel/getlinks" width="100%" height="480px"
                            frameborder="0" scrolling="yes" title="get-links"></iframe>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

</body>

</html>