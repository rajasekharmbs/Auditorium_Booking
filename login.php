<?php
session_start();
?>
<html>
	<head>
		<title>Log in</title>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
    </ul>
    <form class="navbar-form navbar-right">
      <div class="form-group">
        <a href="signup.php" class="btn">
          <span class="glyphicon glyphicon-user"></span> Sign up 
        </a>
      </div>
    </form>
  </div>
</nav>



	<div class="container">
	<div class="jumbotron">
		<form method="post">
		  <div class="form-group">
		  <span class="glyphicon glyphicon-envelope"></span>
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    
		  </div>
		  <div class="form-group">
		  <span class="glyphicon glyphicon-lock"></span>
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <center><button type="submit" name="submit" class="btn btn-primary">Log in</button></center>
		</form>	
	</div>
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

				if($row['email']==$email and $row['pass']==md5($password)){

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
