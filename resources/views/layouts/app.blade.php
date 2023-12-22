<!DOCTYPE html>
<html lang="es">

<head>

    {{-- Metas --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Panel administración contenido" />
    <meta name="csrf-token" content="{{ csrf_token() }}" /><!-- CSRF Token -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_admin/images/favicon.ico') }}" />
    <title>Futbolme - Panel Admin</title>

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('assets_admin/css/icons.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets_admin/css/app-creative.min.css') }}" type="text/css" id="app-style" />

    {{-- Datatable --}}
    <link href="{{ asset('assets_admin/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/css/vendor/fixedHeader.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_admin/css/vendor/fixedColumns.bootstrap5.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    {{-- ESTA LINEA DE AQUI ABAJO LA COMENTE PERO NO SE PARA QUE SIRVE HAY QUE INVESTIGAR --}}
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>

<body class="loading" data-layout-color="light" data-layout="topnav" data-layout-mode="fluid"
    data-rightbar-onstart="true">

    <div class="alert alert-generic-panel" role="alert"
        style="display:none;position: absolute;z-index: 9999;top: 99px;right: 30px;padding: 24px;font-size: 18px;font-weight: bold;">
        A simple success alert—check it out!
    </div>
    <!-- Begin page -->
    <div class="wrapper">

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <div class="content">
                @guest <!-- Authentication Links -->
                @else
                    @include('layouts.navbar')

                @endguest



                <!-- Start Content-->
                <div class="container-fluid">

                    @yield('content')

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            {{-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6"> --}}
            {{-- © Futbolme.com --}}
            {{-- </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block"> --}}
            {{-- <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a> --}}
            {{-- </div>
                            </div>
                        </div>
                    </div>
                </footer> --}}
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="end-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="end-bar-toggle float-end">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Settings</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar>

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Customize </strong> the overall color scheme, layout width, etc.
                </div>

                <!-- Settings -->
                <h5 class="mt-3">Color Scheme</h5>
                <hr class="mt-1" />

                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                        id="light-mode-check" checked />
                    <label class="form-check-label" for="light-mode-check">Light Mode</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                        id="dark-mode-check" />
                    <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                </div>

                <!-- Width -->
                <h5 class="mt-4">Width</h5>
                <hr class="mt-1" />
                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check"
                        checked />
                    <label class="form-check-label" for="fluid-check">Fluid</label>
                </div>
                <div class="form-check form-switch mb-1">
                    <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
                    <label class="form-check-label" for="boxed-check">Boxed</label>
                </div>


                <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                    <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                        class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase
                        Now</a>
                </div>
            </div> <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <!-- bundle -->
    <script src="{{ asset('assets_admin/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/app.min.js') }}"></script>

    {{-- datatable --}}
    <script src="{{ asset('assets_admin/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/fixedColumns.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/vendor/fixedHeader.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/pages/demo.datatable-init.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    {{-- custom scripts --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/customVars.js') }}"></script>
    <script src="{{ asset('assets_admin/js/ligas-torneos.js') }}"></script>
    <script src="{{ asset('assets_admin/js/ligas-torneos-active.js') }}"></script>
    <script src="{{ asset('assets_admin/js/update-data-partidos.js') }}"></script>
    <script src="{{ asset('assets_admin/js/reset-panel-admin.js') }}"></script>
    <script src="{{ asset('assets_admin/js/editar-partido.js') }}"></script>

    {{-- cdn para utilizar socket io --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.0.0/socket.io.min.js"></script>
    <script src="{{ asset('assets_admin/js/response-server.js') }}"></script>
    <script>
        var adminEditarPartido = "{{ route('editarPartido') }}";
        // var apiUrlEvents = "{{ route('apiBetsapiEventos') }}";
    </script>


</body>

</html>
