

          
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SaeeAM- Todo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">SaeeAM</h3>
          <nav class="nav nav-masthead justify-content-center">
            
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover ">
        <h1 class="cover-heading mt-4">SaeeAM Todo Crud In laravel.</h1>
        <a class="btn btn-success mb-4" href="https://www.youtube.com/playlist?list=PLNvfY3PFrqAGxdAql1583fDNAyEmWZBxX">Learning Resources Click here </a>
        <p class="lead">
          @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/student') }}" class="btn btn-outline-success">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                        @endif
                    @endauth
               
            @endif
        </p>
      </main>

     
    </div>


  </body>
</html>

