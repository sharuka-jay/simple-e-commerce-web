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
                <li><a href="index.php">Home</a></li>
                <li><a href="all_products.php">All Products</a></li>
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


            <div id="content_area">
                <?php cart();  ?>
                <div id="shopping_cart">
                    <span style="float:right; font-size:18px; line-height:40px; padding :5px">
                    Welcome Guest!
                    <b style="color:yellow">Shopping Cart -</b>Total Items:<?php totalItems() ?> Total Price:<?php total_price();  ?>
                    <a href="cart.php" style="color:yellow">Go to Cart</a>
                </span>
                </div>
                        <?php echo $ip=getIp();  ?>
                <div id="product_box">
                
                <form action="" method="post" enctype="multipart/form-data">
                    <table align="center" width="700" bgcolor="skyblue">
                        <tr>
                             <td colspan="8">Update yuour Cart or Checkout</td>
                        </tr>
                            <tr>
                            <th>Remove</th>
                            <th>products</th>
                            <th>quantity</th>
                            <th>Total Price</th>
                        </tr>

                        <?php
                            


                        ?>
                    </table>
                </form>
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