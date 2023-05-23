<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">

  
          <div class=\"product-grid\">
                    <form action=\"index.php\" method=\"POST\">
                          <div class=\"product-card\">
                                    <img src=\"$productimg\" alt=\"image\"><br>
                                    <h4>$productname</h4>
                                    
                                    <p class=\"price\">$productprice</p>
                                    
                                    <button type=\"submit\" class=\"add-to-cart\" name=\"add\">Add to Cart </button>
                             <input type='hidden' name='product_id' value='$productid'>
                           </div>
                      </form>
         </div>
    </div>
   
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                
                                <h5 class=\"pt-2\">$$productprice</h5>
                                
                                <button type=\"submit\" class=\"btn btn-success mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}

















