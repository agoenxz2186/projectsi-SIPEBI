@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Geografis</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Tambah Geografis</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('geografis.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="keterangan">Ketrangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control p-input" placeholder="Ketrangan...." rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                    <textarea name="nama" id="nama" class="form-control p-input" placeholder="Nama...." rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                      <textarea name="jumlah" id="jumlah" class="form-control p-input" placeholder="Jumlah...." rows="5"></textarea>
                  </div>
                 
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection