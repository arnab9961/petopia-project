<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("location: homepage.php");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
   
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in</title>
  <link rel="stylesheet" href="login.css">



  <style>
    @import url('https://fonts.cdnfonts.com/css/product-sans');
  </style>

</head>

<body>
    
     <div class="bar">

     </div>
     <div>

         <img src="logo_petopia.png" alt="petopia">

     </div>
     
  <div class="rectangle">
          <h3>SIGN IN</h3>
          <?php 
                                          if($login){
                                            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <p class="alert1"><strong>Success!</strong> Your are logged in.
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></p>
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div> ';
                                            }
                                            if($showError){
                                            echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Error!</strong> '. $showError.'
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div> ';
                                            }
                                          ?>
          <form action="signin.php" method="post">
        <div>
              <label for="username"><h4>Username:</h4></label>
              <input type="username" placeholder="type your username" name="username" required>
        </div>

        <div>
              <label for="password"><h4>Password:</h4></label>
              <input type="password" placeholder="type your password" name="password" required>
        </div>

       <div>
        <h6><a href="signup.php">Sign up</a></h6>
       </div>



    
       <button id="bar2" type="submit" class="btn btn-primary" style="vertical-align:middle"><span><h3 class="bar3">Submit</h3> </span>
    </form>

    </div>
  </div>

</body>

</html>