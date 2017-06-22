<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="\css\detail.css">
</head>
<body>
<!-- My Nav bar -->
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
            <li><a href="universities.php" >Universities</a></li>
            <li ><a href="events.php">Events</a></li>
            <li><a href="tax.php">Tax</a></li>
            <li><a href="transport.html">Transport</a></li>
            <li><a href="contactus.php">Contact us</a></li>
          </ul>
        </div>

    </div>
  </div>
</div>
<!-- Corousel -->
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
  <!-- Carousel controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>
<!-- display new detailed -->
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Other articles</p>
                <div class="list-group">
                  <?
                  require_once('news.php');
                  listNews();
                  ?>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                require_once('news.php');
                showDetailedNews();
                ?>
                 <div class="well">
                <?php
                require_once('news.php');
                showComments();
                ?>
                </div>
            </div>
        </div>
    </div>
<!-- Input form for comments -->
    <div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="POST">
          <fieldset>
            <!-- Commentators name-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
            <!-- Commentators email-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
            <!-- Comment section -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
            <!-- Comment button -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Comment</button>
              </div>
            </div>
<!-- inserting comment into database -->
      <?php
        $db = new PDO("mysql:host=db;dbname=sildb","root","root");
        if(isset($_POST['name'], $_POST['message'])){
        $stmt = $db->prepare("INSERT INTO comments (cm_name, cm_email, comment, comment_id) values(:name, :email, :message, :id)");
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':message', $_POST['message']);
        $stmt->bindParam(':id', $id);
        $id =  $_GET['id'];
        $stmt->execute();
        }   
      ?>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<!-- Footer with link -->
<footer class="container-fluid text-center">
  <a href="rihardslodzins@gmail.com">info@studyinlatvia.com</a>
</footer>
 </body>
</html>
