@extends('template.main')

@section('content')
<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Tentang Kami</h2>
          <ol>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li>Tentang Kami</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="{{ asset('storage/tentang/' . $tentang->foto) }}" class="img-fluid" alt="Foto">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3 class="fst-italic">{{$tentang->deskripsi}}</h3>
           
          
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
   
  </main><!-- End #main -->

@endsection