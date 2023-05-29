<?php 

 session_start();

   $con=mysqli_connect('localhost','root');

   

mysqli_select_db($con,'uniquedeveloper');

if (isset($_POST['btn-add-course'])) {
	$languagename=$_POST['languagename'];
$languageimg=$_FILES['languageimg'];
$languagedesc=$_POST['languagedesc'];

$filename=$languageimg['name'];
print_r($languageimg);		
$fileerror=$languageimg['error'];   
$filetmp=$languageimg['tmp_name'];


$fileext=explode('.', $filename);
$filecheck=strtolower(end($fileext));

$fileextstored= array('png','jpg','jpeg' );

if (in_array($filecheck,$fileextstored)) {
	$destinationfile='uploadimg/'.$filename;
	move_uploaded_file($filetmp,$destinationfile);

	$q="insert into programming_languages(language_name,language_image,language_description) values('$languagename','$destinationfile','$languagedesc')";
	$r=mysqli_query($con,$q);

 if ($r==true) {
 header("location:admin_panel.php");
    }
	
 }
}




if (isset($_POST['btn-delete-course'])) {
	
	$course_name=$_POST['txt_course_del_id'];
	$q="DELETE FROM programming_languages WHERE language_name='$course_name'";
	$r=mysqli_query($con,$q);
	if ($r) {
		header("location:admin_panel.php");
	}

}





 ?>