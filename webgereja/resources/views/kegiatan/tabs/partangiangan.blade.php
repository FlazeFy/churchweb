<br>
<h4>Jadwal Partangiangan Sektor</h4>
<table class="table table-paginate" id="jadwalTable" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Sektor</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Keluarga</th>
            <th scope="col">Alamat</th>
        </tr>
    </thead>
    <tbody>
        @php($i = 1)
        @foreach($kegiatan as $kg)
            @if($kg->tipe_jadwal == "partangiangan")
                @php($props = json_decode($kg->tempat, true))
                <tr>
                    <td scope="row">
                        {{$i}}
                    </td>
                    <td>
                        {{$props['sektor']}}
                    </td>
                    <td>
                        {{date("Y-m-d H:i", strtotime($kg->waktu_mulai))}}
                        @if($kg->waktu_selesai != null)
                            - 
                            @if($kg->waktu_selesai == $kg->waktu_mulai)
                                {{date("H:i", strtotime($kg->waktu_selesai))}}
                            @else 
                                {{date("Y-m-d H:i", strtotime($kg->waktu_selesai))}}
                            @endif
                        @endif
                    </td>
                    <td>
                        {{$props['nama']}}
                    </td>
                    <td>
                        {{$props['alamat']}}
                    </td>
                </tr>
                @php($i++)
            @endif
        @endforeach
    </tbody>
</table>    

<br><br>
<div class="row">
    <div class="col-lg-4">
        <button type="button" class="btn btn-labeled btn-danger" >
        <span class="btn-label"><i class="fa fa-file"></i></span> Download File PDF</button>
    </div>
</div>