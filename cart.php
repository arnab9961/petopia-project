<?php include("header.php");


?>
<?php



require_once ("CreateDb.php");
require_once ("component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="cart_12.css">
</head>
<body class="bg-light">

<?php
    require_once ('header.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mycart.css">


</head>

<body><br>
    <h3>My Shopping Cart</h3>
    
    <div class="cart-container">
        <div class="box10">
            <div>
                <table class="table">
                    <th>IMAGE</th>
                    <th>
                        Item Name
                    </th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                </table>

            </div>
            <div>
                <table>

                <?php
     
$total = 0;
    if (isset($_SESSION['cart'])){
        $product_id = array_column($_SESSION['cart'], 'product_id');

        $result = $db->getData();
        while ($row = mysqli_fetch_assoc($result)){
            foreach ($product_id as $id){
                if ($row['id'] == $id){
                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                    $total = $total + (int)$row['product_price'];
                }
            }
        }
    }else{
        echo "<h5>Cart is Empty</h5>";
    }

?>

                </table>

            </div>
        </div>

        <div class="box11">
            <div>
                <table class="table">
                    <th>Order Summary</th>
                </table>
            </div>
            <form action="cart.php" method="post">
            <div>
                <table>
                    <th><?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "Subtotal ($count items)";
                            }else{
                                echo "Subtotal (0 items)";
                            }
                        ?>:</th>
                    <th><?php echo $total; ?> BDT</th>
                </table>
                <table>
                    <th>Shipping cost:</th>
                    <th><?php if (isset($_SESSION['cart'])){
                                echo $shippingcost=50;
                                
                            }else{
                                echo $shippingcost=0;
                            }
                     ?> BDT</th>
                </table>
                <hr>
                <table>
                    <th>total amount:</th>
                    <th><?php echo $total+$shippingcost;?> BDT</th>
                </table>
                
                <table class="table">
                    <button type="submit" class="table"><a href="payment.php">Proceed to checkout</a></button>
                </table>
                
            </div>
        </div>
    </div>
    </form>

</body>

</html>

<div>
    <br>
    <br>
<?php include("footer.php");

?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
