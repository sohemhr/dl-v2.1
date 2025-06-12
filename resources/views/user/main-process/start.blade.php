@extends('components.layouts.app')
@section('content')
    <!-- Main content here -->
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
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                        &nbsp;List Process Start
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pcs_ID</th>
                                        <th>Perusahaan</th>
                                        <th>Hp</th>
                                        <th>Layanan</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>PIC</th>
                                        <th>Action</th>            
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($getStart as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->trxdtl_kode }}</td>
                                        <td>{{ $item->perusahaan_nama }}</td>
                                        <td>{{ $item->perusahaan_hp }}</td>
                                        <td>{{ $item->jenis_nama }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td> 
                                        <td>
                                            @if ($item->trxdtl_status == 'Start')
                                                <span class="badge badge-warning">{{ $item->trxdtl_status }}</span>
                                            @elseif ($item->trxdtl_status == 'OnProcess')
                                                <span class="badge badge-primary">{{ $item->trxdtl_status }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $item->trxdtl_status }}</span>
                                            @endif
                                        </td>     
                                        <td>{{ $item->nama }}</td> 
                                        <td>
                                            <a href="/admstr/main-process/start/{{ $item->trxdtl_uuid }}">
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
@endsection
</body>
</html>