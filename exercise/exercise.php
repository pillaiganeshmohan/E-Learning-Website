<?php 
session_start();

include "../admin/includes/header.php";
if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...
}

 $con=mysqli_connect('localhost','root');  

mysqli_select_db($con,'uniquedeveloper');
if ($con) {
	echo "connection success";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php include "../admin/includes/navbar.php"; ?>

	<div class="container" style="margin-top: 60px;">
		
	

	<h1 class="text-center text-primary">UNIQUE DEVELOPER QUIZE</h1>

	<div class="col-lg-9 m-auto d-block">
		<div class="card">
			<h6 class="text-center card-header">Welcome <?php echo $_SESSION['username']; ?>,you have to select only 1 out of 4.Best of luck
				
			</h6>
		</div><br>
		<form method="POST" action="checked.php">

		<?php 


		for ($i=1; $i < 6; $i++) { 
			# code...
		



		 $q="select * from questions where qid=$i";
		 $query=mysqli_query($con,$q);

		 while ($row=mysqli_fetch_array($query)) {
		 	?>
		 	<div class="card">
		 		<p class="card-header"><?php echo $row['question']; ?></p>


		 		<?php 

		 			 $q="select * from answers where ans_id=$i";
			 		$query=mysqli_query($con,$q);

		 			while ($row=mysqli_fetch_array($query)) {
		 		
				 ?>
				 <div class="card-body">
				 	<input type="radio" name="quizecheck[<?php echo $row['ans_id'] ?>]" value="<?php echo $row['aid'] ?>">
				 	<?php echo $row['answer']; ?>
				 	
				 </div>




		 	
		 	
		 
		 <?php
		  }
		}
		}
		?>

		<input type="submit" name="btnsubmitques" value="Submit" class="btn btn-success m-auto d-block">



</form>

</div><br><br>
<div class="card-header text-center text-primary">
	Copyright © 2019,UNIQUE DEVELOPER . All rights reserved.
</div>


	</div>

</div>

</body>
</html>