<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/assets/be/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/assets/be/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/assets/be/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/assets/be/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/assets/be/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/be/plugins/raphael/raphael.min.js"></script>
<script src="/assets/be/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/be/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/assets/be/plugins/chart.js/Chart.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="/assets/be/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/be/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/be/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/be/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/be/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/be/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/be/plugins/jszip/jszip.min.js"></script>
<script src="/assets/be/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/be/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/be/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/be/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/be/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Select2 -->
<script src="/assets/be/plugins/select2/js/select2.full.min.js"></script>

<!-- bs-custom-file-input -->
<script src="/assets/be/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- Summernote -->
<script src="/assets/be/plugins/summernote/summernote-bs4.min.js"></script>

<!-- AdminLTE for demo purposes -->
{{-- <script src="/assets/be/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="/assets/be/dist/js/pages/dashboard2.js"></script> --}}

<!-- Trezo theme -->
<script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
<script src="{{ asset('assets/js/dragdrop.js') }}"></script>
<script src="{{ asset('assets/js/rangeslider.min.js') }}"></script>
<script src="{{ asset('assets/js/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/data-table.js') }}"></script>
<script src="{{ asset('assets/js/prism.js') }}"></script>
<script src="{{ asset('assets/js/clipboard.min.js') }}"></script>
<script src="{{ asset('assets/js/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/echarts.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/fullcalendar.main.js') }}"></script>
<script src="{{ asset('assets/js/jsvectormap.min.js') }}"></script>
<script src="{{ asset('assets/js/world-merc.js') }}"></script>
<script src="{{ asset('assets/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/lightpick.js') }}"></script>
<script src="{{ asset('assets/js/custom/apexcharts.js') }}"></script>
<script src="{{ asset('assets/js/custom/echarts.js') }}"></script>
<script src="{{ asset('assets/js/custom/custom.js') }}"></script>

<!-- Page specific script -->
<script>
  // datatables
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
        $('#example3').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
        $('#example4').DataTable({
        "paging": false,
        "lengthChange": true,
        "searching": false,
        "ordering": false,
        "info": false,
        "autoWidth": false,
        "responsive": true,
        });
    });

    // form input qustom
    $(function () {
        bsCustomFileInput.init();
    });

    // preview image admin
    $('#photo').on('change', function() {
        const file = this.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = e => $('#frames').attr('src', e.target.result).show();
        reader.readAsDataURL(file);
    });

    // cek nama username
    $("#username").on('keyup blur', function() {
        var uname = $(this).val().trim();
        uname = uname.replace(/\s+/g, '');
        $(this).val(uname);
    });

    // preview image all
    $('#images').on('change', function() {
        const file = this.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = e => $('#frame_images').attr('src', e.target.result).show();
        reader.readAsDataURL(file);
    });

    // preview image all
    $('#images2').on('change', function() {
    const file = this.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = e => $('#frame_images2').attr('src', e.target.result).show();
    reader.readAsDataURL(file);
    });

    // summernote text editor
    $(function () {
        // Summernote
        // $('#summernote').summernote()

        //Initialize Select2 Elements
        $('.select2').select2()
        $('.select3').select2()
    });
    
    $('#summernote').summernote({
    popover: {
        air: [
            ['color', ['color']],
            ['font', ['bold', 'underline', 'clear']]
            ]
        }
    });
    // $('#summernote').summernote('fontName', 'Helvetica');
    // $('#summernote').summernote('fontSize', '16');
    
    // IDR
    document.querySelectorAll('input[type-currency="IDR"]').forEach((element) => {
        element.addEventListener('keyup', function(e) {
        let cursorPostion = this.selectionStart;
            let value = parseInt(this.value.replace(/[^,\d]/g, ''));
            let originalLenght = this.value.length;
            if (isNaN(value)) {
            this.value = "";
            } else {    
            this.value = value.toLocaleString('id-ID', {
                currency: 'IDR',
                // style: 'currency',
                minimumFractionDigits: 0
            });
            cursorPostion = this.value.length - originalLenght + cursorPostion;
            this.setSelectionRange(cursorPostion, cursorPostion);
            }
        });
    });
</script>