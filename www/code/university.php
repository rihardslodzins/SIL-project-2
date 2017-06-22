<!DOCTYPE html>
<html lang="en">
<head>
  <title>News</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="\css\detail.css">
</head>
<body>
<!-- Nav bar -->
<div class="navbar-wrapper">
  <div class="container">
    <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
	    <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </a>
        <a class="navbar-brand" href="#">Study in Latvia</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            <li class="active"><a href="universities.php" >Universities</a></li>
            <li ><a href="events.php">Events</a></li>
            <li><a href="tax.php">Tax</a></li>
            <li><a href="transport.html">Transport</a></li>
            <li><a href="contactus.php">Contact us</a></li>
          </ul>
        </div>
    </div>
  </div>
</div>
<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active">
      <img src="\images\universities1.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
             <h3>Universities</h3>
          <p>Best universities in Latvia</p>
          </div>
      </div>
    </div>
    <div class="item">
      <img src="\images\transport1.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
            <h3>Transport</h3>
          <p>Explore the transportation system in Riga</p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="\images\study1.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
                  <h3>Event</h3>
        <p>Attend best events suited for international student</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls for carousel -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>
 <!-- Middle container Uni list -->
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Universities</p>
                <div class="list-group">
                  <?
                  require_once('uni.php');
                  listUnis();
                  ?>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                require_once('uni.php');
                showDetailedUni();
                ?>
                 <div class="well">
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
	</div>
</div>
 </body>
 <!-- Footer -->
<footer class="container-fluid text-center">
  <a href="rihardslodzins@gmail.com">info@studyinlatvia.com</a>
</footer>
</html>