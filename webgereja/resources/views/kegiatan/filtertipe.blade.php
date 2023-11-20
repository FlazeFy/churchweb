<div class="mb-2 d-inline-block" style="font-size:var(--textXMD);" id="filter-cat">
    <label for="filter_tipe" >Pilih Tipe</label>
    <form action="/kegiatan/filter_tipe" method="POST">
        @csrf
        <select class="form-select" id="filter_tipe" name="filter_tipe" onchange="this.form.submit()"  aria-label="Floating label select example" required>
            @php($i=0)
            @foreach($kamus as $km)
                @if($i == 0)
                    @if(session()->get("selected_tipe_kegiatan") == "All")
                        <option value="All" selected>Semua</option>
                    @else
                        <option value="All">Semua</option>
                    @endif
                @endif

                @if($km->kamus_slug == session()->get("selected_tipe_kegiatan"))
                    <option value="{{$km->kamus_slug}}" selected>{{$km->kamus_nama}}</option>
                @else 
                    <option value="{{$km->kamus_slug}}">{{$km->kamus_nama}}</option>
                @endif

                @php($i++)
            @endforeach
        </select>
    </form>
</div>
