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
                            <h3 class="card-title">Insert Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="/admstr/office/store" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="office_nama" class="col-sm-2 col-form-label">Office</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_nama" class="form-control @error('office_nama') is-invalid @enderror" id="office_nama" placeholder="Office Name" value="{{ old('office_nama') }}" required>
                                        @error('office_nama')<span id="office_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_alamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <textarea name="office_alamat" class="form-control @error('office_alamat') is-invalid @enderror" id="office_alamat" placeholder="Alamat" rows="3">{{ old('office_lokasi') }}</textarea>
                                        @error('office_alamat')<span id="office_alamat" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_email" class="col-sm-2 col-form-label">email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="office_email" class="form-control @error('office_email') is-invalid @enderror" id="office_email" placeholder="Email Perusahaan" value="{{ old('office_email') }}">
                                        @error('office_email')<span id="office_email" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_telepon" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_telepon" class="form-control @error('office_telepon') is-invalid @enderror" id="office_telepon" placeholder="No. Telepon Perusahaan" value="{{ old('office_telepon') }}">
                                        @error('office_telepon')<span id="office_telepon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_hp" class="col-sm-2 col-form-label">No. Hp.</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_hp" class="form-control @error('office_hp') is-invalid @enderror" id="office_hp" placeholder="No. Hp." value="{{ old('office_hp') }}">
                                        @error('office_hp')<span id="office_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="office_deskripsi" id="summernote" rows="15" required>{{ old('office_deskripsi') }}</textarea>
                                        @error('office_deskripsi')<span id="office_deskripsi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10 mt-4">
                                        <img id="frame_images" src="/storage/images/default.jpg" width="400px" height="264px" alt="Image">
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
                                    <label for="office_lokasi" class="col-sm-2 col-form-label">Maps Lokasi</label>
                                    <div class="col-sm-10">
                                        <textarea name="office_lokasi" class="form-control @error('office_lokasi') is-invalid @enderror" id="office_lokasi" placeholder="Frame Maps Lokasi" rows="3">{{ old('office_lokasi') }}</textarea>
                                        @error('office_lokasi')<span id="office_lokasi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_lokasi_url" class="col-sm-2 col-form-label">Url Lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="office_lokasi_url" class="form-control @error('office_lokasi_url') is-invalid @enderror" id="office_lokasi_url" placeholder="Url Lokasi" value="{{ old('office_lokasi_url') }}">
                                        @error('office_lokasi_url')<span id="office_lokasi_url" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="office_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="office_status" id="office_status">
                                            <option value="Private"> Private</option>
                                            <option value="Public"> Public</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/office">
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

    <x-layouts.footer />
    <x-layouts.js />
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
                                    <input type="text" name="keyword[]" class="form-control" id="keyword" placeholder="Keyword promo">
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
</body>
</html>