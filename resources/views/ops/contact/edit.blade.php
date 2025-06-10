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
                        @foreach ($contactGet as $item)
                                
                            
                        {{-- <form class="form-horizontal" action="/ops/contact/update/{{ $item->contact_uuid }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') --}}
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="contact_nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="contact_nama" class="form-control @error('contact_nama') is-invalid @enderror" id="contact_nama" placeholder="Nama PIC" value="{{ $item->contact_nama }}" readonly>
                                        @error('contact_nama')<span id="contact_nama" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_subjek" class="col-sm-2 col-form-label">Layanan</label>
                                    <div class="col-sm-10">
                                        <select class="form-control select2 @error('contact_subjek') is-invalid @enderror" id="contact_subjek" name="contact_subjek" @readonly(true)>
                                        <option value="{{ $item->layanan_kode }}">*{{ $item->layanan_nama }}</option>
                                    </select>
                                    @error('contact_subjek')<span id="contact_subjek" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_isi" class="col-sm-2 col-form-label">Isi</label>
                                    <div class="col-sm-10">
                                        <textarea name="contact_isi" id="summernote" class="form-control" rows="3" readonly>{!! $item->contact_isi !!}</textarea>
                                        @error('contact_isi')<span id="contact_isi" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="contact_email" class="form-control @error('contact_email') is-invalid @enderror" id="contact_email" placeholder="Email PIC" value="{{ $item->contact_email }}" readonly>
                                        @error('contact_email')<span id="contact_email" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact_hp" class="col-sm-2 col-form-label">Telephone</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="contact_hp" class="form-control @error('contact_hp') is-invalid @enderror" id="contact_hp" placeholder="Telephone PIC" value="{{ $item->contact_hp }}" readonly>
                                        @error('contact_hp')<span id="contact_hp" class="error invalid-feedback">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <form class="form-horizontal" target="_blank" action="/ops/contact/chats/{{ $item->contact_uuid }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="contact_hp_chats" class="col-sm-2 col-form-label">WhatsApp</label>
                                        <div class="col-sm-4">
                                            <code>*Ubah ke 62xxxxxxx</code>
                                            <input type="text" name="contact_hp_chats" class="form-control @error('contact_hp_chats') is-invalid @enderror" id="contact_hp_chats" placeholder="Telephone PIC" value="{{ $item->contact_hp }}">
                                            @error('contact_hp_chats')<span id="contact_hp_chats" class="error invalid-feedback">{{ $message }}</span>@enderror
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
                                <a href="/ops/contact">
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