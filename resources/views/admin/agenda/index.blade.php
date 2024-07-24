@extends('admin.template.main')

@section('main')

<div class="content-wrapper">
    <h3 class="page-heading mb-7">Agenda</h3>
    <a href="{{ route('agenda.create') }}" class="btn btn-primary mb-3">Tambah Agenda</a>
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
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kegiatan</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agenda as $item)
                                <tr>
                                    <td>{{ $item->kegiatan }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>
                                        <form action="{{ route('agenda.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus agenda ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- SweetAlert JS -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'id', // Set locale to Indonesian
            initialView: 'dayGridMonth',
            events: [
                @foreach($agenda as $item)
                    {
                        title: '{{ $item->kegiatan }}',
                        start: '{{ $item->tanggal }}',
                        description: '{{ $item->keterangan }}'
                    },
                @endforeach
            ],
            eventDidMount: function(info) {
                $(info.el).tooltipster({
                    content: info.event.extendedProps.description,
                    theme: 'tooltipster-light'
                });
            },
            eventClick: function(info) {
                var eventObj = info.event;
                var title = eventObj.title;
                var description = eventObj.extendedProps.description;
  
                Swal.fire({
                    title: 'Kegiatan: ' + title,
                    text: 'Keterangan: ' + description,
                    icon: 'info',
                    confirmButtonText: 'OK'
                });
            }
        });
        calendar.render();
    });
  </script>
@endsection
