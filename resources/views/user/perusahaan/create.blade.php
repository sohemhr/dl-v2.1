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
                        <form class="form-horizontal" action="/admstr/perusahaan/store" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="perusahaan_nama" class="col-sm-2 col-form-label">Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perusahaan_nama" class="form-control @error('perusahaan_nama') is-invalid @enderror" id="perusahaan_nama" placeholder="Nama Perusahaan" value="{{ old('perusahaan_nama') }}">
                                        @error('perusahaan_nama')<span id="perusahaan_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perusahaan_alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea name="perusahaan_alamat" class="form-control @error('perusahaan_alamat') is-invalid @enderror" id="perusahaan_alamat" placeholder="Alamat Perusahaan" rows="3">{{ old('perusahaan_alamat') }}</textarea>
                                        @error('perusahaan_alamat')<span id="perusahaan_alamat" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perusahaan_email" class="col-sm-2 col-form-label">email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="perusahaan_email" class="form-control @error('perusahaan_email') is-invalid @enderror" id="perusahaan_email" placeholder="Email Perusahaan" value="{{ old('perusahaan_email') }}">
                                        @error('perusahaan_email')<span id="perusahaan_email" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perusahaan_telepon" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perusahaan_telepon" class="form-control @error('perusahaan_telepon') is-invalid @enderror" id="perusahaan_telepon" placeholder="No. Telepon Perusahaan" value="{{ old('perusahaan_telepon') }}">
                                        @error('perusahaan_telepon')<span id="perusahaan_telepon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perusahaan_hp" class="col-sm-2 col-form-label">No. Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perusahaan_hp" class="form-control @error('perusahaan_hp') is-invalid @enderror" id="perusahaan_hp" placeholder="No. Hp." value="{{ old('perusahaan_hp') }}">
                                        @error('perusahaan_hp')<span id="perusahaan_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perusahaan_atas_nama" class="col-sm-2 col-form-label">Pshn. Atas Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perusahaan_atas_nama" class="form-control @error('perusahaan_atas_nama') is-invalid @enderror" id="perusahaan_atas_nama" placeholder="Atas Nama Bapak/Ibu" value="{{ old('perusahaan_atas_nama') }}">
                                        @error('perusahaan_atas_nama')<span id="perusahaan_atas_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perusahaan_an_hp" class="col-sm-2 col-form-label">No. Hp. AN.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="perusahaan_an_hp" class="form-control @error('perusahaan_an_hp') is-invalid @enderror" id="perusahaan_an_hp" placeholder="No. Hp. Atas Nama" value="{{ old('perusahaan_an_hp') }}">
                                        @error('perusahaan_an_hp')<span id="perusahaan_an_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="perusahaan_tgl" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="perusahaan_tgl" class="form-control @error('perusahaan_tgl') is-invalid @enderror" id="perusahaan_tgl" placeholder="Tanggal Masuk" value="{{ old('perusahaan_tgl') }}">
                                        @error('perusahaan_tgl')<span id="perusahaan_tgl" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="kode_user" class="col-sm-2 col-form-label">Pilih User</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 @error('kode_user') is-invalid @enderror" name="kode_user" id="kode_user" required>
                                            <option value="">- Pilih User -</option>
                                            @foreach ($getUser as $usr)
                                            <option value="{{ $usr->kode }}">{{ $usr->kode.' || '.$usr->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('kode_user')<span id="kode_user" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/perusahaan">
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