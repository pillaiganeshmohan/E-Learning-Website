
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- google font -->
 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

 <style type="text/css">
  

    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: deepskyblue !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }
 </style>
</head>

<body>
  
<?php

   require("../includes/navbar.php");    //navigation bar included

 ?>

 <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->




        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
            <li class="list-group-item  bg-dark "><a href="">Welcome Admin</a></li>
            <li class="list-group-item bg-dark "><a href="manage_courses/manage_courses.php">Manage Courses</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Quize</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Videos</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Comments</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Users</a></li>
            <li class="list-group-item bg-dark"><a href="">Logout</a></li>
            <li class="list-group-item bg-dark" style="height: 400px;"></li>
          </ul>
        </div>

        <!-- sidebar ends -->

  <!-- ========================================================================================================================== -->



      <div class="col-md-10 ">   <!--  main body content starts -->

 <!-- ===============================================================================================================-->


                              <!-- form starts -->

           
<?php 


           $con=mysqli_connect('localhost','root');


      mysqli_select_db($con,'uniquedeveloper');
          $course_id=$_GET['course_id'];
          $q="select * from courses where id='$course_id'";
      $result=mysqli_query($con,$q);
      while ($res=mysqli_fetch_array($result)) {

          ?>
<div class="mt-1"><h3 class="text-center">update topic</h3></div>

<form  method="POST" action="verify/verify_changes.php" class="ml-3">
  <input type="hidden" name="cors_id" value="<?php echo $res['id']; ?>">
  
  Enter course name:<input type="text" name="coursename" readonly="readonly" class="form-control" value="<?php echo $res['course_name'] ?>"><br>
  Enter topic name :<input type="text" name="topic_name" class="form-control" value="<?php echo $res['topic_name'] ?>">

  Enter the content:
<textarea id="editor" name="editor" class="ckeditor" placeholder="Enter the content..."><?php echo $res['description']; ?></textarea>

<button type="submit" name="submitupdate" class="btn btn-success">submit</button>
</form>
<?php } ?>


  </div>
  </div>








 <script src="../ckeditor/ckeditor.js"></script>   <!-- script for ckeditor -->
<body>  
</html>