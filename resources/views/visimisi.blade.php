@extends('template.main')

@section('content')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Visi Misi</h2>
          <ol>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li>Visi Misi</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-6 pt-4 pt-lg-0 text-center">
                <h3>Visi</h3>
                <p>
                  "Terwujudnya Desa Sungai Ambangah sebagai Desa yang mandiri, Berkepribadian, berbudaya, sehat, cerdas, sejahtera, dan toleran."
                </p>
                <p>
                  Visi ini mencakup:
                  <ul style="list-style-type: square;">
                    <li>Desa yang mandiri: mewujudkan kehidupan sejajar dengan masyarakat desa lain dengan keunggulan lokal.</li>
                    <li>Berkepribadian: orientasi pada proses pembangunan kehidupan bermasyarakat.</li>
                    <li>Berbudaya: menjunjung norma dan adat istiadat.</li>
                    <li>Masyarakat sehat: jiwa dan raga yang kuat.</li>
                    <li>Masyarakat cerdas: menguasai IPTEK dan memanfaatkannya secara tepat.</li>
                    <li>Masyarakat sejahtera: ketercukupan kebutuhan lahir dan batin.</li>
                    <li>Toleran: menghindari diskriminasi dan perselisihan yang merugikan.</li>
                  </ul>
                </p>

                <h3>Misi</h3>
                <p>
                  Misi kami adalah:
                  <ol>
                    <li>Meningkatkan tata kelola pemerintahan yang baik berdasarkan demokratisasi, transparansi, dan kesetaraan gender.</li>
                    <li>Meningkatkan pembangunan dan pemeliharaan sarana prasarana desa berbasis kemampuan lokal.</li>
                    <li>Meningkatkan kualitas dan akses pelayanan sosial dasar.</li>
                    <li>Meningkatkan pembangunan sarana prasarana usaha ekonomi desa.</li>
                    <li>Meningkatkan pembangunan sarana prasarana lingkungan hidup desa menuju masyarakat yang tanggap bencana.</li>
                    <li>Meningkatkan kualitas dan peran kelembagaan desa berbasis partisipasi masyarakat.</li>
                  </ol>
                </p>
              </div>
            </div>
          </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->


    <!-- ======= Tetstimonials Section ======= -->

  </main><!-- End #main -->

@endsection
