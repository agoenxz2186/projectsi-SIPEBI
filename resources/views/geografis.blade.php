@extends('template.main')

@section('content')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Geografis Desa</h2>
          <ol>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li>Geografis Desa</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <section class="map mt-2">
              <div class="container-fluid p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31918.450034515885!2d109.4445174!3d-0.1409105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d51df581f1b45%3A0xeb21469c42f3be6e!2sSungai%20Ambangah%2C%20Kec.%20Sungai%20Raya%2C%20Kabupaten%20Kubu%20Raya%2C%20Kalimantan%20Barat!5e0!3m2!1sid!2sid!4v1713945920817!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </section><!-- End Map Section -->
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-12">
            <h3>Informasi Geografis Desa</h3>
            <p>
              Desa Sungai Ambangah merupakan Desa yang berada di wilayah Kecamatan Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat. Desa ini terdiri dari 5 (lima) Dusun, yaitu:
            </p>
           <p class="sejajar">
            Dusun Mekar Sari 	: <span>2 RW dan 7 RT </span><br>
            Dusun Kampung Baru 	: <span>1 RW dan 5 RT</span> <br>
            Dusun Karya Sari  	: <span>2 RW dan 9 RT </span> <br>
            Dusun Karya Desa 	: <span>2 RW dan 8 RT</span> <br>
            Dusun Kumpai 	    : <span>1 RW dan 5 RT</span> <br>
           </p>
            <p class="sejajar">
              Jumlah Aparatur Desa: <span>11 orang</span><br>
              Kepala Desa: <span>1 orang</span><br>
              Perangkat Desa: <span>5 orang</span><br>
              Kepala Dusun: <span>5 orang</span><br>
              RW: <span>8 orang</span><br>
              RT: <span>34 orang</span><br>
              BPD: <span>11 orang</span><br>
              LPMD: <span>5 orang</span><br>
              Luas Wilayah: <span>16.560 Ha</span><br>
              Batas Desa:<br>
              - Sebelah Timur Berbatasan dengan Desa Tebang Kacang<br>
              - Sebelah Selatan Berbatasan dengan Desa Kuala Dua<br>
              - Sebelah Barat Berbatasan dengan Desa Arang Limbung<br>
              - Sebelah Utara Berbatasan dengan Desa Madu Sari<br>
              Jumlah Penduduk: <span>5.541</span><br>
              Jumlah KK: <span>1.591</span><br>
              Jumlah Gedung Sekolah: <span>12 buah</span><br>
              - PAUD: <span>3 buah</span><br>
              - SD: <span>5 buah</span><br>
              - SMP: <span>2 buah</span><br>
              - SMA: <span>2 buah</span><br>
              Jumlah Sarana Kesehatan:<br>
              - PUSTU: <span>1 buah</span><br>
              - POSKESDES: <span>1 buah</span><br>
              Jumlah Sarana Ibadah:<br>
              - MASJID: <span>11 buah</span><br>
              - SURAU: <span>5 buah</span><br>
              - GEREJA: <span>1 buah</span><br>
              - KLENTENG/VIHARA: <span>1 buah</span>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

@endsection