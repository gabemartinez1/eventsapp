<!-- Stored in resources/views/layouts/master.blade.php -->

<html>
    <head>
        <title>HAM Events - @yield('title')</title>

        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>
    <body>
        @section('navbar')
            <nav>
                <div class="nav-wrapper white">
               
                <a href="/" class="brand-logo black-text">&nbsp; Harvard Art Musuems/ Events</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="events" class="black-text">Events</a></li>
                  <li><a href="new-event" class="black-text">New Event</a></li>
                  <li><a href="logout" class="black-text">Logout</a></li>

                </ul>
                <ul class="side-nav" id="mobile-demo">
                  <li><a href="sass.html">Events</a></li>
                  <li><a href="badges.html">New Event</a></li>

                </ul>
              </div>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            <footer class="page-footer white">
                <div class="footer-copyright">
                  <div class="container black-text">
                  © 2016 Harvard Art Museums
                  </div>
                </div>
            </footer>
        @show



        
    </body>
</html>