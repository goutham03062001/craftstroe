
<?php
	session_start();
?>
<html>
<title>Welcome Again </title>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('login_image.jpg');background-repeat: no-repeat;background-attachment: fixed;background-position:center;background-size: cover;">

<h3 class="text-center">Login Form</h3>
	
	<?php

		include 'connection.php';

		if(isset($_POST['submit'])){
			$email = $_POST['useremail'];
			$password = $_POST['userpassword'];

			$email_query = " select * from registration where email = '$email' ";

			$query = mysqli_query($con, $email_query);

			$check_email = mysqli_num_rows($query);

			if($check_email){
				$email_pass = mysqli_fetch_assoc($query);

				 $dbpass = $email_pass['password'];
				 $_SESSION['username'] = $email_pass['name'];

				 $decodepass = password_verify($password,$dbpass);

				
				 if($decodepass){
				 	?>
				 	 <div class="alert alert-success bg-success">Your Now Logged In</div>


				 	
				 		<script>
				 			location.replace('index.php');
				 		</script>

				 	<?php

				 }
				 else{
				 	?>
				 	<div class="container">
				 		<div class="row">
				 	         <div class="alert alert-warning bg-warning text-center col-lg-6 ml-  col-xs-10 col-md-10 col-sm-10">Password Is InCorrect</div>
				 	    </div>
				 	</div>

				 	<?php
				 }
			}
			else{
				?>
				 		<div class="container">
				 		<div class="row">
				 	         <div class="alert alert-warning bg-warning text-center col-lg-6 ml-  col-xs-10 col-md-10 col-sm-10">Your Email Is not exists or It may be Incorrect...</div>
				 	    </div>
				 	</div>

				<?php
			}
			
		}
	

	

	?>

		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					<div class="card">
						<form action="index.php" method="POST">
						<div class="col-lg-10 mt-3">
							<div class="form-group">
								<input type="email" name="useremail" placeholder="Enter Your Email" class="form-control">
							</div>
						</div>

						<div class="col-lg-10 mt-3">
							<div class="form-group">
								<input type="password" name="userpassword" placeholder="Enter Your Password" class="form-control">
							</div>
						</div>
						<button type="submit" class="btn btn-info btn-lg ml-3">Login</button>
						</form>
					</div>
				
				</div>
			</div>
</div>

			<div class="container">
		<div class="row">
			<div class="col-lg-3">
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-5 mt-5 ">
				
<p class="text text-dark text-center">Don't Have Any Account? Please Signup Here</p>
							<span>
								<a href="signup.php">
									<button class="btn btn-dark btn-lg ml-5">Signup</button>
								</a>
							</span>
			</div>
		</div>
	</div>
</body>
</html>



