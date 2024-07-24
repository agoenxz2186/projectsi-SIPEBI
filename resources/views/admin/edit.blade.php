@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Edit Data Penduduk</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Edit Data Penduduk</h5>
                    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                    <form action="{{ route('admin.update', $admin->id) }}" method="POST" class="forms-sample">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="d-block" for="laki_laki">Laki-Laki</label>
                            <input type="number" name="laki_laki" id="laki_laki" value="{{ $admin->laki_laki }}" class="w-50 mx-auto mb-3 form-control p-input">
                            
                            <label class="d-block" for="perempuan">Perempuan</label>
                            <input type="number" name="perempuan" id="perempuan" value="{{ $admin->perempuan }}" class="w-50 mx-auto mb-3 form-control p-input">
                            
                            <label class="d-block" for="balita">Balita</label>
                            <input type="number" name="balita" id="balita" value="{{ $admin->balita }}" class="w-50 mx-auto form-control p-input">
                        </div>
                        
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection