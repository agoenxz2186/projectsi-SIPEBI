@extends('template.main')

@section('content')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Sejarah Desa</h2>
          <ol>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li>Sejarah Desa</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/sejarah.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p class="fst-italic">Desa Sungai Ambangah adalah salah satu desa yang terletak di Kecamatan Sungai Raya Kabupaten Kubu Raya, pada tahun 1950 dengan luas wilayah 15.650 Ha. Kepala Desa Sungai Ambangah yang pertama adalah bapak Abu Bakar. Dilanjut oleh Yusuf Abu Bakar pada tahun 1978. Kemudian pada tahun 2000 an dilanjut oleh Ahmadi Yusuf Abu Bakar. Pada tahun 2003 terjadi PJ yang di jabati oleh Sopian Hanipan hingga tahun 2017. Pada Tahun 2018 hingga sekarang kepala desa di lanjuti oleh bapak Samsuri.</p>
              <p class="fst-italic">Desa yang awal mulanya hanya di tempati oleh beberapa saudara  dan berkembang menjadi pesat oleh perantau yang berdatangan untuk berkebun dan menetap di desa ini hingga menjadi suatu desa yang memiliki penduduk yang terbilang padat. </p>
              <p class="fst-italic">Desa yang dikenal dengan sebutan Kumpai Besar ini memiliki warga yang multikultural dalam artian beragam penganut agama yang berbeda. Hidup berdampingan menerapkan pola hidup yang harmonis serta bertoleransi santu sama lain menjadikan kelurahan Desa Sungai Ambangah semakin maju dan saat ini menjadi desa Mandiri.</p>          
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
 

    <!-- ======= Tetstimonials Section ======= -->

  </main><!-- End #main -->

@endsection