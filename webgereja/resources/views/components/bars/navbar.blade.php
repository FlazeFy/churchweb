<nav class="navbar navbar-expand-lg fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="logo-GKPI.png" alt="" style="height: 50px"></a>
        <label class="navbar-brand" href="#" style="font-weight: bold"> <h3>GKPI Kota Tebing Tinggi</h3></label>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link mx-2 active" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kategori
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/rancangan">Rancangan Program</a></li>
                    <li><a class="dropdown-item" href="/renungan">Renungan</a></li>
                    <li><a class="dropdown-item" href="/kegiatan">Kegiatan</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Data Gereja
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/jemaat">Jemaat</a></li>
                    <li><a class="dropdown-item" href="/warta">Warta Jemaat</a></li>
                    <li><a class="dropdown-item" href="/keuangan">Keuangan</a></li>
                    <li><a class="dropdown-item" href="/statistik">Statistik Jemaat</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tentang Gereja
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/sejarah">Sejarah Gereja</a></li>
                    <li><a class="dropdown-item" href="/struktur">Struktur Organisasi </a></li>
                    <li><a class="dropdown-item" href="/badanpengurus">Badan Pengurus Harian</a></li>
                </ul>
            </li>
            </ul>
            <button class="btn btn-danger me-3 ms-2" data-bs-toggle="modal" data-bs-target="#diakoniaModal">Diakonia</button>
            <a class="btn btn-primary" href="/login">Masuk</a>
        </div>
    </div>
</nav>
@include('components.modals.diakonia')