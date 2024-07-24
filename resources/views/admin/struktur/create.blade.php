@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Struktur Organisasi</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Tambah Pegawai</h5>
              <form action="{{route('struktur.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                    <textarea name="nama" id="nama" class="form-control p-input" placeholder="Nama...." rows="5"></textarea>
                    @if ($errors->has('nama'))
    <div class="alert alert-danger">
        {{ $errors->first('nama') }}
    </div>
@endif
                </div>
                  <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control p-input" placeholder="Jabatan....">
                    @if ($errors->has('jabatan'))
    <div class="alert alert-danger">
        {{ $errors->first('jabatan') }}
    </div>
@endif
                  </div>
                  <div class="form-group">
                    <label for="foto">Foto</label>
                  
                    <input type="file" name="foto" id="foto" class="form-control-file">
                    <em>maksimal 2MB</em>
                    @if ($errors->has('foto'))
    <div class="alert alert-danger">
        {{ $errors->first('foto') }}
    </div>
@endif
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