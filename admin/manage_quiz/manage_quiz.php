<?php 
include("../classes/manage_quiz_class.php");
$quiz=new manage_quiz_class;			// creating object of  manage_courses_class.php
    $quiz_list=$quiz->display_quiz_courses();   //calling display_courses() method from manage_courses_class.php

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>

 	<!-- bootstrap CDN files -->

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

  	<!-- 		css starts -->
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
     .card1
     {
     	font-family: 'Open Sans', sans-serif;
     }
     .cardh2
     {
     	font-family: 'Lato', sans-serif;

     }



     /***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

/***
Bootstrap4 Card with Tabs by @mdeuerlein
***/

body {
    background-color: #f7f8f9;
}

.card {
    background-color: #ffffff;
    border: 1px solid rgba(0, 34, 51, 0.1);
    box-shadow: 2px 4px 10px 0 rgba(0, 34, 51, 0.05), 2px 4px 10px 0 rgba(0, 34, 51, 0.05);
    border-radius: 0.15rem;
}

/* Tabs Card */

.tab-card {
  border:1px solid #eee;
}

.tab-card-header {
  background:none;
}
/* Default mode */
.tab-card-header > .nav-tabs {
  border: none;
  margin: 0px;
}
.tab-card-header > .nav-tabs > li {
  margin-right: 2px;
}
.tab-card-header > .nav-tabs > li > a {
  border: 0;
  border-bottom:2px solid transparent;
  margin-right: 0;
  color: #737373;
  padding: 2px 15px;
}

.tab-card-header > .nav-tabs > li > a.show {
    border-bottom:2px solid #007bff;
    color: #007bff;
}
.tab-card-header > .nav-tabs > li > a:hover {
    color: #007bff;
}

.tab-card-header > .tab-content {
  padding-bottom: 0;
}


 </style>
 </head>
 <body onload="">
 
 <!-- ========================================================================================================================== -->

 				<!-- navigation bar starts -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">E-Learning Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="../admin_main.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

				<!-- navigation bar ends -->
<!-- ========================================================================================================================== -->




<div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
<!-- ========================================================================================================================== -->

<!-- sidebar starts -->




        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
            <li class="list-group-item  bg-dark "><a href="../admin_main.php">Welcome Admin</a></li>
            <li class="list-group-item bg-dark "><a href="manage_courses/manage_courses.php">Manage Courses</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Quiz</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Videos</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Comments</a></li>
            <li class="list-group-item bg-dark"><a href="">Manage Users</a></li>
            <li class="list-group-item bg-dark"><a href="">Logout</a></li>
            <li class="list-group-item bg-dark" style="height: 400px;"></li>
          </ul>
        </div>

        <!-- sidebar ends -->

  <!-- ========================================================================================================================== -->



  		<div class="col-md-10 ">


 <!-- ========================================================================================================================== -->
 

		<!-- Nav tabs strats -->


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#manage_course">Manage Quiz</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Add Questions</a>
  </li>
</ul>
		<!-- Nav tabs ends -->

<!-- ========================================================================================================================== -->



<div class="tab-content">



<!-- ========================================================================================================================== -->

			<!-- home panes starts -->


  <div class="tab-pane container active" id="home">
<div class="card-header mt-3 mr-5 bg-white text-info border-0 shadow card1 text-center" style="width: 1050px; box-shadow: 1px 1px 1px 1px #ccc"><b class="text-center">YOUR ONLINE QUIZE COURSES</b></div><br>
<div class="row justify-content-center">

<div class="col-md-4">
 <center><label>select Course</label><br>
    <form method="POST" action="../../online_quize/question_show.php">
    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">

      <?php 
                                   //calling show_courses() method of users class
       foreach ($quiz_list as $quiz) 
       {
         
 ?>

      <option value="<?php echo $quiz['id'] ;?>"><?php echo $quiz['cat_name']; ?></option>    <!-- displaying course name in dropdown -->
    

      <?php
}

      ?>
    </select>
      <button type="submit" class="btn btn-success mt-3 ">Start Quiz</button>
  </form></center>
</div>


</div>

<!-- ============================================================================================================ -->

						<!-- php code to display modal if status variable is set -->
	<?php 

	if ( isset($_GET['status']) and $_GET['status']=="added")      //first if condition for course added
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        course added successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
		}


	if ( isset($_GET['status']) and $_GET['status']=="deleted")    //second if condition for course deleted
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        	course deleted successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
			}



	if ( isset($_GET['status']) and $_GET['status']=="updated")    //second if condition for course deleted
	{
		echo '<div class="col-md-4 mt-5">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				  Open modal
				</button>






				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header">
				        <h4 class="modal-title">Message</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body">
				        	course updated successfully
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				</div>';
			}





	 ?>


	 			<!-- ended display modal php code -->
<!-- =========================================================================================== -->














</div>

  			<!-- home panes ends -->

 <!-- ========================================================================================================================== -->

			








 <!-- ========================================================================================================================== -->

		<!-- manage course pane starts -->

  <div class="tab-pane container fade" id="manage_course">
  	



  		<center><div class="col-md-7">


<div class="card mt-3 tab-card">
        <div class="card-header tab-card-header">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">ADD</a>
            </li>
           <!--  <li class="nav-item">
                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">UPDATE</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">DELETE</a>
            </li>
          </ul>
        </div>

        <div class="tab-content" id="myTabContent">   <!-- tab content starts -->


        	<!-- ======================================================================================================= -->
        				<!-- add new video course tab starts -->

          <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">

            <div class="card-body col-md-12">
            	



            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-danger text-light p-2 cardh2"><h3>ADD NEW SUBJECT</h3></div>
				  
				  <div class="card-body small" ">

				  <form action="quiz_add.php" method="post" enctype="multipart/form-data" onsubmit="return validation()">
					    <div class="form-group">
					      <label for="email">Course Name :</label>
					      <input type="text" class="form-control" id="c_name" placeholder="Enter Subject Name" name="course_name">
					      <span id="name_error" class="text-danger font-weight-bold"></span>
					    </div>
					   
					    
					    <div class="">
					    <button type="submit" class="btn btn-danger"  name="btn_add_quiz_sub">Submit</button>
						</div>
				  </form>

				</div>
			</div>
            </div>
          </div>
          								<!-- add new video course tab ends -->
				<!-- ======================================================================================================= -->




				<!-- ======================================================================================================= -->
        								<!-- update video course tab starts -->		

<!-- 
          <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
           
            <div class="card-body col-md-12">
            	

            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-primary text-light p-2 cardh2 "><h3>UPDATE COURSE</h3></div>
				  
				  <div class="card-body small" >
					    
				 

				 <form action="video_add.php" method="post" enctype="multipart/form-data" onsubmit="">


				 	 <div class="form-group">

					    <label for="exampleFormControlSelect1">Select video Course Name :</label>
					    <select class="form-control" id="exampleFormControlSelect1" name="selected-course-to-update">

					    	<?php  foreach ($video as $course_list)
							 {
										?> 
					      <option><?php echo  $course_list['course_name']; ?></option>
					      <?php } ?>

					    </select>
					  </div>
					   
					    
					    <div class="form-group">
					      <label for="pwd">Course Description</label>
					      <input type="text" class="form-control" id="c_des" placeholder="Enter Course Description" name="course_desc">
					      <span id="desc_error" class="text-danger font-weight-bold"></span>
					    </div>

					     <div class="form-group">
					      <label for="pwd">Course Image</label>
					      <input type="file" class="form-control" id="c_im" placeholder="Enter Course Image" name="course_image">
					      <span id="image_error" class="text-danger font-weight-bold"></span>
					    </div>
					    
					    <div class="">
					    <button type="submit" class="btn btn-danger"  name="btn_update_vid">Submit</button>
						</div>
				  </form>

				</div>
			</div>


            </div>           
          </div>
 -->

          								<!-- update video course tab ends -->
				<!-- ======================================================================================================= -->



				<!-- ======================================================================================================= -->
        								<!-- delete quiz course tab starts -->		


          <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
           
            <div class="card-body col-md-12">
            	



            		<div class="card" style="box-shadow: 2px 2px 2px 2px #dfdfdf;">
				  <div class="card-header bg-primary text-light p-2 cardh2"><h3>DELETE COURSE</h3></div>
				  
				  <div class="card-body small" ">

				  <form action="quiz_add.php" method="post" enctype="multipart/form-data">
					   <div class="form-group">
					    <label for="exampleFormControlSelect1">Select Course</label>
					    <select class="form-control" id="exampleFormControlSelect1" name="selected_course">
					        <?php 
								                                   //calling show_courses() method of users class
								       foreach ($quiz_list as $quiz) 
								       {
								         
								 ?>

								      <option value="<?php echo $quiz['id'] ;?>"><?php echo $quiz['cat_name']; ?></option>    <!-- displaying course name in dropdown -->
								    

								      <?php
								}

								      ?>
					    </select>
					  </div>
					   
					    <div class="float-left">
					    <button type="submit" class="btn btn-danger" name="btn_delete_quiz_sub">Submit</button>
						</div>
				  </form>

				</div>
			</div>


            </div>          
          </div>



         									 <!-- delete quiz course tab ends -->
				<!-- ======================================================================================================= -->

        </div>			<!-- tab content  -->
      







  				
  			</div></center>


  </div>



  <!-- manage courses pane ends -->

<!-- ========================================================================================================================== -->





<!-- ========================================================================================================================== -->

					<!-- add questions pane starts -->




  <div class="tab-pane container fade" id="menu2">   




        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Add a new question</h1>

          <?php 
                if (isset($_GET['run'])&& !empty($_GET['run']))
                 {
                  echo "<p>Question added successfully</p>";
                }
           ?>


          <form method="POST" action="quiz_add.php">
            <div class="form-group">
              <label for="text">Question :</label>
              <input type="text" class="form-control" name="question" placeholder="Enter Question">
              <small id="emailHelp" class="form-text text-muted">please enter the question.</small>
            </div>

            <div class="form-group">
              <label for="text">Option 1 :</label>
              <input type="text" class="form-control"  name="opt1" placeholder="Enter option 1">
            </div>

            <div class="form-group">
              <label for="text">Option 2 :</label>
              <input type="text" class="form-control"   name="opt2" placeholder="Enter option 2">
            </div>


            <div class="form-group">
              <label for="text">Option 3 :</label>
              <input type="text" class="form-control"  name="opt3" placeholder="Enter option 3">
            </div>

               <div class="form-group">
              <label for="text">Option 4 :</label>
              <input type="text" class="form-control"  name="opt4" placeholder="Enter option 4">
            </div>

               <div class="form-group">
              <label for="text">Answer :</label>
              <input type="text" class="form-control"  name="answer" placeholder="Enter the correct answer">
            </div>

             <div class="form-group">
              <label for="exampleFormControlSelect1">Select Course</label>
              <select class="form-control" id="exampleFormControlSelect1"  name="cat">
                <option  class="active">choose course</option>
                <?php 
                      foreach ($quiz_list as $courses) 
                      {
                         echo "<option value=".$courses['id'].">".$courses['cat_name']."</option>";
                      }
                 ?>

                
               
                
              </select>
            </div>


            
            

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>



        </div>


  </div>
  				<!-- add questions pane ends -->

  <!-- ========================================================================================================================== -->
</div>















  		
  			
  		</div>



</div>
</div>











<script type="text/javascript">
	

	$('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
});
// =============================================================================================================
					// javascript validation function

	function validation()
	{
		var name=document.getElementById('c_name').value;
		var desc=document.getElementById('c_desc').value;
		var img=document.getElementById('c_img').value;
		if (name=="")
		{ 
			document.getElementById('name_error').innerHTML="** please enter the course name";
			return false;

		}

		if (desc=="")
		{ 
			document.getElementById('desc_error').innerHTML="** please enter the course descsription";
			return false;

		}
		if (img=="")
		{ 
			document.getElementById('image_error').innerHTML="** please choose an image";
			return false;

		}
	}
					// javascript validation function
// =============================================================================================================


// =============================================================================================================
				
					// javascript modal function called on page load

    	function display_modal()
    	{

    		

    	}

// =============================================================================================================


    				
// =============================================================================================================
				
					// javascript modal function called on page load

    	 $(window).on('load',function(){
        $('#myModal').modal('show');
    });


    	 	      // javascript validation function
// =============================================================================================================

</script>


 </body>
 </html>