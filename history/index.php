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
    <!--Navigation bar-->
    <?php include("../includes/header.html"); ?>
    <!--end of Navigation bar-->
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
