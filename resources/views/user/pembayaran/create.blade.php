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
                    @foreach ($getTrx as $item)
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Perusahaan Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <td>Kode</td><br>
                                        <td>Perusahaan</td><br>
                                        <td>Email</td><br>
                                        <td>No. Hp.</td><br>
                                        <td>Alamat</td>
                                    </div>
                                    <div class="col-md-4">
                                        <td>: <b>{{ $item->perusahaan_kode }}</b></td><br>
                                        <td>: {{ Str::upper($item->perusahaan_nama) }}</td><br>
                                        <td>: {{ $item->perusahaan_email }}</td><br>
                                        <td>: {{ $item->perusahaan_hp }}</td><br>
                                        <td>: {{ $item->perusahaan_alamat }}</td>
                                    </div>
                                    <div class="col-md-2">
                                        <td>Kode Trx.</td><br>
                                        <td>Status Trx.</td><br>
                                        <td>Status Pembayaran</td><br>
                                        <td>Tanggal</td><br>
                                    </div>
                                    <div class="col-md-4">                                        
                                        <td>: <b>{{ $item->trx_kode }}</b></td><br>
                                        <td>: 
                                            @if ($item->trx_status == 'Start')
                                                <span class="badge badge-warning">{{ $item->trx_status }}</span>
                                            @elseif ($item->trx_status == 'OnProcess')
                                                <span class="badge badge-primary">{{ $item->trx_status }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $item->trx_status }}</span>
                                            @endif
                                        </td><br>
                                        <td>: 
                                            @if ($item->trx_status_bayar == 'Menunggu Pembayaran')
                                                <span class="badge badge-danger">{{ $item->trx_status_bayar }}</span>
                                            @elseif ($item->trx_status_bayar == 'DP')
                                                <span class="badge badge-warning">{{ $item->trx_status_bayar }}</span>
                                            @elseif ($item->trx_status_bayar == 'Dicicil')
                                                <span class="badge badge-primary">{{ $item->trx_status_bayar }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $item->trx_status_bayar }}</span>
                                            @endif
                                        </td><br>
                                        <td>: {{ \Carbon\Carbon::parse($item->trx_tgl)->format('d-m-Y') }}</td><br>
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
                            <!-- /.card-body -->
                            <div class="card-footer">
                                
                            </div>
                            <!-- /.card-footer -->
                        
                    </div>
                    @endforeach
                <!-- /.card -->
                    
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Insert Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getTrx as $val)
                                
                            
                        <form class="form-horizontal" action="/admstr/pembayaran/store" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="pembayaran_trx_kode" class="col-sm-2 col-form-label">Kode Trx</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_trx_kode" class="form-control @error('pembayaran_trx_kode') is-invalid @enderror" id="pembayaran_trx_kode" placeholder="Nama Layanan" value="{{ $val->trx_kode }}" readonly>
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
                                        <input type="text" name="pembayaran_jumlah" class="form-control @error('pembayaran_jumlah') is-invalid @enderror" id="pembayaran_jumlah" placeholder="Jumlah pembayaran" value="{{ old('pembayaran_jumlah') }}" type-currency="IDR">
                                        @error('pembayaran_jumlah')<span id="pembayaran_jumlah" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_metode" class="col-sm-2 col-form-label">Metode Pembayaran</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="pembayaran_metode" id="pembayaran_metode">
                                            <option value="Cash"> Cash</option>
                                            <option value="Transfer"> Transfer</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="pembayaran_penyetor" class="col-sm-2 col-form-label">Penyetor</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_penyetor" class="form-control @error('pembayaran_penyetor') is-invalid @enderror" id="pembayaran_penyetor" placeholder="Penyetor - No. Rekening" value="{{ old('pembayaran_penyetor') }}">
                                        @error('pembayaran_penyetor')<span id="pembayaran_penyetor" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="pembayaran_penyetor_hp" class="col-sm-2 col-form-label">No. Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_penyetor_hp" class="form-control @error('pembayaran_penyetor_hp') is-invalid @enderror" id="pembayaran_penyetor_hp" placeholder="Nomor Handphone Penyetor" value="{{ old('pembayaran_penyetor_hp') }}">
                                        @error('pembayaran_penyetor_hp')<span id="pembayaran_penyetor_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="pembayaran_penerima" class="col-sm-2 col-form-label">Penerima - Norek/Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="pembayaran_penerima" class="form-control @error('pembayaran_penerima') is-invalid @enderror" id="pembayaran_penerima" placeholder="Penerima - No. Rekening / No. Hanphone" value="{{ $val->rekening_nama.' _ '.$val->rekening_nomor.' _ '.$val->rekening_atas_nama }}">
                                        @error('pembayaran_penerima')<span id="pembayaran_penerima" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea name="pembayaran_keterangan" class="form-control @error('pembayaran_keterangan') is-invalid @enderror" id="pembayaran_keterangan" placeholder="Tambahkan Catatan" rows="3">-</textarea>
                                        @error('pembayaran_keterangan')<span id="pembayaran_keterangan" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pembayaran_tanggal" class="col-sm-2 col-form-label">Tanggal Pembayaran</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="pembayaran_tanggal" class="form-control @error('pembayaran_tanggal') is-invalid @enderror" id="pembayaran_tanggal" placeholder="Tanggal Pembayaran" value="{{ old('pembayaran_tanggal') }}">
                                        @error('pembayaran_tanggal')<span id="pembayaran_tanggal" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <input type="text" class="form-control" name="pembayaran_perusahaan_kode" value="{{ $val->perusahaan_kode }}" hidden>
                                <input type="text" class="form-control" name="trx_uuid" value="{{ $val->trx_uuid }}" hidden>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="/admstr/transaksi/details/{{ $val->trx_uuid }}">
                                    <button type="button" class="btn btn-default  float-left">
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