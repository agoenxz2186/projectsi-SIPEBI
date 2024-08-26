@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
      <h3 class="page-heading mb-7">Visi Misi</h3>
      <a href="{{ route('visimisi.create') }}" class="btn btn-primary mb-3">Tambah Visi Misi</a>
      @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
      <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card px-4">
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-lg-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table center-aligned-table">
                              <thead>
                                <tr class="text-primary">
                                  <th>No</th>
                                  <th>Visi</th>
                                  <th>Misi</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($visimisi as $index =>$item)
                                <tr class="">
                                  <td>{{ $index + 1 }}</td>
                                    <td><p>{{ substr($item->visi, 0, 50) }}</p></td>
                                    <td><p>{{ substr($item->misi, 0, 50) }}</p></td>
                                    
                                  <td><a href="{{ route('visimisi.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                  <td>
                                    <button class="btn btn-sm btn-danger" onclick="confirmDeletion({{ $item->id }})">Hapus</button>
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('visimisi.destroy', $item->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                  </td>
                                
                                </tr>
                               
                              
                           
                             @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="d-flex justify-content-center">
                            {{ $visimisi->links('vendor.pagination.custom') }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
          
        </div>
      </div>       
  </div>
  @section('scripts')
  @if (session('success'))
  <script>
      Swal.fire({
          title: 'Success!',
          text: "{{ session('success') }}",
          icon: 'success',
          confirmButtonText: 'OK'
      });
  </script>
  @endif
  @endsection
  @endsection