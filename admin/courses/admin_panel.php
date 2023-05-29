<?php 
include "../includes/navbar.php"
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

	body
	{
		background: #5f2c82;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}

	#btn-add-new-course
	{
		position: relative;
	}




</style>

<body>

		 <!------Side bar start---->


	<div class="sidemenu" id="sidebarleftmenu" style="margin-top: -20px; width: 250px;">
		<ul class="sidemenulist">
			
			<li style="background-color :orangered;"><a href="" >Welcome Admin</a></li>
			<li><a href="http://localhost/MyResponsiveWebsiteDemo/admin/admin_panel.php">courses</a></li>
			<li> <a href="" data-toggle="modal" data-target="#myModal">Add New Course</a></li>
			<li><a href="" data-toggle="modal" data-target="#myModaldelete">Delete course</a></li>

			


		</ul>
	</div>

		<!-- Add new course Modal starts --> 

<div class="container">

  <!-- The Modal -->
  <div class="modal fade " id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New Course</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         


<form method="POST" enctype="multipart/form-data" action="imgdemo.php">
							<div class="form-group">
								<div class="row form-inline">
								<input type="label" name="" value="Language Name :" style="margin-top: -60px; border: none;">
								<input type="text" name="languagename" class="form-control" style="position: absolute; top:20px; right:80px; width: 100px;">
								</div>
								<div class="row">
								Language Description  :
								<input type="text" name="languagedesc" class="form-control" style="margin-left: 35px;">
							</div>

							<div class="row">
								Language Image :
								<input type="file" name="languageimg" class="form-control" style="width: 250;
    								margin-left: 60px;">
							</div>

								<button id="btn-login" name="btn-add-course" type="submit" style="top: 200;">Add Course</button>
								
							
							
							</div>
						</form>






        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


        <!-- Add new course Modal Ends -->






		<!-- Delete course Modal starts --> 

<div class="modal fade" id="myModaldelete" style="size: 50px;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<form  method="POST" action="imgdemo.php">
      	Enter course name :
       <input type="text" name="txt_course_del_id">
      	
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger"  name="btn-delete-course">Delete</button>
      </div>
		</form>
    </div>
  </div>
</div>


		<!-- Delete course Modal Ends -->












 		<!------java main content starts ---->

	<div id="main-content" class="container col-md-9 bg-primary mt-20 form-row">
		
			
	
		<br><br><br><br>

			<?php


			  

			   $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'uniquedeveloper');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			
			<div class="col-md-4  content-border" style="margin-bottom: 10px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
 										<img src="../../<?php echo $res['language_image']; ?>" class="img-responsive img-fluid">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content">
 										<p>
 											<?php echo $res['language_description']; ?>
 										</p><br>
 										<a href="admin_edit_courses.php?course_name=<?php echo $res['language_name'] ?> ">Start Reading</a>
 									</div>
 								</div>
 							</div>


<?php } ?>


	</div>




</body>
	
		<!------java main content Ends ---->


		 <!------Side bar ends---->
