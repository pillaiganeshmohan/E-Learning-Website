<?php 
	session_start();
	 include 'conn.inc.php';
 require 'comments.inc.php';


if (!isset($_SESSION['username'])) {
	header('location:../../login.php');	
}
 date_default_timezone_set('Asia/Kolkata');
 // echo date_default_timezone_get();




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="java_video.css">
 	<link rel="stylesheet" type="text/css" href="../../css/programming.css">

 	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 	<style type="text/css">
 		#mybody
{
	background-color: #e9ecef;

}

#video-list-section
{
	position: absolute;
	top:80px;
	right: 150px;
	background-color: deepskyblue;
	padding: 20px;
	left:900px;
	width: 400px;

}
.fixed-top
{
	position: relative;
}



.item #sidebar-wrapper, #sidebar-wrapper {
    float: right;
    width: 30%;
    max-width: 330px;
}

#sidebar-wrapper {
    padding-top: 20px;
}





 	</style>
 </head>
 <body id="mybody" class="bg-white">


	
			<!---Navigation Start	----->
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">E-Learning Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#"><span class="sr-only">(current)</span></a>
      </li>
     <!--  <li class="nav-item">
        <a class="nav-link text-white" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


	<!---Navigation Ends	----->











		<!---Video iframe Start	----->

<br>
<div class="container-fluid">
	<div class="row">
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


		<!---Video iframe Ends	----->


		<!---Comments Section Start	----->
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
		<!---Comments Section Ends	----->


		<!---Video list Start	----->


	<div class="col-md-4 float-right ml-5 bg-white mt-4">


          
  <table class="table table-hover mt-3 table-borderless bg-light">
    <tbody>
	<div class="card-header text-center bg-light"><h5>Popular videos</h5></div>


    	<?php 

	$course_name=$_GET['course_name'];

	$sql="select * from videos where course_name='$course_name'";
	$result=mysqli_query($con,$sql);

	while ($row=mysqli_fetch_array($result))
	 {
		
?>

      <tr>
        <td><a href=""><img src=../../uploadimg/thumbnail/<?php echo $row['video_image']; ?>  height="100" width="150"></a></td>
        <td><?php echo $row['video_name']; ?></td>
       
      </tr>

  <?php } ?>
    
   
    </tbody>
  </table>
</div>
</div>
</div>

	





	

























	



		
							<!-- <div style="clear: both;"></div> -->

 	<!---Video list Ends	----->



 	<!---footer Section Start	----->

<?php 
	include "../../admin/includes/footer.php";
 ?>



 			<!---footer Section Ends	----->

 </body>
 </html>