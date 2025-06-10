@props(['title', 'subtitle'])
<!DOCTYPE html>
<html lang="id">
    <x-layouts.head title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.navbar title="{{ $title }}" subtitle="{{ $subtitle }}" />
    <x-layouts.ops-sidebar title="{{ $title }}" subtitle="{{ $subtitle }}" />
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
                        @foreach ($checkingGet as $item)
                                
                            
                        {{-- <form class="form-horizontal" action="/ops/checking/update/{{ $item->chk_uuid }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') --}}
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="chk_nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="chk_nama_perusahaan" class="form-control @error('chk_nama_perusahaan') is-invalid @enderror" id="chk_nama_perusahaan" placeholder="Nama Perusahaan" value="{{ $item->chk_nama_perusahaan }}" readonly>
                                        @error('chk_nama_perusahaan')<span id="chk_nama_perusahaan" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="chk_nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="chk_nama" class="form-control @error('chk_nama') is-invalid @enderror" id="chk_nama" placeholder="Nama PIC" value="{{ $item->chk_nama }}" readonly>
                                        @error('chk_nama')<span id="chk_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="chk_email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="chk_email" class="form-control @error('chk_email') is-invalid @enderror" id="chk_email" placeholder="Email PIC" value="{{ $item->chk_email }}" readonly>
                                        @error('chk_email')<span id="chk_email" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="chk_hp" class="col-sm-2 col-form-label">Telephone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="chk_hp" class="form-control @error('chk_hp') is-invalid @enderror" id="chk_hp" placeholder="Telephone PIC" value="{{ $item->chk_hp }}" readonly>
                                        @error('chk_hp')<span id="chk_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <form class="form-horizontal" target="_blank" action="/ops/checking/chats/{{ $item->chk_uuid }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="chk_hp_chats" class="col-sm-2 col-form-label">WhatsApp</label>
                                        <div class="col-sm-4">
                                            <code>*Ubah ke 62xxxxxxx</code>
                                            <input type="text" name="chk_hp_chats" class="form-control @error('chk_hp_chats') is-invalid @enderror" id="chk_hp_chats" placeholder="Telephone PIC" value="{{ $item->chk_hp }}">
                                            @error('chk_hp_chats')<span id="chk_hp_chats" class="error invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <code>&nbsp;<br></code>
                                            <button type="submit" class="btn btn-success float-left">
                                                <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>

                                            </button>
                                        </div>
                                        
                                    </div>
                                </form>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="/ops/checking">
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-reply" aria-hidden="true"></i>
                                        &nbsp;Kembali
                                    </button>
                                </a>
                                {{-- <button type="submit" class="btn btn-info float-right">Submit</button> --}}
                            </div>
                            <!-- /.card-footer -->
                        {{-- </form> --}}
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