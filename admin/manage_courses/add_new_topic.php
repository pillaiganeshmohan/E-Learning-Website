
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
            <li class="list-group-item  bg-dark "><a href="">Welcome Admin</a></li>
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

 <!-- ===============================================================================================================-->


                              <!-- form starts -->

            <div><h3 class="text-center mt-2">Add a new topic</h3></div>

            <form  method="POST" action="verify/verify_changes.php" class="ml-3" onsubmit="return validation()">
                  <input type="hidden" name="id" value="<?php echo $_GET['course_id']; ?>">
                 
                  Enter course name:<input type="text" name="coursename" id="coursename" class="form-control" readonly="readonly" value="<?php echo $_GET['course_name'] ?>"> <span id="name_error"></span><br>

                   Enter topic name :<input type="text" name="topic_name" id="topic_name" class="form-control">
                   <span id="desc_error" class="text-danger small" ></span>

                <textarea id="editor" name="editor" id="editor" class="ckeditor" placeholder="Enter the content..."></textarea>
                <span id="editor_error"  class="text-danger small"></span><br>

                <button type="submit" name="submitbtn" class="btn btn-success">submit</button>
             </form>

                </div>



  </div>
  </div>




<script type="text/javascript">
  

  // =============================================================================================================
          // javascript validation function

  function validation()
  {
    var name=document.getElementById('coursename').value;
    var topicname=document.getElementById('topic_name').value;
    var editor=document.getElementById('editor').value;
    if (name=="")
    { 
      document.getElementById('name_error').innerHTML="** please enter topic name";
      return false;

    }

    if (topicname=="")
    { 
      document.getElementById('desc_error').innerHTML="** please enter topic name";
      return false;

    }
    if (editor=="")
    { 
      document.getElementById('editor_error').innerHTML="** please enter the description";
      return false;

    }
  }
          // javascript validation function
// =============================================================================================================

</script>



 <script src="../ckeditor/ckeditor.js"></script>   <!-- script for ckeditor -->
<body>  
</html>