@extends('template.main')

@section('content')
<section class="features">
    <div class="container">
        <div class="section-title text-center">
            <h2>Pembuatan Surat Usaha</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Formulir</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('suratusaha.store')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
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

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" rows="3" class="form-control w-100" placeholder="Masukkan Alamat" required></textarea>
                                        <div id="alamat-suggestions" class="list-group"></div>
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
                                        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="number" name="nik" id="nik" class="form-control" placeholder="NIK">
                                    </div>
                                    <div class="form-group">
                                        <label for="kewarganegaraan">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="agama" class="form-control">
                                            <option value="Islam">Islam</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status_perkawinan">Status Perkawinan</label>
                                        <select name="status_perkawinan" id="status_perkawinan" class="form-control">
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_usaha">Jenis Usaha</label>
                                        <select name="jenis_usaha" id="jenis_usaha" class="form-control">
                                            <option value="Perdagangan">Perdagangan</option>
                                            <option value="Jasa">Jasa</option>
                                            <option value="Kuliner">Kuliner</option>
                                            <option value="Industri Kreatif">Industri Kreatif</option>
                                            <option value="Pertanian dan Perikanan">Pertanian dan Perikanan</option>
                                            <option value="Manufaktur dan Produksi">Manufaktur dan Produksi</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                            <option value="Transportasi dan Logistik">Transportasi dan Logistik</option>
                                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                                            <option value="Pendidikan">Pendidikan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="mulai_usaha">Mulai Usaha</label>
                                        <input type="date" name="mulai_usaha" id="mulai_usaha" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="status_usaha">Status Usaha</label>
                                        <select name="status_usaha" id="status_usaha" class="form-control">
                                            <option value="Kontrak">Kontrak</option>
                                            <option value="Sewa">Sewa</option>
                                            <option value="Milik Sendiri">Milik Sendiri</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ukuran">Ukuran m²</label>
                                        <input type="number" name="ukuran" step="0.01" id="ukuran" class="form-control" placeholder="Contoh 32 atau 32.5">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_usaha">Alamat Usaha</label>
                                        <textarea name="alamat_usaha" id="alamat_usaha" class="form-control" placeholder="Alamat Usaha" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="alasan">Alasan</label>
                                        <textarea name="alasan" id="alasan" class="form-control" placeholder="Alasan...." rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')
<!-- Nominatim JavaScript for Autocomplete -->
<script>
 document.addEventListener('DOMContentLoaded', function() {
    var addressInput = document.getElementById('alamat');
    var suggestionsBox = document.getElementById('alamat-suggestions');

    addressInput.addEventListener('input', function() {
        var query = addressInput.value;
        if (query.length > 2) {
            fetch(`https://nominatim.openstreetmap.org/search?format=json&limit=5&countrycodes=id&q=${query}`)
                .then(response => response.json())
                .then(data => {
                    suggestionsBox.innerHTML = ''; // Clear previous suggestions
                    data.forEach(function(item) {
                        var option = document.createElement('a');
                        option.href = "#";
                        option.classList.add('list-group-item', 'list-group-item-action');
                        
                        // Split the display name by commas and join the first two parts
                        var displayParts = item.display_name.split(',');
                        var filteredDisplayName = displayParts.slice(0, 2).join(',');

                        option.textContent = filteredDisplayName;
                        option.addEventListener('click', function(e) {
                            e.preventDefault();
                            addressInput.value = filteredDisplayName;
                            suggestionsBox.innerHTML = ''; // Clear suggestions
                        });
                        suggestionsBox.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching data:', error));
        } else {
            suggestionsBox.innerHTML = ''; // Clear suggestions if query is too short
        }
    });

    document.addEventListener('click', function(e) {
        if (!suggestionsBox.contains(e.target) && e.target !== addressInput) {
            suggestionsBox.innerHTML = ''; // Clear suggestions if clicked outside
        }
    });
});


</script>
@endsection
@endsection
