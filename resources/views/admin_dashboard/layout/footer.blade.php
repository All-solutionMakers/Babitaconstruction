<footer class="main-footer">
    <strong>Copyright &copy; 2023-2025
        <a href="https://nextgendigitization.com/">NextGen</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <!-- <b>Version</b> 3.1.0 -->
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
{{-- <script src="plugins/jquery/jquery.min.js"></script> --}}
<!-- jQuery UI 1.11.4 -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>


<!-- ChartJS -->

<!-- AdminLTE App -->
<script src="{{ url('admin_dashboard/assets/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo js  MAIN JS FILE-->
<script src="{{ url('/admin_dashboard/assets/js/demo.js') }}"></script>

{{-- select picker link  --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

{{-- ajax cdn  --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}
<script src="{{url('/ckeditor/ckeditor.js')}}"></script>


<script>
    // Use jQuery or vanilla JavaScript to ensure CKEditor is initialized after document ready
    document.addEventListener('DOMContentLoaded', function() {
        CKEDITOR.replace('video_description');
        CKEDITOR.replace('product_description');
    });

</script>

<script src="{{ url('build/js/intlTelInput.js') }}"></script>



</body>

</html>
