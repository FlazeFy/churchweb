@include('components.typographies.section_title', ['title'=>'Tata Ibadah'])
<br>
@if(session()->get("token_key") != null)
    @include('landing.tambahtataibadah')
@endif
<table class="table table-paginate" id="tataIbadahTable" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nama Ibadah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php($i = 0)
        @foreach($tataibadah as $ti)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{date("Y-m-d H:i", strtotime($ti->tanggal))}}</td>
                <td>{{$ti->nama}}</td>
                <td>
                    <a class="btn btn-primary" href="{{$ti->file_url}}"><i class="fa-solid fa-download"></i></a>
                    @if(session()->get("token_key") != null)
                        @if(date("Y-m-d H:i") < date("Y-m-d H:i", strtotime($ti->tanggal)))
                            <button class="btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#ubahTataIbadah{{$ti->id}}Modal"><i class="fa-solid fa-pen-to-square"></i></button>
                        @endif
                        @include('landing.ubahtataibadah')
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusTataIbadah{{$ti->id}}Modal"><i class="fa-solid fa-trash"></i></button>
                        @include('landing.hapus')
                    @endif
                </td>
            </tr>
            @php($i++)
        @endforeach
    </tbody>
</table>