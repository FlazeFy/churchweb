@include('components.typographies.section_title', ['title'=>'Tata Ibadah'])
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
                    <button class="btn btn-primary"><i class="fa-solid fa-download"></i></button>
                    @if(session()->get("token_key") != null)
                        <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    @endif
                </td>
            </tr>
            @php($i++)
        @endforeach
    </tbody>
</table>