<?php 

include("class/users.php");        //including the users class
$register=new users;
extract($_POST);

$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];

move_uploaded_file($tmp_name, "img/".$img_name);

$query="insert into users values('','$uname','$pwd','$email','$img_name')";

if ($register->signup($query)==1)
 {
	header("location:quizlogin.php?run=success");
}

 

 ?>