<?php
   $con=mysqli_connect('localhost','root');

  mysqli_select_db($con,'uniquedeveloper');
    require 'comments.inc.php';      //including comment code
?>
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

   <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

        <h3 class="text-center mt-2">Manage Your <?php  echo $_GET['course_name'];  ?> &nbsp online video tutorial</h3><br>
        <div class="row  ml-2">
       
      <section class="col-md-7 mt-4">
    
    
    <iframe style="border:1px #999 solid;" width="760" height="415" 
<?php  
    $_SESSION['vid']=$_GET['video_id'];
    $video_id=$_GET['video_id'];
    $sql="select * from videos where video_id='$video_id'";
    $result=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_array($result))
     {
      ?>
      src=<?php echo $row['video_path'];   //fetching youtube video path from database & storing into src attribute
    }

    

    ?>
    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


    <!---Video iframe Ends  ----->


    <!---Comments Section Start ----->
<br><br>

    <div class='commentdiv shadow bg-light' style="border:1px #d2c8c8 solid; background-color: #dfe1e4;">
<?php  
           $video_id=$_GET['video_id'];    //getting the value of video is from the previous page using GET
  echo "      
        <form method='POST' action='".setComments($con)."'>
          <input type='hidden' name='uid' value='Anonymous'>
          <input type='hidden' name='vid' value='".$video_id."'>
          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
          <textarea name='message'></textarea><br>
          <button type='submit' name='commentSubmit' class='commentbtn'>Comment</button>
        </form><br><br>
      ";      
?>  </div>
  
<?php 

getComments($con);
     

 ?>

  </section> 
      



      
       </div>




    </div>
  </div>
  </div>


<body>  
</html>