<div class="modal fade" id="ubahJemaat{{$jm->id}}Modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/jemaat/ubah/{{$jm->id}}" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4">Edit Jemaat</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInput" name="nama" value="{{$jm->nama}}" required>
                                <label for="floatingInput">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="jenis_kelamin" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="1" <?php if($jm->jenis_kelamin == 1){ echo "selected"; }?>>Pria</option>
                                    <option value="0" <?php if($jm->jenis_kelamin == 0){ echo "selected"; }?>>Wanita</option>
                                </select>
                                <label for="floatingSelect">Jenis Kelamin</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="sektor">
                                    @php($i = 0)      
                                    @foreach($sektor as $sk)
                                        <option value="{{$sk->kamus_slug}}" <?php if($jm->sektor == $sk->kamus_slug){ echo "selected";} ?> >{{$sk->kamus_nama}}</option>
                                        @php($i++)
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Sektor</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="phone" class="form-control" id="floatingInput" name="no_telp" value="{{$jm->no_telp}}" required>
                                <label for="floatingInput">Telepon</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="address" class="form-control" id="floatingInput" name="alamat" value="{{$jm->alamat}}" required>
                                <label for="floatingInput">Alamat</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>