<?php 
session_start();

include "../admin/includes/header.php";
if (!isset($_SESSION['username'])) {
	header('location:login.php');
	# code...
}

 $con=mysqli_connect('localhost','root');  

mysqli_select_db($con,'uniquedeveloper');
$result=0;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div class="container ">
	<br><br>
	<h1 class="text-center">UNIQUE DEVELOPER QUIZE</h1>
	<br><br><br>

	<table class="table text-center table-bordered table-hover">
		<tr>
	    	<th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
		</tr>
		<tr>
			<td>
				Question Attempted
			</td>

<?php  	

if (isset($_POST['btnsubmitques'])) 
{


	if (!empty($_POST['quizecheck']))
	 {
		
	 	$count=count($_POST['quizecheck']);
	 	?>

	 	<td>
	 		
	 	<?php echo "out of 5 you have selected ".$count." option";  ?>

	 	</td>

</tr>
<?php 
	 	
	 	$i=1;

	 	$selected=	$_POST['quizecheck'];
	 	print_r($selected);


	 	$q="select * from questions";
	 	$query=mysqli_query($con,$q);
	 	while ($row=mysqli_fetch_array($query)) 
	 	{
	 		echo $row['ans_id'];
	 		$checked=$row['ans_id']==$selected[$i];
	 		if ($checked) {
	 			$result++;
	 		}
	 		$i++;
	 	}
	 	 ?>
	 	 <tr>

	 	 	<td>total score is </td>
	 	 	<td>

	 	<?php echo "<br> your total score is ".$result;
	}

	} ?>
	</td>
</tr>

			<?php 
			$name=$_SESSION['username'];
			$finalresult="insert into user(username,totalques,answerscorrect) values('$name','5','$result')";
			$query=mysqli_query($con,$finalresult);
			 ?>

			</table>
</div>

</body>
</html>

