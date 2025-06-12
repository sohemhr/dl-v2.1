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
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getTrx as $item)
                        <form class="form-horizontal" action="/admstr/transaksi/update/{{ $item['trx_uuid'] }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="col-md-12">
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
                                <br>
                                <hr>
                                <h3>Trx. Kode : {{ $item->trx_kode }}</h3>
                                <hr>
                                <div class="form-group row">
                                    <label for="jenis_layanan" class="col-sm-2 col-form-label">Jenis Layanan</label>
                                    <div class="col-sm-10">
                                        <table id="example4" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Jenis</th>
                                                    <th>Harga</th>
                                                    <th>Diskon</th>
                                                    <th>Total_Harga</th>   
                                                    <th>Action</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $no = 1;
                                                    $jumlah = 0;
                                                @endphp
                                                @foreach ($getDtlJns as $jns)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $jns->jenis_kode }}</td> 
                                                    <td>{{ $jns->jenis_nama }}</td> 
                                                    <td>{{ Number::format($jns->jenis_harga) }}</td> 
                                                    <td>{{ Number::format($jns->jenis_diskon) }}</td> 
                                                    <td>{{ Number::format($jns->jenis_final) }}</td>
                                                    @if (auth('user')->user()->level != '202500')
                                                    <td>
                                                        <a href="javascript:void(0)" id="edit_jenis_detail" data-id="{{ $jns->trxdtl_kode }}">
                                                            <button type="button" class="btn btn-xs btn-success">
                                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                                &nbsp;
                                                            </button>
                                                        </a>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <a href="javascript:void(0)" id="edit_jenis_detail" data-id="{{ $jns->trxdtl_kode }}">
                                                            <button type="button" class="btn btn-xs btn-success">
                                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                                                &nbsp;
                                                            </button>
                                                        </a>
                                                        @php
                                                            $getStatus = DB::table('transaksi_detail_statuses')->where('trxdtlsts_dtl_kode', $jns->trxdtl_kode)->count();
                                                        @endphp
                                                        @if ($getStatus == 0)
                                                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $jns->trxdtl_kode }}">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                &nbsp;
                                                        </button>
                                                        @endif
                                                    </td>
                                                    @endif
                                                </tr>
                                                @php
                                                    $jumlah += $jns->jenis_final;
                                                @endphp
                                                <input type="text" name="jenis_kode_req[]" value="{{ $jns->jenis_kode }}" hidden>
                                                <input type="text" name="trxadd_uuid_req[]" value="{{ $jns->trxadd_uuid }}" hidden>
                                                <input type="text" name="trxadd_layanan_req[]" value="{{ $jns->jenis_layanan_kode }}" hidden>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group row control-group after-add-more">
                                    <label for="paket" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-8">
                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="btn btn-success" href="javascript:void(0)" id="createNewDetail"> 
                                            <i class="fa fa-plus"></i> &nbsp;Jenis Layanan
                                        </a>
                                    </div>  
                                </div>
                                <div class="form-group row">
                                    <label for="trx_jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_jumlah" class="form-control @error('trx_jumlah') is-invalid @enderror" id="trx_jumlah" placeholder="Nama Include" value="{{ $jumlah }}" type-currency="IDR" readonly>
                                        @error('trx_jumlah')<span id="trx_jumlah" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_diskon" class="col-sm-2 col-form-label">Diskon TRX</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_diskon" class="form-control @error('trx_diskon') is-invalid @enderror" id="trx_diskon" placeholder="Nama Include" value="{{ $item->trx_diskon }}" type-currency="IDR">
                                        @error('trx_diskon')<span id="trx_diskon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_biaya_lain" class="col-sm-2 col-form-label">Biaya Lain</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_biaya_lain" class="form-control @error('trx_biaya_lain') is-invalid @enderror" id="trx_biaya_lain" placeholder="Nama Include" value="{{ $item->trx_biaya_lain }}" type-currency="IDR">
                                        @error('trx_biaya_lain')<span id="trx_biaya_lain" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_total_bayar" class="col-sm-2 col-form-label">Total Bayar</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_total_bayar" class="form-control @error('trx_total_bayar') is-invalid @enderror" id="trx_total_bayar" placeholder="Nama Include" value="{{ $item->trx_total_bayar }}" type-currency="IDR">
                                        @error('trx_total_bayar')<span id="trx_total_bayar" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea name="trx_keterangan" class="form-control @error('trx_keterangan') is-invalid @enderror" id="trx_keterangan" placeholder="Tambahkan Catatan" rows="3">{{ $item->trx_keterangan }}</textarea>
                                        @error('trx_keterangan')<span id="trx_keterangan" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="trx_rekening_kode" class="col-sm-2 col-form-label">Rekening Transfer</label>
                                    <div class="col-sm-10">
                                        <code>*Konfirmasi dengan Finance / Management</code>
                                        <select class="form-control @error('trx_rekening_kode') is-invalid @enderror" id="trx_rekening_kode" name="trx_rekening_kode" required="">
                                        <option value="{{ $item->trx_rekening_kode }}">*{{ $item->rekening_nama.' - '.$item->rekening_nomor.' - '.$item->rekening_atas_nama.' - '.$item->rekening_kategori }}</option>
                                        @foreach ($getRekening as $rek)
                                        <option value="{{ $rek->rekening_kode }}">*{{ $rek->rekening_nama.' - '.$rek->rekening_nomor.' - '.$rek->rekening_atas_nama.' - '.$rek->rekening_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('trx_rekening_kode')<span id="trx_rekening_kode" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_tgl" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="trx_tgl" class="form-control @error('trx_tgl') is-invalid @enderror" id="trx_tgl" placeholder="Tanggal Transaksi" value="{{ $item->trx_tgl }}">
                                        @error('trx_tgl')<span id="trx_tgl" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_status" class="col-sm-2 col-form-label">Status Trx.</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="trx_status" id="trx_status">
                                            <option value="{{ $item->trx_status }}"> {{ $item->trx_status }}</option>
                                            <option value="Start"> Start</option>
                                            <option value="OnProcess"> OnProcess</option>
                                            <option value="Completed"> Completed</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="trx_status_bayar" class="col-sm-2 col-form-label">Status Bayar</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="trx_status_bayar" id="trx_status_bayar">
                                            <option value="{{ $item->trx_status_bayar }}"> {{ $item->trx_status_bayar }}</option>
                                            <option value="Menunggu Pembayaran"> Menunggu Pembayaran</option>
                                            <option value="DP"> DP</option>
                                            <option value="Dicicil"> Dicicil</option>
                                            <option value="Lunas"> Lunas</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="perusahaan_kode" value="{{ $item->perusahaan_kode }}" hidden>
                                <input type="text" class="form-control" name="perusahaan_user_kode" value="{{ $item->perusahaan_user_kode }}" hidden>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ URL::previous() }}">
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
                </div>            
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <!-- Modal Edit -->
        <div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="postCrudModal"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="postForm" name="postForm" class="form-horizontal">
                        <input type="hidden" name="trxdtl_kode" id="trxdtl_kode">
                            <div class="form-group">
                                <label for="name" class="col-sm-8 control-label">Pilih Jenis Layanan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="col-12 form-control" name="" id="jenis_kode" readonly>
                                    <input type="text" class="col-12 form-control" name="" id="jenis_nama" readonly>
                                    <hr>
                                    <code>=> * Layanan kode - Layanan || Jenis Kode - Jenis Layanan _ Harga</code>
                                    <select class="form-control select3" id="jenis_kode" name="jenis_kode" required="">
                                        {{-- <option value="">- Pilih Paket</option> --}}
                                        @foreach ($getLayJns as $layJns)
                                        <option value="{{ $layJns->jenis_kode }}">* {{ $layJns->layanan_kode.' - '.$layJns->layanan_nama.' || '.$layJns->jenis_kode.' - '.$layJns->jenis_nama.' _ Rp. '.Number::format($layJns->jenis_final) }}</option>
                                        @endforeach
                                    </select>
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

        <!-- Modal Tambah Jenis-->
        @foreach ($getTrx as $val)
        <div class="modal fade" id="jenisDtlModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">    
                <div class="modal-content">    
                    <div class="modal-header">    
                        <h4 class="modal-title" id="modelHeading"></h4>    
                    </div>
        
                    <div class="modal-body">    
                        <form id="jnsDtlForm" name="jnsDtlForm" class="form-horizontal">  
                            @csrf 
                            <input type="text" name="trx_kode" id="trx_kode" value="{{ $val->trx_kode }}" hidden>
                            <input type="text" name="perusahaan_kode" id="perusahaan_kode" value="{{ $val->perusahaan_kode }}" hidden>
                            <input type="text" name="user_kode" id="user_kode" value="{{ $val->perusahaan_user_kode }}" hidden>
                            <div class="form-group">    
                                <label for="jenis_kode" class="col-sm-2 control-label">
                                    Pilih Jenis Layanan
                                </label>    
                                <div class="col-sm-12">    
                                    <code>=> * Layanan kode - Layanan || Jenis Kode - Jenis Layanan _ Harga</code>
                                    <select class="form-control select2" id="jenis_kode" name="jenis_kode" required="">
                                        {{-- <option>- Pilih Jenis</option> --}}
                                        @foreach ($getLayJns as $layJns)
                                        <option value="{{ $layJns->jenis_kode }}">* {{ $layJns->layanan_kode.' - '.$layJns->layanan_nama.' || '.$layJns->jenis_kode.' - '.$layJns->jenis_nama.' _ Rp. '.Number::format($layJns->jenis_final) }}</option>
                                        @endforeach
                                    </select>   
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


        @foreach ($getDtlJns as $key)
        <div class="modal fade" id="modal-delete{{ $key->trxdtl_kode }}">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            Hapus Data
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin Anda akan menghapus data {{ $key->jenis_nama }}&hellip;?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <form class="form_delete" action="/admstr/brosur/destroypaket/{{ $key->trxdtl_kode }}" method="post">
                            @csrf
                            @method('DELETE')
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <button type="button" class="btn btn-sm btn-danger deleteRecord" data-id="{{ $key->trxdtl_kode }}">
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
        $(function () {
            //button create post event
            $('#createNewDetail').click(function () {
            $('#saveBtn').val("create-product");
            $('#jnsDtlForm').trigger("reset");
            $('#modelHeading').html("Pilih Jenis Layanan");
            $('#jenisDtlModal').modal('show');
            });

            //action create post
            $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
                $.ajax({
                    data: $('#jnsDtlForm').serialize(),
                    url: "{{ route('transaksi.addjenisdtl') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#jnsDtlForm').trigger("reset");
                        $('#jenisDtlModal').modal('hide');
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
        $(".deleteRecord").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
            {
                url: "/admstr/transaksi/destroydtl/"+id,
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

            $('body').on('click', '#edit_jenis_detail', function () {
                var trxdtl_kode = $(this).data('id');
                $.get('/admstr/transaksi/editjnsdtl/'+trxdtl_kode+'', function (data) {
                    $('#postCrudModal').html("Edit Jenis Layanan");
                    $('#btn-save').val("edit_jenis_detail");
                    $('#ajax-crud-modal').modal('show');
                    $('#trxdtl_kode').val(data.trxdtl_kode);
                    $('#jenis_kode').val(data.jenis_kode);
                    $('#jenis_nama').val(data.jenis_nama);  
                })
            });
            
            $('#btn-save').click(function (e) {
                e.preventDefault();
                $(this).html('Sending..');
                    $.ajax({
                        data: $('#postForm').serialize(),
                        url: "{{ route('updatejenisdetail.update') }}",
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

    <script type="text/javascript">
        $(document).ready(function() {
            $("#trx_jumlah, #trx_diskon, #trx_biaya_lain").keyup(function() {
                var trx_jumlah  = $("#trx_jumlah").val();
                var trx_diskon = $("#trx_diskon").val();
                var trx_biaya_lain = $("#trx_biaya_lain").val();

                var trx_total_bayar = parseInt(trx_jumlah.replace(/\D/g,'')) + parseInt(trx_biaya_lain.replace(/\D/g,'')) - parseInt(trx_diskon.replace(/\D/g,''));
                $("#trx_total_bayar").val(trx_total_bayar);
            });
        });
    </script>
    {{-- js new end --}}
</body>
</html>