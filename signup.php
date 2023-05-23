<?php
 
 $showAlert = false;
 $showError = false;
 if($_SERVER["REQUEST_METHOD"] == "POST"){
  include("dbconnect.php");
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists=false;
  if(($password == $cpassword) && $exists==false){
      $sql = "INSERT INTO `users` (`username`, `password`, `dt`) 
      VALUES ('$username', '$password', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if($result){
        $showAlert = true;
      }
      else{
        $showError = "Passwords do not match";
      }
  }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.cdnfonts.com/css/product-sans');
    </style>

</head>
   
<body>
                    <div class="bar">
        
                    </div>

                    <div>
                          <img src="logo_petopia.png" alt="petopia" >
        
                    </div>
                    
                    
                    
                                <div  class="rectangle2">
                                          <h3>SIGN UP</h3>
                                          <?php 
                                          if($showAlert){
                                            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <p class="alert1"><strong>Success!</strong> Your account is now created and you can login
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
                                          
                                         <form action="/Petopia/signup.php" method="post">
                                      

                                         <div class="form-group">
                                              <label for="username"><h4>Username:</h4></label>
                                              <input type="username" placeholder="type your username" id="username" name="username" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="password"><h4>Password:</h4></label>
                                             <input type="password" placeholder="type your password" id="password" name="password" required>
                                          </div>
                                          <div>
                                          <div class="form-group">
                                              <label for="cpassword"><h4>Confirm Password:</h4></label>
                                             <input type="cpassword" placeholder="type your password again" id="cpassword" name="cpassword" required>
                                          </div>
                                          <div>
                                             <h6><a href="signin.php">Already have an account?</a></h6>
                                          </div>

                                        
                                   
                                    <button id="bar2" type="submit" class="btn btn-primary" style="vertical-align:middle"><span><h3 class="bar3">Submit</h3> </span>
                                    </form> 
                                </div>

                                
    
</body>
</html>