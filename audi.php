<?php 

session_start();

if(!isset($_SESSION['name'])){
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Landing Page</title>
  <style>
    #footer-main{
    position: relative;
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
      <li class="active"><a href="main.php">Home</a></li>
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




<!--

<div class="container">
  <div class="row">
    <div class="col-sm-1">
    </div>
      <div class="col-sm-5">
        <h3>dh</h3>
        <img src="1.jpg" alt="audi" style="width:350px;"><br/><br/>
        <center><button type="submit" name="book1" value="book" class="btn btn-default">  Book  </button></center>
      </div>
    <div class="col-sm-1">
    </div> 
    <div class="col-sm-5">
      <h3>dh</h3>
      <img src="1.jpg" alt="audi" style="width:350px;"><br/><br/>
      <center><button type="submit" name="book1" value="book" class="btn btn-default">  Book  </button></center>
    </div>
    <div class="col-sm-1">
    </div> 
    <div class="col-sm-5">
      <h3>dh</h3>
      <img src="1.jpg" alt="audi" style="width:350px;"><br/><br/>
      <center><button type="submit" name="book1" value="book" class="btn btn-default">  Book  </button></center>
    </div>
    <div class="col-sm-1">
    </div> 
    <div class="col-sm-5">
      <h3>dh</h3>
      <img src="1.jpg" alt="audi" style="width:350px;"><br/><br/>
      <center><button type="submit" name="book1" value="book" class="btn btn-default">  Book  </button></center>
    </div>
  </div>
  <br/>
  <br/>
</div>  

-->

<div class="container">
  <div class="row">
<?php

  $connection = mysqli_connect("Localhost","root","","project");
  if($connection){
      $state = $_SESSION['state'];
      $city = $_SESSION['city'];
      $query = "select * from audito where state='$state' and city='$city' and visible=1";
      $result = mysqli_query($connection,$query);
      if($result){
        while($row = mysqli_fetch_assoc($result)){
          /*echo $row["state"];
          echo $row["city"];
          echo $row["aname"];*/
          ?>
            <div class="col-sm-1">
            </div>
            <form method="post">
              <div class="col-sm-4">
                <h3><?php echo $row["aname"];?></h3>
                <img src="1.jpg" alt="audi" style="width:350px;"><br/><br/>
                <center><button type="submit" name="book" value="<?= $row['aname']?>" class="btn btn-default">  Book  </button></center>
              </div>
            </form>
              <div class="col-sm-1">
              </div>  
          <?php
        }
        mysqli_free_result($result);
        ?>
  </div>
</div>  
        <?php

      }
      else{
        echo "no result fetched";
      }

  }

?>
<?php

if(isset($_POST['book'])){

  $nam=$_POST['book'];

  $query1 = "update audito set visible=0 where aname='$nam'";
  $resul = mysqli_query($connection,$query1);
  if($resul){
    header("Location:sucess.php");
  }
  else{
    header("Location:audi.php");
  }

}
?>

<br/>

 <footer id="footer-main">
        <div class="container">
            <div class="row">
                
                <div class="col-sm-3">
                    <ul class="list-unstyled">
                        <li><a href="">About us</a></li>
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


