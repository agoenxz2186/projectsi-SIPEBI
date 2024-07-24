@extends('admin.template.main')
@section('main')
    <div class="content-wrapper">
        <h3 class="page-heading mb-4">Dashboard</h3>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="row">
          
          
          @foreach ($admin as $item)
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            
            <div class="card card-statistics">
              <div class="card-body d-flex justify-content-between align-items-right">
                <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-primary rounded-circle" style="width: 30px; height: 30px;">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <h4 class="text-danger">                      
                      <i class="fa fa-male highlight-icon" aria-hidden="true"></i>
                    </h4>
                  </div>
                  <div class="float-right">                  
                    <p class="card-text text-dark">Laki-Laki</p>                    
                    <h4 class="bold-text">{{$item->laki_laki}}</h4>                    
                    </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
              <div class="card-body d-flex justify-content-between align-items-right">

                <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-primary rounded-circle" style="width: 30px; height: 30px;">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <h4 class="text-warning">
                      <i class="fa fa-female highlight-icon" aria-hidden="true"></i>
                    </h4>
                  </div>
                  <div class="float-right">
                    <p class="card-text text-dark">Perempuan</p>
                    <h4 class="bold-text">{{$item->perempuan}}</h4>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
              <div class="card-body d-flex justify-content-between align-items-right">

                <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-primary rounded-circle" style="width: 30px; height: 30px;">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <h4 class="text-success">
                      <i class="fa fa-child highlight-icon" aria-hidden="true"></i>
                    </h4>
                  </div>
                  <div class="float-right">
                    <p class="card-text text-dark">Balita</p>
                    <h4 class="bold-text">{{$item->balita}}</h4>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 mb-4">
            <div class="card card-statistics">
              <div class="card-body d-flex justify-content-between align-items-right">

                <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-primary rounded-circle" style="width: 30px; height: 30px;">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
              <div class="card-body">
                <div class="clearfix">
                  <div class="float-left">
                    <h4 class="text-primary">
                      <i class="fa fa-calculator highlight-icon" aria-hidden="true"></i>
                    </h4>
                  </div>
                  <div class="float-right">
                    <p class="card-text text-dark">Total</p>
                    <h4 class="bold-text">{{ $item->laki_laki + $item->perempuan + $item->balita }}</h4>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          @endforeach
        </div>
          <h3 class="page-heading mb-7"></h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card px-4">
                <div class="card-body">
                  <div class="icons-list row">
                    <p>Selamat datang, {{ Auth::user()->name }}!</p>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>       
      </div>
      @section('scripts')
  @if (session('success'))
  <script>
      Swal.fire({
          title: 'Success!',
          text: "{{ session('success') }}",
          icon: 'success',
          confirmButtonText: 'OK'
      });
  </script>
  @endif
  @endsection
@endsection