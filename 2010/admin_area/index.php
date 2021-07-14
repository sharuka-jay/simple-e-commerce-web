<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body>
<div class="main_wrapper">
    <div id="header">

    </div>

    <di id="right">
    <h2 style="text-aligh:center">Manage Content</h2>
    <a href="index.php?insert_product">Insert New Products</a>
    <a href="index.php?view_products">View All Products</a>
    <a href="index.php">Insert New Category</a>
    <a href="index.php">View All Categories</a>
    <a href="index.php">View Customers</a>
    <a href="index.php">View All Brands</a>
    <a href="index.php">View Orders</a>
    <a href="index.php">View Payments</a>
    <a href="index.php">Admin Logout</a>
    </di>

    <div id="left">
    <?php
            if(isset($_GET['insert_product'])){
                include("insert_product.php");
            }
    ?>

    </div>
</div>

</body>
</html>