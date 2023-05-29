<?php
session_start();

include "../admin/includes/header.php";
if (!isset($_SESSION['username'])) {
  header('location:login.php');
  # code...
}

   $con = mysqli_connect('localhost','root');
    // if($con){
    //  echo"connection";
    // }
    mysqli_select_db($con,'uniquedeveloper');
   ?>

<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->

<style type="text/css">
  .animateuse{
      animation: leelaanimate 0.5s infinite;
    }

@keyframes leelaanimate{
      0% { color: red },
      10% { color: yellow },
      20%{ color: blue }
      40% {color: green },
      50% { color: pink }
      60% { color: orange },
      80% {  color: black },
      100% {  color: brown }
    }
</style>

   </head>
   <body>
     <div class="container text-center" >
      <br><br>
      <h1 class="text-center text-success text-uppercase animateuse" > UNIQUE DEVELOPER Quiz World</h1>
      <br><br><br><br>
      <table class="table text-center table-bordered table-hover">
        <tr>
          <th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
          
        </tr>
        <tr>
            <td>
              Questions Attempted
            </td>

           <?php
         $counter = 0;
         $Resultans = 0;

            if (isset($_POST['btnsubmitques'])) {

            if(!empty($_POST['quizecheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizecheck']);
            // print_r($_POST);
            ?>

          <td>
            <?php
            echo "Out of 5, You have attempt ".$checked_count." option."; ?>
            </td>
        
            
            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizecheck'];
            
            $q1= " select * from questions ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows);
              $flag = $rows['ans_id'] == $selected[$i];
              
                  if($flag){
                    // echo "correct ans is ".$rows['ans']."<br>";        
                    $counter++;
                    $Resultans++;
                    // echo "Well Done! your ". $counter ." answer is correct <br><br>";
                  }else{
                    $counter++;
                    // echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                  }         
                $i++;   
              }
              ?>
              
        
        <tr>
          <td>
            Your Total score
          </td>
          <td colspan="2">
        <?php 
              echo " Your score is ". $Resultans.".";
              }
              else{
              echo "<b>Please Select Atleast One Option.</b>";
              }
              } 
            ?>
            </td>
            </tr>

            <?php 

           $name=$_SESSION['username'];
      $finalresult="insert into user(username,totalques,answerscorrect) values('$name','5','$Resultans')";
      $query=mysqli_query($con,$finalresult);
            ?>


      </table>

        <a href="exercise.php" class="btn btn-success"> Back </a>
      </div>
   </body>
</html>





