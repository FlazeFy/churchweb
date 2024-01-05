<?php 
    use App\Helpers\Converter;
?>

<table class="table table-paginate text-start" id="keuanganTable" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tipe</th>
            <th scope="col">Kategori</th>
            <th scope="col">Sektor / Konteks</th>
            <th scope="col">Nominal</th>
            <th scope="col">Tanggal Terima</th>
            <th scope="col">Masuk Pada</th>
            <th scope="col">Aksi</th>
            <th scope="col">Properti</th>
        </tr>
    </thead>
    <tbody>
        @php($i = 0)
        @php($pemasukan = 0)
        @php($pengeluaran = 0)

        @foreach($keuangan as $ku)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{Converter::getCleanKamus($ku->tipe)}}</td>
                <td>{{Converter::getCleanKamus($ku->kategori)}}</td>
                <td>
                    <b>Sektor : {{Converter::getCleanKamus($ku->sektor)}}</b><br>
                    {{$ku->konteks}}
                </td>
                <td>
                    Rp. {{number_format($ku->nominal, 0, ',', '.')}}
                </td>
                <td>{{date("Y-m-d", strtotime($ku->tanggal_terima))}}</td>
                <td>{{Converter::getCleanKamus($ku->masuk_pada)}}</td>
                <td>
                    <button class="btn btn-warning mb-1" data-bs-toggle="modal" data-bs-target="#ubahKeuangan{{$ku->id}}Modal"><i class="fa-solid fa-pen-to-square"></i></button>
                    @include('keuangan.ubah')
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusKeuangan{{$ku->id}}Modal"><i class="fa-solid fa-trash"></i></button>
                    @include('keuangan.hapus')
                </td>
                <td>
                    <b>Tanggal ditambahkan :</b><br>
                    {{date("Y-m-d H:i", strtotime($ku->created_at))}}

                    @if($ku->updated_at != null)
                        <br><b>Tanggal diubah:</b><br>
                        {{date("Y-m-d H:i", strtotime($ku->updated_at))}}
                    @endif
                </td>
            </tr>

            @if($ku->tipe == "pemasukan")
                @php($pemasukan += $ku->nominal)
            @elseif($ku->tipe == "pengeluaran")
                @php($pengeluaran += $ku->nominal)
            @endif

            @php($i++)
        @endforeach
    </tbody>
</table>
<hr>
@include('keuangan.summary')