<?php
session_start();
session_destroy();

?>

<html>
	<head>
		<title>Logged out</title>
		<style>
			.container{
				text-align:center;
			}
		</style>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<div class="container">
  			<div class="alert alert-success">
    			<strong>Successfully logged out!!!!</strong>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="login.php">click here to login again</a>
  			</div>
		</div>
		
	</body>
</html>
