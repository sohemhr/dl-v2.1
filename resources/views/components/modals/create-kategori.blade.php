<!-- Modal Create Kategori -->
<div class="modal fade" id="modal-create-kategori" tabindex="-1" aria-labelledby="modalCreateKategoriLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCreateKategoriLabel">Tambah Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/admstr/kategori/store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="kategori_nama" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" required>
          </div>
          <div class="mb-3">
            <label for="kategori_warna" class="form-label">Warna</label>
            <input type="text" class="form-control" id="kategori_warna" name="kategori_warna" required>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
