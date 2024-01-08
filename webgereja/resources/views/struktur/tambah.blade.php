<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahPengurusUtamaModal"><i class="fa-solid fa-plus"></i> Tambah Pengurus Utama</button>
<div class="modal fade" id="tambahPengurusUtamaModal" tabindex="-1" aria-labelledby="tambahPengurusUtamaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/struktur/tambahpengurusutama" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="tambahPengurusUtamaModalLabel">Tambah Pengurus Utama</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInput" name="nama" placeholder="ex : Jhon Doe" required>
                                <label for="floatingInput">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInput" name="jabatan" placeholder="Pendeta" required>
                                <label for="floatingInput">Jabatan</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInput" name="img_url" placeholder="">
                                <label for="floatingInput">Image URL</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>