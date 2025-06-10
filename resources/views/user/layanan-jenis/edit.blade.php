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
                    
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getJnsLay as $item)
                        <form class="form-horizontal" action="/admstr/layanan-jenis/update/{{ $item->layanan_uuid }}/{{ $item->jenis_uuid }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="layanan_nama" class="col-sm-2 col-form-label">Layanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="layanan_nama" class="form-control @error('layanan_nama') is-invalid @enderror" id="layanan_nama" placeholder="Nama Layanan" value="{{ $item->layanan_nama }}" readonly>
                                        @error('layanan_nama')<span id="layanan_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_nama" class="col-sm-2 col-form-label">Jenis Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_nama" class="form-control @error('jenis_nama') is-invalid @enderror" id="jenis_nama" placeholder="Nama Jenis Layanan" value="{{ $item->jenis_nama }}">
                                        @error('jenis_nama')<span id="jenis_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_harga" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_harga" class="form-control @error('jenis_harga') is-invalid @enderror" id="jenis_harga" placeholder="Harga" value="{{ $item->jenis_harga }}" type-currency="IDR">
                                        @error('jenis_harga')<span id="jenis_harga" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_diskon" class="col-sm-2 col-form-label">Diskon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_diskon" class="form-control @error('jenis_diskon') is-invalid @enderror" id="jenis_diskon" placeholder="Diskon" value="{{ $item->jenis_diskon }}" type-currency="IDR">
                                        @error('jenis_diskon')<span id="jenis_diskon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_final" class="col-sm-2 col-form-label">Total Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_final" class="form-control @error('jenis_final') is-invalid @enderror" id="jenis_final" placeholder="Total Harga" value="{{ $item->jenis_final }}" type-currency="IDR">
                                        @error('jenis_final')<span id="jenis_final" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_desk" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="jenis_desk" id="summernote" rows="15">{{ $item->jenis_desk }}</textarea>
                                        @error('jenis_desk')<span id="jenis_desk" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="jenis_status" id="jenis_status">
                                            <option value="{{ $item->jenis_status }}"> {{ $item->jenis_status }}</option>
                                            <option value="Public"> Public</option>
                                            <option value="Private"> Private</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/layanan/show/{{ $item->layanan_uuid }}">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        &nbsp;Kembali
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-info float-right">Submit</button>
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
                                        <th>No / No. Urut</th>
                                        <th>Includes</th>
                                        <th>Status</th>
                                        <th>Action</th>           
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($getRolLayIncJns as $val)
                                    <tr>
                                        <td>{{ $no++.' / '.$val->rlij_no_urut }}</td>
                                        <td>{{ $val->il_nama }}</td> 
                                        <td>
                                            @if ($val->rlij_status == 'No')
                                                <span class="badge badge-warning">{{ $val->rlij_status }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $val->rlij_status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" id="edit_rol_layincjns" data-id="{{ $val->rlij_kode }}">
                                                <button type="button" class="btn btn-xs btn-success">
                                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                                    &nbsp;Edit
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $val->rlij_kode }}">
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
                {{-- card end --}}
                </div>            
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->


        @foreach ($getRolLayIncJns as $x)
        <div class="modal fade" id="modal-delete{{ $x->rlij_kode }}">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            Hapus Data Role Includes
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>Yakin Anda akan menghapus data {{ $x->rlij_nama }}&hellip;?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <form class="form_delete" action="#" method="post">
                            @csrf
                            @method('DELETE')
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <button type="button" class="btn btn-sm btn-danger deleteRecord" data-id="{{ $x->rlij_kode }}">
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


        <!-- Modal Edit -->
        <div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="postCrudModal"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="postForm" name="postForm" class="form-horizontal">
                        <input type="hidden" name="rlij_kode" id="rlij_kode">
                            <div class="form-group">
                                <label for="name" class="col-sm-8 control-label">Pilih Includes</label>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="il_id" readonly>
                                        </div>
                                        <div class="col-md-8">
                                            <select class="form-control" id="rlij_inc_il_id_edit" name="rlij_inc_il_id_edit" required="">
                                                @foreach ($getRolLayInc as $inList)
                                                <option value="{{ $inList->il_id }}">{{ $inList->il_id.' - '.$inList->il_nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <label for="rlij_status" class="col-md-12 control-label">Pilih Status Includes</label><br>
                                        <input type="text" class="col-md-2 form-control" id="rlij_statusx" readonly>
                                        <select class="col-md-8 custom-select ml-2" name="rlij_status" id="rlij_status">
                                            <option value="Yes"> Yes</option>
                                            <option value="No"> No</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <label for="rlij_no_urut" class="col-md-12 control-label">Nomor Urut</label><br>
                                        <input type="text" class="col-md-10 form-control" name="rlij_no_urut" id="rlij_no_urut">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                <button type="submit" class="btn btn-primary float-right" id="btn-save" value="create">Update
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                                                
                    </div>
                </div>
            </div>      
        </div>

        <!-- Modal Tambah -->
        @foreach ($getJnsLay as $key)
        <div class="modal fade" id="roleLayIncFormModel" aria-hidden="true">
            <div class="modal-dialog modal-lg">    
                <div class="modal-content">    
                    <div class="modal-header">    
                        <h4 class="modal-title" id="modelHeading"></h4>    
                    </div>
        
                    <div class="modal-body">    
                        <form id="roleLayIncForm" name="roleLayIncForm" class="form-horizontal">  
                            @csrf 
                            <input type="text" name="rlij_jenis_kode" id="rlij_jenis_kode" value="{{ $key->jenis_kode }}" hidden>
                            <div class="form-group">    
                                <label for="rlij_inc_id" class="col-sm-2 control-label">Pilih Includes</label>    
                                <div class="col-sm-12">    
                                    <select class="form-control select2" id="rlij_inc_id" name="rlij_inc_id" required="">
                                        {{-- <option>- Pilih Paket</option> --}}
                                        @foreach ($getRolLayInc as $inList)
                                        <option value="{{ $inList->il_id }}">*{{ $inList->rli_kode.' || '.$inList->il_id.' - '.$inList->il_nama }}</option>
                                        @endforeach
                                    </select>

                                    <hr>
                                    <label for="rlij_rli_kode" class="col-md-12 control-label">Input Kode Includes <code>*sebelum tanda pemisah diatas ||</code></label><br>
                                        <input type="text" class="col-md-10 form-control" name="rlij_rli_kode" id="rlij_rli_kode">
                                    
                                    <hr>
                                    <label for="rlij_no_urut" class="col-md-12 control-label">Nomor Urut</label><br>
                                        <input type="text" class="col-md-10 form-control" name="rlij_no_urut" id="rlij_no_urut">
                                </div>    
                            </div>
        
                            <div class="col-sm-12">  
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                                <button type="submit" class="btn btn-primary  float-right" id="saveBtn" value="create">Tambah   
                                </button>    
                            </div>    
                        </form>    
                    </div>    
                </div>    
            </div>    
        </div>
        @endforeach
    </section>
    <!-- /.content -->  

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}
    <script>
        $(".deleteRecord").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
            {
                url: "/admstr/layanan-jenis/destroyrolelayincjns/"+id,
                type: 'DELETE',
                data: {
                "id": id,
                "_token": token,
                },
                success: function (){
                // console.log("it Works");
                $('.modal').each(function(){
                    $(this).modal('hide');
                });
                location.reload();
                }
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

            $('body').on('click', '#edit_rol_layincjns', function () {
                var rlij_kode = $(this).data('id');
                $.get('/admstr/layanan-jenis/editrolelayincjns/'+rlij_kode+'', function (data) {
                    $('#postCrudModal').html("Edit Includes");
                    $('#btn-save').val("edit_rol_layincjns");
                    $('#ajax-crud-modal').modal('show');
                    $('#rlij_kode').val(data.rlij_kode);
                    $('#il_id').val(data.il_id);
                    $('#il_nama').val(data.il_nama);
                    $('#rlij_no_urut').val(data.rlij_no_urut);  
                    $('#rlij_statusx').val(data.rlij_status);    
                    
                    // Inisialisasi Select2
                    $('#rlij_inc_il_id_edit').select2();
                    // Contoh: ID default yang didapatkan dari JavaScript
                    let defaultId = data.il_id; // Ganti dengan logika untuk mendapatkan ID, misalnya dari API atau variabel
                    let defaultText = data.il_nama; // Variabel untuk menyimpan teks opsi default

                    // Cari opsi yang sesuai dengan defaultId
                    let $select = $('#rlij_inc_il_id_edit');
                    let $option = $select.find(`option[value="${defaultId}"]`);

                    if ($option.length) {
                        // Jika ID ditemukan, atur sebagai opsi default
                        defaultText = $option.text();
                        $select.val(defaultId).trigger('change'); // Atur nilai dan trigger perubahan untuk Select2
                    } else {
                        // Jika ID tidak ditemukan, tetap gunakan placeholder atau lakukan logika lain
                        console.warn('Default ID tidak ditemukan di opsi.');
                    }
                })
            });
            
            $('#btn-save').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                    $.ajax({
                        data: $('#postForm').serialize(),
                        url: "{{ route('updaterolelayincjns.update') }}",
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
                    url: "{{ route('layananjenis.addrolelayincjns') }}",
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
    {{-- js new end --}}
</body>
</html>