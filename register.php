<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"online_notice_board");


  if(isset($_POST['register'])){

    
    $query = "insert into `admins` (`id`, `name`, `email`, `password`) VALUES ('2', 'indrani ', 'indrani123@gmail.com', 'indrani@123')";
    
    //echo $query;
    $query_run = mysqli_query($connection,$query);
      if($query){
            echo "<script>alert('Admin Registration successfully...You may now Admin login.');
            window.location.href = 'index.php';
            </script>";
          }
          else{
            echo "<script>alert('Admin Registration failed...try again');
            window.location.href = 'register.php';
            </script>";
          }


    }
  
  
  

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Notice Board System</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="bootstrap-4.4.1/js/bootstrap.min.js" charset="utf-8"></script>
    <!-- CSS File -->
    <link rel="stylesheet" href="../css/style.css">
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

    <!-- Login from code starts here -->
    <section id="login_form">
      <div class="row">
        <div class="col-md-4 m-auto block">
          <center><h4>Admin Registration form</h4></center>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <lable> Admin Name:</label>
                <input class="form-control" type="text" name="aname" placeholder="Enter Admin Name">
            </div>
            
            <div class="form-group">
              <lable>Email ID:</label>
                <input class="form-control" type="text" name="email" placeholder="Enter Admin email">
            </div>
            <div class="form-group">
              <lable>Passowrd:</label>
                <input class="form-control" type="password" name="password" placeholder="Enter Admin Password">
            </div>
      
           
           
            <button class="btn btn-primary" type="submit" name="register">Register</button>
          </form>
          <a href="index.php">Click here to login</a>
        </div>
      </div>
    </section>
  </body>
</html>
