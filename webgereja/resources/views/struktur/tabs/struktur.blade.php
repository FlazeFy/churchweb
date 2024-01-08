<style>
    .text{
        font-weight: bold;
        background: var(--primaryColor);
        max-width: 100%;
        padding: 5px;
        margin-bottom: 10px;
        border-radius: 5%;
    }
</style>

<div>
    <div class="mx-auto" style="max-width:720px">
        <h3 class="text text-white d-flex justify-content-center">Ketua Seksi</h3>
        <table class="table text-start" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    @if(session()->get("token_key") != null)
                        <th scope="col">Aksi</th>
                    @endif
                </tr>
            </thead>
            <tbody>
            @foreach($struktur_organisasi as $s)
                <tr>
                    <td>{{$s->nama}}</td>
                    <td>{{$s->jabatan}}</td>
                    @if(session()->get("token_key") != null)
                        <td>
                            <button class="btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#ubahPengurusUtama{{$s->id}}Modal"><i class="fa-solid fa-pen-to-square"></i></button>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusPengurusUtama{{$s->id}}Modal"><i class="fa-solid fa-trash"></i></button>
                            @include('struktur.hapus')
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


<br><br><br>

<div class="row">
    <div class="col">
        <div class="mx-auto" style="max-width:100%">
            <h3 class="text text-white d-flex justify-content-center">KETUA BADAN PENGURUS HARIAN JEMAAT (BPHJ)</h3>
            <table class="table text-start" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Grup</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bph as $b)
                        <tr>
                            <td>{{$b->nama}}</td>
                            <td>{{$b->grup}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>