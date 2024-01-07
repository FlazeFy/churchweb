<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahTataIbadahModal"><i class="fa-solid fa-plus"></i> Tambah Tata Ibadah</button>
<div class="modal fade" id="tambahTataIbadahModal" tabindex="-1" aria-labelledby="tambahTataIbadahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/tambahtataibadah" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="tambahKeuanganModalLabel">Tambah Tata Ibadah</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nama" required>
                                <label for="floatingInput">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="tanggal" required>
                                <label for="floatingInput">Tanggal</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="time" class="form-control" id="floatingInput" name="jam" required>
                                <label for="floatingInput">Jam</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="file_url" required>
                                <label for="floatingInput">File Url</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>