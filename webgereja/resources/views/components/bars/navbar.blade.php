<nav class="navbar navbar-expand-lg fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="logo-GKPI.png" alt="" style="height: 50px"></a>
        <label class="navbar-brand" href="#" style="font-weight: bold"> <h3>GKPI Kota Tebing Tinggi</h3></label>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link mx-2 <?php if(session()->get('active_nav') == 'beranda'){ echo 'active'; }?>" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if(session()->get('active_nav') == 'kategori'){ echo 'active'; }?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'rancangan_program'){ echo 'active'; }?>" href="/rancangan">Rancangan Program</a></li>
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'renungan'){ echo 'active'; }?>" href="/renungan">Renungan</a></li>
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'kegiatan'){ echo 'active'; }?>" href="/kegiatan">Kegiatan</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if(session()->get('active_nav') == 'data_gereja'){ echo 'active'; }?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Data Gereja
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'jemaat'){ echo 'active'; }?>" href="/jemaat">Jemaat</a></li>
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'warta'){ echo 'active'; }?>" href="/warta">Warta Jemaat</a></li>
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'keuangan'){ echo 'active'; }?>" href="/keuangan">Keuangan</a></li>
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'statistik'){ echo 'active'; }?>" href="/statistik">Statistik Jemaat</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if(session()->get('active_nav') == 'tentang_gereja'){ echo 'active'; }?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tentang Gereja
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'sejarah'){ echo 'active'; }?>" href="/sejarah">Sejarah Gereja</a></li>
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'struktur'){ echo 'active'; }?>" href="/struktur">Struktur Organisasi </a></li>
                    <li><a class="dropdown-item <?php if(session()->get('active_subnav') == 'badan_pengurus'){ echo 'active'; }?>" href="/badanpengurus">Badan Pengurus Harian</a></li>
                </ul>
            </li>
            </ul>
            <button class="btn btn-danger me-3 ms-2" data-bs-toggle="modal" data-bs-target="#diakoniaModal">Diakonia</button>
            @if(session()->get("token_key") == null)
                <a class="btn btn-primary" href="/login">Masuk</a>
            @else
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#signOutModal">Keluar</button>
            @endif
        </div>
    </div>
</nav>
@include('components.modals.diakonia')
@include('components.modals.sign_out')