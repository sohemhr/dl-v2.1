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
                        @foreach ($layanan as $item)
                                
                            
                        <form class="form-horizontal" action="/admstr/layanan/update/{{ $item['layanan_uuid'] }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="layanan_nama" class="col-sm-2 col-form-label">Layanan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="layanan_nama" class="form-control @error('layanan_nama') is-invalid @enderror" id="layanan_nama" placeholder="Nama Layanan" value="{{ $item['layanan_nama'] }}">
                                        @error('layanan_nama')<span id="layanan_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="layanan_harga" class="col-sm-2 col-form-label">Harga Mulai Dari</label>
                                    <div class="col-sm-10">
                                        <code>*Harga mulai dari untuk tampilan web</code>
                                        <input type="text" name="layanan_harga" class="form-control @error('layanan_harga') is-invalid @enderror" id="layanan_harga" placeholder="Harga Mulai Dari" value="{{ $item['layanan_harga'] }}" type-currency="IDR">
                                        @error('layanan_harga')<span id="layanan_harga" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="layanan_desk" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="layanan_desk" id="summernote" rows="15">{{ $item['layanan_desk'] }}</textarea>
                                        @error('layanan_desk')<span id="layanan_desk" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="layanan_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="layanan_status" id="layanan_status">
                                            <option value="{{ $item['layanan_status'] }}"> {{ $item['layanan_status'] }}</option>
                                            <option value="Public"> Public</option>
                                            <option value="Private"> Private</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/layanan">
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