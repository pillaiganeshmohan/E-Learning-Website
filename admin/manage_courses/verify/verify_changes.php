
<?php

      $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'uniquedeveloper');

  // =============================================================================================================

          // add a new topic in the courses table (request came from add_new_topic.php)
	
	if (isset($_POST['submitbtn'])) {
	

       $topicname=$_POST['topic_name'];
	 	$coursename=$_POST['coursename'];
	 	$description=($_POST['editor']);
	 	// echo $topicname;
	 	// echo $coursename;
	 	// echo $description;

	 	$qy="INSERT INTO `courses`( `topic_name`, `description`, `course_name`) VALUES ('$topicname','$description','$coursename')";


 	mysqli_query($con,$qy);
 	 echo "inserted";
 	header('location:../edit_topics.php?course_name='.$coursename);
 }


// =============================================================================================================

          // update a topic in the courses table (request came from update_topic.php)


 if (isset($_POST['submitupdate']))
  {
 

          $course_id=$_POST['cors_id'];
          echo $course_id;
          $course_name=$_POST['coursename'];
          $topic_name=$_POST['topic_name'];
          $description=$_POST['editor'];

          $q="UPDATE `courses` SET `topic_name`='$topic_name',`description`='$description',`course_name`='$course_name' WHERE id='$course_id'";
           $result=mysqli_query($con,$q);
           if ($result) {
             header("location:../edit_topics.php?course_name=".$course_name);
           }
           else
           {
            echo "something went wrong";
           }
    }

else
{
  echo "not set";
}



?>