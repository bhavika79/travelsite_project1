
	
  

<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			height: 100%;
			width: 100%;
			margin: 0;
		}
		.banner-image{
			background-image: url(images/1.jpg);
			height:600px;
			padding-bottom: 50px;
			margin-bottom: 20px;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
		.button{
			color: #fff;
			background-color: /*#c9302c*/DarkCyan;
			border-color: /*#ac2925*/DarkCyan;
			box-shadow: inset 0 3px 5px rgba(0,0,0,.125);
			padding: 10px 16px;
			font-size: 18px;
			border-radius: 6px;
		}
		.content{
			padding-top: 18%;
			width: 80%;
			margin: auto;
		}
		footer{
    	padding: 10px 0;
		background-color: #101010;
		color:#9d9d9d;
		bottom: 0;
		width: 100%;
    }

	</style>
</head>
<body>


	<div class="navbar navbar-default navbar-fixed">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">Travel</a>
			</div>
			<div class="nav navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-user"></span>Signup</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li><a href="index.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>


	

	<div class="content1">
		<div class="banner-image">
			<div class="content">
				<center>
					<div class="inner-content">
						<a href="home.php"><button class="button">Plan your trip</button></a>
					</div>
				</center>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>Information</h4>
					<a href="index.php">Contact Us</a>
				</div>
				<div class="col-md-4">
					<h4>My Account</h4>
					<a href="index.php">Login</a><br>
					<a href="index.php">Sign Up</a>
				</div>
				<div class="col-md-4">
					<h4>Contact Us</h4>
					<p>Contact:+91-123-000000</p>
				</div>
			</div>
		</div>
	</footer>


</body>
</html>

