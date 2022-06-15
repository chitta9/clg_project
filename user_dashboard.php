<?php
session_start();
if(isset($_POST['update_profile'])){
  $connection = mysqli_connect("localhost","root","","online_notice_board");
  // $db = mysqli_select_db($connection,"online_notice_board");
  $query = "update users set fname='$_POST[fname]',lname='$_POST[lname]',email='$_POST[email]',password='$_POST[password]',class=$_POST[class] where email='$_SESSION[email]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
    alert('Profile Updated successfully...');
    window.location.href = 'user_dashboard.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
    alert('Can't update try again...');
    window.location.href = 'user_dashboard.php';
    </script>";
  }
}

 
  // $result = mysqli_fetch_array($query1);
  // while($result = mysqli_fetch_array($query1)){}
  
  
  




?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Dashboard</title>
    <!-- Bootstrap files -->
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <!-- CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <script src="jQuery/juqery_latest.js" charset="utf-8"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#edit_profile_button").click(function(){
          $("#main_content").load('edit_profile.php');
        });

        $("#view_notice_button").click(function(){
          $("#main_content").load('view_notice.php');
        });

      });
    </script>
  </head>
  <body>
    <!-- Header section code start here  -->
    <div class="row" id="header">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <h3>Online Notice Board System</h3>
      </div>
      <div class="col-md-4">
      </div>
    </div>
    <br>
    <section id="container">
      <div class="row">
        <div class="col-md-2" id="left_sidebar">
          <?php

  $con = mysqli_connect("localhost","root","","online_notice_board");
          $selectquery = "select * from users where email='$_SESSION[email]'";
    $query1 = mysqli_query($con, $selectquery);
    if(mysqli_num_rows($query1)>0)
    {
      while($result = mysqli_fetch_array($query1)){
        echo "<a href='".$result['pic']."'><img src='".$result['pic']."' height='100' width='100'></a>";
        
      }

   }
  ?>
          <!-- <img src="./images/chitta.jpg" class="img-rounded" width="200px" height="200px"> -->
          <b><?php echo $_SESSION['email'];?></b><hr>
          <button type="button" class="btn btn-primary btn-block" id="edit_profile_button">Edit Profile</button>
          <button type="button" class="btn btn-warning btn-block" id="view_notice_button">View All Notices</button>
          <a href="logout.php" type="button" class="btn btn-success btn-block">Logout</a><br>
        </div>
        <div class="col-md-8" id="main_content">
          <h2>Welcome to user Dashboard</h2><br><br>
          <p>
          This is the user Dashboard page. Here user can only view all notices. He can edit own profile.</p><br>
          <p>
          This is the user Dashboard page. Here user can only view all notice. He can edit own profile.</p><br>
          <p>
          This is the user Dashboard page. Here user can only view all notices. He can edit own profile.</p><br>
        </div>
      </div>
    </section>
  </body>
</html>
