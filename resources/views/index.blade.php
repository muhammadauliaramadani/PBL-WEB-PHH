@extends('layouts.landing.index')

@section('content')
<section id="hero" class="hero section">
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-item active">
        <img src="assets/img/slider-1.png" alt="">
        <div class="carousel-container"></div>
      </div><!-- End Carousel Item -->
      <div class="carousel-item">
        <img src="assets/img/slider-2.png" alt="">
        <div class="carousel-container"></div>
      </div><!-- End Carousel Item -->
      <div class="carousel-item">
        <img src="assets/img/slider-3.png" alt="">
        <div class="carousel-container"></div>
      </div><!-- End Carousel Item -->
      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
    <div class="featured container">
      <div class="row gy-4">
        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-shield-fill-check"></i></div>
            <h4><a href="{{ route('akreditasi') }}" class="stretched-link">Akreditasi</a></h4>
            <p>Pelajari lebih lanjut tentang pencapaian akreditasi Program Studi Pengolahan Hasil Hutan</p>
          </div>
        </div><!-- End Featured Item -->
        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-houses-fill"></i></div>
            <h4><a href="{{ route('lab.index') }}" class="stretched-link">Fasilitas</a></h4>
            <p>Pelajari lebih lanjut tentang fasilitas yang tersedia untuk mendukung kegiatan akademikmu</p>
          </div>
        </div><!-- End Featured Item -->
        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="featured-item position-relative">
            <div class="icon"><i class="bi bi-person-vcard-fill"></i></div>
            <h4><a href="{{ route('dosen') }}" class="stretched-link">Dosen</a></h4>
            <p>Pelajari lebih lanjut tentang dosen-dosen yang mengajar di Program Studi Pengolahan Hasil Hutan</p>
          </div>
        </div><!-- End Featured Item -->
      </div>
    </div>
</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="section about">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 gx-5">
      <!-- Output Lulusan Item -->
      <div class="col-12 col-lg-6 order-2 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <div class="container section-title" data-aos="fade-up">
          <h2 class="m-0">Prospek Karir</h2>
        </div>
        @if ($outputLulusans->isNotEmpty())
        @foreach ($outputLulusans as $item)
          <a href="{{ route('output-lulusan-detail', $item->id) }}" class="position-relative text-decoration-none text-black services section">  
              <div class="service-item position-relative d-flex flex-row text-decoration-none gap-3 mb-3 h-auto">
                  <div class="row m-0 p-0">
                      <div class="col-12 col-md-2 mb-3 mb-md-0 m-0 p-0">
                          <div class="img-container">
                              <img src="{{ Storage::url($item->image) }}" alt="">
                          </div>
                      </div>
                      <div class="col-12 col-sm-9 d-flex align-items-center text-start m-0 p-0 ps-0 ps-md-3">
                          <h3 class="title lh-sm m-0 p-0">{{ $item->title }}</h3>
                      </div>
                  </div>
              </div>
          </a>
        @endforeach
        @else
          <div class="col-6 order-2 mx-auto hero m-0" data-aos="fade-up" data-aos-delay="100">
            <div class="featured-item position-relative text-decoration-none m-0 p-3">
                <p class="text-center mx-auto m-0 p-0">Belum ada Output Lulusan yang tersedia.</p>
            </div>
          </div>
        @endif
      </div>
      <!-- End Output Lulusan Item -->
      <div class="col-12 col-lg-6 order-1 content">
        <div class="container section-title" data-aos="fade-up">
        <h3>Alasan Mengapa Masuk Prodi Pengolahan Hasil Hutan</h3>
        <div class="underline"></div>
        <ul>
          @foreach ($alasan as $item)
          <li></li>
          <li><i class="bi bi-patch-check-fill"></i><span>{{ $item->name }}</span></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</section><!-- /About Section -->

<!-- Berita Section -->
<section id="berita" class="berita-section services section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Berita Utama</h2>
  </div>
  <div class="container">
    <div class="row gy-4">
      @if ($beritas->isNotEmpty())
        @foreach ($beritas as $berita)
            <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('berita-detail', $berita->id) }}" class="position-relative text-decoration-none text-black">  
                    <div class="service-item position-relative text-decoration-none">
                        <div class="img-container mb-3">
                            <img src="{{ Storage::url($berita->image) }}" alt="">
                        </div>
                        <h5 class="title fw-bold lh-sm mb-2 m-0 p-0">{{ $berita->title }}</h5>
                        <p class="description m-0 p-0">
                          {!! \Illuminate\Support\Str::limit(strip_tags($berita->description, '<p><a><b><strong><i><u><em><br><ol><ul><li>'), 200) !!}
                        </p>
                    </div>
                </a>
            </div><!-- End Service Item -->
        @endforeach
      @else
        <div class="col-lg-4 col-md-6 mx-auto" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative text-decoration-none">
            <p class="text-center">Belum ada berita yang tersedia.</p>
          </div>
        </div>
      @endif
    </div>
  </div>
  <div class="d-flex justify-content-center w-100 mt-5">
    <a href="{{ route('berita-lainnya') }}" class="text-center">
      Berita Lainnya
      <i class="bi bi-arrow-right"></i>
    </a>
  </div>
</section><!-- /Berita Section -->

<!-- Maps Section -->
<section id="maps" class="section maps">
  <div class="container section-title" data-aos="fade-up">
    <h2>Location</h2>
  </div><!-- End Section Title -->
  <div class="container p-0" data-aos="fade-up" data-aos-delay="100">
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d481.82220502825834!2d117.12599491550068!3d-0.5360511459681861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df68100456af045%3A0xe3d1ce3aac5cb84e!2sPS.PHH%20pengolahan%20hasil%20hutan!5e1!3m2!1sid!2sid!4v1741875680658!5m2!1sid!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section><!-- /Maps Section -->


<div class="container section-title" data-aos="fade-up">
  <h2>Contact Us</h2>
  <div class="contact-form">
      @if(Session::has('message'))
          <div class="message">{{ Session::get('message') }}</div>
      @endif
      <form action="{{ route('contact.submit') }}" method="POST">
          @csrf
          <label for="name">Name:</label>
          <input type="text" name="name" required>
          <label for="email">Email:</label>
          <input type="email" name="email" required>
          <label for="message">Message:</label>
          <textarea name="message" required></textarea>
          <button type="submit">Send Message</button>
      </form>
  </div>
@endsection
