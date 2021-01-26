<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/imgs/fav.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('frontend/imgs/fav.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Easybima - @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('panel/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('panel/css/paper-dashboard.css') }}" rel="stylesheet" />
    <style>
        .main-panel{
            width:100%
        }
    </style>
</head>

<body class="">
    <div class="wrapper ">
       
        <div class="main-panel">
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="credits ml-auto">
                            <span class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())

                                </script>, made with <i class="fa fa-heart heart"></i> by Easybima
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('panel/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('panel/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('panel/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/bootstrap-selectpicker.js') }}"></script>

    <script src="{{ asset('panel/js/plugins/bootstrap-datetimepicker.js') }}"></script>

    <script src="{{ asset('panel/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/jquery-jvectormap.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/nouislider.min.js') }}"></script>
    <script src="{{ asset('panel/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('panel/js/paper-dashboard.min.js') }}"></script>
    

    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();


            demo.initVectorMap();

        });

    </script>
</body>

</html>
