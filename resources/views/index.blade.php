@extends('template.main')

@section('content')

<section id="hero" class="d-flex justify-cntent-center align-items-center">
  <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Desa Ambangah</span></h2>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="carousel-container">
        <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di <span>Desa Ambangah</span></h2>
      </div>
    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section>
<section class="services">
  <div class="container">
    @foreach ($admin as $item)

    <div class="row">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="icon-box icon-box-cyan">
          <div class="icon"><i class="bx bx-male"></i></div>
          <h4 class="title"><a href="">Laki-Laki</a></h4>
          <span data-purecounter-start="0" data-purecounter-end="{{$item->laki_laki}}" data-purecounter-duration="1" class="purecounter"></span>
          <p class="description">Jiwa</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box icon-box-pink">
          <div class="icon"><i class="bx bx-female"></i></div>
          <h4 class="title"><a href="">Perempuan</a></h4>
          <span data-purecounter-start="0" data-purecounter-end="{{$item->perempuan}}" data-purecounter-duration="1" class="purecounter"></span>
          <p class="description">Jiwa</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-green">
          <div class="icon"><i class="bx bx-child"></i></div>
          <h4 class="title"><a href="">Balita</a></h4>
          <span data-purecounter-start="0" data-purecounter-end="{{$item->balita}}" data-purecounter-duration="1" class="purecounter"></span>
          <p class="description">Jiwa</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-blue">
          <div class="icon"><i class="bx bx-calculator"></i></div>
          <h4 class="title"><a href="">Total</a></h4>
          <span data-purecounter-start="0" data-purecounter-end="{{ $item->laki_laki + $item->perempuan + $item->balita }}" data-purecounter-duration="1" class="purecounter"></span>
          <p class="description">Jiwa</p>
        </div>
      </div>

   
@endforeach
  </div>
</section><!-- End Services Section -->
<!-- End Hero -->
<main id="main">

  <!-- ======= Services Section ======= -->
  <!-- ======= Why Us Section ======= -->
  <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 video-box">
          <img src="assets/img/ambangah.jpg" class="img-fluid" alt="">
          <a href="https://www.youtube.com/watch?v=yTXkU0DrcSU&t=16s&pp=ygUUZGVzYSBzdW5nYWkgYW1iYW5nYWg%3D" target="_blank" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

          <div class="icon-box">
            <div class="icon"><i class="bx bx-home"></i></div>
            <h4 class="title"><a href="">Desa Sungai Ambangah</a></h4>
            <p class="description">Desa Sungai Ambangah adalah salah satu desa yang terletak di Kecamatan Sungai Raya Kabupaten Kubu Raya, pada tahun 1950 dengan luas wilayah 15.650 Ha. Kepala Desa Sungai Ambangah yang pertama adalah bapak Abu Bakar. Dilanjut oleh Yusuf Abu Bakar pada tahun 1978. Kemudian pada tahun 2000 an dilanjut oleh Ahmadi Yusuf Abu Bakar. Pada tahun 2003 terjadi PJ yang di jabati oleh Sopian Hanipan hingga tahun 2017. Pada Tahun 2018 hingga sekarang kepala desa di lanjuti oleh bapak Samsuri.</p>
          </div>

        

        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section class="features">
    <div class="container">

      <div class="section-title">
        <h2>Berita</h2>
      </div>

      @php $counter = 0 @endphp
      @foreach ($berita as $item)
          @php $counter++ @endphp
          <div class="row" data-aos="fade-up">
              <div class="col-md-5 @if($counter % 2 == 0) order-1 order-md-2 @endif">
                  <img src="{{ asset('storage/berita/' . $item->foto) }}" style="width: 500px; height: 350px;" class="img-fluid" alt="">
              </div>
              <div class="col-md-7 pt-4 @if($counter % 2 == 0) order-2 order-md-1 @endif">
                  <h3>{{$item->judul}}</h3>
                  <p class="fst-italic">
                    {{ substr($item->isi, 0, 200) }} {{-- Memotong teks hingga 200 karakter --}}
                    @if (strlen($item->isi) > 200) {{-- Menampilkan tombol "Baca Selengkapnya" hanya jika teks dipotong --}}
                    <div class="read-more">
                        <a href="{{ route('berita.show', $item->id) }}">Baca Selengkapnya</a>
                      </div>
                    @endif
                  </p>
              </div>
          </div>
      @endforeach
      
     

    


    </div>
  </section><!-- End Features Section -->

</main><!-- End #main -->

@endsection