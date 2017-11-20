<?php
session_start();
$na=$_SESSION['name'];
?>
<html>
  <head>
    <title>Booking history</title>
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" disabled="disabled">S & A</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="audi.php">Home</a></li>
    </ul>
    <form class="navbar-form navbar-right">

      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['name'];?>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">

        <?php 
        $a=array('Profile'=>'profile.php','Logout'=>'logout.php');
        foreach($a as $i=>$j) {
          echo "<li><a href='$j'>$i</a></li>";
        }
        ?>

        </ul>
        </form>
      </div>
</nav>

<center><h3 style="color:green"><u>Booking history</u></h3></center>

<?php

  $connection = mysqli_connect("Localhost","root","","project");
  if($connection){
      $state = $_SESSION['state'];
      $city = $_SESSION['city'];
      $query = "select * from audito where user='$na'";
      $result = mysqli_query($connection,$query);
      if($result and mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
          /*echo $row["state"];
          echo $row["city"];
          echo $row["aname"];*/
          ?>
            <div class="col-sm-1">
            </div>
            <form method="post">
              <div class="col-sm-4">
                <center><h3 style="font-family:san-serief;color:#DD4124"><?php echo $row["aname"];?></h3></center>
                <img src="2.jpg" alt="audi" style="width:350px;"><br/><br/>
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
        ?>
          <div class="container">
            <div class="alert alert-danger">
              <strong>Haven't booked any</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="main.php">click here to book</a>
            </div>
          </div>
        <?php
      }

  }

?>








  
<footer id="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
          <ul class="list-unstyled">
            <li><a href="http://www.mbs.eudaan.com" target="_blank">About Me</a></li>
          </ul>
      </div>
      <div class="col-sm-3">
        <ul class="list-unstyled">
          <a href="https://www.facebook.com/mbs.rajasekhar"><i class="fa fa-facebook-official" style="font-size:24px"></i></a>
          <a href="https://twitter.com/mbsrajasekhar"><i class="fa fa-twitter-square" style="font-size:24px"></i></a>
          <a href="#"><i class="fa fa-linkedin-square" style="font-size:24px"></i></a>
        </ul>
      </div>
      <div class="col-sm-3">
        <h6>Copyright &copy;<?php echo date('Y');?> <a href="http://www.mbs.eudaan.com" target="_blank">M.B.S.Rajasekhar</a></h6>
      </div>
    </div>
  </div>
</footer> 



    
  </body>
</html>



<?php
if($_POST){
  if(isset($_POST['submit'])){
  if(!empty($_POST['email']) and !empty($_POST['password'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "project";

    $connection = mysqli_connect($host,$user,$pass,$dbname);

    if($connection){

      $query = "select email,pass,username from user where email='$email'";
      $result = mysqli_query($connection,$query);
      #printf("lines : %d\n", mysqli_affected_rows($connection));
      if($result){

        $row = mysqli_fetch_assoc($result);

        if($row['email']==$email and $row['pass']==$password){

          $_SESSION['name'] = $row['username'];

          header("Location:main.php");

        }
        elseif($email=="rajasekharmbs@gmail.com" and $password=="1305120138"){
          $_SESSION['name'] = 'mbs';
          header("Location:admin.php");
        }

      }

      mysqli_close($connection);

    }
    else{
      echo "connection not established";
    }

  }
}
}


?>
