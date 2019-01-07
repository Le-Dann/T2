<?php
include 'includes/headerfooter.inc.php';
insertheadercon();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--custom css styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="css/sliders.css"/>
      <!--browser icon -->
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="images/ski-blue-hi.ICO"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Kontakt</title>
  </head>
  <body>
      <!--Bootstrap carousel image slider with one image-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/contactimg.jpg" alt="First slide" style="height: 700px;">
            <div class="carousel-caption d-none d-md-block">
                <h1>Kontaktieren Sie uns</h1>
                <p>Wir sind hier, um Ihnen bei der Suche nach dem gewünschten Service
                   zu helfen und um Ihre Fragen zu unserem Service zu beantworten
                  <br> <a href="kontakt.php#map"><i class="arrow down"></i></a>
                </p>
            </div>
          </div>
      </div>
   <div class="container-fluid">
    <h1>Kontakt Info.</h1>
      <!--Nested row grid format from Bootstrap used to design layout-->
   <div class="row">
   <div class="col-6">
     <div class="row">
       <div class="col-6">
          <h3>Zentrale</h3>
          <p>Coroporate HQ
          <br>Achieve3000
          <br>1985 Cedar Ave
          <br>Liestal, Baselland
          <br>
          <br>
          <br>
          <br>
          <br>
          </p>
       </div>
       <div class="col-6">
          <h3>Allgemeine Kontakt</h3>
          <p>Telefon: +41 73 737 73 73
          <br>Email: office@jestream.info
          </p>
       </div>
       
     </div>
     <div class="row">
        <div class="col-6">
           <h3>Dienste oder Anfrage</h3>
           <p>Telefon: +41 72 727 72 72
           <br>sales@jetstream.com
           </p>
        </div>
        <div class="col-6">
           <h3>Europaische Dienste</h3>
           <p>Telefon: +41 74 747 74 74
           <br>international@jetstream.com
           </p>
        </div>
      </div>
   </div>

     <!--Map takes up half of the grid colums on the right side-->
   <div class="col-6">
      <div id="map"></div>
   </div>
   </div>

     <!--Java Script used to implement google maps with API -->
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        var uluru = {lat: 47.480894, lng: 7.749674};
        // The map, centered at Uluru
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 15, center: uluru});
        // The marker, positioned at Uluru
        var marker = new google.maps.Marker({position: uluru, map: map});
      }
          </script>
          <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDV20rrQmDgUmDNeMW5flfpuozOUzPa7yQ&callback=initMap">
          </script>
    </div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>