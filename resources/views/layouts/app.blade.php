<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <link rel="icon" type="image/png" href="../img/favicon.ico">
      <link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Taskmanager</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <!-- Bootstrap core CSS     -->
      <link href="../css/bootstrap.min.css" rel="stylesheet" />
      <link href="../css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
      <!--  CSS for Demo Purpose, don't include it in your project     -->
      <link href="../css/demo.css" rel="stylesheet" />
      <!--     Fonts and icons     -->
      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
      <link href="../css/nucleo-icons.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-expand-md fixed-top navbar-transparent">
         <div class="container">
            <div class="navbar-translate">
               <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-bar"></span>
               <span class="navbar-toggler-bar"></span>
               <span class="navbar-toggler-bar"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a href="{{ route('login') }}" class="nav-link"><i class="nc-icon nc-layout-11"></i>Sign In</a>
                  </li>
                  <li class="nav-item">
                     <a href="{{ route('register') }}" class="nav-link"><i class="nc-icon nc-book-bookmark"></i>  Sign Up</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

      @yield('content')

      
   </body>
   <!-- Core JS Files -->
   <script src="../js/jquery-3.2.1.js" type="text/javascript"></script>
   <script src="../js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
   <script src="../js/tether.min.js" type="text/javascript"></script>
   <script src="../js/bootstrap.min.js" type="text/javascript"></script>
   <!--  Paper Kit Initialization snd functons -->
   <script src="../js/paper-kit.js?v=2.0.1"></script>
</html>
