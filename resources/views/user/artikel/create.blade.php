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
                        <form class="form-horizontal" action="/admstr/artikel/store" method="post"
                            enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="artikel_judul" class="col-sm-2 col-form-label">Judul Artikel</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="artikel_judul"
                                            class="form-control @error('artikel_judul') is-invalid @enderror"
                                            id="artikel_judul" placeholder="Judul Artikel"
                                            value="{{ old('artikel_judul') }}" required>
                                        @error('artikel_judul')<span id="artikel_judul"
                                        class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="artikel_kategori_kode" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select
                                            class="form-control select2 @error('artikel_kategori_kode') is-invalid @enderror"
                                            id="artikel_kategori_kode" name="artikel_kategori_kode" required="">
                                            <option value="">- Pilih Kategori -</option>
                                            @foreach ($getKategori as $kat)
                                                <option value="{{ $kat->kategori_kode }}">*{{ $kat->kategori_nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('artikel_kategori_kode')<span id="artikel_kategori_kode"
                                        class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="artikel_deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control ps-5 text-dark" name="artikel_deskripsi" id="mytexteditor" rows="25"
                                            placeholder="Pilih Format => Font Helvetica"
                                            required>{{ old(key: 'artikel_deskripsi') }}</textarea>
                                        @error('artikel_deskripsi')<span id="artikel_deskripsi"
                                        class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10 mt-4">
                                        <img id="frame_images" src="/storage/images/default.jpg" width="400px"
                                            height="264px" alt="Image">
                                        <div class="input-group mt-2">
                                            <div class="custom-file">
                                                <input type="file" name="images"
                                                    class="custom-file-input  @error('images') is-invalid @enderror"
                                                    id="images" required>
                                                <label class="custom-file-label" for="images">Choose file</label>
                                            </div>
                                            @error('images')<span id="images"
                                            class="error invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="artikel_tag" class="col-sm-2 col-form-label">Tag</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="artikel_tag"
                                            class="form-control col-sm-4 @error('artikel_tag') is-invalid @enderror"
                                            id="artikel_tag" placeholder="Tag Artikel" value="{{ old('artikel_tag') }}"
                                            required>
                                        @error('artikel_tag')<span id="artikel_tag"
                                        class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <!-- gunakan tanda [] untuk menampung array  -->
                                <div class="form-group row control-group after-add-more">
                                    <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="keyword[]" class="form-control" id="keyword"
                                            placeholder="Keyword Artikel" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn btn-success add-more" type="button">
                                            <i class="fa fa-plus"></i> Add
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="artikel_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="artikel_status" id="artikel_status">
                                            <option value="Private"> Private</option>
                                            <option value="Public"> Public</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/artikel">
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

{{-- js new star here --}}
<script type="text/javascript">
    tinymce.init({
        selector: '#mytexteditor',
        theme: 'silver',
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
    });


    $(document).ready(function () {
        //$(".add-more").click(function(){ 
        //    var html = $(".copy").html();
        //    $(".after-add-more").after(html);
        //});
        $(".add-more").click(function () {
            let html = ''
            html = `<div class="form-group row control-group">
                                <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>
                                <div class="col-sm-4">
                                    <input type="text" name="keyword[]" class="form-control" id="keyword" placeholder="Keyword Artikel">
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-danger remove" type="button"><i class="fa fa-trash"></i> Remove</button>
                                </div>  
                            </div>`
            $(".after-add-more").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove", function () {
            $(this).parents(".control-group").remove();
        });
    });
</script>
{{-- js new end --}}
</body>

</html>