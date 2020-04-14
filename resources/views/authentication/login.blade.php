<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

</head>
<body style="vertical-align: middle;">

	<div class="container">
		<form method="post" action="{{ route('auth.login.post') }}">
			@csrf		

			<div class="form-group">
				<label for="login">Email or Phone</label>
				<input type="text" name="login" id="login" class="form-control">
			</div>	

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>

			<button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
			<p>Don't have an account? <a href="{{ route('auth.register.get') }}" >Register</a></p>
		</form>
	</div>

	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script> -->
	<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>