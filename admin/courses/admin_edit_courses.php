<?php 
include "../includes/navbar.php";
session_start();
 ?>
 <link rel="stylesheet" type="text/css" href="../../css/java_programming.css">
 <link rel="stylesheet" type="text/css" href="../../css/programming.css">


<style type="text/css">
	
	#main-content
	{
		margin-right: 0px;
		margin-top: 60px;
		margin-left: 300px;
		padding: 0;
		padding-right: 0px;
		padding-top: 10px;

		background: #5f2c82;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	body,textarea
	{
		background: #5f2c82;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	#btn-add
	{
		position: absolute;
		top: 10px;
		left: 800px;
	}

	#sidebarleftmenu
	{
		background: #DC2424;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #4A569D, #DC2424);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #4A569D, #DC2424); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}


</style>


<body>
	


	<div class="sidemenu" id="sidebarleftmenu" style="margin-top: -20px; width: 250px;">
		<ul class="sidemenulist">
			
			<li style="background-color :orangered;"><a href="" >Welcome Admin</a></li>
			<li><a href="http://localhost/MyResponsiveWebsiteDemo/admin/courses/admin_panel.php">courses</a></li>
			<li><a href="">Add Course</a></li>
			<li><a href="">Update Course</a></li>
			


		</ul>
	</div>





	<div id="main-content" class="container col-md-9 bg-primary mt-20 form-row" style="margin-top: 100px;">
		
       <div class="col-lg-12">
       	<h1 class="text-center text-white">Manage Your Course</h1><br>
       	<table 	class="table table-striped table-hover">
       		
       		<tr class="text-white font-weight-bold">
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

       		<tr class="text-white ">
       			<td><?php echo $res['id'] ?></td>
       			<td><?php echo $res['topic_name']; ?></td>
       			<td><textarea rows="3" cols="50" class="text-white"><?php echo $res['description']; ?></textarea></td>
       			<td><a class="text-white no-gutters" href="update_course.php?course_id=<?php echo $res['id'] ?>">Update</a></td>
       			<td><a class="text-white no-gutters" href="delete_topic.php?course_id=<?php echo $res['id'] ?>&amp;course_name=<?php echo $res['course_name']; ?>">Delete</a></td>

       		</tr>

       	<?php } 

       echo '<button class="btn btn-primary" id="btn-add"><a href="add_new_topic.php?"class="text-white">Add a new topic</a></button>';

       	?>
       	</table>
       </div>

	</div>





</body>