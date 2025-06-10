@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.sales-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                                    {{-- <a href="/sales/contact/create">
                                    <button type="button" class="btn btn-primary">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        &nbsp;Tambah Data
                                    </button>
                                    </a> --}}
                                    <i class="fa fa-list" aria-hidden="true"></i>
                                    &nbsp;Contact List
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Subject</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>            
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($contactGet as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        @if ($item->contact_status == '1')
                                        <td class="text-warning">{{ $item->contact_nama }}</td>
                                        @else
                                        <td>{{ $item->contact_nama }}</td>
                                        @endif
                                        <td>{{ $item->layanan_nama }}</td>
                                        <td>{{ $item->contact_email }}</td>
                                        <td>{{ $item->contact_hp }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}</td>  
                                        <td>
                                            <a href="/sales/contact/show/{{ $item['contact_uuid'] }}">
                                                <button type="button" class="btn btn-xs btn-success">
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