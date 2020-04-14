
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Shitoto.com - Earn Browsing Data By Sharing Links</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">

    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      a.disabled {
        pointer-events: none;
        cursor: default;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/offcanvas.css') }}" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand mr-auto mr-lg-0" href="/">Shitoto.com</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

    </nav>


<main role="main" class="container" style="margin-top: 80px">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded shadow-sm">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">How to Earn Browsing Data</h6>
      <small>
				<ul>
					<li>Click on "Share Now" select Twitter or Facebook or both to share.</li>
					<!-- <li>Add the last 4 digits of your phone number using # tag (e.g. #9214)</li> -->
					<li>Click Completed when done.</li>
					<li>The more link you share on your page, the more you earn </li>
					<li>Payouts to your registered phone number is carried out at every 200MB. </li>
					<li>Request for payouts through Twitter and Facebook DMs or Mentions with your phone number</li>
				</ul>
			</small>
			<h6>NOTE: We Compare your points against the links on your social media profile, they have to match.</h6>
    </div>
  </div>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-20">Create an account to start earning browsing data by sharing links</h6>

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
			<p style="margin-top:10px">Already have an account? <a href="{{ route('auth.login.get') }}" >Login</a></p>
		</form>


       
 
    <small class="d-block text-right mt-3">
      <a href="#"></a>
    </small>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"><\/script>')</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="{{ URL::asset('assets/js/offcanvas.js') }}"></script>
	</body>
</html>
