@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                        @foreach ($getOffice as $item)
                        <form class="form-horizontal">                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="office_nama" class="col-sm-2 col-form-label">Office</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_nama" class="form-control @error('office_nama') is-invalid @enderror" id="office_nama" placeholder="Office Name" value="{{ $item->office_nama }}" readonly>
                                        @error('office_nama')<span id="office_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea name="office_alamat" class="form-control @error('office_alamat') is-invalid @enderror" id="office_alamat" placeholder="Alamat" rows="3" readonly>{{ $item->office_alamat }}</textarea>
                                        @error('office_alamat')<span id="office_alamat" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_email" class="col-sm-2 col-form-label">email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="office_email" class="form-control @error('office_email') is-invalid @enderror" id="office_email" placeholder="Email Perusahaan" value="{{ $item->office_email }}" readonly>
                                        @error('office_email')<span id="office_email" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_telepon" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_telepon" class="form-control @error('office_telepon') is-invalid @enderror" id="office_telepon" placeholder="No. Telepon Perusahaan" value="{{ $item->office_telepon }}" readonly>
                                        @error('office_telepon')<span id="office_telepon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_hp" class="col-sm-2 col-form-label">No. Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_hp" class="form-control @error('office_hp') is-invalid @enderror" id="office_hp" placeholder="No. Hp." value="{{ $item->office_hp }}" readonly>
                                        @error('office_hp')<span id="office_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="office_deskripsi" id="summernote" rows="15" @readonly(true)>{{ $item->office_deskripsi }}</textarea>
                                        @error('office_deskripsi')<span id="office_deskripsi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10 mt-4">
                                        <div>
                                            @if ($item->office_foto != 0)
                                            <img id="frame_images" src="/storage/{{ $item->office_foto }}" width="400px" height="264px" alt="Image">
                                            @else
                                            <img id="frame_images" src="/storage/images/default.jpg" width="400px" height="264px" alt="Image">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_lokasi" class="col-sm-2 col-form-label">Maps Lokasi</label>
                                    <div class="col-sm-10">
                                        <div class="col-sm-2">
                                            <p>
                                                {!! $item->office_lokasi !!}
                                            </p>
                                        </div>
                                        <textarea name="office_lokasi" class="form-control @error('office_lokasi') is-invalid @enderror" id="office_lokasi" placeholder="Alamat" rows="3" readonly>{{ $item->office_lokasi }}</textarea>
                                        @error('office_lokasi')<span id="office_lokasi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_lokasi_url" class="col-sm-2 col-form-label">Url Lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_lokasi_url" class="form-control @error('office_lokasi_url') is-invalid @enderror" id="office_lokasi_url" placeholder="Url Lokasi" value="{{ $item->office_lokasi_url }}">
                                        @error('office_lokasi_url')<span id="office_lokasi_url" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="office_status" id="office_status" @readonly(true)> 
                                            <option value="{{ $item->office_status }}"> {{ $item->office_status }}</option>
                                            {{-- <option value="Private"> Private</option>
                                            <option value="Public"> Public</option> --}}
                                        </select>
                                    </div>
                                </div>

                                <hr>
                                <br>
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fa fa-hands" aria-hidden="true"></i>
                                        &nbsp;Nomor Kontak
                                    </h3>
                                </div>
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Nomor</th>
                                            <th>Action</th>           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($getContNumb as $val)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <img id="frame_images" src="/storage/{{ $val->cn_foto }}" width="80px" height="80px" alt="Image">
                                            </td> 
                                            <td>{{ $val->cn_nama }}</td>
                                            <td>{{ $val->cn_hp }}</td>                           
                                            <td>
                                                <a href="/admstr/office/nomor/show/{{ $item->office_uuid }}/{{ $val->cn_uuid }}">
                                                    <button type="button" class="btn btn-xs btn-success">
                                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                                        &nbsp;Edit
                                                    </button>
                                                </a>
                                                <button type="button" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-delete{{ $val->cn_uuid }}">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button> 
                                            </td>                          
                                        </tr> 
                                    @endforeach                   
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/office">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        &nbsp;Kembali
                                    </button>
                                </a>
                                <a href="/admstr/office/nomor/create/{{ $item->office_uuid }}">
                                    <button type="button" class="btn btn-success float-right">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        &nbsp;Tambah Nomor Kontak
                                    </button>
                                </a>
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

        @foreach ($getContNumb as $key)
            <div class="modal fade" id="modal-delete{{ $key->cn_uuid }}">
            <div class="modal-dialog">
                <div class="modal-content bg-white">
                <div class="modal-header bg-danger">
                    <h4 class="modal-title">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    Hapus Data Office Nomor
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Yakin Anda akan menghapus data {{ $key->cn_nama }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <form action="/admstr/office/nomor/destroy/{{ $uuidOffice }}/{{ $key->cn_uuid }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>                
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