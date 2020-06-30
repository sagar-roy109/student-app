<?php include_once "functions.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<?php 
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$age = $_POST['age'];

			/**
			 * Name field empty check
			 */

			if(empty($name)){
				$error['name'] = '<p class = "alert alert-danger"> Name cant be empty</p>';
			}

			/**
			 * Email Validation with empty check
			 */

			if(empty($email)){
				$error['email'] = '<p class = "alert alert-danger"> Email cant be empty</p>';
			}elseif(email_valid($email)==false){
				$error['email'] = '<p class = "alert alert-danger"> Please enter correct email</p>';
			}elseif(restrict_mails($email)== true ){
				$error['email'] = '<p class = "alert alert-danger"> Your Email is not accepted</p>';
			}
			/**
			 * Mobile field Empty check
			 */

			if(empty($mobile)){
				 $error['mobile'] = '<p class = "alert alert-danger"> Mobile cant be empty</p>';
			}

			/**
			 * Age Validation with empty check
			 */

			if(empty($age)){
				$error['age'] = '<p class = "alert alert-danger"> age cant be empty</p>';
			}elseif(age_check($age)==false){
				$error['age'] = '<p class = "alert alert-danger"> Your Age is not valid for this app</p>';
			}
			
			/**
			 * Data Send
			 */

			if(empty($error)){
				$success = '<p class = "alert alert-success"> Registration Successfull</p>';
			}
		}	
	?>

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Student Registration</h2>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text" value = "<?php old_entry('name') ?>"><br>
						<?php 
							if(isset($error['name'])){
								echo $error['name'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text" value = "<?php old_entry('email') ?>"><br>
						<?php 
							if(isset($error['email'])){
								echo $error['email'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" type="text" value = "<?php old_entry('mobile') ?>"><br>
						<?php 
							if(isset($error['mobile'])){
								echo $error['mobile'];
							}
						?>
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text" placeholder = "20 to 40 Years old are accepted" value = "<?php old_entry('age') ?>"><br>
						<?php 
							if(isset($error['age'])){
								echo $error['age'];
							}
						?>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" name="submit" type="submit" value="Register">
					</div>
					<br>	

					<?php 
						if(isset($success)){
							echo $success;
						}
					?>		

				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>