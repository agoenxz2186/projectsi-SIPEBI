@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Geografis</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Geografis</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('geografis.update', $geografis->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label class="d-block" for="keterangan">Keterangan</label>
                  <textarea name="keterangan" id="keterangan" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$geografis->keterangan}}</textarea><br>
                  <label class="d-block" for="nama">Nama</label>
                  <textarea name="nama" id="nama" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$geografis->nama}}</textarea><br>
                  <label class="d-block" for="jumlah">Jumlah</label>
                  <textarea name="jumlah" id="jumlah" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$geografis->jumlah}}</textarea><br>
                   
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection