<button class="btn btn-success w-100 h-100" data-bs-toggle="modal" data-bs-target="#tambahGrupModal"><i class="fa-solid fa-plus"></i> Tambah Grup</button>
<div class="modal fade" id="tambahGrupModal" tabindex="-1" aria-labelledby="tambahGrupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/struktur/tambahgrup" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="tambahGrupModalLabel">Tambah Grup</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="kamus_nama" required>
                                <label for="floatingInput">Nama Grup</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>