@extends('template.main')

@section('content')
<main id="main">
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">

          <article class="entry entry-single">

            <div class="entry-img">
                <img src="{{ asset('storage/berita/' . $berita->foto) }}" alt="" class="img-fluid" width="1024" height="768">

            </div>

            <h2 class="entry-title">
              
              <h2>{{$berita->judul}}</h2>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{$berita->user->name}}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="{{$berita->created_at}}">{{$berita->created_at->format('d-m-Y')}}</time></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                {{$berita->isi}}
              </p>

             
             
           

           

            
            
            </div>

            

          </article><!-- End blog entry -->

        

          <div class="blog-comments">


           

           

         

         

          </div><!-- End blog comments -->

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
  </section><!-- End Blog Single Section -->
</main>

@endsection