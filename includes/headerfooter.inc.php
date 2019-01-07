<?php
//Inserts Header on contact page with conatact link as active
function insertheadercon()
{
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="landingpage.php">
    <img src="images/icon-ski-md.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <i>Jetstream-Services</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="service.php">Online Anmeldung<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="kontakt.php">Kontakte</a>
        </li>
      </ul>
    </div>
  </nav>';      
}

//Inserts Header on contact page with conatact home brand link as active
function insertheaderhome()
{
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="landingpage.php">
    <img src="images/icon-ski-md.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <i>Jetstream-Services</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav"> 
        <li class="nav-item">
          <a class="nav-link" href="service.php">Online Anmeldung<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakt.php">Kontakte</a>
        </li>
      </ul>
    </div>
  </nav>';      
}

//Inserts Header on contact page with online application link as active
function insertheaderservice()
{
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="landingpage.php">
    <img src="images/icon-ski-md.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <i>Jetstream-Services</i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="service.php">Online Anmeldung<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakt.php">Kontakte</a>
        </li>
      </ul>
    </div>
  </nav>';      
}
?>
