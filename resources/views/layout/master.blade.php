<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
</head>
<body>
	@section('menu')
	<div class='container'>
		<div class="row">
			<ul class='nav nav-pills'>
				<li>
					<a href="{{url('topic')}}">Topic</a>
				</li>
				<li>
					<a href="{{url('topic/create')}}">New Topic</a>
				</li>
				<li>

				</li>
			</ul>
		</div>
		
	<div class="row">
		<div class='container col-lg-12 md-12 sm-12'>		
			@yield('content')
		</div>
	</div>
</div>
</body>
</html>