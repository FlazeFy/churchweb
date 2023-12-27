<button class="btn btn-success w-100 h-100" data-bs-toggle="modal" data-bs-target="#tambahKeuanganModal"><i class="fa-solid fa-plus"></i> Tambah Jemaat</button>
<div class="modal fade" id="tambahKeuanganModal" tabindex="-1" aria-labelledby="tambahJemaatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <form action="/keuangan/tambah" method="POST">
                    @csrf
                    <h2 class="modal-title text-center mb-4" id="tambahKeuanganModalLabel">Tambah Keuangan</h2>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="konteks" required>
                                <label for="floatingInput">Konteks</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="kategori">
                                    @php($i = 0)      
                                    @foreach($kategori as $kt)
                                        <option value="{{$kt->kamus_slug}}">{{$kt->kamus_nama}}</option>
                                        @php($i++)
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Kategori</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="sektor">
                                    @php($i = 0)      
                                    @foreach($sektor as $sk)
                                        <option value="{{$sk->kamus_slug}}">{{$sk->kamus_nama}}</option>
                                        @php($i++)
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Sektor</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" name="tipe" id="floatingSelect" aria-label="Floating label select example">
                                    <option value="pemasukan">Pemasukan</option>
                                    <option value="pengeluaran">Pengeluaran</option>
                                </select>
                                <label for="floatingSelect">Tipe Keuangan</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="floatingInput" name="nominal" required>
                                <label for="floatingInput">Nominal</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="tanggal_terima" required>
                                <label for="floatingInput">Tanggal Terima</label>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="masuk_pada">
                                    @php($i = 0)      
                                    @foreach($masuk_pada as $mp)
                                        <option value="{{$mp->kamus_slug}}">{{$mp->kamus_nama}}</option>
                                        @php($i++)
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Masuk Pada</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>