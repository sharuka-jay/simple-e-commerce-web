<!DOCTYPE html>
<?php include("db.php")
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Product</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body bgcolor="skyblue">
    <form action="insert_product.php" method="POST" enctype="multipart/form-data" >
        <table align="center" width="795px" bgcolor="#2b70e5" height="600" >
            <tr align="center">
                <td colspan="8"><h2>Insert New post</h2></td>
            </tr>
            <tr>
                <td align="right" >Product Title</td>
                <td><input type="text" name="product_title" required></td>
            </tr>

            <tr>
                <td align="right" >Product Category</td>
                <td>
                    <select name="product_cat" class="rdo" >
                        <option value="">SELECT A CATEGORY</option>
                        <?php
                           $get_cats ="SELECT * FROM categories";
                           $run_cats = mysqli_query($con, $get_cats);
                           while ($row_cats = mysqli_fetch_array($run_cats))
                           {
                               $cat_id = $row_cats['cat_id'];
                               $cat_title = $row_cats['cat_title'];
                       
                               echo "<option value='$cat_id'>$cat_title</option>";
                           }  
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="right" >Product Brand</td>
                <td>
                    <select name="product_brand" class="rdo" >
                        <option value="">Select a Brand</option>
                        <?php
                        $get_brands ="SELECT * FROM brands";
                        $run_brands = mysqli_query($con, $get_brands);
                        while ($row_brands = mysqli_fetch_array($run_brands))
                        {
                            $brand_id = $row_brands['brand_id'];
                            $brand_title = $row_brands['brand_title'];
                    
                            echo "<option value='$brand_id'>$brand_title</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="right" >Product Image</td>
                <td><input type="file" name="product_image" id=""></td>
            </tr>

            <tr>
                <td align="right" >Product Price</td>
                <td><input type="text" name="product_price" required></td>
            </tr>

            <tr>
                <td align="right" >Product Description</td>
                <td><textarea name="product_desc" id="" cols="20" rows="10"></textarea></td>
            </tr>

            <tr>
                <td align="right" >Product Keywords</td>
                <td><input type="text" name="product_keywords" id=""  ></td>
            </tr>

            <tr align="center">
                <td colspan="2"><input type="submit" value="Insert Now" name="insert_post"></td>
                
            </tr>
            
        </table>
    </form>
</body>


<?php
if(isset($_POST['insert_post'])){
    $product_title= $_POST['product_title'];
    $product_cat= $_POST['product_cat'];
    $product_brand= $_POST['product_brand'];
    $product_price= $_POST['product_price'];
    $product_desc= $_POST['product_desc'];
    $product_keywords= $_POST['product_keywords'];
    
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

        move_uploaded_file($product_image_tmp,"product_images/$product_image");

    $insert_product = "insert into products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords) 
    values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

    $insert_pro=mysqli_query($con,$insert_product);
    if($insert_pro){
        echo "<script>alert('product added')</script>";
        echo "<script>window.open('index.php?insert_product','_self')</script>";
    }

}


?>

</html>