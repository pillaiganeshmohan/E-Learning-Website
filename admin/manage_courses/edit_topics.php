
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
            <li class="list-group-item  bg-dark "><a href="../admin_main.php">Welcome Admin</a></li>
            <li class="list-group-item bg-dark "><a href="manage_courses.php">Manage Courses</a></li>
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


       <div class="col-lg-12">
       	<h3 class="text-center mt-2">Manage Your Course</h3><br>
       	<table 	class="table table-striped table-hover shadow">
       		
       		<tr class="font-weight-bold">
       			<th>id</th>
       			<th>topic name</th>
       			<th>description</th>
       			<th>Update</th>
       			<th>Delete</th>

       		</tr>
       		<?php

       		 $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'uniquedeveloper');
       		$coursename=$_GET['course_name'];
       		$q="select * from courses where course_name='$coursename'";
			$result=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($result)) {
        	

       		?>

       		<tr class=" ">
       			<td><?php echo $res['id'] ?></td>

       			<td><?php echo $res['topic_name']; ?></td>

       			<td><textarea rows="3" cols="50" class=""><?php echo html_entity_decode($res['description'],ENT_QUOTES); ?></textarea></td>

       			<td><a class=" no-gutters text-primary" href="update_topic.php?course_id=<?php echo $res['id'] ?>" style="text-decoration: none;"	>Update<i class="fa fa-pencil-square ml-2" aria-hidden="true"></i></a></td>

       			<td><a class=" no-gutters text-danger" href="verify/verify_delete.php?course_id=<?php echo $res['id'] ?>&amp;course_name=<?php echo $res['course_name']; ?>" style="text-decoration: none;">Delete<i class="fa fa-trash-o ml-2" aria-hidden="true"></a></td>

       		</tr>

       	<?php } 

       echo '<button class="btn btn-primary" id="btn-add"><a href="add_new_topic.php?course_name='.$coursename.'" class="text-white">Add a new topic</a></button>';

       	?>
       	</table>
       </div>




		</div>
	</div>
	</div>


<body>	
</html>