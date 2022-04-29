<?php
include('includes/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
</head>

<body>

    <form method="post" action="insert_product.php" enctype="multipart/form-data">
        <table width="700px" align="center" border="2px groove black" bgcolor="#f2fafa">
            <tr align="center">
                <td colspan="2">
                    <h2>Insert New Product</h2>
                </td>
            </tr>
            <tr>
                <td align="right">Enter Product Name</td>

                <td>
                    <input type="text" name="product_name" size="100" />
                </td>
            </tr>
            <tr>
                <td align="right">Brands</td>

                <td>
                    <select name="product_brand">
                        <option>Select A Brands</option>
                        <?php
                        $get_brand = "select * from brands";
                        $run_brand = mysqli_query($con, $get_brand);
                        while ($row_brand = mysqli_fetch_array($run_brand)) {
                            $brand_id = $row_brand['brand_id'];
                            $brand_name = $row_brand['brand_name'];
                            echo "<option value = '$brand_id'>$brand_name</option>";
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">Catagories</td>

                <td>
                    <select name="product_cat">
                        <option>Select A Catagory</option>
                        <?php
                        $get_cats = "select * from catagories";
                        $run_cats = mysqli_query($con, $get_cats);
                        while ($row_cats = mysqli_fetch_array($run_cats)) {
                            $cat_name = $row_cats['cat_name'];
                            $cat_id = $row_cats['cat_id'];

                            echo "<option value = '$cat_id'>$cat_name</option>";
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">Enter Product mrp</td>

                <td>
                    <input type="text" name="product_mrp" />
                </td>
            </tr>
            <tr>
                <td align="right">Selling Price</td>

                <td>
                    <input type="text" name="product_price" />
                </td>
            </tr>
            <tr>
                <td align="right">Discription</td>

                <td>
                    <textarea name="product_spc" cols="100" rows="20"></textarea>
                </td>
            </tr>
            <tr>
                <td align="right">Enter Product Stock</td>

                <td>
                    <input type="text" name="product_qty" />
                </td>
            </tr>
            <tr>
                <td align="right">Enter Product Rank</td>

                <td>
                    <input type="text" name="product_rank" />
                </td>
            </tr>
            <tr>
                <td align="right">Upload Product Image1</td>

                <td>
                    <input type="file" name="product_img1" />
                </td>
            </tr>
            <tr>
                <td align="right">Upload Product Image2</td>

                <td>
                    <input type="file" name="product_img2" />
                </td>
            </tr>
            <tr>
                <td align="right">Product status</td>

                <td>
                    <!-- <input type="text" name="product_status" /> -->
                    <select name="product_status">
                        <option value="1">Default(1)</option>
                        <option value="0">0</option>
                    </select>
                </td>
            </tr>
            <tr align="center">

                <td colspan="2">
                    <input type="submit" value="submit" name="insert_product" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php

if (isset($_POST['insert_product'])) {

    $product_name = $_POST['product_name'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_mrp = $_POST['product_mrp'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];
    $product_rank = $_POST['product_rank'];
    $image1 = $_FILES['product_img1']['tmp_name'];
    $product_img1 = addslashes(file_get_contents($image1));
    $image2 = $_FILES['product_img2']['tmp_name'];
    $product_img2 = addslashes(file_get_contents($image2));


    $product_spc = $_POST['product_spc'];
    $product_status = $_POST['product_status'];

    // $insert_product = "insert into products (cat_id,brand_id,name,mrp,price,specification,qty,rank,product_img1,status) values ('$product_cat','$product_brand','$product_name','$product_mrp','$product_price','$product_spc','$product_qty','$product_rank','$product_img1','$product_status')";
    $insert_product = "insert into products (cat_id,brand_id,name,mrp,price,specification,qty,rank,product_img1,product_img2,status) values ('$product_cat','$product_brand','$product_name','$product_mrp','$product_price','$product_spc','$product_qty','$product_rank','$product_img1','$product_img2','$product_status')";
    $run_product = mysqli_query($con, $insert_product);
    echo "$run_product";
    if ($run_product) {

        echo "<script>alert('Product has been inserted sucessfully')</script>";
        echo "<script>window.open('insert_product.php','_self')</script>";
    }
}
?>