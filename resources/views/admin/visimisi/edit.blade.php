@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Visi Misi</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Visi Misi</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('visimisi.update', $visimisi->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label class="d-block" for="visi">Visi</label>
                  <textarea name="visi" id="visi" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$visimisi->visi}}</textarea><br>
                  <label class="d-block" for="misi">Misi</label>
                  <textarea name="misi" id="misi" class="form-control p-input"  rows="5" class="w-50 mx-auto mb-3" >{{$visimisi->misi}}</textarea><br>
                   
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection