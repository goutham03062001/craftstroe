<?php 
include 'connection.php'?>


<!DOCTYPE html>
<html>
<head>
	<title>Chat With Us</title>

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

	<?php

		include 'connection.php';

		if(isset($_POST['submit'])){

			//we have store the data into the variables..

			$username = $_POST['username'];
			$useremail = $_POST['useremail'];
			$message = $_POST['message'];

			$insertQuery = "INSERT INTO chatting (`name`,`email`,`message`) VALUES('$username','$useremail','$message')";

			$query = mysqli_query($con,$insertQuery);


		}

	?>

	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="card mt-3">
					<div class="card-header  bg-dark">
						<p class="text text-info text-center">ChatWithUs</p>
					</div>

					<div class="card-body">
							<form action="" method="POST">
						<div class="col-lg-12">
							<div class="form-group">
								<input type="text" name="username" placeholder="Enter Your Name Here" class="form-control" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<input type="email" name="useremail" placeholder="Enter Your Email Here" class="form-control" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<textarea class="form-control" type="text" name="message" placeholder="Enter Your Message Here..." required></textarea>
							</div>
						</div>
						<button class="btn btn-success btn-lg ml-3" type="submit" name="submit">POST</button>
					</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<br><br><br>
<!--reviews part start-->


		<div class="container">
			<?php

							include 'connection.php';

							$posted_by;
							$posted_by_email;

							$selectQuery = "SELECT * FROM chatting";

							$query_result = mysqli_query($con,$selectQuery);

							$query_count = mysqli_num_rows($query_result);

							if($query_count>0)
							{
								while($row = mysqli_fetch_assoc($query_result))
								{
									$posted_by = $row['name'];
									$posted_by_email = $row['email'];
									$message_recived = $row['message'];
								}
							}

						?>
			<div class="row">
				<div class="col-lg-2"></div>
		
			<div class="col-lg-8">
				<div class="card">
					<div class="card-header bg-secondary">
						<p class="text text-dark text-left">
							<?php
								echo "Posted By"."   ".$posted_by; 


							?>
						</p>
						<p class="text text-right text-dark mb-5">
							<?php
								echo "email is :"."   ".$posted_by_email;

							?>
						</p>
					</div>
					<div class="card-body">
						<p class="text text-muted text-left">
							<?php echo $message_recived;
							?>
						</p>
					</div>
				</div>
			</div>

		</div>



<!--reviews part end-->
</body>
</html>