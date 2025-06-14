@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.ops-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                            <h3 class="card-title">Details Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getTrx as $item)
                        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
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
                                    <label for="jenis_layanan" class="col-sm-12 col-form-label">Jenis Layanan</label>
                                    <div class="col-sm-12">
                                        <table id="example4" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Jenis</th>
                                                    <th>Harga</th>
                                                    <th>Diskon</th>
                                                    <th>Total_Harga</th> 
                                                    <th>Status</th>
                                                    <th>Act</th>
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
                                                    <td>
                                                        @if ($jns->trxdtl_status == 'Start')
                                                            <span class="badge badge-warning">{{ $jns->trxdtl_status }}</span>
                                                        @elseif ($jns->trxdtl_status == 'OnProcess')
                                                            <span class="badge badge-primary">{{ $jns->trxdtl_status }}</span>
                                                        @elseif ($jns->trxdtl_status == 'Pending')
                                                            <span class="badge badge-danger">{{ $jns->trxdtl_status }}</span>
                                                        @else
                                                            <span class="badge badge-success">{{ $jns->trxdtl_status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="/ops/main-process/onprocess/{{ $jns->trxdtl_uuid }}">
                                                            <button type="button" class="btn btn-xs btn-primary">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_jumlah" class="form-control @error('trx_jumlah') is-invalid @enderror" id="trx_jumlah" placeholder="Nama Include" value="{{ Number::format($item->trx_jumlah) }}" readonly>
                                        @error('trx_jumlah')<span id="trx_jumlah" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_diskon" class="col-sm-2 col-form-label">Diskon TRX</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_diskon" class="form-control @error('trx_diskon') is-invalid @enderror" id="trx_diskon" placeholder="Nama Include" value="{{ Number::format($item->trx_diskon) }}" readonly>
                                        @error('trx_diskon')<span id="trx_diskon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_biaya_lain" class="col-sm-2 col-form-label">Biaya Lain</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_biaya_lain" class="form-control @error('trx_biaya_lain') is-invalid @enderror" id="trx_biaya_lain" placeholder="Nama Include" value="{{ Number::format($item->trx_biaya_lain) }}" readonly>
                                        @error('trx_biaya_lain')<span id="trx_biaya_lain" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_total_bayar" class="col-sm-2 col-form-label">Total Bayar</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_total_bayar" class="form-control @error('trx_total_bayar') is-invalid @enderror" id="trx_total_bayar" placeholder="Nama Include" value="{{ Number::format($item->trx_total_bayar) }}" readonly>
                                        @error('trx_total_bayar')<span id="trx_total_bayar" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-10">
                                        <textarea name="trx_keterangan" class="form-control @error('trx_keterangan') is-invalid @enderror" id="trx_keterangan" placeholder="Tambahkan Catatan" rows="3" readonly>{{ $item->trx_keterangan }}</textarea>
                                        @error('trx_keterangan')<span id="trx_keterangan" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_tgl" class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="trx_tgl" class="form-control @error('trx_tgl') is-invalid @enderror" id="trx_tgl" placeholder="Tanggal Transaksi" value="{{ $item->trx_tgl }}" readonly>
                                        @error('trx_tgl')<span id="trx_tgl" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_status" class="col-sm-2 col-form-label">Status Trx.</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="trx_status" id="trx_status" readonly>
                                            <option value="{{ $item->trx_status }}"> {{ $item->trx_status }}</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="trx_status_bayar" class="col-sm-2 col-form-label">Status Bayar</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="trx_status_bayar" id="trx_status_bayar" readonly>
                                            <option value="{{ $item->trx_status_bayar }}"> {{ $item->trx_status_bayar }}</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="text" class="form-control" name="perusahaan_kode" value="{{ $item->perusahaan_kode }}" hidden>
                                <input type="text" class="form-control" name="perusahaan_user_kode" value="{{ $item->perusahaan_user_kode }}" hidden>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <br>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        @endforeach
                    </div>
                <!-- /.card -->

                    <div class="card card-info">                
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                    &nbsp;List Pembayaran
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode_Byr</th>
                                    <th>Rincian</th>
                                    <th>Jml_Byr</th>
                                    <th>Metode</th>
                                    <th>Penyetor</th>
                                    <th>Penyetor_HP</th>
                                    <th>Penerima</th>
                                    <th>Tanggal</th> 
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                                $total = 0;
                            @endphp
                            @foreach ($getPembayaran as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->pembayaran_kode }}</td>
                                    <td>{{ $item->pembayaran_rincian }}</td>
                                    <td>{{ Number::format($item->pembayaran_jumlah) }}</td>
                                    <td>{{ $item->pembayaran_metode }}</td>
                                    <td>{{ $item->pembayaran_penyetor }}</td>
                                    <td>{{ $item->pembayaran_penyetor_hp }}</td> 
                                    <td>{{ $item->pembayaran_penerima }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->pembayaran_tanggal)->format('d-m-Y') }}</td>
                                    <td>{!! $item->pembayaran_keterangan !!}</td>                         
                                </tr> 
                                @php
                                    $total += $item->pembayaran_jumlah;
                                @endphp
                            @endforeach 
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>Total Pembayaran</td>
                                    <td>{{ Number::format($total) }}</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
                        <!-- /.card-body -->

                        @foreach ($getTrx as $val)
                        <div class="card-footer text-right">
                            <a href="{{ URL::previous() }}">
                                <button type="button" class="btn btn-default float-left">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    &nbsp;Kembali
                                </button>
                            </a>
                        </div>
                        <!-- /.card-footer -->
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

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}
    
    {{-- js new end --}}
</body>
</html>