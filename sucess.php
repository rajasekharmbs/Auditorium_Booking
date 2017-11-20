<?php 

session_start();

if(!isset($_SESSION['name'])){
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success!!!</title>
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" disabled="disabled">S & A</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <form class="navbar-form navbar-right">

      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['name'];?>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">

        <?php 
        $a=array('Profile'=>'profile.php','Booking history'=>'history.php','Logout'=>'logout.php');
        foreach($a as $i=>$j) {
          echo "<li><a href='$j'>$i</a></li>";
        }
        ?>

        </ul>
        </form>
      </div>
</nav>


<br/>

<div class="container">
  <div class="alert alert-success">
    <strong>Successfully booked audi!</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="main.php">click here to book another</a>
  </div>
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

