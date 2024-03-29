<br>
<div class="row">
    <h2>Pelaksanaan Baptisan</h2>
    <div class="col-lg-5">
        <img src="{{ asset('/assets/baptisan.png') }}" alt="" class="img img-fluid" width="400px">
    </div>
    <div class="col-lg-7" style="text-align: justify">
        <div class="row">
            <p>
                Baptisan kudus dilaksanakan pada hari <b>Minggu tanggal 26 Desember 2023 </b> (Natal II), pukul 10.30 WIB, 
                bagi orangtua yang anakya akan di baptis bisa melapor kepada penatua di sektor masing-masing. 
                Bimbingan kepada orang tua yang anaknya akan dibaptis dilaksanakan pada hari Kamis tanggal 23 Desember 2023, masuk pukul 16.00 WIB.
            </p>
        </div>
        <div class="row">
            <h5>DATA ANAK YANG AKAN DIBAPTIS 2023</h5>
            <div class="col">
                <table class="table text-center" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Sektor</th>
                            <th scope="col">Orang Tua</th>
                            <th scope="col">Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($peserta as $ps)
                            @if($ps->tipe_peserta == "baptis")
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ucwords($ps->nama)}}</td>
                                    <td>{{ucwords($ps->sektor)}}</td>
                                    <td>{{ucwords($ps->ortu)}}</td>
                                    <td>
                                        @if($ps->jenis_kelamin == 1)
                                            Laki-Laki
                                        @else 
                                            Perempuan
                                        @endif
                                    </td>
                                </tr>
                                @php($i++)
                            @endif
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{{-- kalau button download dibawah --}}
{{-- <div class="row">
    <h5>Data Yang Menerima Data Baptis 2023</h5>
            <div class="col-lg-4">
                <button type="button" class="btn btn-labeled btn-danger" >
                <span class="btn-label"><i class="fa fa-file"></i></span> Download File PDF</button>
            </div>
</div> --}}

