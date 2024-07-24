@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
      <h3 class="page-heading mb-7">Surat Usaha</h3>
      <a href="{{ route('suratusaha.create') }}" class="btn btn-primary mb-3">Tambah Surat Usaha</a>
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
                          <form method="GET" action="{{ route('suratusaha.index') }}">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                    <a href="{{ route('suratusaha.index') }}" class="btn btn-danger">X</a>
                                </div>
                            </div>
                        </form>
                          <div class="table-responsive">
                            <div style="overflow-x: auto;">
                            <table class="table center-aligned-table">
                              <thead>
                                <tr class="text-primary">
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Tempat Lahir</th>
                                  <th>Tanggal Lahir</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Alamat</th>
                                  <th>RT/RW</th>
                                  <th>Pekerjaan</th>
                                  <th>NIK</th>
                                  <th>Kewarganegaraan</th>
                                  <th>Agama</th>
                                  <th>Status Perkawinan</th>
                                  <th>Jenis Usaha</th>
                                  <th>Mulai Usaha</th>
                                  <th>Status Usaha</th>
                                  <th>Ukuran</th>
                                  <th>Alamat Usaha</th>
                                  <th>Alasan</th>
                                  <th>Pemohon</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($suratusaha as $index => $item)
                                <tr class="">
                                  <td>{{ $loop->iteration + ($suratusaha->currentPage() - 1) * $suratusaha->perPage() }}</td> <!-- Menggunakan $loop->iteration untuk nomor urut -->
                                  <td>{{$item->nama}}</td>
                                    <td>{{$item->tempat_lahir}}</td>
                                    <td>{{$item->tanggal_lahir}}</td>
                                    <td>{{$item->jenis_kelamin}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->rt}} / {{ $item->rw }}</td>
                                    <td>{{$item->pekerjaan}}</td>
                                    <td>{{$item->nik}}</td>
                                    <td>{{$item->kewarganegaraan}}</td>
                                    <td>{{$item->agama}}</td>
                                    <td>{{$item->status_perkawinan}}</td>
                                    <td>{{$item->jenis_usaha}}</td>
                                    <td>{{$item->mulai_usaha}}</td>
                                    <td>{{$item->status_usaha}}</td>
                                    <td>{{$item->ukuran}} m²</td>
                                    <td>{{$item->alamat_usaha}}</td>
                                    <td>{{$item->alasan}}</td>
                                    <td>{{ $item->user->name }}</td>  
                                    <td>  <a href="{{ route('suratusaha.download', $item->id) }}" class="btn btn-sm btn-success">Download</a></td>

                                  <td><a href="{{ route('suratusaha.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                  <td>
                                    <button class="btn btn-sm btn-danger" onclick="confirmDeletion({{ $item->id }})">Hapus</button>
                                    <form id="delete-form-{{ $item->id }}" action="{{ route('suratusaha.destroy', $item->id) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                  </td>
                                
                                </tr>
                               
                              
                           
                             @endforeach
                              </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                              {{ $suratusaha->links('vendor.pagination.custom') }}
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