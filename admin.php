<?php 

session_start();

if(!isset($_SESSION['name'])){
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin page</title>
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
.jumbotron{
	position: relative;
	top:75px;
	left:300px;
	width:500px;
	background-color:#f2f2f2 !important;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    border-color:skyblue;
}
body {
    background-image: url("2.jpg");
}

  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse ">
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
        $a=array('Logout'=>'logout.php');
        foreach($a as $i=>$j) {
          echo "<li><a href='$j'>$i</a></li>";
        }
        ?>

        </ul>
        </form>
      </div>
</nav>

<form method="post">
<center><button type="submit" name="allavaial" class="btn btn-danger">Make all available</button></center>
</form>
<div class="container">

<div class="jumbotron">
		<form method="post">
		  <div class="form-group">
		    <input type="text" name="state" class="form-control" id="exampleInputEmail1"  placeholder="State">
		    
		  </div>
		  <div class="form-group">
		    <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="City">
		  </div>
		  <div class="form-group">
		    <input type="text" name="audiname" class="form-control" id="exampleInputPassword1" placeholder="Name">
		  </div>
		  <center><button type="submit" name="submit" class="btn btn-primary">Add audi</button></center>
		</form>	
	</div>
</div>







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
if(isset($_POST['submit'])){
	$connection = mysqli_connect("localhost","root","","project");
	if($connection){
		if(!empty($_POST['state']) and !empty($_POST['city']) and !empty($_POST['audiname'])){
			$state = $_POST['state'];
			$city = $_POST['city'];
			$name = $_POST['audiname'];
			$query = "insert into audito(state,city,aname,visible,user) values('$state','$city','$name',1,'*')";
			$result = mysqli_query($connection,$query);
			if($result){
				echo "added successfully";
				header("Location:admin.php");
			}
			else{
				echo "something went wrong";
			}
		}
		else{
			?>
			<script>
			alert("fields cannot be empty");
			</script>
			<?php
		}
	}

}
?>


<?php
if(isset($_POST['allavaial'])){
	$connection = mysqli_connect("localhost","root","","project");
	if($connection){
	$quer = "update audito set visible=1,user='*'";
  	$resul = mysqli_query($connection,$quer);
  }
}
?>
