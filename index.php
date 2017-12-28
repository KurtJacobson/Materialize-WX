<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> 
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <!--  Highcharts  -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>

    <!--  Needed for wind barbs plot  -->
    <script src="https://code.highcharts.com/modules/windbarb.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/weather-icons.min.css">
    <link rel="stylesheet" href="css/weather-icons-wind.min.css">
    <link rel="stylesheet" href="css/wu-icons.min.css">
  </head>

  <header>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper z-depth-2 grey darken-1">
          <a href="/md/" class="brand-logo" style="padding-left: 10px">Weather</a>
          <a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>

          <!--  Regular top nav used on large screens    -->
          <ul class="right hide-on-med-and-down">
            <li class="active"><a href="/md/">Current</a></li>
            <li><a href="/md/forecast">Forecast</a></li>
            <li><a href="/md/history/">History</a></li>
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
            <li class="active"><a href="/md/">Current</a></li>
            <li><a href="/md/forecast">Forecast</a></li>
            <li><a href="/md/history/">History</a></li>
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

    <div class="container">

      <!--Notification card-->
      <div id="notification" class="notification card red darken-1">
        <p class="card-content white-text">
          Real time updates have stopped. Refresh the page to continue.
        </p>
        <a onclick="$('#notification').fadeOut();">
          <i class="material-icons right white-text">close</i>
        </a>
      </div>
      <!--End notification card-->


      <div class="row">

        <!--Temperature card-->
        <div class="col s12 m6 l4">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div class="card-title">
                Temperature
                <i class="wi wi-thermometer"></i>
              </div>
              <div>
                <div id="out-temp" class="primary-card-value">
                  46<sup>°F</sup>
                  <i class="wi wi-direction-down"></i>
                </div>
                <div class="stn-high-low" style="text-align: center;">
                  <table class="high-low-table">
                    <caption>Feels like: <span id="feels-like-temp">120 °F</span></caption>
                    <tr>
                      <th style="border-right: 1px solid grey;">High</th>
                      <th>Low</th>
                    </tr>
                    <tr>
                      <td id="max-out-temp" style="border-right: 1px solid grey;">80.4 °F</td>
                      <td id="min-out-temp">-3.9 °F</td>
                    </tr>
                  </table>
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

        <!--Humidity card-->
        <div class="col s12 m6 l4">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div class="card-title">
                Humidity
                <i class="wi wi-humidity"></i>
              </div>
              <div>
                <div id="out-temp" class="primary-card-value">
                  55<sup>%</sup>
                  <i class="wi wi-direction-right"></i>
                </div>
                <div class="stn-high-low" style="text-align: center;">
                  <table class="high-low-table">
                    <caption>Dewpoint: 34 &degF</caption>
                    <tr>
                      <th style="border-right: 1px solid grey;">High</th>
                      <th>Low</th>
                    </tr>
                    <tr>
                      <td style="border-right: 1px solid grey;">63 %</td>
                      <td>35 %</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-action">
              <a class="modal-trigger" href="#modal1">1 Day History</a>
            </div>
          </div>
        </div>

        <!--Pressure card-->
        <div class="col s12 m6 l4">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div class="card-title">
                Pressure
                <i class="wi wi-barometer"></i>
              </div>
              <div>
                <div id="out-temp" class="primary-card-value">
                  55<sup>inHg</sup>
                  <i class="wi wi-direction-up"></i>
                </div>
                <div class="stn-high-low" style="text-align: center;">
                  <table class="high-low-table">
                    <caption>Feels like: 120 inHg</caption>
                    <tr>
                      <th style="border-right: 1px solid grey;">High</th>
                      <th>Low</th>
                    </tr>
                    <tr>
                      <td style="border-right: 1px solid grey;">63 inHg</td>
                      <td>35 inHg</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-action">
              <a class="modal-trigger" href="#modal1">1 Day History</a>
            </div>
          </div>
        </div>

        <!--Solar Radiation card-->
        <div class="col s12 m6 l4">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div class="card-title">
                Solar Radiation
                <i class="wi wi-day-sunny"></i>
              </div>
              <div>
                <div id="out-temp" class="primary-card-value">
                  139<sup> W/m²</sup>
                  <i class="wi wi-direction-up"></i>
                </div>
                <div class="stn-high-low" style="text-align: center;">
                  <table class="high-low-table">
                    <caption>Feels like: 120 inHg</caption>
                    <tr>
                      <th style="border-right: 1px solid grey;">High</th>
                      <th>Low</th>
                    </tr>
                    <tr>
                      <td style="border-right: 1px solid grey;">63 inHg</td>
                      <td>35 inHg</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-action">
              <a class="modal-trigger" href="#modal1">1 Day History</a>
            </div>
          </div>
        </div>

        <!--Wind card-->
        <div class="col s12 m6 l4">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div class="card-title">
                Wind
                <i class="wi wi-strong-wind"></i>
              </div>
              <div>
                <div id="out-temp" class="primary-card-value">
                  10.3<sup>mph</sup>
                </div>
                <div class="stn-high-low" style="text-align: center;">
                  <table class="high-low-table">
                    <caption>Direction: SSW (120°)</caption>
                    <tr>
                      <th class="tooltipped" data-position="bottom" 
                          data-delay="50" data-tooltip="Avg. over last 15 min"
                          style="border-right: 1px solid grey; cursor: help;">
                          Avg.
                      </th>
                      <th class="tooltipped" data-position="bottom" 
                          data-delay="50" data-tooltip="In the last 15 min"
                          style="cursor: help">
                          Gust
                      </th>
                    </tr>
                    <tr>
                      <td style="border-right: 1px solid grey;">3.7 mph</td>
                      <td>14.2 mph</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-action">
              <a class="modal-trigger" href="#modal1">1 Day History</a>
            </div>
          </div>
        </div>

        <!--Rain card-->
        <div class="col s12 m6 l4">
          <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
              <div class="card-title">
                Rain
                <i class="wi wi-rain tooltipped" data-position="bottom" data-delay="50" data-tooltip="Beaufort Wind Scale"></i>
              </div>
              <div>
                <div id="out-temp" class="primary-card-value">
                  0.12<sup>in</sup>
                </div>
                <div class="stn-high-low" style="text-align: center;">
                  <table class="high-low-table">
                    <caption>Rain Rate: 2 in/hr</caption>
                    <tr>
                      <th style="border-right: 1px solid grey;">Peak Rate</th>
                      <th>Week Total</th>
                    </tr>
                    <tr>
                      <td style="border-right: 1px solid grey;">3.7 in/hr</td>
                      <td>14.2 in</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-action">
              <a class="modal-trigger" href="#modal1">1 Day History</a>
            </div>
          </div>
        </div>

      </div>


      <!-- Modal Structure -->
      <div id="modal1" class="modal" style="overflow: false; max-height: 100%;">
            <h5 style="padding-left: 10px;">24hr Temperature Trend</h4>
          <div id="wind_barbs" class="modal_plot"></div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Close</a>
        </div>
      </div>

      <script src="script.js"></script>

      <script>
        $(document).ready(function(){
          // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
          $('.modal').modal();
        });
      </script>

    </div>
  </body>

  <footer class="page-footer grey darken-3">
    <!--Footer content-->
    <?php include("includes/footer.html"); ?>
    <!--end of Footer content-->
  </footer>

</html>

