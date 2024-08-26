@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Visi Misi</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Tambah Visi Misi</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('visimisi.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="visi">Visi</label>
                    <textarea name="visi" id="visi" class="form-control p-input" placeholder="Visi...." rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label for="misi">Misi</label>
                    <textarea name="misi" id="misi" class="form-control p-input" placeholder="Misi...." rows="5"></textarea>
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