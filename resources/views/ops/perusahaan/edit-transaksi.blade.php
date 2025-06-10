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
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getTrx as $item)
                        <form class="form-horizontal" action="/ops/transaksi/update/{{ $item['trx_uuid'] }}" method="post" enctype="multipart/form-data">
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
                                            <td>Kode Trx.</td><br>
                                            <td>Status Trx.</td><br>
                                            <td>Status Pembayaran</td><br>
                                            <td>Tanggal</td><br>
                                        </div>
                                        <div class="col-md-3">                                        
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
                                        <div class="col-md-5 mt-2">                                        
                                            <td>: <b>{{ $item->perusahaan_atas_nama }}</b></td><br>
                                            <td>: {{ $item->perusahaan_an_hp }}</td><br>
                                        </div>
                                        <div class="col-md-2 mt-2">
                                            <td>Nama Pic</td><br>
                                            <td>No. Hp. Pic</td><br>
                                        </div>
                                        <div class="col-md-3 mt-2">                                        
                                            <td>: <b>{{ $item->nama }}</b></td><br>
                                            <td>: {{ $item->no_hp }}</td><br>
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
                                <div class="form-group row">
                                    <label for="trx_jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_jumlah" class="form-control @error('trx_jumlah') is-invalid @enderror" id="trx_jumlah" placeholder="Nama Include" value="{{ $jumlah }}" readonly>
                                        @error('trx_jumlah')<span id="trx_jumlah" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_diskon" class="col-sm-2 col-form-label">Diskon TRX</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_diskon" class="form-control @error('trx_diskon') is-invalid @enderror" id="trx_diskon" placeholder="Nama Include" value="{{ $item->trx_diskon }}" readonly>
                                        @error('trx_diskon')<span id="trx_diskon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_biaya_lain" class="col-sm-2 col-form-label">Biaya Lain</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_biaya_lain" class="form-control @error('trx_biaya_lain') is-invalid @enderror" id="trx_biaya_lain" placeholder="Nama Include" value="{{ $item->trx_biaya_lain }}" readonly>
                                        @error('trx_biaya_lain')<span id="trx_biaya_lain" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trx_total_bayar" class="col-sm-2 col-form-label">Total Bayar</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="trx_total_bayar" class="form-control @error('trx_total_bayar') is-invalid @enderror" id="trx_total_bayar" placeholder="Nama Include" value="{{ $item->trx_total_bayar }}" readonly>
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
                                            {{-- <option value="Menunggu Pembayaran"> Menunggu Pembayaran</option>
                                            <option value="DP"> DP</option>
                                            <option value="Dicicil"> Dicicil</option>
                                            <option value="Lunas"> Lunas</option> --}}
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
                                <button type="submit" class="btn btn-info float-right">Submit Status Trx</button>
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

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}
    
    {{-- js new end --}}
</body>
</html>