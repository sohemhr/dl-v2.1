@extends('components.layouts.app')

@section("content")
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
                        <form class="form-horizontal" action="/admstr/career/store" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="career_judul" class="col-sm-2 col-form-label">Judul Loker</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="career_judul" class="form-control @error('career_judul') is-invalid @enderror" id="career_judul" placeholder="Judul Loker" value="{{ old('career_judul') }}" required>
                                        @error('career_judul')<span id="career_judul" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="career_deskripsi" id="summernote" rows="15" required>{{ old('career_deskripsi') }}</textarea>
                                        @error('career_deskripsi')<span id="career_deskripsi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10 mt-4">
                                        <img id="frame_images" src="/storage/images/default.jpg" width="264px" height="264px" alt="Image">
                                        <div class="input-group mt-2">
                                            <div class="custom-file">
                                            <input type="file" name="images" class="custom-file-input  @error('images') is-invalid @enderror" id="images" required>
                                            <label class="custom-file-label" for="images">Choose file</label>
                                            </div>
                                            @error('images')<span id="images" class="error invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_tanggal_mulai" class="col-sm-2 col-form-label">Loker Mulai</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="career_tanggal_mulai" class="form-control @error('career_tanggal_mulai') is-invalid @enderror" id="career_tanggal_mulai" placeholder="Tanggal Mulai" value="{{ old('career_tanggal_mulai') }}">
                                        @error('career_tanggal_mulai')<span id="career_tanggal_mulai" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_tanggal_selesai" class="col-sm-2 col-form-label">Loker Selesai</label>
                                    <div class="col-sm-4">
                                        <input type="date" name="career_tanggal_selesai" class="form-control @error('career_tanggal_selesai') is-invalid @enderror" id="career_tanggal_selesai" placeholder="Tanggal Selesai" value="{{ old('career_tanggal_selesai') }}">
                                        @error('career_tanggal_selesai')<span id="career_tanggal_selesai" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="career_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="career_status" id="career_status">
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
                    </div>
                <!-- /.card -->
                </div>            
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content --> 

    {{-- js new star here --}}
    <script type="text/javascript">
        $(document).ready(function() {
          //$(".add-more").click(function(){ 
          //    var html = $(".copy").html();
          //    $(".after-add-more").after(html);
          //});
            $(".add-more").click(function(){ 
                let html = ''
                    html = `<div class="form-group row control-group">
                                <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-4">
                                    <input type="text" name="keyword[]" class="form-control" id="keyword" placeholder="Keyword career">
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-danger remove" type="button"><i class="fa fa-trash"></i> Remove</button>
                                </div>  
                            </div>`
                $(".after-add-more").after(html);
            });
        
            // saat tombol remove dklik control group akan dihapus 
            $("body").on("click",".remove",function(){ 
                $(this).parents(".control-group").remove();
            });
        });
    </script>
    {{-- js new end --}}
@endsection