@extends('template.main')

@section('content')
<div class="content-wrapper">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card px-4">
                <div class="card-body">
                    <!-- Notifikasi Halaman Aktif -->
                    @if(Route::currentRouteName() == 'sktm.view')
                        <div class="alert alert-info">
                            Anda sedang berada di halaman <strong>Surat Keterangan Tidak Mampu (SKTM)</strong>.
                        </div>
                    @elseif(Route::currentRouteName() == 'suratusaha.view')
                        <div class="alert alert-info">
                            Anda sedang berada di halaman <strong>Surat Usaha</strong>.
                        </div>
                    @endif
                    <div class="d-flex justify-content-around mb-4">
                        <h3 class="page-heading mb-0">
                            <a href="{{ route('suratusaha.view') }}" class="text-decoration-none text-primary">Surat Usaha</a>
                        </h3>
                        <h3 class="page-heading mb-0">
                            <a href="{{ route('sktm.view') }}" class="text-decoration-none text-primary">SKTM</a>
                        </h3>
                    </div>
                    <form method="GET" action="{{ route('suratusaha.view') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Search</button>
                                <a href="{{ route('suratusaha.view') }}" class="btn btn-danger">X</a>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-light">
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($suratusaha as $index => $item)
                                    <tr>
                                      <td>{{ $loop->iteration + ($suratusaha->currentPage() - 1) * $suratusaha->perPage() }}</td> <!-- Menggunakan $loop->iteration untuk nomor urut -->
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->tempat_lahir }}</td>
                                        <td>{{ $item->tanggal_lahir }}</td>
                                        <td>{{ $item->jenis_kelamin }}</td>
                                        <td>{{ $item->alamat }}</td>
                                        <td>{{ $item->rt }} / {{ $item->rw }}</td>
                                        <td>{{ $item->pekerjaan }}</td>
                                        <td>{{ $item->nik }}</td>
                                        <td>{{ $item->kewarganegaraan }}</td>
                                        <td>{{ $item->agama }}</td>
                                        <td>{{ $item->status_perkawinan }}</td>
                                        <td>{{ $item->jenis_usaha }}</td>
                                        <td>{{ $item->mulai_usaha }}</td>
                                        <td>{{ $item->status_usaha }}</td>
                                        <td>{{ $item->ukuran }} m²</td>
                                        <td>{{ $item->alamat_usaha }}</td>
                                        <td>{{ $item->alasan }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>
                                            <a href="{{ route('suratusaha.download', $item->id) }}" class="btn btn-sm btn-primary">Download</a>
                                            <form action="{{ route('suratusaha.destroy', $item->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus suratusaha ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Link paginasi -->
                        <div class="d-flex justify-content-center">
                          {{ $suratusaha->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .content-wrapper {
        padding: 20px;
    }
    .page-heading {
        font-size: 1.5rem;
    }
    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }
    .btn {
        margin-right: 5px;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }
    .table-bordered {
        border: 1px solid #dee2e6;
    }
    .thead-light th {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
    }

</style>
@endsection
