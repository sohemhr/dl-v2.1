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
                            <h3 class="card-title">Edit Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach ($getCareer as $item)
                        <form class="form-horizontal" action="/admstr/career/update/{{ $item->career_uuid }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="career_judul" class="col-sm-2 col-form-label">Judul Loker</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="career_judul" class="form-control @error('career_judul') is-invalid @enderror" id="career_judul" placeholder="Judul Loker" value="{{ $item->career_judul }}">
                                        @error('career_judul')<span id="career_judul" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="career_deskripsi" id="summernote" rows="15">{{ $item->career_deskripsi }}</textarea>
                                        @error('career_deskripsi')<span id="career_deskripsi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10 mt-4">
                                        <div>
                                            @if ($item->career_foto != 0)
                                            <img id="frame_images" src="/storage/{{ $item->career_foto }}" width="264px" height="264px" alt="Image">
                                            @else
                                            <img id="frame_images" src="/storage/images/default.jpg" width="264px" height="264px" alt="Image">
                                            @endif
                                        </div>
                                        
                                        <div class="input-group mt-2">
                                            <div class="custom-file">
                                            <input type="file" name="images" class="custom-file-input  @error('images') is-invalid @enderror" id="images">
                                            <label class="custom-file-label" for="images">Choose file</label>
                                            </div>
                                            @error('images')<span id="images" class="error invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_tanggal_mulai" class="col-sm-2 col-form-label">Loker Mulai</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="career_tanggal_mulai" class="form-control @error('career_tanggal_mulai') is-invalid @enderror" id="career_tanggal_mulai" placeholder="Tanggal Mulai" value="{{ $item->career_tanggal_mulai }}">
                                        @error('career_tanggal_mulai')<span id="career_tanggal_mulai" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_tanggal_selesai" class="col-sm-2 col-form-label">Loker Selesai</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="career_tanggal_selesai" class="form-control @error('career_tanggal_selesai') is-invalid @enderror" id="career_tanggal_selesai" placeholder="Tanggal Selesai" value="{{ $item->career_tanggal_selesai }}">
                                        @error('career_tanggal_selesai')<span id="career_tanggal_selesai" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="career_status" id="career_status">
                                            <option value="{{ $item->career_status }}"> {{ $item->career_status }}</option>
                                            <option value="Private"> Private</option>
                                            <option value="Public"> Public</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/career">
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

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}
    
    {{-- js new end --}}
</body>
</html>