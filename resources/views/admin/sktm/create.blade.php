@extends('admin.template.main')
@section('main')
<div class="content-wrapper">
    <h3 class="page-heading mb-4">Surat Keterangan Tidak Mampu</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4">Tambah SKTM</h5>
              <form action="{{route('sktm.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
                @csrf
                {{-- Menampilkan pesan kesalahan --}}
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
                    <textarea name="nama" id="nama" class="form-control p-input" placeholder="Nama...." rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <textarea name="tempat_lahir" id="tempat_lahir" class="form-control p-input" placeholder="Tempat Lahir...." rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control p-input" rows="5" >
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control p-input">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control p-input" placeholder="Alamat...." rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="rt_rw">RT/RW</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="rt" name="rt" placeholder="RT" required>
                        <span class="input-group-text">/</span>
                        <input type="number" class="form-control" id="rw" name="rw" placeholder="RW" required>
                    </div>
                </div>
                  <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <textarea name="pekerjaan" id="pekerjaan" class="form-control p-input" placeholder="Pekerjaan...." rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <select name="kewarganegaraan" id="kewarganegaraan" class="form-control">
                        <option value="" disabled selected>Pilih Kewarganegaraan</option>
                        <option value="Indonesia">Indonesia</option>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="agama">Agama</label>
                    <select name="agama" id="agama" class="form-control p-input">
                        <option value="Islam">Islam</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status_perkawinan">Status Perkawinan</label>
                    <select name="status_perkawinan" id="status_perkawinan" class="form-control p-input">
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="nik">NIK</label>
                  <textarea name="nik" id="nik" class="form-control p-input" placeholder="NIK...." rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label for="nomor_kk">Nomor KK</label>
                  <textarea name="nomor_kk" id="nomor_kk" class="form-control p-input" placeholder="Nomor KK...." rows="5"></textarea>
                </div>
                <div class="form-group">
                  <label for="alasan">Alasan</label>
                  <textarea name="alasan" id="alasan" class="form-control p-input" placeholder="Alasan...." rows="5"></textarea>
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
