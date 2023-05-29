

<style type="text/css">

.commentdiv
{	
	height: 170px;
	width: 760px;
	border:1px #d2c8c8 solid;
	margin-bottom: 50px;
	position: relative;
}

textarea
{	
	
	margin-right: 20px;
	margin-top: 50px;
	width: 600px;
	height: 70px;
}

.commentbtn
{
	height: 30px;
	width: 100px;
	border: none;
	color: #fff;
	margin-left: 20px;
	background-color: deepskyblue;
}

.comment-box
{
	width: 760px;
	padding: 20px;
	background-color: #fff;
	border-radius: 4px;
	margin-bottom: 4px;
	position: relative;
}

.comment-box p
{
	font-family:arial;
	font-size: 14px;
	line-height: 16px;

}

.delete-form
{
	position: absolute;
	top:0px;
	right:10px;
}

.delete-form Button
{
	width: 40px;
	height: 20px;
	color:#282828;
	background-color: #fff;
	opacity: 0.7;
	border:none;
}

.delete-form Button:hover
{
	opacity: 1px;
}

.btnEdit
{
	position: absolute !important;
	top:0px !important;
	right:120px !important;
	width: 40px;
	height: 20px;
	color:#282828;
	background-color: #fff;
	opacity: 0.7;
	border:none;
}

.btnEdit:hover
{
	opacity: 1px;
	cursor: pointer;

}


</style>


<?php 
$GLOBALS['username'] = "admin";
function setComments($con)
{
	
	if (isset($_POST['commentSubmit']))
	 {
		 // $uid=$_POST['uid'];
	 	$video_id=$_POST['vid'];
	 	$uid='admin';
		 $date=$_POST['date'];
		 $message=$_POST['message'];

		 $sql="INSERT INTO `commentsection`(`uid`, `date`, `message`,video_id) VALUES ('$uid','$date','$message','$video_id')";
		 // or $result=$con->query($sql);
		 $r=mysqli_query($con,$sql);
		   // do not resubmit the form 
		
	 }
}	

function getComments($con)
{
	$username="admin";
	$video_id=$_SESSION['vid'];
	$sql="SELECT * FROM commentsection where video_id='$video_id'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) {
		echo "<div class='comment-box shadow bg-light'><p>";
			echo "<b>".$row['uid']."</b>&nbsp;&nbsp;&nbsp;";
			echo $row['date']."<br><br>";
			echo nl2br($row['message']);  //converts nl tags into br tags for line breaks
		echo "</p>";

			echo "<form class='delete-form' method='POST' action='".deleteComment($con)."'>
			<input type='hidden' name='cid' value='".$row['cid']."'>
			<button type='submit' name='CommentDelete' class='btndelete'>Delete</button> 
			</form>";
			$_SESSION['id']=$row['cid'];

			// button for edit comment

			echo "
			<input type='hidden' name='cid' value='".$row['cid']."'>
			<button type='button' class='btnEdit'  data-toggle='modal' data-target='#myModal' >edit</button> 
			";




echo '
<div id="myModal" class="modal fade col-md-6 m-auto" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Edit Comment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button><br>
        
      </div>
      <div class="modal-body">
       

 		<form action="'.editComment($con).'" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" name="cid" class="form-control" id="recipient-name" value="'.$_SESSION['id'].'">
          </div>
          <div class="form-group" style="padding:-20px;">
            <label for="message-text" class="col-form-label" >Message:</label>
            <textarea class="form-control" id="message-text" name="message" value="sunil">'.$row['message'].'</textarea>
          </div>
        




      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-default btn-primary" name="commentEdit" >Submit</button>

        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>

      </div>
      </form>
    </div>

  </div>
</div>
';



		
		
		echo "</div>";
	}
	
	
 }

 function deleteComment($con)
 {
 	if (isset($_POST['CommentDelete']))  // if delete button clicks then only this code will run
	 {
		 $cid=$_POST['cid'];
		 
		 $sql="DELETE FROM commentsection where cid='$cid'"; // dont write * 
		 // or $result=$con->query($sql);
		 $r=mysqli_query($con,$sql);
		 


		 //header("Location:java_videos.php");
		 
		 
		 // echo '<meta http-equiv="refresh" content=1; URL=java_videos.php" />';        // another way to redirect rom one page to onother
 
	 }

 }



function editComment($con)
{

	if (isset($_POST['commentEdit']))  // if delete button clicks then only this code will run
	 {
		 $cid=$_POST['cid'];
		 $message=$_POST['message'];
		 
		 
		$sql="UPDATE `commentsection` SET `message`='$message' WHERE cid='$cid'";
		 // // or $result=$con->query($sql);
		  $r=mysqli_query($con,$sql);
		  
		 //header("Location:java_videos.php");
		 // header("Refresh:0,url=java_videos.php");        //to refresh the php page
	 }
} 
?>