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
                        @foreach ($getNomor as $item)
                        <form class="form-horizontal" action="/admstr/office/nomor/update/{{ $uuidOffice }}/{{ $item->cn_uuid }}" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="cn_nama" class="col-sm-2 col-form-label">Nama Pengguna</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="cn_nama" class="form-control @error('cn_nama') is-invalid @enderror" id="cn_nama" placeholder="Nama Pengguna" value="{{ $item->cn_nama }}" required>
                                        @error('cn_nama')<span id="cn_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cn_hp" class="col-sm-2 col-form-label">Nomor Pengguna</label>
                                    <div class="col-sm-10">
                                        <code>*Gunakan ID Negara : 62xxxxxxx</code>
                                        <input type="text" name="cn_hp" class="form-control @error('cn_hp') is-invalid @enderror" id="cn_hp" placeholder="Nomor handphone" value="{{ $item->cn_hp }}" required>
                                        @error('cn_hp')<span id="cn_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="images" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10 mt-4">
                                        <div>
                                            @if ($item->cn_foto != 0)
                                            <img id="frame_images" src="/storage/{{ $item->cn_foto }}" width="264px" height="264px" alt="Image">
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

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/office/details/{{ $uuidOffice }}">
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