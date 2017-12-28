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
    <link rel="stylesheet" href="../css/weather-icons.min.css">
    <link rel="stylesheet" href="../css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="../css/wu-icons.min.css">
  </head>

  <header>
    <!--Navigation bar-->
    <?php include("../includes/header.html"); ?>
    <!--end of Navigation bar-->
  </header>


  <body>
    <div class="container">

      <div class="row">

        <!--Today card-->
        <div class="col s12 m4 l3">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div>
                <div class="card-title">
                  Today
                  <i class="wu wu-white wu-chancerain" style="width: 60px; height: 60px; margin-top: -10px"></i>
                  <div class="card-subtitle" style="font-size: .6em; line-height: 12px;">
                    12/24/17
                  </div>
                </div>
              </div>

              <p>Cloudy with a few showers. High 61F. Winds SSE at 5 to 10 mph. Chance of rain 30%.</p>



              <div class="valign-wrapper">
                <div class="card-action">
                  <a class="modal-trigger" href="#modal1">1 Day History</a>
                  <a><i class="material-icons activator right" style="cursor: pointer;">more_vert</i></a>
                </div>
              </div>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>


        <!--Today card-->
        <div class="col s12 m4 l3">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div>
                <div class="card-title">
                  Monday
                  <i class="wu wu-white wu-chanceflurries" style="width: 60px; height: 60px; margin-top: -10px"></i>
                  <div class="card-subtitle" style="font-size: .6em; line-height: 12px;">
                    12/25/17
                  </div>
                </div>
              </div>



              <div class="valign-wrapper">
                <div class="card-action">
                  <a class="modal-trigger" href="#modal1">1 Day History</a>
                  <a><i class="material-icons activator right" style="cursor: pointer;">more_vert</i></a>
                </div>
              </div>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

        <!--Today card-->
        <div class="col s12 m4 l3">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div>
                <div class="card-title">
                  Tuesday
                  <i class="wu wu-white wu-partlycloudy" style="width: 60px; height: 60px; margin-top: -10px"></i>
                  <div class="card-subtitle" style="font-size: .6em; line-height: 12px;">
                    12/26/17
                  </div>
                </div>
              </div>



              <div class="valign-wrapper">
                <div class="card-action">
                  <a class="modal-trigger" href="#modal1">1 Day History</a>
                  <a><i class="material-icons activator right" style="cursor: pointer;">more_vert</i></a>
                </div>
              </div>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>


        <!--Today card-->
        <div class="col s12 m4 l3">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div>
                <div class="card-title">
                  Wednesday
                  <i class="wu wu-white wu-sunny" style="width: 60px; height: 60px; margin-top: -10px"></i>
                  <div class="card-subtitle" style="font-size: .6em; line-height: 12px;">
                    12/27/17
                  </div>
                </div>
              </div>



              <div class="valign-wrapper">
                <div class="card-action">
                  <a class="modal-trigger" href="#modal1">1 Day History</a>
                  <a><i class="material-icons activator right" style="cursor: pointer;">more_vert</i></a>
                </div>
              </div>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </body>

  <footer class="page-footer grey darken-3">
    <!--Footer content-->
    <?php include("../includes/footer.html"); ?>
    <!--end of Footer content-->
  </footer>

</html>
