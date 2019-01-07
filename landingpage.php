<?php
include 'includes/headerfooter.inc.php';
insertheaderhome();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--custom css styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="css/sliders.css" />
    <link rel="stylesheet" type="text/css" href="css/tables.css" />
      <!--browser icon -->
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/ski-blue-hi.ICO"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ski-Service</title>
  </head>
  <body>
    <!--Bootstrap carousel slides through 4 images-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000" data-pause="false">
      <!--Indicators for number item in carousel image slider shown at the bottom -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" id = "fullimage">
    <div class="carousel-item active">
        <!--Each carousel slide stores full size image with caption -->
      <img class="new" src="images/image01.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <h1>Kleiner Service oder Grosser Service</h1> 
      <h2>Das Perfekte Ski Service für Sie</h2>
      <p>Wählen Sie aus unseren unterschiedlich großen Paketen den richtigen Skiservice für Sie aus</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/image002.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
      <h1>Heisswachen</h1>
      <h2>Heisswachs für Ihre Skiausrüstung</h2>
      <p>Wir arbeiten mit dem aktuellsten "Cutting-edge" Maschinen, um qualitativ hochwertige Resultaten zu erzielen</p>
      </div>
    </div>
    <div class="carousel-item">
       <img class="d-block w-100" src="images/image003.jpg" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
          <h1>Fell zuscheiden, Montieren und einstellen</h1>
          <h2>Wir machen es wieder wie neu</h2>
          <p>Wir spezialisieren auch im Bereich Bindung montieren und einstellen. Oder kommen Sie auch zu uns, wenn Sie das Fell zuscheiden müssen</p>
        </div>
    </div>
    <div class="carousel-item">
       <img class="d-block w-100" src="images/image004.jpg" alt="Fourth slide">
       <div class="carousel-caption d-none d-md-block">
         <h1>Und Noch Viel Mehr</h1>
          <h2>Wir bieten auch Rennski-Service und mehr</h2>
          <p>Schauen Sie unsere Angeboten an, melden Sie bei uns an und feiern Sie Ihre Skireise richtig mit Jetstream-Services</p>
        </div>
    </div>
  </div>
    <!--Carousel control buttons to move image slider right and left-->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  
  <div class="container">
      <!--Service offers shown below carousel -->
      <h1>Ski Dienste Paketen</h1>
        <!--Packet price tables -->
        <div class="columns">
            <ul class="price">
              <li class="header">Kleiner Service</li>
              <li class="grey">45.00 CHF</li>
              <li>Basetuning</li>
              <li>Kantentuning</li>
              <li>Heisswachen</li>
       
            </ul>
          </div>
          
          <div class="columns">
            <ul class="price">
              <li class="header">Grosser Service</li>
              <li class="grey">60.00 CHF</li>
              <li>P-Tex</li>
              <li>Basetuning</li>
              <li>Kantentuning</li>
              <li>Heisswachen</li>
      
            </ul>
          </div>
          
          <div class="columns">
            <ul class="price">
              <li class="header">Rennski Service</li>
              <li class="grey">90.00 CHF</li>
              <li>P-Tex</li>
              <li>Basetuning</li>
              <li>Kantentuning</li>
              <li>Heisswachen</li>
              <li>Fell zushcneiden</li>
            </ul>
          </div>

            <!--Ski service table shows list of individual services-->
          <h1>Ski Dienste</h1>
          <table>
              <tr>
                  <th>Dienste</th>
                  <th>Preis</th>
              </tr>
                <tr>
                    <td>Bindung montieren und einstellen</td>
                    <td>30 CHF</td>
                  </tr>
                  <tr>
                    <td>Heisswachen</td>
                    <td>10 CHF</td>
                  </tr>
                  <tr>
                    <td>Fellzuschneiden</td>
                    <td>20 CHF</td>
                  </tr>
        </table>
      <h1>Prioritäten</h1>
        <!--Priority service table -->
      <table style="margin-bottom:10px">
            <tr>
                <th>Priorität</th>
                <th>Zusätzliche Tage</th>
                <th>Tage bis zur Fertigung</th>
                <th>Preis Zuschlag</th>
            </tr>
              <tr>
                  <td>Tief</td>
                  <td>+5</td>
                  <td>12</td>
                  <td>0 CHF</td>
                </tr>
                <tr>
                  <td>Standard</td>
                  <td>0</td>
                  <td>7</td>
                  <td>10 CHF</td>
                </tr>
                <tr>
                  <td>Express</td>
                  <td>-2</td>
                  <td>5</td>
                  <td>12 CHF</td>
                </tr>
      </table>
      </div>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>