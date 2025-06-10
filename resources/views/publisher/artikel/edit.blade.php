@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.publisher-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                        @foreach ($getArtikel as $item)
                        <form class="form-horizontal" action="/publisher/artikel/update/{{ $item->artikel_uuid }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="artikel_judul" class="col-sm-2 col-form-label">Judul Artikel</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="artikel_judul" class="form-control @error('artikel_judul') is-invalid @enderror" id="artikel_judul" placeholder="Judul Artikel" value="{{ $item->artikel_judul }}">
                                        @error('artikel_judul')<span id="artikel_judul" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="artikel_kategori_kode" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 @error('artikel_kategori_kode') is-invalid @enderror" id="artikel_kategori_kode" name="artikel_kategori_kode" required="">
                                        <option value="{{ $item->artikel_kategori_kode }}">*{{ $item->kategori_nama }}</option>
                                        @foreach ($getKategori as $kat)
                                        <option value="{{ $kat->kategori_kode }}">*{{ $kat->kategori_nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('artikel_kategori_kode')<span id="artikel_kategori_kode" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="artikel_deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="artikel_deskripsi" id="summernote" rows="15">{{ $item->artikel_deskripsi }}</textarea>
                                        @error('artikel_deskripsi')<span id="artikel_deskripsi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10 mt-4">
                                        <div>
                                            @if ($item->artikel_foto != 0)
                                            <img id="frame_images" src="/storage/{{ $item->artikel_foto }}" width="400px" height="264px" alt="Image">
                                            @else
                                            <img id="frame_images" src="/storage/images/default.jpg" width="400px" height="264px" alt="Image">
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
                                    <label for="artikel_tag" class="col-sm-2 col-form-label">Tag</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="artikel_tag" class="form-control col-sm-4 @error('artikel_tag') is-invalid @enderror" id="artikel_tag" placeholder="Tag Artikel" value="{{ $item->artikel_tag }}">
                                        @error('artikel_tag')<span id="artikel_tag" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                @php
                                    $no =1;
                                @endphp
                                @foreach ($getKeyword as $val)
                                <div class="form-group row control-group">
                                    <label for="keyword" class="col-sm-2 col-form-label">Keyword {{ $no++ }}</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="keyword_kode[]" value="{{ $val->keyword_kode }}" hidden>
                                        <input type="text" name="keyword_artikel_kode[]" value="{{ $val->keyword_artikel_kode }}" hidden>
                                        <input type="text" name="keyword[]" class="form-control" id="keyword" placeholder="Keyword Artikel" value="{{ $val->keyword_nama }}">
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn- btn-danger" data-toggle="modal" data-target="#modal-delete{{ $val->keyword_kode }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                            
                                        </button>
                                    </div>  
                                </div>
                                @endforeach

                                <div class="form-group row control-group after-add-more">
                                    <label for="keyword" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-4">
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        <a class="btn btn-success" href="javascript:void(0)" id="createNewDatas"> 
                                            <i class="fa fa-plus"></i> &nbsp;Tambah Keywords
                                        </a>
                                    </div>  
                                </div>

                                <div class="form-group row">
                                    <label for="artikel_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="artikel_status" id="artikel_status">
                                            <option value="{{ $item->artikel_status }}"> {{ $item->artikel_status }}</option>
                                            <option value="Private"> Private</option>
                                            <option value="Public"> Public</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/publisher/artikel">
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

    @foreach ($getKeyword as $key)
        <div class="modal fade" id="modal-delete{{ $key->keyword_kode }}">
            <div class="modal-dialog">
            <div class="modal-content bg-white">
                <div class="modal-header bg-danger">
                <h4 class="modal-title">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    Hapus Keyword
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <p>Yakin Anda akan menghapus data {{ $key->keyword_nama }}&hellip;?</p>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form class="form_delete" action="/publisher/brosur/destroypaket/{{ $key->keyword_kode }}" method="post">
                    @csrf
                    @method('DELETE')
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <button type="button" class="btn btn-sm btn-danger deleteRecord" data-id="{{ $key->keyword_kode }}">
                        <i class="fa fa-trash"></i> 
                        &nbsp;Hapus
                    </button>
                </form>                
                </div>
            </div>
            <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal delete -->
      @endforeach




    <!-- Modal -->
    @foreach ($getArtikel as $art)
    <div class="modal fade" id="addModel" aria-hidden="true">
        <div class="modal-dialog modal-lg">    
            <div class="modal-content">    
                <div class="modal-header">    
                    <h4 class="modal-title" id="modelHeading"></h4>    
                </div>
    
                <div class="modal-body">    
                    <form id="addForm" name="addForm" class="form-horizontal">  
                        @csrf 
                        <input type="text" name="keyword_artikel_kode" id="keyword_artikel_kode" value="{{ $art->artikel_kode }}" hidden>
                        <div class="form-group">    
                            <label for="keyword_nama" class="col-sm-2 control-label">Keywords</label>    
                            <div class="col-sm-12">    
                                <input type="text" class="form-control" name="keyword_nama" id="keyword_nama" placeholder="Keyword Artikel">
                            </div>    
                        </div>
    
                        <div class="col-sm-12">  
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                            <button type="submit" class="btn btn-primary  float-right" id="saveBtn" value="create">Tambah   
                            </button>    
                        </div>    
                    </form>    
                </div>    
            </div>    
        </div>    
    </div>
    @endforeach

    <x-layouts.footer />
    <x-layouts.js />
    {{-- js new star here --}}
    <script>
        $(".deleteRecord").click(function(){
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        $.ajax(
            {
                url: "/publisher/artikel/destroykeyword/"+id,
                type: 'DELETE',
                data: {
                "id": id,
                "_token": token,
                },
                success: function (){
                // console.log("it Works");
                $('.modal').each(function(){
                    $(this).modal('hide');
                });
                location.reload();
                }
            });
        });
    </script>


    <script>   
        $(function () {

            //button create post event
            $('#createNewDatas').click(function () {
            $('#saveBtn').val("create-datas");
            $('#addForm').trigger("reset");
            $('#modelHeading').html("Tambah Data");
            $('#addModel').modal('show');
            });

            //action create post
            $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');
                $.ajax({
                    data: $('#addForm').serialize(),
                    url: "{{ route('artikel.addkeyword') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function (data) {
                        $('#addForm').trigger("reset");
                        $('#addModel').modal('hide');
                        location.reload();  
                    },

                    error: function (data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes'); 
                    }                
                });
            });
        });

    </script>
    {{-- js new end --}}
</body>
</html>