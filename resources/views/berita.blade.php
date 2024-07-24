@extends('template.main')
@section('content')
<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Berita Desa</h2>

          <ol>
            <li><a href="{{ route('/') }}">Home</a></li>
            <li>Berita Desa</li>
          </ol>
        </div>

      </div>
    </section><!-- End Blog Section -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-8 entries">
              
              @foreach ($berita as $item)
              <article class="entry">
              
                  <div class="entry-img">
                      <img src="{{ asset('storage/berita/' . $item->foto) }}" alt="" class="img-fluid" width="1024" height="768">
                  </div>
              
                  <h2 class="entry-title">
                      <a href="{{ route('berita.show', $item->id) }}">{{$item->judul}}</a>
                  </h2>
              
                  <div class="entry-meta">
                      <ul>
                          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="{{ route('berita.show', $item->id) }}">{{ $item->user->name }}</a></li>
                          <li class="d-flex align-items-center">
                              <i class="bi bi-clock"></i> 
                              <a href="{{ route('berita.show', $item->id) }}">
                                <time datetime="{{ $item->created_at }}">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</time>
                              </a>
                          </li>
                      </ul>
                  </div>
              
                  <div class="entry-content">
                      <p>
                          {{ substr($item->isi, 0, 200) }} {{-- Memotong teks hingga 200 karakter --}}
                          @if (strlen($item->isi) > 200) {{-- Menampilkan tombol "Baca Selengkapnya" hanya jika teks dipotong --}}
                          <div class="read-more">
                              <a href="{{ route('berita.show', $item->id) }}">Baca Selengkapnya</a>
                            </div>
                          @endif
                      </p>
                  </div>
              
              </article><!-- End blog entry -->
              @endforeach
              
  
              <div class="blog-pagination">
                <div class="d-flex justify-content-center">
                  {{ $berita->appends(['search' => request()->input('search')])->links('vendor.pagination.custom') }}
                </div>
              </div>
  
            </div><!-- End blog entries list -->
  
            <div class="col-lg-4">
  
              <div class="sidebar">
  
                <h3 class="sidebar-title">Search</h3>
                <div class="sidebar-item search-form">
                  <form action="{{ route('index.berita') }}" method="GET">
                    <input type="text" name="search" value="{{ request()->input('search') }}" placeholder="Cari berita...">
                    <button type="submit"><i class="bi bi-search"></i></button>
                  </form>
                </div><!-- End sidebar search formn-->
  
                <h3 class="sidebar-title">Recent Posts</h3>
                <div class="sidebar-item recent-posts">
                  @foreach ($recentPosts as $post)
                  <div class="post-item clearfix">
                    <img src="{{ asset('storage/berita/' . $post->foto) }}" alt="">
                    <h4><a href="{{ route('berita.show', $post->id) }}">{{ $post->judul }}</a></h4>
                    <time datetime="{{ $post->created_at }}">{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</time>
                  </div>
                  @endforeach
                </div><!-- End sidebar recent posts-->
  
              </div><!-- End sidebar -->
  
            </div><!-- End blog sidebar -->
  
          </div>
  
        </div>
      </section><!-- End Blog Section -->
  
    </main><!-- End #main -->
  
@endsection
