<div class="modal fade" id="modal-create-kategori">
    <div class="modal-dialog">
        <div class="modal-content">
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
                <form class="form-horizontal" action="/admstr/kategori/store" method="post"
                    enctype="multipart/form-data" name="myForm">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="kategori_nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="kategori_nama"
                                    class="form-control @error('kategori_nama') is-invalid @enderror" id="kategori_nama"
                                    placeholder="Nama Kategori" value="{{ old('kategori_nama') }}">
                                @error('kategori_nama')<span id="kategori_nama"
                                class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori_warna" class="col-sm-2 col-form-label">Warna</label>
                            <div class="col-sm-10">
                                <code>info, warning, danger, success</code>
                                <input type="text" name="kategori_warna"
                                    class="form-control @error('kategori_warna') is-invalid @enderror"
                                    id="kategori_warna" placeholder="Warna Kategori => success"
                                    value="{{ old('kategori_warna') }}">
                                @error('kategori_warna')<span id="kategori_warna"
                                class="error invalid-feedback">{{ $message }}</span>@enderror
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="/admstr/kategori">
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