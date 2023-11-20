@php($title_kegiatan = "")
@if(session()->get("selected_tipe_kegiatan") == "All")
    @php($title_kegiatan = "Semua Jadwal")
@else 
    @php($title_kegiatan = session()->get("selected_tipe_kegiatan"))
@endif

<!-- PHP Helpers -->
<?php
    use App\Helpers\Generator;
?>  

@php($clean_title = Generator::getCleanTitle($title_kegiatan)) 

@include('components.typographies.section_title', ['title'=> $clean_title])
<table class="table table-paginate" id="jadwalTable" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tipe</th>
            <th scope="col">Tgl / Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Tempat</th>
            <th scope="col">Keterangan</th>
            <th scope="col" style="min-width:var(--tcolMinSM);">Kehadiran</th>
        </tr>
    </thead>
    <tbody>
        @php($i = 0)
        @foreach($kegiatan as $kg)
            @php($i++)
            <tr>
                <td scope="row">
                    {{$i}}
                </td>
                <td>
                    @php($clean_tipe_jadwal = Generator::getCleanTitle($kg->tipe_jadwal)) 
                    {{$clean_tipe_jadwal}}
                </td>
                <td>
                    {{date("Y-m-d, D", strtotime($kg->tgl_jadwal))}}
                </td>
                <td>
                    {{date("H:i", strtotime($kg->waktu_mulai))}} - 
                    @if($kg->waktu_selesai == null)
                        Selesai
                    @else
                        {{date("H:i", strtotime($kg->waktu_selesai))}}
                    @endif
                </td>
                <td>
                    @php($tp = json_decode($kg->tempat))
                    {{$tp->nama}} 
                    ({{$tp->sektor}} - {{$tp->alamat}})
                </td>
                <td>{{$kg->keterangan}}</td>
                <td>
                    @php($hs = json_decode($kg->hasil))
                    @if(isset($hs->laki_laki))
                        Laki - Laki : <br> 
                        <b>
                        {{$hs->laki_laki}}
                            </b> 
                            orang
                        <br> 
                    @endif
                    @if(isset($hs->perempuan))
                        Perempuan : <br> 
                        <b>
                        {{$hs->perempuan}} 
                            </b> 
                            orang
                        <br>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>    