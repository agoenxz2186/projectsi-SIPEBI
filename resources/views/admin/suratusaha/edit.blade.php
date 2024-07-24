@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Surat Usaha</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Edit Surat Usaha</h5>
              <form action="{{route('suratusaha.update', $suratusaha->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
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
                  <input type="text" name="nama" id="nama" value="{{$suratusaha->nama}}" placeholder="Nama Lengkap" class="form-control p-input" rows="5">
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" value="{{$suratusaha->tempat_lahir}}" id="tempat_lahir" placeholder="Tempat Lahir" class="form-control p-input">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{$suratusaha->tanggal_lahir}}" class="form-control p-input" rows="5" >
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control p-input">
                        <option value="Laki-laki" {{ $suratusaha->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $suratusaha->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control p-input" placeholder="Alamat...." rows="5">{{$suratusaha->alamat}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="rt_rw">RT/RW</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="rt" name="rt" placeholder="RT" value="{{ old('rt', $suratusaha->rt) }}" required>
                        <span class="input-group-text">/</span>
                        <input type="number" class="form-control" id="rw" name="rw" placeholder="RW" value="{{ old('rw', $suratusaha->rw) }}" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control p-input" value="{{$suratusaha->pekerjaan}}" placeholder="Pekerjaan" rows="5">
                  </div>
                  <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="number" name="nik" id="nik" class="form-control p-input" value="{{$suratusaha->nik}}" placeholder="NIK" rows="5">
                  </div>
                  <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                  <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control p-input" value="{{$suratusaha->kewarganegaraan}}" placeholder="Kewarganegaraan...." rows="5">
                  </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" id="agama" class="form-control p-input">
                        <option value="Islam" {{ $suratusaha->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Khatolik" {{ $suratusaha->agama == 'Khatolik' ? 'selected' : '' }}>Khatolik</option>
                        <option value="Protestan" {{ $suratusaha->agama == 'Protestan' ? 'selected' : '' }}>Protestan</option>
                        <option value="Buddha" {{ $suratusaha->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Hindu" {{ $suratusaha->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Konghucu" {{ $suratusaha->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="status_perkawinan">Status Perkawinan</label>
                  <select name="status_perkawinan" id="status_perkawinan" class="form-control p-input">
                      <option value="Menikah" {{ $suratusaha->status_perkawinan == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                      <option value="Belum Menikah" {{ $suratusaha->status_perkawinan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                      <option value="Cerai Hidup" {{ $suratusaha->status_perkawinan == 'Cerai Hidup' ? 'selected' : '' }}>Cerai Hidup</option>
                      <option value="Cerai Mati" {{ $suratusaha->status_perkawinan == 'Cerai Mati' ? 'selected' : '' }}>Cerai Mati</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="jenis_usaha">Jenis Usaha</label>
                <select name="jenis_usaha" id="jenis_usaha" class="form-control p-input">
                    <option value="Perdagangan" {{ $suratusaha->jenis_usaha == 'Perdagangan' ? 'selected' : '' }}>Perdagangan</option>
                    <option value="Jasa" {{ $suratusaha->jenis_usaha == 'Jasa' ? 'selected' : '' }}>Jasa</option>
                    <option value="Kuliner" {{ $suratusaha->jenis_usaha == 'Kuliner' ? 'selected' : '' }}>Kuliner</option>
                    <option value="Industri Kreatif" {{ $suratusaha->jenis_usaha == 'Industri Kreatif' ? 'selected' : '' }}>Industri Kreatif</option>
                    <option value="Pertanian dan Perikanan" {{ $suratusaha->jenis_usaha == 'Pertanian dan Perikanan' ? 'selected' : '' }}>Pertanian dan Perikanan</option>
                    <option value="Manufaktur dan Produksi" {{ $suratusaha->jenis_usaha == 'Manufaktur dan Produksi' ? 'selected' : '' }}>Manufaktur dan Produksi</option>
                    <option value="Kesehatan" {{ $suratusaha->jenis_usaha == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                    <option value="Transportasi dan Logistik" {{ $suratusaha->jenis_usaha == 'Transportasi dan Logistik' ? 'selected' : '' }}>Transportasi dan Logistik</option>
                    <option value="Teknologi Informasi" {{ $suratusaha->jenis_usaha == 'Teknologi Informasi' ? 'selected' : '' }}>Teknologi Informasi</option>
                    <option value="Pendidikan" {{ $suratusaha->jenis_usaha == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                   
                </select>
            </div>
                    <div class="form-group">
                      <label for="mulai_usaha">Mulai Usaha</label>
                    <input type="date" name="mulai_usaha" id="mulai_usaha" value="{{$suratusaha->mulai_usaha}}" class="form-control p-input" placeholder="Mulai Usaha...." rows="5">
                    </div>
                    <div class="form-group">
                      <label for="status_usaha">Status Usaha</label>
                      <select name="status_usaha" id="status_usaha" class="form-control p-input">
                          <option value="Kontrak"  {{ $suratusaha->status_usaha == 'Kontrak' ? 'selected' : '' }}>Kontrak</option>
                          <option value="Sewa" {{ $suratusaha->status_usaha == 'Sewa' ? 'selected' : '' }}>Sewa</option>
                          <option value="Milik Sendiri" {{ $suratusaha->status_usaha == 'Milik Sendiri' ? 'selected' : '' }}>Milik Sendiri</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="ukuran">Ukuran</label>
                    <input type="number" name="ukuran" step="0.01" id="ukuran" value="{{$suratusaha->ukuran}}" class="form-control p-input" placeholder="Ukuran" rows="5">
                  </div>
                  <div class="form-group ">
                    <label for="alamat_usaha">Alamat Usaha</label>
                    <textarea name="alamat_usaha" id="alamat_usaha" class="form-control p-input" placeholder="Alamat Usaha" rows="5">{{$suratusaha->alamat_usaha}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="alasan">Alasan</label>
                    <textarea name="alasan" id="alasan" class="form-control p-input"  placeholder="Alasan...." rows="5">{{$suratusaha->alasan}}</textarea>
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