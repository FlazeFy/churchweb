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
        <table class="table text-center" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($struktur_organisasi as $s)
                    <tr>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->jabatan}}</td>
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
            <h3 class="text text-white d-flex justify-content-center">BADAN PENGURUS HARIAN JEMAAT (BPHJ)</h3>
            <table class="table text-center" cellspacing="0">
                <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($struktur_organisasi as $s)
                    <tr>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->jabatan}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
</div>