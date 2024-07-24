@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
      <h3 class="page-heading mb-7">Galeri Desa</h3>
      <a href="{{ route('galeri.create') }}" class="btn btn-primary mb-3">Tambah Galeri Desa</a>
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
                                  <th>Judul</th>
                                  <th>foto</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($galeri as $index => $item)
                                <tr class="">
                                  <td>{{ $loop->iteration + ($galeri->currentPage() - 1) * $galeri->perPage() }}</td> <!-- Menggunakan $loop->iteration untuk nomor urut -->
                                    <td>{{ $item->judul }}</td>
                                    <td>
                                    <img src="{{ asset('storage/galeri/' . $item->foto) }}" class="img-fluid " style="width: 150px; height: 100px;" alt="Foto">
                                  </td>                                    
                                  <td><a href="{{ route('galeri.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                  <td>
                                    <button class="btn btn-sm btn-danger" onclick="confirmDeletion({{ $item->id }})">Hapus</button>
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('galeri.destroy', $item->id) }}" method="POST" class="d-none">
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
                            {{ $galeri->links('vendor.pagination.custom') }}
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