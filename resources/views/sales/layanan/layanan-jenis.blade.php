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
                            <h3 class="card-title">Lihat Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getJnsLay as $item)
                        {{-- <form class="form-horizontal" action="/sales/layanan-jenis/update/{{ $item->layanan_uuid }}/{{ $item->jenis_uuid }}" method="post" enctype="multipart/form-data"> --}}
                        <form class="form-horizontal">
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
                                        <input type="text" name="jenis_nama" class="form-control @error('jenis_nama') is-invalid @enderror" id="jenis_nama" placeholder="Nama Jenis Layanan" value="{{ $item->jenis_nama }}" readonly>
                                        @error('jenis_nama')<span id="jenis_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_harga" class="col-sm-2 col-form-label">Harga Awal</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_harga" class="form-control @error('jenis_harga') is-invalid @enderror" id="jenis_harga" placeholder="Harga Awal" value="{{ $item->jenis_harga }}" readonly>
                                        @error('jenis_harga')<span id="jenis_harga" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_diskon" class="col-sm-2 col-form-label">Diskon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_diskon" class="form-control @error('jenis_diskon') is-invalid @enderror" id="jenis_diskon" placeholder="Diskon" value="{{ $item->jenis_diskon }}" readonly>
                                        @error('jenis_diskon')<span id="jenis_diskon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_final" class="col-sm-2 col-form-label">Harga Final</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_final" class="form-control @error('jenis_final') is-invalid @enderror" id="jenis_final" placeholder="Harga Final" value="{{ $item->jenis_final }}" readonly>
                                        @error('jenis_final')<span id="jenis_final" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_desk" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="jenis_desk" id="summernote" rows="15" readonly>{{ $item->jenis_desk }}</textarea>
                                        @error('jenis_desk')<span id="jenis_desk" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="jenis_status" id="jenis_status" @readonly(true)>
                                            <option value="{{ $item->jenis_status }}"> {{ $item->jenis_status }}</option>
                                            {{-- <option value="Public"> Public</option>
                                            <option value="Private"> Private</option> --}}
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <br>
                                {{-- <button type="submit" class="btn btn-info float-right">Submit</button> --}}
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
                                
                            </div>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Includes</th>
                                        <th>Status</th>         
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($getRolLayIncJns as $val)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $val->il_nama }}</td> 
                                        <td>
                                            @if ($val->rlij_status == 'No')
                                                <span class="badge badge-warning">{{ $val->rlij_status }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $val->rlij_status }}</span>
                                            @endif
                                        </td>                                
                                    </tr> 
                                @endforeach                   
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                {{-- card end --}}                    

                    <div class="card">
                        @foreach ($getJnsLay as $item)
                        <div class="card-footer">
                            <a href="/sales/layanan/show/{{ $item->layanan_uuid }}">
                                <button type="button" class="btn btn-default float-right">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    &nbsp;Kembali
                                </button>
                            </a>
                        </div>
                        @endforeach   
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