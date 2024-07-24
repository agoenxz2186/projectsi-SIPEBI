@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Surat Keterangan Tidak Mampu</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Sktm</h5>
              <form action="{{route('sktm.update', $sktm->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                  <label for="nama">Nama</label>
                    <textarea name="nama" id="nama" class="form-control p-input" rows="5">{{$sktm->nama}}</textarea>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <textarea name="tempat_lahir" id="tempat_lahir" class="form-control p-input"  rows="5">{{$sktm->tempat_lahir}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control p-input" rows="5" value="{{ $sktm->tanggal_lahir }}">
                </div>
                
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control p-input">
                        <option value="Laki-laki" {{ $sktm->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $sktm->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control p-input" rows="5">{{$sktm->alamat}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="rt_rw">RT/RW</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="rt" name="rt" placeholder="RT" value="{{ old('rt', $sktm->rt) }}" required>
                        <span class="input-group-text">/</span>
                        <input type="number" class="form-control" id="rw" name="rw" placeholder="RW" value="{{ old('rw', $sktm->rw) }}" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <textarea name="pekerjaan" id="pekerjaan" class="form-control p-input"  rows="5">{{$sktm->pekerjaan}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <textarea name="kewarganegaraan" id="kewarganegaraan" class="form-control p-input" rows="5">{{$sktm->kewarganegaraan}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" id="agama" class="form-control p-input">
                        <option value="Islam" {{ $sktm->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Khatolik" {{ $sktm->agama == 'Khatolik' ? 'selected' : '' }}>Khatolik</option>
                        <option value="Protestan" {{ $sktm->agama == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                        <option value="Buddha" {{ $sktm->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Hindu" {{ $sktm->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Konghucu" {{ $sktm->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status_perkawinan">Status Perkawinan</label>
                    <select name="status_perkawinan" id="status_perkawinan" class="form-control p-input">
                        <option value="Menikah" {{ $sktm->status_perkawinan == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                        <option value="Belum Menikah" {{ $sktm->status_perkawinan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                        <option value="Cerai Hidup" {{ $sktm->status_perkawinan == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                        <option value="Cerai Mati" {{ $sktm->status_perkawinan == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <textarea name="nik" id="nik" class="form-control p-input"  rows="5">{{$sktm->nik}}</textarea>
                </div>
                <div class="form-group">
                  <label for="nomor_kk">Nomor KK</label>
                  <textarea name="nomor_kk" id="nomor_kk" class="form-control p-input" rows="5">{{$sktm->nomor_kk}}</textarea>
                </div>
                <div class="form-group">
                  <label for="alasan">Alasan</label>
                  <textarea name="alasan" id="alasan" class="form-control p-input" rows="5">{{$sktm->alasan}}</textarea>
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