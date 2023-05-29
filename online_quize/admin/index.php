
<?php 
include("../class/users.php");
$quiz=new users;
$course=$quiz->show_courses();
//print_r($quiz->show_courses());
 ?>

<!doctype html>
<html lang="en">
  <head>



 <link href="bootstrap.min.css" rel="stylesheet">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UNIQUE DEVELOPER</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>




        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <?php 
                if (isset($_GET['run'])&& !empty($_GET['run']))
                 {
                  echo "<p>Question added successfully</p>";
                }
           ?>


          <form method="POST" action="add_quize.php">
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
                      foreach ($course as $courses) 
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
    </div>








    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
