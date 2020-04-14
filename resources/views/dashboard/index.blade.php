
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Offcanvas template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/offcanvas/">

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
    <link href="offcanvas.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand mr-auto mr-lg-0" href="/">Shitoto</a>
  <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>


<main role="main" class="container" style="margin-top: 80px">
  @if(Sentinel::check())
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-dark rounded shadow-sm">
      <div class="lh-100">
        <h6 class="mb-0 text-white lh-100">{{ $user->shared_points }}</h6>
        <small>Data Points</small>
      </div>
    </div>
  @endif


  <div class="my-3 p-3 bg-white rounded shadow-sm">
    <h6 class="border-bottom border-gray pb-2 mb-0">Shared Links</h6>

    @if(count($links) > 1)
      @foreach($links as $link)
        <div class="media text-muted pt-3">
          <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">{{ $link->title }}</strong>
              <!-- <a href="#">Share</a> -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{ $link->id }}">
                Share now
              </button>
              
            </div>
            <!-- <span class="d-block"> -->
            
            </span>
          </div>
        </div>

        <!-- Modal -->
       <div class="modal fade" id="exampleModalCenter{{ $link->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <form action="{{ route('shared.post', $link->id) }}" method="post">
                  @csrf
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Share Now </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <a class="btn btn-primary btn-sm" href="http://www.facebook.com/share.php?u={{ $link->url }}" target="_blank">Facebook</a>
                    <a class="btn btn-primary btn-sm" href="https://twitter.com/share?url={{ $link->url }}&amp;text={{ $link->title }}&amp;hashtags=YOUR_HASHTAGS" target="_blank">Twitter</a>
                    <a class="btn btn-primary btn-sm" href="https://web.whatsapp.com/send?text={{ $link->url }}" target="_blank">Whatsapp</a>
                    <a class="btn btn-primary btn-sm" href="https://plus.google.com/share?url={{ $link->url }}" target="_blank">Google Plus</a>
                    <a class="btn btn-primary btn-sm" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ $link->url }}" target="_blank">Linkedin</a>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Completed</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      @endforeach
    @else
      <div class="media text-muted pt-3">
        <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
        <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
          <div class="d-flex justify-content-between align-items-center w-100">
            <strong class="text-gray-dark">No Shared Link</strong>
            <a href="#">Follow</a>
          </div>
        </div>
      </div>
    @endif


       
 
    <small class="d-block text-right mt-3">
      <a href="#"></a>
    </small>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"><\/script>')</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="offcanvas.js"></script></body>
</html>
