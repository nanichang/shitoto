
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
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand mr-auto mr-lg-0" href="/">Shitoto</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="">Admin Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.links.index') }}">All Links</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.links.create') }}">Create Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dash.admin.index') }}">Users</a>
          </li>
        
      </div>
    </nav>


<main role="main" class="container" style="margin-top: 80px">
  <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded shadow-sm">
    <div class="lh-100">
      <h6 class="mb-0 text-white lh-100">Create shareable links</h6>
    </div>
  </div>


  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-20">Create an account to start earning browsing data by sharing links</h6>

    <form method="post" action="{{ route('admin.links.store') }}">
			@csrf
			<div class="form-group">
				<label for="title">Title </label>
				<input type="text" name="title" id="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="url">Link URL</label>
				<input type="url" name="url" id="url" class="form-control">
			</div>
			

			<button class="btn btn-success btn-lg btn-block" type="submit">Submit Link</button>
			
		</form>


       
 
    <small class="d-block text-right mt-3">
      <a href="#"></a>
    </small>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"><\/script>')</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
       
	</body>
</html>
