<header id="header" class="header sticky-top" >

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope-paper d-flex align-items-center"><a href="mailto:contact@example.com">prodiphh@politanisamarinda.ac.id</a></i>
          <i class="bi bi-telephone-fill d-flex align-items-center ms-4"><span>(0541) 260421, 260680</span></i>
        </div>
        {{-- <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div> --}}
      </div>
    </div><!-- End Top Bar -->
    <div class="branding">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="/" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="{{ asset('assets/img/LogoPHH.png') }}" alt="/">
          <h1 class="sitename">PHH<br></h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('profil') }}">Profil Prodi</a></li>
                <li><a href="{{ route('visimisi') }}">Visi & Misi</a></li>
                <li><a href="{{ route('organisasi.strukturOrganisasi') }}">Struktur Organisasi</a></li>
                <li><a href="{{ route('dosen') }}">Dosen & PLP</a></li>
                <li><a href="{{ route('login') }}">Admin</a></li>
                <li><a href="{{ route('akreditasi') }}">Akreditasi</a></li>
                <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('lab.sifatkayuanalisaproduk') }}">Lab Sifat Kayu Analisa Produk</a></li>
                    <li><a href="{{ route('lab.keteknikan') }}">Lab Keteknikan</a></li>
                    <li><a href="{{ route('lab.rekayasakayu') }}">Lab Rekayasa Kayu</a></li>
                    <li><a href="{{ route('lab.hasil-hutan-non-kayu') }}">Lab Hasil Hutan Non Kayu</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Akademik</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Kalender Akademik</a></li>
                <li><a href="#">Kurikulum</a></li>
                <li><a href="#">Jadwal Kuliah</a></li>
                <li><a href="#">Informasi Beasiswa</a></li>
                <li><a href="{{ route('output-lulusan.index') }}">Output Lulusan</a></li>
              </ul>
              <!-- <li class="dropdown"><a href="#"><span>Prestasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">-</a></li>
                  <li><a href="#">-</a></li>
                  <li><a href="#">-</a></li>
                </ul> -->
            <li><a href="{{ route('berita-lainnya') }}">Berita</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list">
            </i>
          </nav>

      </div>

    </div>

  </header>
