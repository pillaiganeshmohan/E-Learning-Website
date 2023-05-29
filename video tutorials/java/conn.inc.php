<?php 
	
	   
	   $con=mysqli_connect('localhost','root');
	   if (!$con) {
	   	die('connection failed'.mysqli_connect_error());
	   }

	mysqli_select_db($con,'uniquedeveloper');

 ?>