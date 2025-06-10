@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.sales-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                            <h3 class="card-title">Insert Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getPerusahaan as $item)
                        <form class="form-horizontal" action="/sales/transaksi/store/{{ $item->perusahaan_uuid }}" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Kode</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perusahaan</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>: <b>{{ $item->perusahaan_kode }}</b></td>
                                                    </tr>
                                                    <tr>
                                                        <td>: {{ Str::upper($item->perusahaan_nama) }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>: {{ $item->perusahaan_alamat }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-2">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Email</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Telepon</td>
                                                    </tr>
                                                    <tr>
                                                        <td>No. Hp.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-4">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>: {{ $item->perusahaan_email }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>: {{ $item->perusahaan_telepon }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>: {{ $item->perusahaan_hp }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <hr>
                                <div class="form-group row">
                                    <label for="il_nama" class="col-sm-2 col-form-label">Jenis Layanan</label>
                                    <div class="col-sm-10">
                                        <table class="table table-bordered table-striped">
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
                                                    $getJenis = DB::table('trx_transit_add')->where('trxadd_perusahaan_kode', $item->perusahaan_kode)->orderBy('jenis_layanan_kode', 'ASC')->join('jenis', 'trx_transit_add.trxadd_jenis_kode', '=', 'jenis.jenis_kode')->get();
                                                @endphp
                                                @foreach ($getJenis as $jns)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $jns->jenis_kode }}</td> 
                                                    <td>{{ $jns->jenis_nama }}</td> 
                                                    <td>{{ Number::format($jns->jenis_harga) }}</td> 
                                                    <td>{{ Number::format($jns->jenis_diskon) }}</td> 
                                                    <td>{{ Number::format($jns->jenis_final) }}</td>
                                                    <td>
                                                        <div class="col-sm-2">
                                                            <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $jns->jenis_kode }}">
                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                
                                                            </button>
                                                        </div>
                                                    </td>
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
                                    <label for="createNewJenis" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-8">
                                        
                                    </div>
                                    <div class="col-sm-2">
                                        <a class="btn btn-success" href="javascript:void(0)" id="createNewJenis"> 
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
                                        <input type="text" name="trx_diskon" class="form-control @error('trx_diskon') is-invalid @enderror" id="trx_diskon" placeholder="Nama Include" value="0" type-currency="IDR">
                                        @error('trx_diskon')<span id="trx_diskon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_biaya_lain" class="col-sm-2 col-form-label">Biaya Lain</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_biaya_lain" class="form-control @error('trx_biaya_lain') is-invalid @enderror" id="trx_biaya_lain" placeholder="Nama Include" value="0" type-currency="IDR">
                                        @error('trx_biaya_lain')<span id="trx_biaya_lain" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_total_bayar" class="col-sm-2 col-form-label">Total Bayar</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_total_bayar" class="form-control @error('trx_total_bayar') is-invalid @enderror" id="trx_total_bayar" placeholder="Nama Include" value="0" type-currency="IDR">
                                        @error('trx_total_bayar')<span id="trx_total_bayar" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea name="trx_keterangan" class="form-control @error('trx_keterangan') is-invalid @enderror" id="trx_keterangan" placeholder="Tambahkan Catatan" value="{{ old('trx_keterangan') }}" rows="3">Tambahkan Catatan</textarea>
                                        @error('trx_keterangan')<span id="trx_keterangan" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="trx_rekening_kode" class="col-sm-2 col-form-label">Rekening Transfer</label>
                                    <div class="col-sm-10">
                                        <code>*Konfirmasi dengan Finance / Management</code>
                                        <select class="form-control @error('trx_rekening_kode') is-invalid @enderror" id="trx_rekening_kode" name="trx_rekening_kode" required="">
                                        <option value="">- Pilih Rekening Transfer Ke- -</option>
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
                                        <input type="date" name="trx_tgl" class="form-control @error('trx_tgl') is-invalid @enderror" id="trx_tgl" placeholder="Tanggal Transaksi" value="{{ old('trx_tgl') }}">
                                        @error('trx_tgl')<span id="trx_tgl" class="error invalid-feedback">{{ $message }}</span>@enderror
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
        
        
        <!-- Modal Tambah Jenis-->
        @foreach ($getPerusahaan as $val)
        <div class="modal fade" id="jenisModal" aria-hidden="true">
            <div class="modal-dialog modal-xl">    
                <div class="modal-content">    
                    <div class="modal-header">    
                        <h4 class="modal-title" id="modelHeading"></h4>    
                    </div>
        
                    <div class="modal-body">    
                        <form id="jenisForm" name="jenisForm" class="form-horizontal">  
                            @csrf 
                            <input type="text" name="perusahaan_kode" id="perusahaan_kode" value="{{ $val->perusahaan_kode }}" hidden>
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


        @foreach ($getJenis as $key)
        <div class="modal fade" id="modal-delete{{ $key->jenis_kode }}">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                    <div class="modal-header bg-danger">
                        <h4 class="modal-title">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                            Hapus Jenis Layanan
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
                        <form class="form_delete" action="#" method="post">
                            @csrf
                            @method('DELETE')
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <button type="button" class="btn btn-sm btn-danger deleteRecord" data-id="{{ $key->jenis_kode }}">
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

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}
    <script>   
        $(function () {
            //button create post event
            $('#createNewJenis').click(function () {
            $('#saveBtn').val("create-product");
            $('#jenisForm').trigger("reset");
            $('#modelHeading').html("Pilih Jenis Layanan");
            $('#jenisModal').modal('show');
            });

            //action create post
            $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
                $.ajax({
                    data: $('#jenisForm').serialize(),
                    url: "{{ route('salestransaksi.addjenis') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#jenisForm').trigger("reset");
                        $('#jenisModal').modal('hide');
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
                url: "/sales/transaksi/destroyjenis/"+id,
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