<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-paper d-flex align-items-center">
                    <a href="mailto:contact@example.com">prodiphh@politanisamarinda.ac.id</a>
                </i>
            </div>
        </div>
    </div><!-- End Top Bar -->

    <div class="branding">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/img/LogoPHH.png') }}" alt="/">
                <h1 class="sitename">PHH<br></h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/">Beranda</a></li>
                    
                    <li class="dropdown">
                        <a href="#"><span>Tentang Kami</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ route('profil') }}">Profil Prodi</a></li>
                            <li><a href="{{ route('visimisi') }}">Visi & Misi</a></li>
                            <li><a href="{{ route('organisasi.strukturOrganisasi') }}">Struktur Organisasi</a></li>
                            <li><a href="{{ route('dosen') }}">Dosen & PLP</a></li>
                            <li><a href="{{ route('akreditasi') }}">Akreditasi</a></li>
                            <li class="dropdown">
                                <a href="{{ route('fasilitas.index') }}"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="{{ route('fasilitas.sifatkayuanalisaproduk') }}">Lab Sifat Kayu Analisa Produk</a></li>
                                    <li><a href="{{ route('fasilitas.keteknikan') }}">Lab Keteknikan</a></li>
                                    <li><a href="{{ route('fasilitas.rekayasakayu') }}">Lab Rekayasa Kayu</a></li>
                                    <li><a href="{{ route('fasilitas.hasil-hutan-non-kayu') }}">Lab Hasil Hutan Non Kayu</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('login') }}">Admin</a></li>
                        </ul>
                    </li>
<!-- 
                    <li class="dropdown">
                        <a href="#"><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Kalender Akademik</a></li>
                            <li><a href="#">Kurikulum</a></li>
                            <li><a href="#">Jadwal Kuliah</a></li>
                            <li><a href="#">Informasi Beasiswa</a></li>
                            <li><a href="{{ route('output-lulusan.index') }}">Output Lulusan</a></li>
                        </ul>
                    </li> -->

                    <li><a href="{{ route('berita-lainnya') }}">Berita</a></li>
                    <a href="{{ url('/#hubungi-kami') }}">Hubungi Kami</a>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </div>
</header>
