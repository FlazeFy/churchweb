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
            <th scope="col">#</th>
            <th scope="col">Tipe</th>
            <th scope="col">Tgl / Hari</th>
            <th scope="col">Jam</th>
            <th scope="col">Tempat</th>
            <th scope="col">Keterangan</th>
            <th scope="col" style="min-width:var(--tcolMinSM);">Kehadiran</th>
        </tr>
    </thead>
    <tbody>
        @for($i = 0; $i < 100; $i++)
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>Sekolah Minggu</td>
                <td>5 November 2023, Minggu</td>
                <td>16:00 - Selesai</td>
                <td>P.Sitanggang / Br.Simanjuntak ( Sektor Kolose - Jl . Pepaya no 12)</td>
                <td>Kunjungan yang dilakukan berlangsung selama 3 hari. PP / Remaja melakukan kunjungan dengan PP / Remaja Gereja GKPI Siantar Kota</td>
                <td>Laki- laki : <br> <b>20 orang</b> <br> Perempuan : <br> <b>15 orang</b></td>
            </tr>
        @endfor
    </tbody>
</table>    