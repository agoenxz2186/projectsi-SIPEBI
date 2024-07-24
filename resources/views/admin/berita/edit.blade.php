@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Berita</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Berita</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('berita.update', $berita->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label class="d-block" for="judul">Judul</label>
                  <textarea name="judul" id="judul" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$berita->judul}}</textarea><br>
                    <label class="d-block" for="isi">Isi</label>
                    <textarea name="isi" id="isi" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$berita->isi}}</textarea> <br>
                    <label class="d-block" for="foto">Foto</label>
                    @if ($berita->foto)
                    <img src="{{ asset('storage/berita/' . $berita->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto Berita">
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