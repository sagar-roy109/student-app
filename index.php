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

			if(empty($name)){
				$name_error = '<p class = "alert alert-danger"> Name cant be empty</p>';
			}elseif(empty($email)){
				$email_error = '<p class = "alert alert-danger"> Email cant be empty</p>';
			}elseif(empty($mobile)){
				$mobile_error = '<p class = "alert alert-danger"> Mobile cant be empty</p>';
			}elseif(empty($age)){
				$age_error = '<p class = "alert alert-danger"> age cant be empty</p>';
			}else{
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
						<input name="name" class="form-control" type="text"><br>
						<?php 
							if(isset($name_error)){
								echo $name_error;
							}
						?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text"><br>
						<?php 
							if(isset($name_error)){
								echo $name_error;
							}
						?>
					</div>
					<div class="form-group">
						<label for="">Mobile</label>
						<input name="mobile" class="form-control" type="text"><br>
						<?php 
							if(isset($name_error)){
								echo $name_error;
							}
						?>
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text"><br>
						<?php 
							if(isset($name_error)){
								echo $name_error;
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