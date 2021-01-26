<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Easybima Coming Soon</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

</head>
<body>
    

	<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-b-30">
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
		<div class="flex-col-c w-full p-t-50 p-b-80">
			<h3 class="l1-txt1 txt-center p-b-10 mt-5" >
				Coming Soon
			</h3>

			<p class="txt-center l1-txt2 p-b-43 wsize2">
				Our website is under construction, follow us for update now!
			</p>

			<form class="flex-w flex-c-m w-full contact100-form validate-form" method="post" action="{{ route('coming.updates') }}">
                @csrf
				<div class="wrap-input100 validate-input where1" data-validate = "Name is required">
					<input class="s1-txt3 placeholder0 input100" type="text" name="name" placeholder="Name">
				</div>

				<div class="wrap-input100 validate-input where1" data-validate = "Email is required: ex@abc.xyz">
					<input class="s1-txt3 placeholder0 input100" type="text" name="email" placeholder="Email">
				</div>

				<button class="flex-c-m s1-txt4 size3 how-btn trans-04 where1">
					Get Updates
				</button>
				
			</form>			
		</div>

		<span class="s1-txt2 txt-center">
			@ 2020 Coming Soon
		</span>

	</div>



	
    
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/select2.min.js') }}"></script>
	
	<script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
