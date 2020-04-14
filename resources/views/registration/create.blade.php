<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Shitoto.com - Earn Browsing Data By Sharing Links</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

	<style type="text/css">
		.center {
		  margin: auto;
		  width: 50%;
		  /*border: 3px solid green;*/
		  padding: 10px;
		}
	</style>
</head>
<body class="center" style="vertical-align: middle;">

	<div class="container">
		<form method="post" action="{{ route('auth.register.post') }}">
			@csrf
			<div class="form-group">
				<label for="name">Full Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control">
			</div>

			<div class="form-group">
				<label for="phone">Phone</label>
				<input type="text" name="phone" id="phone" class="form-control">
			</div>	

			<div class="form-group">
				<label for="network_name">Select Network</label>
				<select name="network_name" id="network_name" class="form-control">
					<option>Select</option>
					<option value="Airtel">Airtel</option>
					<option value="Glo">Glo</option>
					<option value="MTN" selected>MTN</option>
					<option value="9Mobile">9Mobile</option>
				</select>
			</div>			

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>

			<div class="form-group">
				<label for="confirm_password">Confirm Password</label>
				<input type="password" name="confirm_password" id="confirm_password" class="form-control">
			</div>

			<button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
			<p>Already have an account? <a href="{{ route('auth.login.get') }}" >Login</a></p>
		</form>
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/offcanvas.js') }}"></script>
</body>
</html>