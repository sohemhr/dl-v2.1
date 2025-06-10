@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.finance-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                    @foreach ($getProcess as $item)
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
                            <!-- /.card-body -->
                            <div class="card-footer">
                                
                            </div>
                            <!-- /.card-footer -->
                        
                    </div>
                    @endforeach
                <!-- /.card -->
                    

                    
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Layanan Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getProcess as $val)
                                
                            
                        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="layanan_nama" class="col-sm-2 col-form-label">Layanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="layanan_nama" class="form-control @error('layanan_nama') is-invalid @enderror" id="layanan_nama" placeholder="Nama Layanan" value="{{ $val->layanan_kode.' - '.$val->layanan_nama }}" readonly>
                                        @error('layanan_nama')<span id="layanan_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_nama" class="col-sm-2 col-form-label">Jenis Layanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_nama" class="form-control @error('jenis_nama') is-invalid @enderror" id="jenis_nama" placeholder="Jenis Layanan" value="{{ $val->jenis_kode.' - '.$val->jenis_nama }}" readonly>
                                        @error('jenis_nama')<span id="jenis_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="il_nama" class="col-sm-2 col-form-label">Includes</label>
                                    <div class="col-sm-10">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No </th>
                                                    <th>Includes</th>
                                                    <th>Status</th>         
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                            $no = 1;
                                            $getRolLayIncJns = DB::table('role_layincjns')->where('rlij_jenis_kode', $val->jenis_kode)
                                                        ->join('include_lists', 'role_layincjns.rlij_inc_id', '=', 'include_lists.il_id')
                                                        ->orderBy('rlij_no_urut', 'ASC')
                                                        ->get();
                                            @endphp
                                            @foreach ($getRolLayIncJns as $x)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $x->il_nama }}</td> 
                                                    <td>
                                                        @if ($x->rlij_status == 'No')
                                                            <span class="badge badge-warning">{{ $x->rlij_status }}</span>
                                                        @else
                                                            <span class="badge badge-success">{{ $x->rlij_status }}</span>
                                                        @endif
                                                    </td>
                                                </tr> 
                                            @endforeach                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="trxdtl_notes" class="col-sm-2 col-form-label">Notes</label>
                                    <div class="col-sm-10">
                                        <textarea name="trxdtl_notes" class="form-control @error('trxdtl_notes') is-invalid @enderror" id="trxdtl_notes" placeholder="Keterangan untuk proses ini.." rows="3" readonly>{{ $val->trxdtl_notes }}</textarea>
                                        @error('trxdtl_notes')<span id="trxdtl_notes" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="trxdtl_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="trxdtl_status" id="trxdtl_status">
                                            <option value="{{ $val->trxdtl_status }}"> {{ $val->trxdtl_status }}</option>
                                            {{-- <option value="Start"> Start</option>
                                            <option value="OnProcess"> OnProcess</option>
                                            <option value="Completed"> Completed</option> --}}
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->                           
                        </form>
                        @endforeach
                    </div>
                <!-- /.card -->

                    <div class="card card-info">                
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                    &nbsp;List Process Status
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row mb-4">
                                
                            </div>
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Process</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>       
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($listStsDtl as $sts)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $sts->trxdtlsts_nama }}</td>
                                    <td>{{ $sts->trxdtlsts_keterangan }}</td> 
                                    <td>
                                        @if ($sts->trxdtlsts_status == 'Start')
                                            <span class="badge badge-warning">{{ $sts->trxdtlsts_status }}</span>
                                        @elseif ($sts->trxdtlsts_status == 'OnProcess')
                                            <span class="badge badge-primary">{{ $sts->trxdtlsts_status }}</span>
                                        @elseif ($sts->trxdtlsts_status == 'Failed')
                                            <span class="badge badge-danger">{{ $sts->trxdtlsts_status }}</span>
                                        @else
                                            <span class="badge badge-success">{{ $sts->trxdtlsts_status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($sts->updated_at)->format('d-m-Y') }}</td>                                                             
                                </tr> 
                            @endforeach                   
                            </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        @foreach ($getProcess as $itemxs)
                        <div class="card-footer text-center">
                            <a href="{{ URL::previous() }}">
                                <button type="button" class="btn btn-default  float-right">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    &nbsp;Kembali
                                </button>
                            </a>
                        </div>
                        @endforeach
                        <!-- /.card-footer -->
                    </div>
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