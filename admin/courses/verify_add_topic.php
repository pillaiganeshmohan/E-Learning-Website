
<?php
	


		  $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'uniquedeveloper');

       $topicname=$_POST['topic_name'];
	 	$coursename=$_POST['coursename'];
	 	$description=$_POST['editor'];
	 	// echo $topicname;
	 	// echo $coursename;
	 	// echo $description;

	 	$qy="INSERT INTO `courses`( `topic_name`, `description`, `course_name`) VALUES ('$topicname','$description','$coursename')";


 	mysqli_query($con,$qy);
 	// echo "inserted";
 	header('location:admin_edit_courses.php?course_name='.$coursename);
?>