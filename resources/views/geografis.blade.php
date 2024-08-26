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
              <p>{{ $firstGeografis->keterangan }}</p>
              <div class="sejajar">
                  <table>
                      @foreach ($remainingGeografis as $g)
                          <tr>
                              <td>{{ $g->nama }}:</td>
                              <td style="width: 350px;"></td> <!-- Empty cell for spacing -->
                              <td>{{ $g->jumlah }}</td>
                          </tr>
                      @endforeach
                  </table>
              </div>
          </div>
      </div>
      

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

@endsection