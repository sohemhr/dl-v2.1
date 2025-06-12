@extends('components.layouts.app')
@section('content')
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

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Detail Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($layanan as $item)
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="layanan_nama" class="col-sm-2 col-form-label">Layanan</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="layanan_nama" class="form-control" id="layanan_nama"
                                                placeholder="Nama Layanan" value="{{ $item['layanan_nama'] }}" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="layanan_harga" class="col-sm-2 col-form-label">Harga Mulai Dari</label>
                                        <div class="col-sm-10">
                                            <code>*Harga mulai dari untuk tampilan web</code>
                                            <input type="text" name="layanan_harga" class="form-control" id="layanan_harga"
                                                placeholder="Harga Mulai Dari" value="{{ $item['layanan_harga'] }}"
                                                type-currency="IDR" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="layanan_desk" class="col-sm-2 col-form-label">Deskripsi</label>
                                        <div class="col-sm-10">
                                            <textarea name="layanan_desk" class="form-control"
                                                readonly>{{ $item['layanan_desk'] }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="layanan_status" class="col-sm-2 col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="layanan_status" class="form-control" id="layanan_status"
                                                placeholder="Layanan Status" value="{{ $item['layanan_status'] }}" readonly>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">

                                </div>
                                <!-- /.card-footer -->
                            </form>
                        @endforeach
                    </div>
                    <!-- /.card -->

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Data Includes Layanan
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="mb-4">
                                <a href="javascript:void(0)" id="createNewProduct">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-plus"></i>
                                        &nbsp;Tambah Data Includes
                                    </button>
                                </a>
                            </div>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Includes</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($roleLayInc as $val)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $val->il_nama }}</td>
                                            <td>
                                                <a href="javascript:void(0)" id="edit_rol_layinc"
                                                    data-id="{{ $val->rli_kode }}">
                                                    <button type="button" class="btn btn-xs btn-success">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                        &nbsp;Edit
                                                    </button>
                                                </a>
                                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"
                                                    data-target="#modal-delete{{ $val->rli_kode }}">
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

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                Data Jenis Layanan
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="mb-4">
                                @foreach ($layanan as $getLay)
                                    <a href="/admstr/layanan-jenis/create/{{ $getLay->layanan_uuid }}">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            &nbsp;Tambah Data Jenis Layanan
                                        </button>
                                    </a>
                                @endforeach
                            </div>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Diskon</th>
                                        <th>Total_Harga</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($getJnsLay as $gjl)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $gjl->jenis_kode }}</td>
                                            <td>{{ $gjl->jenis_nama }}</td>
                                            <td>{{ Number::format($gjl->jenis_harga) }}</td>
                                            <td>{{ Number::format($gjl->jenis_diskon) }}</td>
                                            <td>{{ Number::format($gjl->jenis_final) }}</td>
                                            <td>
                                                @if ($gjl->jenis_status == 'Private')
                                                    <span class="badge badge-danger">{{ $gjl->jenis_status }}</span>
                                                @else
                                                    <span class="badge badge-success">{{ $gjl->jenis_status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @foreach ($layanan as $getLayUuid)
                                                    <a
                                                        href="/admstr/layanan-jenis/show/{{ $getLayUuid->layanan_uuid }}/{{ $gjl->jenis_uuid }}">
                                                        <button type="button" class="btn btn-xs btn-success">
                                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                                            &nbsp;Edit
                                                        </button>
                                                    </a>
                                                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"
                                                        data-target="#modal-deleteJenis{{ $gjl->jenis_kode }}">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                @endforeach
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card">
                        <div class="card-footer">
                            <a href="/admstr/layanan">
                                <button type="button" class="btn btn-default float-right">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    &nbsp;Kembali
                                </button>
                            </a>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->


        @foreach ($roleLayInc as $x)
            <div class="modal fade" id="modal-delete{{ $x->rli_kode }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-white">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Hapus Data Includes
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin Anda akan menghapus data {{ $x->il_nama }}&hellip;?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <form class="form_delete" action="/admstr/brosur/destroypaket/{{ $x->rli_kode }}" method="post">
                                @csrf
                                @method('DELETE')
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <button type="button" class="btn btn-sm btn-danger deleteRecord" data-id="{{ $x->rli_kode }}">
                                    <i class="fa fa-trash"></i>
                                    &nbsp;Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal delete -->
        @endforeach

        <!-- Modal -->
        @foreach ($layanan as $key)
            <div class="modal fade" id="roleLayIncFormModel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelHeading"></h4>
                        </div>

                        <div class="modal-body">
                            <form id="roleLayIncForm" name="roleLayIncForm" class="form-horizontal">
                                @csrf
                                <input type="text" name="rli_lay_kode" id="rli_lay_kode" value="{{ $key['layanan_kode'] }}"
                                    hidden>
                                <div class="form-group">
                                    <label for="rli_inc_id" class="col-sm-2 control-label">Pilih Includes</label>
                                    <div class="col-sm-12">
                                        <select class="form-control select2" id="rli_inc_id" name="rli_inc_id" required="">
                                            {{-- <option>- Pilih Paket</option> --}}
                                            @foreach ($includeList as $inList)
                                                <option value="{{ $inList->il_id }}">*{{ $inList->il_id . ' - ' . $inList->il_nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary  float-right" id="saveBtn"
                                        value="create">Tambah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- Modal Edit -->
        <div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="postCrudModal"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="postForm" name="postForm" class="form-horizontal">
                            <input type="hidden" name="rli_kode" id="rli_kode">
                            <div class="form-group">
                                <label for="name" class="col-sm-8 control-label">Pilih Includes</label>
                                <div class="col-sm-12">
                                    <input type="text" class="col-12 form-control" name="" id="il_id" readonly>
                                    <input type="text" class="col-12 form-control" name="" id="il_nama" readonly>
                                    <hr>
                                    <select class="form-control select3" id="rli_inc_id" name="rli_inc_id" required="">
                                        {{-- <option value="">- Pilih Paket</option> --}}
                                        @foreach ($includeList as $inList)
                                            <option value="{{ $inList->il_id }}">*{{ $inList->il_id . ' - ' . $inList->il_nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary float-right" id="btn-save"
                                    value="create">Update
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

        {{-- delete jenis --}}
        @foreach ($getJnsLay as $xJns)
            <div class="modal fade" id="modal-deleteJenis{{ $xJns->jenis_kode }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-white">
                        <div class="modal-header bg-danger">
                            <h4 class="modal-title">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Hapus Data Jenis Layanan
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Yakin Anda akan menghapus data {{ $xJns->jenis_nama }}&hellip;?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <form class="form_deleteJenis" action="#" method="post">
                                @csrf
                                @method('DELETE')
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <button type="button" class="btn btn-sm btn-danger deleteRecordJenis"
                                    data-idjenis="{{ $xJns->jenis_kode }}">
                                    <i class="fa fa-trash"></i>
                                    &nbsp;Hapus
                                </button>
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
{{-- js new star here --}}
<script>
    $(".deleteRecord").click(function () {
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
            {
                url: "/admstr/layanan/destroyrolelayinc/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function () {
                    // console.log("it Works");
                    $('.modal').each(function () {
                        $(this).modal('hide');
                    });
                    location.reload();
                }
            });
    });
</script>

<script>
    $(function () {

        //button create post event
        $('#createNewProduct').click(function () {
            $('#saveBtn').val("create-product");
            $('#roleLayIncForm').trigger("reset");
            $('#modelHeading').html("Tambah Data Includes");
            $('#roleLayIncFormModel').modal('show');
        });

        //action create post
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#roleLayIncForm').serialize(),
                url: "{{ route('layanan.addrolelayinc') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#roleLayIncForm').trigger("reset");
                    $('#roleLayIncFormModel').modal('hide');
                    location.reload();
                },

                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });
    });

</script>

<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '#edit_rol_layinc', function () {
            var rli_kode = $(this).data('id');
            $.get('/admstr/layanan/editrolelayinc/' + rli_kode + '', function (data) {
                $('#postCrudModal').html("Edit Includes");
                $('#btn-save').val("edit_rol_layinc");
                $('#ajax-crud-modal').modal('show');
                $('#rli_kode').val(data.rli_kode);
                $('#il_id').val(data.il_id);
                $('#il_nama').val(data.il_nama);
            })
        });

        $('#btn-save').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
            $.ajax({
                data: $('#postForm').serialize(),
                url: "{{ route('updaterolelayinc.update') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {
                    $('#postCrudModal').trigger("reset");
                    $('#ajax-crud-modal').modal('hide');
                    location.reload();
                },

                error: function (data) {
                    console.log('Error:', data);
                    $('#btn-save').html('Save Changes');
                }
            });
        });
    });
</script>

<script>
    $(".deleteRecordJenis").click(function () {
        var id = $(this).data("idjenis");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
            {
                url: "/admstr/layanan-jenis/destroyjenis/" + id,
                type: 'DELETE',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function () {
                    // console.log("it Works");
                    $('.modal').each(function () {
                        $(this).modal('hide');
                    });
                    location.reload();
                }
            });
    });
</script>
{{-- js new end --}}
</body>

</html>