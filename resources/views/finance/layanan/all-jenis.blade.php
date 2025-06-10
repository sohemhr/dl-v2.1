@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.finance-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                    <div class="card card-info">                
                        <div class="card-header">
                            <h3 class="card-title">
                                <br>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                            <th>No</th>
                            <th>Kode_LN</th>
                            <th>Layanan</th>
                            <th>Status</th>
                            <th>Jenis Layanan</th>
                            <th>Act</th>           
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($layanan as $item)
                            <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->layanan_kode }}</td>
                            <td>{{ $item->layanan_nama }}</td>
                            <td>
                                @if ($item->layanan_status == 'Private')
                                    <span class="badge badge-warning">{{ $item->layanan_status }}</span>
                                @else
                                    <span class="badge badge-success">{{ $item->layanan_status }}</span>
                                @endif
                            </td>
                            <td>
                                @php
                                    $getJnsLyn = DB::table('jenis')->where('jenis_layanan_kode', $item->layanan_kode)->orderBy('jenis_kode', 'ASC')->get();
                                @endphp
                                @foreach ($getJnsLyn as $jns)
                                    {{ $jns->jenis_kode.' - '.$jns->jenis_nama }} <span class="badge badge-success">{{ $jns->jenis_status }}</span> <hr>
                                @endforeach
                                
                            </td>
                            
                            <td>
                                <a href="/finance/layanan/show/{{ $item->layanan_uuid }}">
                                    <button type="button" class="btn btn-xs btn-primary">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                                                                
                                    </button>
                                </a>
                            </td>
                            
                            </tr> 
                            @endforeach                   
                            </tbody>
                        </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card">
                            <div class="card-footer">
                                <a href="{{ URL::previous() }}">
                                    <button type="button" class="btn btn-default float-right">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        &nbsp;Kembali
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
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