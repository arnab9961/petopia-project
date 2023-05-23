
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="grid-container">
        <div class="grid-item-1"> <img src="logo_petopia.png" alt="petopia"> </div>

          <div class="grid-item-2" method="POST" action="search.php">
              <form class="center">
              <form action="index.php" method="POST">
              <input type="text" name="search" placeholder="Search">
              
              <!-- <button type="submit" class="btn btn-primary" style="color">Search</button>   -->
              </form>
               
                  <?php
                
                  /*
                include 'component.php';
                  if (isset($_POST['search'])) {
                    
                      $searchTerm = $_POST['search'];
                 
                      if (stripos($productname, $searchTerm) !== false) {
                          echo $element;
                      }
                  } else {
                      echo $element;
                  }
                  */
              
                  ?>

              </form>
             
            </div>
           
              
          
          <div class="grid-item-3">
          <a href="signin.php"><i class="bi bi-box-arrow-right h3"></i></a>
              
                
                   
        
                     
            
                        <a href="cart.php" style="text-decoration:none" >
                  
                        <i class="bi bi-cart-fill h3"></i>
                        <?php
                        session_start();
                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" >$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" > 0 </span>";
                        }

                        ?>
                    
                         </a>
                        
        

                 
             
           </div>
    </div>

 


  <div class="box">
      <ul class="active">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="profile.php">Animal Profiles</a></li>
          <li><a href="petcare.php">Petcare Tips</a></li>
          <li><a href="contract.php">Contracts</a></li>
         
        </li>
   </ul>
  </div>

  </header>

  

</body>
</html>

