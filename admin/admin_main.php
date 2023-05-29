
<?php 
  include("classes/admin.php");
  $admin=new admin;
  $userd=$admin->show_users();

 ?>

<!doctype html>
<html lang="en">
  <head>



 <!-- <link href="../online_quize/admin/bootstrap.min.css" rel="stylesheet"> -->


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin panel</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
         <!--  font awsome cdn -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

     .mytable1 .card
     {
     background: #5f2c82;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #49a09d, #5f2c82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     }

     .mytable2 .card
     {
      background: #EC6F66;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F3A183, #EC6F66);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F3A183, #EC6F66); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     }
     .card 
     {
      overflow: hidden;
      transition: all 0.9s ease;
     }
     .card:hover
     {
      transform: scale(1.04);
     }



    

</style>

  </head>

  <body style="background-color:#f1efef">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">E-Learning Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



        <!-- sidebar starts -->

    <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
            <li class="list-group-item  bg-dark "><a href="">Welcome Admin</a></li>
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



         <!-- main content starts -->

        <div class=" col-md-10">
               <div class="card-header bg-white" style="margin-right: -45px; height: 60px;">
                 <b>DASHBOARD</b>
                  <button type="btn btn-outline-success" class="btn btn-primary float-right" style="height: 40px;"><a href="../login.php" class="text-white ">Logout</a> </button>
                  </div>
                 <div class="row">

     
         

          <div class="col-md-4 mt-3 ml-5">
            <div class="card shadow " style="width: 18rem; box-shadow: 1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px; cursor:pointer;">
              <!-- <div class="card-header">
                Your Courses
              </div> -->


              <img class="myimg" src="../uploadimg/file3.png" alt="Card" width="288" height="200">
              <div class="card-body">
                <p class="card-text"><a href="manage_courses/manage_courses.php" style="text-decoration: none;">MANAGE YOUR COURSE <i class="fa fa-book ml-3"></i></a></p>
              </div>
            </div>
            
          </div>


           <div class="col-md-4 mt-3">
            <div class="card shadow" style="width: 18rem;cursor:pointer; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px;">
              <!-- <div class="card-header">
                Your Courses
              </div> -->


              <img class="" src="../uploadimg/file4.png" alt="Card" width="288" height="200">
              <div class="card-body">
                <p class="card-text "><a href="manage_videos/manage_videos.php" style="text-decoration: none; color: orangered">MANAGE YOUR VIDEOS</a><i class="fa fa-video-camera ml-3" style="color: orangered"></i></p>
              </div>
            </div>
            
          </div>

         <!--  no of courses and videos starts -->

          <div class="col-sm-3 mt-3">


            <table class="table table-borderless">
   
    <tbody >
      <tr>
        <td class="mytable1">
           <div class="card shadow border-0 " style="width: 15rem; height: 110px; box-shadow: 2px 3px #827171; border-radius:0px; border-top-left-radius: 0px;">

              <div class="card-body">
                <p class="card-text text-white"><b class="h4">No. Of Courses </b><br><span style="font-size: 20px;"><?php $admin->display_course_count(); ?></span></p>
              </div>
            </div>

        </td>
        
      </tr>
      <tr>
        <td class="mytable2">
           <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 2px #827171; border-radius:0px; border-top-left-radius: 0px;">

             <div class="card-body">
                <p class="card-text text-white"><b class="h4">No. Of Videos</b><br><span style="font-size: 20px;"><?php $admin->display_video_count(); ?></span></p>
              </div>

        </td>
       
      </tr>
     
    </tbody>
  </table>
           
            
          </div>       <!--  no of courses and videos starts -->


            </div>

            <div class="row ">     <!--  second row closed -->

              <div class="col-md-8">    <!-- list of users starts -->

                <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 640px;"> 
                  
                 <!-- table stsrts  -->  <!--  use table-responsive class -->
                <p class="ml-5">List of users</p>
                <thead>
                  <tr>
                
                    <th scope="col">id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">email id</th>
                  </tr>
                </thead>
                <tbody style="">

                   <?php 
                          foreach ($userd as $userdata) {
                            
                          
                   ?> 
                  <tr >
                    <th scope="row"><?php echo $userdata['id']; ?></th>
                    <td ><?php echo $userdata['username']; ?></td>
                    <td><?php echo $userdata['password']; ?></td>
                    <td><?php echo $userdata['email']; ?></td>
                  </tr>
                 
                 <?php } ?>
                </tbody>
              </table>

                <!-- table ends  -->



              </div>   <!-- list of users ends -->


           <div class="col-md-3 mt-5 ml-5">
            <div class="card shadow" style="width: 15rem; height:22rem; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px;">
              <!-- <div class="card-header">
                Your Courses
              </div> -->


              <img class="" src="../uploadimg/file6.png" alt="Card" width="210" height="300">
              <div class="card-body">
                <p class="card-text "><a href="manage_quiz/manage_quiz.php" style="text-decoration: none; color: orangered">MANAGE YOUR QUIZ</a></p>
              </div>
            </div>
            
          </div>
              


            </div>  <!--  second row closed -->




            <div class="row">     <!-- third row starts -->

              <div class="col-md-8 ml-5">       <!-- FAQ section starts -->

              <table class="table bg-white" style="height : 355px;overflow-y: scroll;display: inline-block; width:640px">
                  <caption></caption>
                  <thead>
                    <tr>
                      <th>id</th>
                      <th scope="col">MANAGE FAQs   <a href="" class="float-right" style="text-decoration: none;">Edit</a></th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php  $faq=$admin->display_faq_list();

                      foreach ($faq as $faq_list)
                       {
                          
                     ?>

                    <tr style="width: 500px;" >
                      <th><?php echo $faq_list['id']; ?></th>
                      <td><?php echo $faq_list['faq_title']; ?><br><blockquote class="rounded p-2 text-muted " style="font-size: 13px; background-color: #db6a8f57;"><?php echo $faq_list['faq_description']; ?></blockquote></td>
                    </tr>

                  <?php } ?>
                   
                   
                  </tbody>
                </table>
                </div>    <!-- FAQ section ends -->
              
            </div>              <!--   third row starts -->





        </div>


          <!-- main content starts -->

      </div>       <!--  main row closed -->
    </div>          <!-- container closed -->








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
