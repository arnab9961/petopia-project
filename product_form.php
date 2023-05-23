<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'connection.php';
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_image = $_POST["product_image"];
    
   
     
    // Prepare and execute the SQL statement to insert data into the table
    $sql = "INSERT INTO producttb(product_name, product_price, product_image) VALUES ('$product_name', '$product_price' , '$product_image')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Products</title>
    <link rel="stylesheet" href="cart.css">
</head>
<body>


<div  class="rectangle2">
                                          <h3>Adding a new product</h3>
                                        
                                          
                                         <form action="product_form.php" method="post">
                                      

                                         <div class="form-group">
                                              <label for="name"><h4>name:</h4></label>
                                              <input type="text" placeholder="enter product name" name="product_name" required>
                                          </div>

                                          <div class="form-group">
                                              <label for="price"><h4>price:</h4></label>
                                             <input type="number" placeholder="enter product price"  name="product_price" required>
                                          </div>
                                          <div>
                                          <div class="form-group">
                                              <label for="file"><h4>file:</h4></label>
                                             <input type="text" name="product_image" placeholder="enter picture path"  required>
                                          </div>
                                         <br><br>

                                        
                                   
                                    <button id="bar2" type="submit" name="add_product" value="add product" class="btn btn-primary" style="vertical-align:middle"><span><h3 class="bar3">Submit</h3> </span>
                                    </form> 
                                </div>
</body>
</html>