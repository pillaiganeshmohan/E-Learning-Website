<!DOCTYPE html>
<html>
<head>
	<title>E-Learning Website</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				background: #373b44; /* fallback for old browsers */
  				background: -webkit-linear-gradient(to right, #373b44, #4286f4); /* Chrome 10-25, Safari 5.1-6 */
  				background: linear-gradient(to right, #373b44, #4286f4);
		}

		body
		{
			background: #a73737;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #7a2828, #a73737);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #7a2828, #a73737); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}



		#mainpagecontent
		{
			background: #d53369;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #cbad6d, #d53369);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #cbad6d, #d53369); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


		}

	</style>
</head>
<body>
		<!------Navigation bar ends ---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">E-Learning website</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="">Our Service</a></li>
					<li> <a href="" id="our-location" class="btn-success" data-target="#mymodal" data-toggle="modal">Login/Signup</a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

		<!------Navigation bar ends ---->


		 <!------Side bar start---->


	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">


		




			<li><a href="" class="crossbutton" onclick="closesidemenu()">&times;</a></li>
			<li style="background-color :orangered;"><a href="" >Java - Home</a></li>
			<li><a href="">Java - Overview</a></li>
			<li><a href="">Java - Environment Setup</a></li>
			<li><a href="">Java - Basic Syntax</a></li>
			<li><a href="">Java - Object & Classes</a></li>
			<li><a href="">Java - Constructors</a></li>
			<li><a href="">Java - Basic Datatypes</a></li>
			<li><a href="">Java - Variable Types</a></li>
			<li><a href="">Java - Modifier Types</a></li>
			<li><a href="">Java - Basic Operators</a></li>
			<li><a href="">Java - Loop Control</a></li>
			<li><a href="">Java - Decision Making</a></li>
			<li><a href="">Java - Numbers</a></li>
			<li><a href="">Java - Characters</a></li>
			<li><a href="">Java - Strings</a></li>
			<li><a href="">Java - Arrays</a></li>
			<li><a href="">Java - Date & Time</a></li>
			<li><a href="">Java - Regular Expressions</a></li>
			<li><a href="">Java - Methods</a></li>
			<li><a href="">Java - Files and I/O</a></li>



		</ul>
	</div>

		 <!------Side bar ends---->

 		<!------java main content starts ---->

	<div id="mainpagecontent">
		<div class="title-image">
			<img src="java-tutorial.png">
		</div>
		<div class="content">
		<h4 style="font-family: 'Assistant', sans-serif;" class="content">
			<h3 class="text-center" style="color:orangered;">Introduction</h3><br>
				Java is a high-level programming language originally developed by Sun Microsystems and released in 1995. Java runs on a variety of platforms, such as Windows, Mac OS, and the various versions of UNIX. This tutorial gives a complete understanding of Java.  This reference will take you through simple and practical approaches while learning Java Programming language.

				<br><h3 style="font-family: 'Rubik', sans-serif; font-style: bold; color:orangered;" class="text-center">Audience</h3><br>
				This tutorial has been prepared for the beginners to help them understand the basic to advanced concepts related to Java Programming language.

				<br><h3 class="text-center" style="font-style: bold;color:orangered;">Prerequisites</h3><br>
				Before you start practicing various types of examples given in this reference, we assume that you are already aware about computer programs and computer programming languages.

		</h4>
		</div>
			
		<button id="btn_next">Next</button>
	
	</div>


<div id="yt"  class="g-ytsubscribe" data-channelid="UCxwf74gbHaiHHJ7XxZ51JyA" data-layout="full" data-count="default"></div>


 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>