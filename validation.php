<?php 

session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'uniquedeveloper');
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $email=$_POST['email'];

 $q="select * from login where username='$name' && password='$pass'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);
 $num=mysqli_num_rows($result);
 if ($num==1)
  {

  	if ($res['username']=='admin') 
  	{
  		header("location:admin/admin_main.php");
  		
  	}
  	else
  	{

 	$_SESSION['username']=$name;
 	header('location:index.php');
 	}
 }
 else
 {
 	$_SESSION['error']="error";
 	header('location:login.php');

 }





 ?>