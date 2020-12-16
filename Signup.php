

<html>
<title>Goutham's Mart signup Form</title>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body style="background-image: url('registration_image.jpg');background-repeat: no-repeat;background-attachment: fixed;background-position:center;background-size: cover;">

<h3 class="text-center text-info">SignUp Form</h3>
	<div class="container">
		<?php include 'connection.php';
	
		if(isset($_POST['submit'])){
		
			$name = mysqli_real_escape_string($con,$_POST['username']);
			$email = mysqli_real_escape_string($con,$_POST['useremail']);
			$password= mysqli_real_escape_string($con,$_POST['userpassword']);
			$mobile = mysqli_real_escape_string($con,$_POST['usermobile']);
			$option = ['cost=>15'];
			$enpass = password_hash($password,PASSWORD_BCRYPT,$option);
			
			$checkemail = " SELECT * FROM registration where email ='$email' ";
			$inquery = mysqli_query($con,$checkemail);
			$emailcount = mysqli_num_rows($inquery);
			
			if($emailcount>0){
				?>
					<div class="alert alert-warning alert-center text-danger">This Email is Already In Use. Please Try With another Email.
					</div>
				<?php
				
			}
			else{
				$insertquery = "INSERT INTO registration(`name`,`email`,`password`,`mobile`) VALUES('$name','$email','$enpass','$mobile')";
				
				$query =  mysqli_query($con,$insertquery);
				if($con){
					
					?>
						<div class="alert alert-success">Congrats , Your Registration has success <?php echo $name;?> Thanks For Registration..</div>
						<?php
				}
				
		
				else{
					echo "Check Your Connection Properly";
				}
			}
		}
	
?>
	</div>


	<div class="container" >
		<div class="row">
			<div class="col-lg-3"></div>
		</div>
		<div class="row" >
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="card" >
					<form action="" method="POST" >
					<div class="col-lg-10 mt-3">
						<div class="form-group">
							<input type="text" name="username" placeholder="Enter Your Name" class="form-control" required>
						</div>
					</div>

					<div class="col-lg-10 mt-3">
						<div class="form-group">
							<input type="email" name="useremail" placeholder="Enter Your Email" class="form-control" required>
						</div>
					</div>


					<div class="col-lg-10 mt-3">
						<div class="form-group">
							<input type="password" name="userpassword" placeholder="Enter Your Password" class="form-control" required>
						</div>
					</div>

					<div class="col-lg-10 mt-3">
						<div class="form-group">
							<input type="tel" name="usermobile" placeholder="Enter Your Mobile Number" class="form-control" required>
						</div>
					</div>

						<div class="registration">
							<button class="btn btn-success btn-lg ml-3" type="submit" name="submit">
								signup
							</button>

						</div>
					
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
				
<p class="text text-dark text-center" style="font-weight: bold;">Do you have An Account? Please Login</p>
							<span>
								<a href="login.php">
									<button class="btn btn-info btn-lg ml-5">Login</button>
								</a>
							</span>
			</div>
		</div>
	</div>
</body>
</html>


