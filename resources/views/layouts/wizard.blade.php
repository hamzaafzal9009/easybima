<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('frontend/imgs/fav.png') }}" type="image/gif" sizes="16x16">

    <title>Easybima - @yield('title')</title>



    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="{{ asset('form-wizard/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('form-wizard/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />
    @yield('style')
	<style>
		.main-logo{
			height: 30px;
			margin: 5px
		}
	</style>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
				<a class="" href="/">
					<img alt="Logo" class="main-logo" src="{{ asset('frontend/imgs/logo.png') }}">
				</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div>
                
                <ul class="nav navbar-nav pull-right">
                    <li><a href="{{ route('home') }}">Back To Home</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    @yield('content')
</body>
<!--   Core JS Files   -->
<script src="{{ asset('form-wizard/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('form-wizard/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('form-wizard/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<script src="{{ asset('form-wizard/js/material-bootstrap-wizard.js') }}"></script>
<script src="{{ asset('form-wizard/js/jquery.validate.min.js') }}"></script>

</html>
