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
    @yield('styles')
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue" data-active-color="danger">
            <div class="logo">
                <a href="{{ route('home') }}" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{ asset('frontend/imgs/fav.png') }}">
                    </div>
                </a>
                <a href="{{ route('home') }}" class="simple-text logo-normal">
                    <div class="logo-image-big">
                        Easybima
                    </div>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <i class="nc-icon nc-layout-11"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    @can('isAllowed', 'admin:superadmin'))
                        <li>
                            <a href="{{ route('customersHome') }}">
                                <i class="nc-icon nc-single-02"></i>
                                
                                <p>Customers</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('policies.index') }}">
                                <i class="nc-icon nc-briefcase-24"></i>
                                <p>Policies</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('companies.index') }}">
                                <i class="nc-icon nc-shop"></i>
                                <p>Companies</p>
                            </a>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
        <div class="main-panel">

            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-icon btn-round">
                                <i class="nc-icon nc-minimal-right text-center visible-on-sidebar-mini"></i>
                                <i class="nc-icon nc-minimal-left text-center visible-on-sidebar-regular"></i>
                            </button>
                        </div>
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="{{ route('dashboard') }}">Easybima Admin Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href=""
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-md-none d-sm-block"></span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('password.request') }}">Reset Password</a>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" href="{{ route('logout') }}">Logout</button>
                                    </form>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
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
    @yield('scripts')

    @if(session()->has('success'))
        <script>
            $.notify({
                message: "{{ session()->get('success') }}"

            }, {
                type: 'success',
                timer: 3000,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        </script>
    
    @endif
    @if(session()->has('error'))
    <script>
        $.notify({
            message: "{{ session()->get('error') }}"

        }, {
            type: 'danger',
            timer: 3000,
            placement: {
                from: 'top',
                align: 'right'
            }
        });
    </script>

@endif
</body>

</html>
