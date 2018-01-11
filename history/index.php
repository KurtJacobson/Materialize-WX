<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">

  </head>

  <header>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper z-depth-2 grey darken-1">
          <a href="/md/" class="brand-logo" style="padding-left: 10px">Weather</a>
          <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>

          <!--  Regular top nav used on large screens    -->
          <ul class="right hide-on-med-and-down">
            <li><a href="/md/">Current</a></li>
            <li><a href="/md/forecast">Forecast</a></li>
            <li class="active"><a href="/md/history/">History</a></li>
            <li><a href="/md/almanac/">Almanac</a></li>
            <li><a href="/md/station/">Station</a></li>
            <li><a href="/md/about/">About</a></li>
          </ul>

          <!--   Hamburger nav used on small screens    -->
          <div class="side-nav grey darken-2" id="mobile-nav">
            <div style="height: 100px;">
              <i class="wi wi-rain-mix center" style="font-size: 40pt; padding: 10px"></i>
            </div>
            <ul class="white" style="height: calc(100% - 60px)">
            <li><a href="/md/">Current</a></li>
            <li><a href="/md/forecast">Forecast</a></li>
            <li class="active"><a href="/md/history/">History</a></li>
            <li><a href="/md/almanac/">Almanac</a></li>
            <li><a href="/md/station/">Station</a></li>
            <li><a href="/md/about/">About</a></li>
            </ul>
          </div>

        </div>
      </nav>
    </div>

    <script>
    // Initialize collapse button
    $(".button-collapse").sideNav();
    </script>
  </header>



  <body>
    <div style="margin: .5rem;">
      <pre style="max-width: 100ch;">
        <?php include("/home/wx/weewx/public_html/NOAA/NOAA-2017.txt"); ?>
      </pre>
    </div>
  </body>

  <footer class="page-footer grey darken-3">
    <!--Footer content-->
    <?php include("../includes/footer.html"); ?>
    <!--end of Footer content-->
  </footer>

</html>
