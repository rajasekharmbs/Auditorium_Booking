<!DOCTYPE html>
<html>
<head>
  <title>Landing Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    #footer-main{
    position: absolute;
    background-color: black;
    color: white;
    right: 0;
    bottom: 0;
    left: 0;
    font-size: 13px;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" disabled="disabled">S & A</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <a href="login.php" class="btn">
          <span class="glyphicon glyphicon-log-in"></span> Log in 
        </a>
      </div>
      <a href="signup.php" class="btn">
        <span class="glyphicon glyphicon-user"></span> Sign Up 
      </a>
    </form>
  </div>
</nav>

<center><h3 style="color:red;font-size:25px">Auditorium Samples</h3></center>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 800px; margin: 0 auto">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="1.jpg" alt="Auditorium1">
      <div class="carousel-caption">
          <h3>Blue coloured</h3>
      </div>
    </div>

    <div class="item">
      <img src="2.jpg" alt="Auditorium2">
      <div class="carousel-caption">
          <h3>Red coloured</h3>
      </div>
    </div>

    <div class="item">
      <img src="3.jpg" alt="Auditorium3">
      <div class="carousel-caption">
          <h3>General Auditorium</h3>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>






<footer id="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
          <ul class="list-unstyled">
            <li><a href="#" target="_blank">About Me</a></li>
          </ul>
      </div>
      <div class="col-sm-3">
        <ul class="list-unstyled">
          <a href="#"><i class="fa fa-facebook-official" style="font-size:24px"></i></a>
          <a href="#"><i class="fa fa-twitter-square" style="font-size:24px"></i></a>
          <a href="#"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
        </ul>
      </div>
      <div class="col-sm-3">
        <h6>Copyright &copy;<?php echo date('Y');?> <a href="#" target="_blank">M.B.S.Rajasekhar</a></h6>
      </div>
    </div>
  </div>
</footer> 



</body>
</html>
