<table class="table table-paginate text-start" id="jemaatTable" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Sektor</th>
            <th scope="col">Info</th>
            <th scope="col">Aksi</th>
            <th scope="col">Properti</th>
        </tr>
    </thead>
    <tbody>
        @php($i = 0)
        @foreach($jemaat as $jm)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$jm->nama}}</td>
                <td>
                    @if($jm->jenis_kelamin == 1)
                        Pria
                    @else 
                        Wanita
                    @endif
                </td>
                <td>{{ucfirst($jm->sektor)}}</td>
                <td>
                    <b>No Telepon :</b><br>
                    {{$jm->no_telp}}<br>
                    <b>Alamat :</b><br>
                    {{$jm->alamat}}
                </td>
                <td>
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ubahJemaat{{$jm->id}}Modal"><i class="fa-solid fa-pen-to-square"></i></button>
                    @include('jemaat.ubah')
                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                </td>
                <td>
                    <b>Tanggal ditambahkan :</b><br>
                    {{date("Y-m-d H:i", strtotime($jm->created_at))}}

                    @if($jm->updated_at != null)
                        <br><b>Tanggal diubah:</b><br>
                        {{date("Y-m-d H:i", strtotime($jm->updated_at))}}
                    @endif
                </td>
            </tr>
            @php($i++)
        @endforeach
    </tbody>
</table>