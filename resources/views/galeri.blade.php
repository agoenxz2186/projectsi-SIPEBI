@extends('template.main')

@section('content')
<section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Galeri Desa</h2>
        <ol>
          <li><a href="{{ route('/') }}">Home</a></li>
          <li>Galeri Desa</li>
        </ol>
      </div>

    </div>
  </section><!-- End Our Portfolio Section -->

  <!-- ======= Portfolio Section ======= -->
  <section class="portfolio">
    <div class="container">

    
      
      <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        @foreach ($galeri as $item)

        <div class="col-lg-4 col-md-6 portfolio-wrap filter-app">
          <div class="portfolio-item">
            <img src="{{ asset('storage/galeri/' . $item->foto) }}" class="img-fluid" style="width: 500px; height: 300px;" alt="">
            <div class="portfolio-info">
              <h3>{{$item->judul}}</h3>
              <div>
                <a href="{{ asset('storage/galeri/' . $item->foto) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$item->judul}}"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

       

        

      

       

      

        

       

        
       
       
        @endforeach
        
      </div>
      <div class="d-flex justify-content-center">
        {{ $galeri->links('vendor.pagination.custom') }}
      </div>
      

    </div>
  </section><!-- End Portfolio Section -->
@endsection