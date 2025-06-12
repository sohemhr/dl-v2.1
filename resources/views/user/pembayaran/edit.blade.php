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
                        @foreach ($getPembayaran as $item)
                                
                            
                        <form class="form-horizontal" action="/admstr/pembayaran/update/{{ $item['pembayaran_uuid'] }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="pembayaran_trx_kode" class="col-sm-2 col-form-label">Kode Trx</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_trx_kode" class="form-control @error('pembayaran_trx_kode') is-invalid @enderror" id="pembayaran_trx_kode" placeholder="Nama Layanan" value="{{ $item->trx_kode }}" readonly>
                                        @error('pembayaran_trx_kode')<span id="pembayaran_trx_kode" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_rincian" class="col-sm-2 col-form-label">Rincian</label>
                                    <div class="col-sm-10">
                                        
                                            <textarea name="pembayaran_rincian" class="form-control" id="pembayaran_rincian" rows="3" readonly>@foreach ($getTrxDtl as $x){{ $x->jenis_kode.'-'.$x->jenis_nama.', ' }}@endforeach</textarea>
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_jumlah" class="col-sm-2 col-form-label">Jumlah Pembayaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_jumlah" class="form-control @error('pembayaran_jumlah') is-invalid @enderror" id="pembayaran_jumlah" placeholder="Jumlah pembayaran" value="{{ $item->pembayaran_jumlah }}" type-currency="IDR">
                                        @error('pembayaran_jumlah')<span id="pembayaran_jumlah" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_metode" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="pembayaran_metode" id="pembayaran_metode">
                                            <option value="{{ $item->pembayaran_metode }}"> {{ $item->pembayaran_metode }}</option>
                                            <option value="Cash"> Cash</option>
                                            <option value="Transfer"> Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="pembayaran_penyetor" class="col-sm-2 col-form-label">Penyetor</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_penyetor" class="form-control @error('pembayaran_penyetor') is-invalid @enderror" id="pembayaran_penyetor" placeholder="Penyetor" value="{{ $item->pembayaran_penyetor }}">
                                        @error('pembayaran_penyetor')<span id="pembayaran_penyetor" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="pembayaran_penyetor_hp" class="col-sm-2 col-form-label">No. Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_penyetor_hp" class="form-control @error('pembayaran_penyetor_hp') is-invalid @enderror" id="pembayaran_penyetor_hp" placeholder="Nomor Handphone Penyetor" value="{{ $item->pembayaran_penyetor_hp }}">
                                        @error('pembayaran_penyetor_hp')<span id="pembayaran_penyetor_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="pembayaran_penerima" class="col-sm-2 col-form-label">Penerima - Norek/Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_penerima" class="form-control @error('pembayaran_penerima') is-invalid @enderror" id="pembayaran_penerima" placeholder="Penerima - No. Rekening / No. Hanphone" value="{{ $item->pembayaran_penerima }}">
                                        @error('pembayaran_penerima')<span id="pembayaran_penerima" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea name="pembayaran_keterangan" class="form-control @error('pembayaran_keterangan') is-invalid @enderror" id="pembayaran_keterangan" placeholder="Tambahkan Catatan" rows="3">{{ $item->pembayaran_keterangan }}</textarea>
                                        @error('pembayaran_keterangan')<span id="pembayaran_keterangan" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_tanggal" class="col-sm-2 col-form-label">Tanggal Pembayaran</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="pembayaran_tanggal" class="form-control @error('pembayaran_tanggal') is-invalid @enderror" id="pembayaran_tanggal" placeholder="Tanggal Pembayaran" value="{{ $item->pembayaran_tanggal }}">
                                        @error('pembayaran_tanggal')<span id="pembayaran_tanggal" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <input type="text" class="form-control" name="pembayaran_perusahaan_kode" value="{{ $item->perusahaan_kode }}" hidden>
                                <input type="text" class="form-control" name="trx_uuid" value="{{ $item->trx_uuid }}" hidden>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/transaksi/details/{{ $item->trx_uuid }}">
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
    </section>
    <!-- /.content -->  
@endsection
</body>
</html>