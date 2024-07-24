@extends('admin.template.main')
@section('main')

<div class="content-wrapper">
    <h3 class="page-heading mb-7">Tambah Agenda</h3>
    <form action="{{ route('agenda.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="kegiatan" name="kegiatan" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection