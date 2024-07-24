@extends('template.main')
@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Lembaga Desa</h2>
        <ol>
          <li><a href="{{ route('/') }}">Home</a></li>
          <li>Lembaga Desa</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Team Section -->
<section class="service-details">
    <div class="container">

      <div class="row">
        @foreach ($lembaga as $item)
        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="card">
            <div class="card-img">
              <img src="{{ asset('storage/lembaga/' . $item->foto) }}" width="512px" height="354px" alt="...">
            </div>
            <div class="card-body">
              <h5 class="card-title"><a href="#">{{$item->nama}}</a></h5>
              <p class="card-text">{{$item->keterangan}}</p>
            </div>
          </div>
        </div>
        @endforeach
      
       
      
      </div>

    </div>
  </section><!-- End Service Details Section -->

@endsection