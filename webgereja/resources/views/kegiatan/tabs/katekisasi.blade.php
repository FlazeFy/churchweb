<br>
<div class="row">
    <h2>Pelaksanaan Katekisasi</h2>
    <div class="col-lg-4">
        <img src="{{ asset('/assets/katekisasi.png') }}" alt="" class="img img-fluid" width="400px">
    </div>
    <div class="col-lg-8" style="text-align: justify">
        <div class="row">
            <p>
                Pembelajaran sidi untuk tahun 2024 akan segera di mulai, diharapkan kepada anak-anak jemaat yang mau belajar sidi supaya melapor ke penatua di sektor masing-masing, silahkan melengkapi berkas untuk melakukan pendaftaran. Untuk mahasiswa yang ingin ikut belajar sidi, supaya mendaftar ke kantor Gereja dengan membawa surat pengantar dari gereja asal dan foto copy akte baptis.
            </p>
        </div>
        <div class="row">
            <h5>Data Yang Mengikuti Katekisasi 2023/2024</h5>
            <div class="col">
                <table class="table text-center" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Sektor</th>
                            <th scope="col">Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @foreach($peserta as $ps)
                            @if($ps->tipe_peserta == "katekisasi")
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{ucwords($ps->nama)}}</td>
                                    <td>{{ucwords($ps->sektor)}}</td>
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