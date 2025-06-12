@extends('components.layouts.app')
@section('content')
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
                            <h3 class="card-title">Insert Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="/admstr/rekening/store" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="rekening_nama" class="col-sm-2 col-form-label">Nama Bank</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="rekening_nama" class="form-control @error('rekening_nama') is-invalid @enderror" id="rekening_nama" placeholder="Nama Bank" value="{{ old('rekening_nama') }}">
                                        @error('rekening_nama')<span id="rekening_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rekening_nomor" class="col-sm-2 col-form-label">Nomor Rekening</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="rekening_nomor" class="form-control @error('rekening_nomor') is-invalid @enderror" id="rekening_nomor" placeholder="Nomor Rekening" value="{{ old('rekening_nomor') }}">
                                        @error('rekening_nomor')<span id="rekening_nomor" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rekening_atas_nama" class="col-sm-2 col-form-label">Atas Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="rekening_atas_nama" class="form-control @error('rekening_atas_nama') is-invalid @enderror" id="rekening_atas_nama" placeholder="Rekening Atas Nama" value="{{ old('rekening_atas_nama') }}">
                                        @error('rekening_atas_nama')<span id="rekening_atas_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rekening_swiftcode" class="col-sm-2 col-form-label">Swiftcode</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="rekening_swiftcode" class="form-control @error('rekening_swiftcode') is-invalid @enderror" id="rekening_swiftcode" placeholder="Swiftcode" value="{{ old('rekening_swiftcode') }}">
                                        @error('rekening_swiftcode')<span id="rekening_swiftcode" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rekening_kategori" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="rekening_kategori" id="rekening_kategori">
                                            <option value="PPN"> PPN</option>
                                            <option value="Non PPN"> Non PPN</option>
                                            <option value="Perpajakan"> Perpajakan</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/rekening">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        &nbsp;Kembali
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-info float-right">Submit</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                <!-- /.card -->
                </div>            
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->  
@endsection
</body>
</html>