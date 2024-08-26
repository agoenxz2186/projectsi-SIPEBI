@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Struktur Foto</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Tambah Struktur Foto</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('struktur_foto.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="struktur_foto">Foto</label>
                    <input type="file" name="struktur_foto" id="struktur_foto" class="form-control-file">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
                
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection