@extends('template.main')

@section('content')
<main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Struktur Organisasi</h2>
          <ol>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="d-flex justify-content-center" >
        <img src="{{ asset('storage/struktur_foto/' . $struktur_foto->struktur_foto) }}"  alt="foto"  >
      </div>
        <div class="row">
          @foreach ($struktur as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('storage/struktur/' . $item->foto) }}" style="width: 300px; height: 400px;" class="img-fluid" alt="foto pegawai">
              </div>
              <div class="member-info">
                <h4>{{$item->nama}}</h4>
                <span>{{$item->jabatan}}</span>
              </div>
            </div>
          </div>
        
          

        

         

         
@endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

@endsection