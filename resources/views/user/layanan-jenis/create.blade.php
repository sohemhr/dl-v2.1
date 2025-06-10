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
                        @foreach ($getLayanan as $getLay)
                        <form class="form-horizontal" action="/admstr/layanan-jenis/store/{{ $getLay->layanan_uuid }}" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="layanan_nama" class="col-sm-2 col-form-label">Layanan</label>
                                    <input type="hidden" name="layanan_uuid" value="{{ $getLay->layanan_uuid }}">
                                    <input type="hidden" name="layanan_kode" value="{{ $getLay->layanan_kode }}">
                                    <div class="col-sm-10">
                                        <input type="text" name="layanan_nama" class="form-control @error('layanan_nama') is-invalid @enderror" id="layanan_nama" placeholder="Nama Layanan" value="{{ $getLay->layanan_nama }}" readonly>
                                        @error('layanan_nama')<span id="layanan_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_nama" class="col-sm-2 col-form-label">Jenis Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_nama" class="form-control @error('jenis_nama') is-invalid @enderror" id="jenis_nama" placeholder="Nama Jenis Layanan" value="{{ old('layanan_nama') }}">
                                        @error('jenis_nama')<span id="jenis_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_harga" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_harga" class="form-control @error('jenis_harga') is-invalid @enderror" id="jenis_harga" placeholder="Harga" value="{{ old('jenis_harga') }}" type-currency="IDR">
                                        @error('jenis_harga')<span id="jenis_harga" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_diskon" class="col-sm-2 col-form-label">Diskon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_diskon" class="form-control @error('jenis_diskon') is-invalid @enderror" id="jenis_diskon" placeholder="Diskon" value="{{ old('jenis_diskon') }}" type-currency="IDR">
                                        @error('jenis_diskon')<span id="jenis_diskon" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_final" class="col-sm-2 col-form-label">Total Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="jenis_final" class="form-control @error('jenis_final') is-invalid @enderror" id="jenis_final" placeholder="Total Harga" value="{{ old('jenis_final') }}" type-currency="IDR">
                                        @error('jenis_final')<span id="jenis_final" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_desk" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="jenis_desk" id="summernote" rows="15">
                                            


                                        </textarea>
                                        @error('jenis_desk')<span id="jenis_desk" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="jenis_status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="custom-select" name="jenis_status" id="jenis_status">
                                            <option value="Public"> Public</option>
                                            <option value="Private"> Private</option>
                                        </select>
                                    </div>
                                </div>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($getRolLayInc as $getRli)
                                    <input type="text" name="rlij_no_urut[]" value="{{ $no++ }}" hidden>
                                    <input type="text" name="rli_kode[]" value="{{ $getRli->rli_kode }}" hidden>
                                    <input type="text" name="inc_id[]" value="{{ $getRli->rli_inc_id }}" hidden>
                                    <input type="text" name="rlij_status[]" value="No" hidden>
                                @endforeach

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/layanan/show/{{ $getLay->layanan_uuid }}">
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