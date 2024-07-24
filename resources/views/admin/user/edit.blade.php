@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">User Desa</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit User Desa</h5>
              @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
              <form action="{{route('user.update', $user->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
               <div class="form-group">
                <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control p-input">
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control p-input">
                </div>
                <div class="form-group">
                    <label for="password">Password (Kosongkan jika tidak ingin mengganti)</label>
                    <input type="password" name="password" class="form-control">
                </div>
            
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select name="role" id="role" class="form-control p-input">
                        <option value="Admin" {{ $user->role == 'Admin' ? 'selected' : '' }}>Admin</option>
                        <option value="Warga" {{ $user->role == 'Warga' ? 'selected' : '' }}>Warga</option>
                    </select>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>

               </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection