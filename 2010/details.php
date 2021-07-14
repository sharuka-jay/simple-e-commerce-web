<!DOCTYPE html>
<?php
include("functions/function.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online shop</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <div class="main_wrapper">
        <div class="header_wrapper">
            <img src="images/logo crop.png"  alt="" height="110px"  >
            <img src="./images/logo crop.png"  alt="" height="110px" id="pic2">
            <img src="./images/logo crop.png"  alt="" height="110px" id="pic3">
        </div>

        <div class="menu_bar">
            <ul id="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">All Products</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Sign Up</a></li>
                <li><a href="#">Shopping Cart</a></li>
                <li><a href="#">Contact Us</a></li>

                <div id="form">
                    <form action="result.php" method="get">
                        <input type="text" name="user_quary" placeholder="Search a Product">
                        <input type="submit" value="Search" name="search">
                    </form>
                </div>
            </ul>
            
            
        </div>
 <!--            content strat here                     -->
        <div class="content_wrapper">
            <div id="sidebar">
                <div id="sidebar_title">
                    Categories
                </div>
                <ul id="cats">
                   <?php getCats();?>
                </ul>

                <div id="sidebar_title">
                    Brands
                </div>
                <ul id="cats">
                   <?php getBrands(); ?> 
                </ul>
            </div>

            <!----------   content     ------>

            <div id="content_area">
                <div id="shopping_cart">
                    <span style="float:right; font-size:18px; line-height:40px; padding :5px">
                    Welcome Guest!
                    <b style="color:yellow">Shopping Cart -</b>Total Items: Total Price:
                    <a href="cart.php" style="color:yellow">Go to Cart</a>
                </span>
                </div>

                <div id="product_box">
                 <?php

                 if(isset($_GET['pro_id'])){

                    $product_id = $_GET['pro_id'];
                    $get_pro = "select * from products where product_id='$product_id'";
                    $run_pro = mysqli_query($con,$get_pro);
                
                        while($row_pro=mysqli_fetch_array($run_pro)){
                
                            $pro_id =$row_pro['product_id'];
                            $pro_title =$row_pro['product_title'];
                            $pro_price =$row_pro['product_price'];
                            $pro_image =$row_pro['product_image'];
                            $pro_desc =$row_pro['product_desc'];
                
                
                            echo "
                                    <div id='single_product' class='single_product'>
                                        <h3>$pro_title</h3>
                                        <img src='admin_area/product_images/$pro_image' width= '400' height='400' />
                                        <p>$pro_desc</p>
                                        <p><b>Rs.$pro_price</b></p>
                                        <a href='index.php' style='float:left'>Go Back</a>
                                        <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
                                    </div>
                            ";
                        }
                    }

                ?>
                </div>
            </div>
        </div>
<!--                content end      -->


        <div id="footer">
            <h2 style="text-align:center; padding-top=30px;">&copy; 2021 JAYAWARDENE TESTILES</h2>
        </div>



    </div>
</body>
</html>