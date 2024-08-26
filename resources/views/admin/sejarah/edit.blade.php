@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Sejarah Desa</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Sejarah Desa</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('sejarah.update', $sejarah->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label class="d-block" for="deskripsi">Deskripsi</label>
                  <textarea name="deskripsi" id="deskripsi" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$sejarah->deskripsi}}</textarea><br>
                    <label class="d-block" for="foto">Foto</label>
                    @if ($sejarah->foto)
                    <img src="{{ asset('storage/sejarah/' . $sejarah->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto Tentang kami">
                    @endif
                    <input type="file" name="foto" id="foto" class="form-control-file">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection