<div class="modal fade" id="ubahBph{{$b->id}}Modal" tabindex="-1" aria-labelledby="ubahBPHModalLabel{{$b->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/badanpengurus/ubah/{{$b->id}}" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="ubahBPHModalLabel{{$b->id}}">Edit Badan Pengurus Harian</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nama" value="{{$b->nama}}" required>
                                <label for="floatingInput">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="grup">
                                    @foreach($kamus as $km)
                                        @if($km->kamus_type == "grup")
                                            <option value="{{$km->kamus_nama}}" <?php if($b->grup == $km->kamus_nama) { echo " selected "; } ?>>{{$km->kamus_nama}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Grup</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="jabatan">
                                    @foreach($kamus as $km)
                                        @if($km->kamus_type == "jabatan")
                                            <option value="{{$km->kamus_nama}}" <?php if($b->jabatan == $km->kamus_nama) { echo " selected "; } ?>>{{$km->kamus_nama}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Jabatan</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>