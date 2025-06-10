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
                        <form class="form-horizontal" action="/admstr/list-proses/store" method="post" enctype="multipart/form-data" name="myForm">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="lp_nama" class="col-sm-2 col-form-label">Nama Proses</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lp_nama" class="form-control @error('lp_nama') is-invalid @enderror" id="lp_nama" placeholder="Nama Proses" value="{{ old('lp_nama') }}">
                                        @error('lp_nama')<span id="lp_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lp_no_urut" class="col-sm-2 col-form-label">Nomor Urut</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="lp_no_urut" class="form-control @error('lp_no_urut') is-invalid @enderror" id="lp_no_urut" placeholder="No. Urut Proses" value="{{ old('lp_no_urut') }}">
                                        @error('lp_no_urut')<span id="lp_no_urut" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/admstr/list-proses">
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

    {{-- js new end --}}
</body>
</html>