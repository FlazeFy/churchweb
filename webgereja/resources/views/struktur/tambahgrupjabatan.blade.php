<button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#tambah{{ucfirst($type)}}Modal"><i class="fa-solid fa-plus"></i> Tambah {{ucfirst($type)}}</button>
<div class="modal fade" id="tambah{{ucfirst($type)}}Modal" tabindex="-1" aria-labelledby="tambah{{ucfirst($type)}}ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <h2 class="modal-title text-center mb-4" id="tambah{{ucfirst($type)}}ModalLabel">Tambah {{ucfirst($type)}}</h2>
                <div class="row">
                    <div class="col">
                        <h6>Daftar {{ucfirst($type)}}</h6>
                        <ul>
                        @php($i = 0)
                        @foreach($kamus as $km)
                            @if($km->kamus_type == $type)
                                <li>{{$km->kamus_nama}}</li>
                                @php($i++)
                            @endif
                        @endforeach
                        </ul>
                        @if($i == 0)
                            <p>- Tidak ada {{$type}} -</p>
                        @endif
                    </div>
                    <div class="col">
                        <form action="/struktur/tambahgrupjabatan/{{$type}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput" name="kamus_nama" required>
                                        <label for="floatingInput">Nama {{ucfirst($type)}}</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>