<?php
include 'connection.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Goutham's Craftstore</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style type="text/css">
  </style>
</head>
<body>
	

	<!--navigation starts-->

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
	
		
		
  <a class="navbar-brand" href="#" style="font-weight: bold;font-size:35px;font-family: Blackadder ITC;">CraftStore <p class="text text-success">
  	
  </p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link ml-5 active px-3"  href="index.html" style="background-color: #1e9fb6;">HOME</a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle ml-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;font-weight: bold;">
         TRENDING
        </a>
        <div class="dropdown-menu ml-5" aria-labelledby="navbarDropdown">
        <a href="#" class="dropdown-item">Door Decors</a>
        <a href="#" class="dropdown-item">Hand Crafts</a>
        <a href="#" class="dropdown-item">Hall Decors</a>
	  
        </div>
      </li>
     
      
      
      
      
      
      <li class="nav-item ">
        <a class="nav-link ml-5" href="contactus.php" style="color:white;font-weight: bold;">BEST SELLERS</a>
      </li>  

      <li class="nav-item ml-5">
        <a class="nav-link " href="signup.php" style="color:white;font-weight: bold;">SIGN UP&nbsp;&nbsp;<i class="fa fa-sign-in" style="font-size: 24px;"></i></a>
      </li>
      <li class="nav-item ml-5">
        <a class="nav-link " href="login.php" style="color:white;font-weight: bold;">LOGIN&nbsp;&nbsp;<i class="fa fa-user" style="color:white;font-size: 26px;"></i></a>
      </li>      
    </ul>
  </div>  

</nav>

	<!--navigation end-->
<h4 class="text text-center text-info mt-3">
		WELCOME TO CraftStore
	</h4>
	<br><br>
	<!--displaying the images presented in our database-->
	<br><br>
	<div class="container">
		<div class="row">
		<?php require 'connection.php';

		$query = mysqli_query($con,"SELECT * FROM homepage");
		$num = mysqli_num_rows($query);

		if($num>0)
		{
			while ($row = mysqli_fetch_array($query)){
			?>

			<div class="col-lg-4">
				<div class="card" style="box-shadow: -15px 15px 10px #C3DDDD;">
					<div class="card-header bg-dark text-primary">

						<?php echo $row['name'];?>
						<p class="text text-right">
							<?php echo $row['offer'];?>
						</p>
						
					</div>
					<div class="card-body">
						<img src="<?php echo $row['image'];?>" class="img img-thumbnail" style="width:300px;height: 300px;">
					</div>
					<div class="card-footer">
						<?php echo $row['cost'];?>
					</div>
					<div class="btn-group d-flex">
						<button class="btn btn-warning">ADD TO CART &nbsp;&nbsp;<i class="fa fa-cart-plus"></i></button>
						<button class="btn btn-danger">BUY NOW</button>
					</div>

				</div>


			</div>
			<?php

		}
	}
	?>
		
	</div>
</div>
<br><br>
<!--footer section-->



	<div class="container-fluid bg-dark">
		<div class="row">
			<div class="col-lg-4">
				<ul class="text-info" style="list-style-type: none;" >
					<h4 class="text">ABOUT US</h4>
				<li><a href="#">Who are we?</a></li>
				<br>
				<li><a href="#">More details</a></li>
				<br>
			</ul>
			</div>
			<div class="col-lg-4">
				<ul class="text-info" style="list-style-type: none;">
					<h4 class="text">GET IN TOUCH</h4>
					
						<li style="padding-left:5px;" id="social_icons">
							<i class="fa fa-facebook" style="font-size: 26px;color:#082441;padding-left:30px;"></i>
							<span>
							<i class="fa fa-instagram" style="font-size: 26px;color:#520c48;padding-left:30px;"></i>	
							</span>
							<span>
								<i class="fa fa-twitter" style="font-size: 26px;color:#2599a7;padding-left:30px;"></i>
							</span>
						</li>
						
						
					
						
					
				</ul>

			</div>
			<div class="col-lg-4">
				<ul class="text-info" style="list-style-type: none;">
					<h4 class="text">MORE FROM US</h4>

					<li><a href="#">Visit Our Blog</a></li>
					<br>

					<li><a href="#">Subscribe To Our news Letter,Get Weekly news.</a></li>
					<br>
					<li>
						<form>
							<input type="email" name="news_email" placeholder="Enter Your Email" class="form-control">
						</form>
					</li>


				</ul>

			</div>
		</div>
	</div>

</body>
</html>