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
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    &nbsp;List Data Perusahaan
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Perusahaan</th>
                                        <th>Atas_Nama</th>
                                        <th>No.Hp. An</th>
                                        <th>Tanggal</th>
                                        <th>Nama PIC</th>
                                        <th>Action</th>            
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($getPerusahaan as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->perusahaan_kode }}</td>
                                        <td>{{ $item->perusahaan_nama }}</td>
                                        <td>{{ $item->perusahaan_atas_nama }}</td>
                                        <td>{{ $item->perusahaan_an_hp }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->perusahaan_tgl)->format('d-m-Y') }}</td>               
                                        <td>{{ $item->nama }}</td>           
                                        <td>
                                            <a href="/finance/perusahaan/details/{{ $item->perusahaan_uuid }}">
                                                <button type="button" class="btn btn-xs btn-warning">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                    
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

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}

    {{-- js new end --}}
</body>
</html>