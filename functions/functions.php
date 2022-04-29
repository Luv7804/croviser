<!-- Connection -->
<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "croviser";
$con = mysqli_connect($host, $user, $password, $db);
session_start();
?>
<!-- get Latest Product -->
<?php
function getLatestProduct()
{
    global $con;
    $get_prd = "select * from crop order by rand() limit 0,6";
    $run_prd = mysqli_query($con, $get_prd);
    while ($row_prd = mysqli_fetch_array($run_prd)) {
?>
        <div class="product">
            <div class="box">
                
                <?php
                $product_img1 = $row_prd['crop_img1'];
                echo '<img src="data:image/png;base64,' . base64_encode($row_prd['crop_img1']) . '">';
                ?>
                <div class="content">
                    <?php
                    $prd_title = $row_prd['cropname'];
                    $crop_cat = $row_prd['category'];
                    $prd_price = $row_prd['irrigation'];

                    echo " <div class='price'>$prd_title</div>";
                    echo " <h3>$crop_cat</h3>";
                    ?>
                <?php 
                    $myid = $row_prd['cropid'];
                    // session_register
                    $_SESSION['sid'] =  $myid;
                    echo  $_SESSION['sid'];
  
                    // $_SESSION["Crop_ID"] = $row_prd['cropid'];
                
                
                ?>
                   <!-- <form action="../../Croviser/includes/details.php" method="POST">
                    <input type="submit" class="popup-btn btn" value="Quick View"/>
                </form> -->
                <a href="../../Croviser/includes/details.php"  class="popup-btn btn" value="Quick View">Quick View</a>
<?php
// $id = $_GET['myid'];
?>
                </div>
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <?php
                        $product_img1 = $row_prd['crop_img1'];
                        echo '<img src="data:image/png;base64,' . base64_encode($row_prd['crop_img1']) . '">';
                        ?>
                    </div>
                    <div class="info">
                        <?php
                        $prd_name = $row_prd['cropname'];
                        echo "<h2><span>$prd_name</span></h2>";
                        $prd_spc = $row_prd['seed'];
                        echo "<p>$prd_spc</p>";
                        // echo "<span class='price'>₹$prd_pzrice</span>";
                        ?>

                        <!-- <a href="#" class="add-wish">Add to Wishlist</a> -->
                    </div>
                </div>
            </div>
        </div>
<?php
    }
}
?>