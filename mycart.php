<?php include("header.php");
session_start();
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

<body>
    <h3>My Shopping Cart</h3>
    <div class="cart-container">
        <div class="box10">
            <div>
                <table class="table">
                    <th>Serial No.</th>
                    <th>
                        Item Name
                    </th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                </table>

            </div>
            <div>
                <table>

                    <th>1</th>
                    <th>Food1</th>
                    <th>450</th>
                    <th>1</th>

                </table>

            </div>
        </div>

        <div class="box11">
            <div>
                <table class="table">
                    <th>Oder Summary</th>
                </table>
            </div>
            <div>
                <table>
                    <th>Subtotal:</th>
                    <th>Price</th>
                </table>
                <table>
                    <th>Shipping cost:</th>
                    <th>Price</th>
                </table>
                <hr>
                <table>
                    <th>total amount:</th>
                    <th>Price</th>
                </table>
                <table class="table">
                    <th class="thc">Proceed to checkout</th>
                </table>
            </div>
        </div>
    </div>


</body>

</html>

<div>
<?php include("footer.php");

?>

</div>