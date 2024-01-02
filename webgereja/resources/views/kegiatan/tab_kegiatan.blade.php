<style>
    .btn-tab-holder {
        margin-bottom: var(--spaceLG);
        border: none;
        background: transparent;
        margin-right: var(--spaceLG);
    }
    .btn-tab-holder .btn-tab-num {
        background: var(--shadowColor);
        padding: var(--spaceXXSM) var(--spaceSM);
        border-radius: var(--roundedMini);
        margin-right: var(--spaceXXSM);
    }
</style>

<!-- PHP Helpers -->
<?php
    use App\Helpers\Generator;
?>  

<div class="d-block mx-auto text-center">
    @include('components.typographies.section_title', ['title' => 'kegiatan', 'subtitle' => 'Informasi tentang artikel gereja yang berupa kegiatan gereja ataupun pelayanan yang diselenggarakan oleh gereja'])
    <br>

    @php($i = 0)
    @foreach($kamus as $km)
        <button class="btn-tab-holder" type="button" data-bs-toggle="collapse" data-bs-target="#{{$km->kamus_slug}}" 
            aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><span class="btn-tab-num">{{$i+1}}</span> {{$km->kamus_nama}}</button>
        @php($i++)
    @endforeach
</div>
<div class="accordion py-3" id="accordionJadwal">
    @php($j = 0)
    @foreach($kamus as $km)
        <div class="collapse <?php if($j == 0){ echo "show"; } ?>" id="{{$km->kamus_slug}}" data-bs-parent="#accordionJadwal">
            @php($clean_nama_jadwal = Generator::getCleanTitle($km->kamus_nama)) 
            @include('components.typographies.section_title', ['title'=> $clean_nama_jadwal])

            @if($km->kamus_slug == 'koor')
                @include('kegiatan.tabs.koor')
            @endif

            @if($km->kamus_slug == 'partangiangan')
                @include('kegiatan.tabs.partangiangan')
            @endif

            @if($km->kamus_slug == 'baptisan')
                @include('kegiatan.tabs.baptisan')
            @endif

            @if($km->kamus_slug == 'katekisasi')
                @include('kegiatan.tabs.katekisasi')
            @endif

            @if($km->kamus_slug == 'pp_remaja')
                @include('kegiatan.tabs.pp-remaja')
            @endif
        </div>
        @php($j++)
    @endforeach
</div>