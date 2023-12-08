<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahJemaatModal"><i class="fa-solid fa-plus"></i> Tambah Jemaat</button>
<div class="modal fade" id="tambahJemaatModal" tabindex="-1" aria-labelledby="tambahJemaatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/jemaat/tambah" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="tambahJemaatModalLabel">Tambah Jemaat</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="name" class="form-control" id="floatingInput" name="nama" placeholder="ex : Jhon Doe" required>
                                <label for="floatingInput">Nama</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="jenis_kelamin" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="1" selected>Pria</option>
                                    <option value="0">Wanita</option>
                                </select>
                                <label for="floatingSelect">Jenis Kelamin</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="sektor">
                                    @php($i = 0)      
                                    @foreach($sektor as $sk)
                                        <option value="{{$sk->kamus_slug}}" <?php if($i == 0){ echo "selected";} ?> >{{$sk->kamus_nama}}</option>
                                        @php($i++)
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Sektor</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="phone" class="form-control" id="floatingInput" name="no_telp" placeholder="ex : 08123456789" required>
                                <label for="floatingInput">Telepon</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="address" class="form-control" id="floatingInput" name="alamat" placeholder="ex : Jl. Mawar" required>
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