<button class="btn btn-success mx-auto d-block mb-2" data-bs-toggle="modal" data-bs-target="#tambahBPHModal"><i class="fa-solid fa-plus"></i> Tambah BPH</button>
<div class="modal fade" id="tambahBPHModal" tabindex="-1" aria-labelledby="tambahBPHModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/badanpengurus/tambah" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="tambahBPHModalLabel">Tambah Badan Pengurus Harian</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="nama" required>
                                <label for="floatingInput">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="grup">
                                    @foreach($kamus as $km)
                                        @if($km->kamus_type == "grup")
                                            <option value="{{$km->kamus_nama}}">{{$km->kamus_nama}}</option>
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
                                            <option value="{{$km->kamus_nama}}">{{$km->kamus_nama}}</option>
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