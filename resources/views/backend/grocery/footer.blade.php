        </div>
        </div>
<!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner">Copyright &copy; PK WORLD ADMIN 2021</div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="{{url('public/assets/admin/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{url('public/assets/admin/plugins/popper/popper.min.js')}}"></script>
    <script src="{{url('public/assets/admin/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
    <script src="{{url('public/assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{url('public/assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/assets/admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('public/assets/admin/js/pages/sparkline/sparkline-data.js')}}"></script>
    <!-- Common js-->
    <script src="{{url('public/assets/admin/js/app.js')}}"></script>
    <script src="{{url('public/assets/admin/js/layout.js')}}"></script>
    <script src="{{url('public/assets/admin/js/theme-color.js')}}"></script>
    <!-- material -->
    <script src="{{url('public/assets/admin/plugins/material/material.min.js')}}"></script>
    <!-- animation -->
    {{-- <script src="{{url('public/assets/admin/js/pages/ui/animations.js')}}"></script> --}}
    <!-- morris chart -->
    <script src="{{url('public/assets/admin/plugins/morris/morris.min.js')}}"></script>
    <script src="{{url('public/assets/admin/plugins/morris/raphael-min.js')}}"></script>
    <script src="{{url('public/assets/admin/js/pages/chart/morris/morris_home_data.js')}}"></script>
    <!-- end js include path -->

@foreach ($js_files as $js_file)
<script src="{{ $js_file }}"></script>
@endforeach
<script>
    if (typeof $ !== 'undefined') {
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    }
</script>
@yield('extra-js')
</body>

</html>