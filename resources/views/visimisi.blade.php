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
                  {{ $firstVisi->visi }}
                </p>
                <p>
                  Visi ini mencakup:
                  <ul style="list-style-type: square;">
                    @foreach ($remainingVisiMisi as $vm)
                    @if (!empty($vm->visi))
                      <li> {{ $vm->visi }}</li>
                      @endif
                    @endforeach
                    
                  </ul>
                </p>

                <h3>Misi</h3>
                <p>
                  Misi kami adalah:
                  <ol>
                    @foreach ($remainingVisiMisi as $vm)
                    @if (!empty($vm->misi)) <!-- Cek apakah misi tidak kosong -->
                      <li>{{ $vm->misi }}</li>
                    @endif
                  @endforeach
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
