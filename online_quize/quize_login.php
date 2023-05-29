<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container mb-5">
		<div class="row" >
			<div class="col-sm-12">
			<div class="card" >
				<div class=" card-header card-primary p-1">
					<h2 class="text-success text-center">WELCOME TO E-Learning Website</h2>

				</div>
				<div class="card-body p-1">
					<h4 class="text-secondary text-center">Solve the Awesome Quiz</h4>
				</div>
			</div>
		</div>
		</div>
		
	</div>


	<div class="container">
		<div class="row">

			<div class="col-sm-6">
				<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-primary text-light p-2 "><h3>login form</h3></div>
				   <?php 

				  if (isset($_GET['run']) && $_GET['run']=="failed")
				   {
				  	  echo '<h5 class="text-success">wrong username or password</h5>';
				  }
				  ?>
				  <div class="card-body small" ">

				  <form action="login_submit.php" method="post" enctype="multipart/form-data">
					    <div class="form-group">
					      <label for="email">Email:</label>
					      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					    </div>
					    <div class="form-group">
					      <label for="pwd">Password:</label>
					      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
					    </div>
					    <div class="checkbox">
					      <label><input type="checkbox" name="remember"> Remember me</label>
					    </div>
					    <div class="float-left">
					    <button type="submit" class="btn btn-danger" >Submit</button>
						</div>
				  </form>

				</div>
			</div>
			</div>


		<div class="col-sm-6">
				<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-primary text-light p-2"><h3>login form</h3></div>
				  <?php 

				  if (isset($_GET['run']) && $_GET['run']=="success")
				   {
				  	  echo '<h4 class="text-success">signup successfull</h4>';
				  }



				   ?>
				  <div class="card-body p-2 small">
				  <form action="signup_submit.php" method="post" enctype="multipart/form-data">
				    <div class="form-group">

				    	<label for="email">Username:</label>
				      <input type="text" class="form-control" id="email" placeholder="Enter username" name="uname">
				  </div>

				  <div class="form-group">

				      <label for="email">Email:</label>
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>
				    <div class="form-group">
				      <label for="pwd">Password:</label>
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				    </div>


				    <div class="form-group">

				    	<label for="email">Upload image:</label>
				      <input type="file" class="form-control" id="email" placeholder="upload your image" name="img">
				  </div>

				    <div class="checkbox">
				      <label><input type="checkbox" name="remember"> Remember me</label>
				    </div>
				    <div class="float-left">
				    <button type="submit" class="btn btn-danger" >Submit</button>
				</div>
				  </form>
				</div>
		</div>
		</div>


		 </div>
		</div>

</body>
</html>