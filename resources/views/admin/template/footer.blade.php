<footer class="footer">
  <div class="container-fluid clearfix">
    <span class="float-right">
        <a href="#">Desa Sungai Ambangah</a> &copy; 2024
    </span>
  </div>
</footer>
</div>
<!-- partial -->
</div>

</div>

<script src="{{ asset('assets/admin/node_modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{ asset('assets/admin/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/admin/node_modules/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{ asset('assets/admin/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
<script src="{{ asset('assets/admin/js/off-canvas.js')}}"></script>
<script src="{{ asset('assets/admin/js/hoverable-collapse.js')}}"></script>
<script src="{{ asset('assets/admin/js/misc.js')}}"></script>
<script src="{{ asset('assets/admin/js/chart.js')}}"></script>
<script src="{{ asset('assets/admin/js/maps.js')}}"></script>
<script src="{{ asset('assets/admin/js/lightbox.js')}}"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales/id.js'></script>
<script src="{{ asset('assets/admin/js/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/admin/js/popper.js')}}"></script>
  <script src="{{ asset('assets/admin/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/admin/js/main.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltipster/4.2.8/js/tooltipster.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    function confirmDeletion(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>
  @yield('scripts')