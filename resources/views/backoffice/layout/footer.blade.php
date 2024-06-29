<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                © Copyright
                <script>
                    document.write(new Date().getFullYear())
                </script>  || ALL RIGHT RESERVED TO IGSK AND DEVELOP BY USSBD.


            </div>
        </div>
    </div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">

        <div class="rightbar-title d-flex align-items-center px-3 py-4">

            <h5 class="m-0 me-2">Settings</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="mt-0" />


        <div class="px-4 py-2">
            <h6 class="mb-3">Select Custome Colors</h6>
            <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-default"
                    value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')"
                    checked>
                <label class="form-check-label" for="theme-default">Default</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-red"
                    value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                <label class="form-check-label" for="theme-red">Red</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input theme-color" type="radio" name="theme-mode" id="theme-teal"
                    value="teal" onchange="document.documentElement.setAttribute('data-theme-mode', 'teal')">
                <label class="form-check-label" for="theme-teal">Teal</label>
            </div>
        </div>


        <h6 class="text-center mb-0 mt-3">Choose Layouts</h6>

        <div class="p-4">
            <div class="mb-2">
                <img src="laravel/assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                <label class="form-check-label" for="light-mode-switch">Light Mode</label>
            </div>

            <div class="mb-2">
                <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="">
            </div>
            <div class="form-check form-switch mb-3">
                <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                    data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
            </div>
{{-- 
            <div class="mb-2">
                <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="">
            </div> --}}
            {{-- <div class="form-check form-switch mb-5">
                <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                    data-appStyle="assets/css/app-rtl.min.css" />
                <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
            </div> --}}


        </div>

    </div> <!-- end slimscroll-menu-->
</div>




<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Morris Chart -->
<script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>



{{-- toster js  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('success'))
    <script>
        toastr.options = {
            'progressBar': true,
            'closeButton': true,
            "positionClass": "toast-top-right",
            "marginTop": "10rem",
        }
        toastr.success("{{ Session::get('success') }}");
        var toastrContainer = document.querySelector('.toast-top-right');
        toastrContainer.style.marginTop = '4.5rem';
    </script>
@endif
{{-- delete massage  --}}
@if (Session::has('delete'))
    <script>
        toastr.options = {
            'progressBar': true,
            'closeButton': true,
            "positionClass": "toast-top-right",
            "marginTop": "10rem",
        }
        toastr.warning("{{ Session::get('delete') }}");
        var toastrContainer = document.querySelector('.toast-top-right');
        toastrContainer.style.marginTop = '4.5rem';
    </script>
@endif

{{-- error massage  --}}
@if (Session::has('errors'))
    <script>
        toastr.options = {
            'progressBar': true,
            'closeButton': true,
            "positionClass": "toast-top-right",
            "marginTop": "10rem",
        }
        toastr.dengar("{{ Session::get('errors') }}");
        var toastrContainer = document.querySelector('.toast-top-right');
        toastrContainer.style.marginTop = '4.5rem';
    </script>
@endif


{{-- sweet alert massages --}}
{{-- <script src="{{ asset('assets/js/pages/sweet-alerts.init.js')}}"></script>
<script>
    function confirmDelete() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, end the day!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Submit the form
                document.getElementById('dayEndForm').submit();
            }
        });
    }
</script> --}}


{{-- custom js  --}}
@stack('scripts')
</body>

</html>
