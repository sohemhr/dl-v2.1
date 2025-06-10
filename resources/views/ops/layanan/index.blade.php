@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.ops-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.header title="{{ $title }}" subtitle="{{ $subtitle }}" />

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h5>
                            <i class="icon fas fa-check"></i> 
                            {{ session('success') }}
                        </h5>
                    </div>
                    @elseif (session('delete'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        <h5><i class="icon fas fa-check"></i> {{ session('delete') }}</h5>
                    </div>
                    @endif
                    <div class="card">                
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="/ops/layanan-jenis">
                                <button type="button" class="btn btn-success">
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    &nbsp;Lihat Data Jenis Layanan
                                </button>
                                </a>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>status</th>
                            <th>Action</th>           
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($layanan as $item)
                            <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item['layanan_kode'] }}</td>
                            <td>{{ $item['layanan_nama'] }}</td>
                            <td>
                                <button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modal-viewJenis{{ $item['layanan_kode'] }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    View
                                </button> 
                            </td>
                            <td>
                                @if ($item['layanan_status'] == 'Private')
                                    <span class="badge badge-warning">{{ $item['layanan_status'] }}</span>
                                @else
                                    <span class="badge badge-success">{{ $item['layanan_status'] }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="/ops/layanan/show/{{ $item['layanan_uuid'] }}">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        &nbsp;Inc                                        
                                    </button>
                                </a>
                            </td>
                            </tr> 
                            @endforeach                   
                            </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            @foreach ($layanan as $xs)
            <div class="modal fade" id="modal-viewJenis{{ $xs['layanan_kode'] }}">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-white">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            &nbsp; Jenis Layanan {{ $xs->layanan_nama }}
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @php
                                $no = 1;
                                $getJenis = DB::table('jenis')->where('jenis_layanan_kode', $xs->layanan_kode)->orderBy('jenis_kode', 'ASC')->get();
                            @endphp
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Jenis</th>
                                        <th>Harga Awal</th>
                                        <th>Diskon</th>
                                        <th>Harga Final</th>   
                                        <th>Status</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($getJenis as $jns)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $jns->jenis_kode }}</td> 
                                    <td>{{ $jns->jenis_nama }}</td> 
                                    <td class="text-right">{{ Number::format($jns->jenis_harga) }}</td> 
                                    <td class="text-right">{{ Number::format($jns->jenis_diskon) }}</td> 
                                    <td class="text-right">{{ Number::format($jns->jenis_final) }}</td>
                                    <td>
                                        @if ($jns->jenis_status == 'Private')
                                            <span class="badge badge-danger">{{ $jns->jenis_status }}</span>
                                        @else
                                            <span class="badge badge-success">{{ $jns->jenis_status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="modal-footer justify-content-right">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>                                          
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
    
    {{-- js new end --}}
</body>
</html>