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
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($users as $item)
                                
                            
                        <form class="form-horizontal" action="/admstr/users/update/{{ $item['uuid'] }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <div>
                                            @if ($item['foto'] != '')
                                            <img id="frames" src="/storage/{{ $item['foto'] }}" width="180px" alt="User Image">
                                            @else
                                            <img id="frames" src="/storage/users_foto/default.png" width="180px" alt="User Image">
                                            @endif
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input  @error('photo') is-invalid @enderror" id="photo">
                                            <label class="custom-file-label" for="photo">Choose file</label>
                                            </div>
                                            @error('photo')<span id="photo" class="error invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="nama" value="{{ $item['nama'] }}">
                                        @error('nama')<span id="nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ $item['email'] }}">
                                        @error('email')<span id="email" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <code>Kosongkan Password Jika Tidak Di Ubah..</code>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                    </div>
                                    @error('password')<span id="password" class="error invalid-feedback">{{ $message }}</span>@enderror
                                </div>
                                
                                <div class="form-group row">
                                    <label for="password_confirmation" class="col-sm-2 col-form-label">Confirmation Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" placeholder="Confirmation Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_hp" class="col-sm-2 col-form-label">No. Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No. Hp." value="{{ $item['no_hp'] }}">
                                        @error('no_hp')<span id="no_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tmp_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="tmp_lahir" class="form-control @error('tmp_lahir') is-invalid @enderror" id="tmp_lahir" placeholder="Tempat Lahir" value="{{ $item['tmp_lahir'] }}">
                                        @error('tmp_lahir')<span id="tmp_lahir" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" placeholder="Tanggal Lahir" value="{{ $item['tgl_lahir'] }}">
                                        @error('tgl_lahir')<span id="tgl_lahir" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_masuk" class="col-sm-2 col-form-label mt-4">Tanggal Masuk</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="tgl_masuk" class="form-control mt-4 @error('tgl_masuk') is-invalid @enderror" id="tgl_masuk" placeholder="Tanggal Masuk" value="{{ $item['tgl_masuk'] }}">
                                        @error('tgl_masuk')<span id="tgl_masuk" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tgl_keluar" class="col-sm-2 col-form-label">Tanggal Keluar</label>
                                    <div class="col-sm-4">
                                        <code>Kosongkan Jika Bila Belum Saatnya..!</code>
                                        <input type="date" name="tgl_keluar" class="form-control @error('tgl_keluar') is-invalid @enderror" id="tgl_keluar" placeholder="Tanggal Masuk" value="{{ $item['tgl_keluar'] }}">
                                        @error('tgl_keluar')<span id="tgl_keluar" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="level" class="col-sm-2 col-form-label">Level Akses</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select" name="level" id="level">
                                            <option value="{{ $item['level'] }}"> {{ $item['akses_level'] }}</option>
                                            @foreach ($levels as $level)
                                            <option value="{{ $level->akses_id }}"> {{ $level->akses_level }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="custom-select" name="status" id="status">
                                            <option value="{{ $item['status'] }}">- {{ $item['status'] }}</option>
                                            <option value="Active">- Active</option>
                                            <option value="Deactive">- Deactive</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/users">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        &nbsp;Kembali
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-info float-right">Submit</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        @endforeach
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