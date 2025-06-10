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
                                        <input type="text" name="layanan_nama" class="form-control" id="layanan_nama" placeholder="Nama Layanan" value="{{ $item['layanan_nama'] }}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="layanan_desk" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="layanan_desk" class="form-control" readonly>{{ $item['layanan_desk'] }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="layanan_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="layanan_status" class="form-control" id="layanan_status" placeholder="Layanan Status" value="{{ $item['layanan_status'] }}" readonly>
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
                                
                            </div>
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Includes</th>        
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
                                 
                            </div>
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Jenis</th>
                                        <th>Harga Awal</th>
                                        <th>Diskon</th>
                                        <th>Harga Final</th>
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
                                        <a href="/ops/layanan-jenis/show/{{ $getLayUuid->layanan_uuid }}/{{ $gjl->jenis_uuid }}">
                                            <button type="button" class="btn btn-xs btn-success">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                &nbsp;view
                                            </button>
                                        </a>
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
                            <a href="/ops/layanan">
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
    </section>
    <!-- /.content -->  

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}
    
    {{-- js new end --}}
</body>
</html>