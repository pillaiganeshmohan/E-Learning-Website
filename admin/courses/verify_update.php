<?php 


if (isset($_POST['submitupdate'])) {
 


           $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'uniquedeveloper');


          $course_id=$_POST['cors_id'];
          echo $course_id;
          $course_name=$_POST['coursename'];
          $topic_name=$_POST['topic_name'];
          $description=$_POST['editor'];

          $q="UPDATE `courses` SET `topic_name`='$topic_name',`description`='$description',`course_name`='$course_name' WHERE id='$course_id'";
           $result=mysqli_query($con,$q);
           if ($result) {
             header("location:admin_edit_courses.php?course_name=".$course_name);
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