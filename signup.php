<?php

if($_POST){

if(isset($_POST['submit'])){

	if(!empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['username']) and !empty($_POST['phoneno'])){


		$email = $_POST['email'];
		$password = $_POST['password'];
		$username = $_POST['username'];
		$phoneno = $_POST['phoneno'];

		$host = "localhost";
		$user = "root";
		$pass = "";
		$dbname = "project";

		$connection = mysqli_connect($host,$user,$pass,$dbname);

		if($connection){

			$query = "insert into user(email,pass,username,phoneno)values('$email','$password','$username',$phoneno)";
			print($query);
			$result = mysqli_query($connection,$query);
			if($result){

				header("Location:login.php");

			}

		}

	}
	else{
		echo "failed";
		header("Location:signup.php");
	}
}

}

?>



<html>
	<head>
		<title>Sign up</title>
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
			.jumbotron-fluid{
					position: relative;
					top:50px;
					left:300px;
					width:400px;
			}

			.navbar-custom {
    background-color: skyblue;
}
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  		

  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>


	<nav class="navbar navbar-custom">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <a href="login.php" class="btn">
          <span class="glyphicon glyphicon-log-in"></span> Log in 
        </a>
      </div>
    </form>
  </div>
</nav>
	
<div class="container jumbotron-fluid">
  <form class="form-horizontal" method="post">
  <h2>Sign up </h2>
  <div class="form-group">
    <div class="col-xs-5">
      <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-envelope"></span></span>
          <input class="form-control left-border-none" placeholder="email" type="email" name="email">
      </div>
    </div>
  </div>


  <div class="form-group">
    <div class="col-xs-5">
      <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-lock"></span></span>
          <input class="form-control left-border-none" placeholder="Password" type="password" name="password">
      </div>
    </div>
  </div>



  <div class="form-group">
    <div class="col-xs-5">
      <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-user"></span></span>
          <input class="form-control left-border-none" placeholder="User Name" type="text" name="username">
      </div>
    </div>
  </div>


  <div class="form-group">
    <div class="col-xs-5">
      <div class="input-group">
          <span class="input-group-addon transparent"><span class="glyphicon glyphicon-phone"></span></span>
          <input class="form-control left-border-none" placeholder="Phone Number" type="text" name="phoneno">
      </div>
    </div>
  </div>



  <div class="form-group">        
  	<div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
  </form>

</div>




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
                  <h6>Copyright &copy;<?php echo date('Y');?> <a href="http://bradhussey.ca/" target="_blank">M.B.S.Rajasekhar</a></h6>
                </div>
            </div>
        </div>
    </footer> 
    
		
	</body>
</html>


