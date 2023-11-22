<br>
<div class="mb-2 d-inline-block" style="font-size:var(--textXMD);" id="filter-cat">
    <label for="filter_tipe" >Pilih Tipe</label>
    <form action="" method="POST">
        @csrf
        <select class="form-select" id="filter_tipe" name="filter_tipe" onchange="this.form.submit()"  aria-label="Floating label select example" required>
            <option value="All" selected>Semua</option>
            <option value="kor_pp_remaja">Jadwal Latihan Kor PP / Remaja</option>
            <option value="kor_sektor" selected>Jadwal Latihan Sektor</option>
            <option value="kor_ina_par_ari_kamis" selected>Jadwal Latihan Kor Ina Par Ari Kamis</option>
        </select>
    </form>
</div>
<table class="table table-paginate" id="jadwalTable" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tipe</th>
            <th scope="col">Tgl / Hari</th>
            <th scope="col">Sektor</th>
            <th scope="col">Jam</th>
            <th scope="col">Tempat</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">
                1
            </td>
            <td>
                Lorem
            </td>
            <td>
                Lorem
            </td>
            <td>
                Lorem
            </td>
            <td>
                Lorem
            </td>
            <td>
                Lorem
            </td>
        </tr>
    </tbody>
</table>    