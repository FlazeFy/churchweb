<br>
<div class="row">
    <div class="col-lg-5">
        <img src="{{ asset('/assets/pp-remaja.png') }}" alt="" class="img img-fluid" width="400px">
    </div>
    <div class="col-lg-7 col-md-12 col-sm-12 text-center" >
        <h3>Info Panitia Natal!</h3>
        <p>
            Syalom! 
            Hai semua nya. ada kabar gembira buat kita semua! karena sebentar lagi mendekati natal, 
            maka kami mengajak Pemuda/ i dan remaja GKPI Kota Tebing Tinggi untuk hadir dalam menjadi bagian panitia natal. 
            mari memeriahkan natal kita dan mempererat persaudaraan untuk kita semua. 
        </p>
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-lg-5 col-md-12 col-sm-12">
        <div class="mx-auto" style="max-width:500px">
            <h3 class="text text-black d-flex justify-content-center">Jadwal PA</h3>
            <table class="table text-center" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal/Hari</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Tempat</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach($kegiatan as $kg)
                        @if($kg->tipe_jadwal == "pa")
                            @php($tempat = json_decode($kg->tempat, true))
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{ date("D, Y-m-d", strtotime($kg->waktu_mulai)) }}</td>
                                <td>{{ date("H : i", strtotime($kg->waktu_mulai)) }}</td>
                                <td>{{$tempat['nama']}}</td>
                            </tr>
                            @php($i++)
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="mx-auto" style="max-width:800px">
            <h3 class="text d-flex justify-content-center">Kunjungan PP/ Remaja - Ke Gereja lainnya </h3>
            <table class="table text-center" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal/Hari</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @php($i = 1)
                    @foreach($kegiatan as $kg)
                        @if($kg->tipe_jadwal == "pp/remaja")
                            @php($tempat = json_decode($kg->tempat, true))
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{ date("Y-m-d", strtotime($kg->waktu_mulai)) }}
                                    @if($kg->waktu_selesai != null)
                                        @if($kg->waktu_mulai != $kg->waktu_selesai)
                                            - {{ date("Y-m-d", strtotime($kg->waktu_selesai)) }}
                                        @endif
                                    @endif
                                </td>
                                <td>{{$tempat['nama']}}</td>
                                <td>{{$kg->keterangan}}</td>
                            </tr>
                            @php($i++)
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>