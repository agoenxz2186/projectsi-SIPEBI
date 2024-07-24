@extends('template.main')

@section('content')
<section class="features">
    <div class="container">
        <div class="section-title">
            <h2>Pembuatan SKTM</h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="container mt-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Formulir</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sktm.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
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
                                        <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Masukkan Pekerjaan" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kewarganegaraan">Kewarganegaraan</label>
                                        <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" placeholder="Masukkan Kewarganegaraan" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="agama" class="form-control" required>
                                            <option value="">Pilih Agama</option>
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
                                        <select name="status_perkawinan" id="status_perkawinan" class="form-control" required>
                                            <option value="">Pilih Status Perkawinan</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_kk">Nomor KK</label>
                                        <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" placeholder="Masukkan Nomor KK" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alasan">Alasan</label>
                                        <textarea class="form-control w-100" id="alasan" name="alasan" rows="3" placeholder="Masukkan Alasan" required></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
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
