<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Dashboard Template for Bootstrap</title>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

      <div class="row no-gutters">
        @include('layouts.sidenav')        

        <main role="main" class="main col-md-10">
          @include('layouts.nav')

          <div id="content-container">

            @include('layouts.title')

            @yield('content')
          
          </div>

        
        </main>
      </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>