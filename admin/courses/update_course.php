 <?php 
include "../includes/header.php";
  ?>
<style type="text/css">
	
	form
	{
		
	}
</style> 


<?php 


       		 $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'uniquedeveloper');
       		$course_id=$_GET['course_id'];
       		$q="select * from courses where id='$course_id'";
			$result=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($result)) {

       		?>


<form  method="POST" action="verify_update.php">
	<input type="hidden" name="cors_id" value="<?php echo $res['id']; ?>">
	Enter topic name :<input type="text" name="topic_name" class="form-control" value="<?php echo $res['topic_name'] ?>"><br>
	Enter course name:<input type="text" name="coursename" class="form-control" value="<?php echo $res['course_name'] ?>">

	Enter the content:
<textarea id="editor" name="editor" class="ckeditor" placeholder="Enter the content..."><?php echo $res['description']; ?></textarea>

<button type="submit" name="submitupdate" class="btn btn-success">submit</button>
</form>
<?php } ?>


 <script src="../ckeditor/ckeditor.js"></script>