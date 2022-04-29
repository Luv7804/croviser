<?php
include('includes/db.php');
// include('functions/functions.php');
?>
<link rel="stylesheet" href="../css/style.css">
<section class="products" id="products">
    <h1 class="heading"> All <span>products</span> </h1>
    <div class="container">
        <?php
        $get_prd = "select * from crop order by rand() limit 0,15";
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
                        //$myid = $row_prd['cropid'];
                        // session_register
                        //$_SESSION['sid'] =  $myid;
                        //echo  $_SESSION['sid'];

                        // $_SESSION["Crop_ID"] = $row_prd['cropid'];


                        ?>
                        <!-- <form action="../../Croviser/includes/details.php" method="POST">
                 <input type="submit" class="popup-btn btn" value="Quick View"/>
             </form> -->
             
                        <a href="../../Croviser/includes/details.php?id=<?php echo $row_prd['cropid'];?>"  class="popup-btn btn" value="Quick View">Quick View</a>
                        <?php
                        ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- getLatestProduct(); -->
        <!-- ?> -->
        <!-- <div class="product">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-shipping-fast"></a>
                </div>
                <img src="images/cat_img1.png" alt="">
                <div class="content">
                    <h3>nike shoes</h3>
                    <div class="price">$120.99 <span>$150.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="btn add-cart-btn">add to cart</a>
                    <a class="popup-btn btn">Quick View</a>

                </div>
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="images/cat_img6.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Nike Shoe<br><span>Men's Sport</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span class="price">$120.00</span>
                        <a href="#" class="add-cart-btn">Add to Cart</a>
                        <a href="#" class="add-wish">Add to Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-shipping-fast"></a>
                </div>
                <img src="images/product-2.png" alt="">
                <div class="content">
                    <h3>nike shoes</h3>
                    <div class="price">$120.99 <span>$150.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="btn add-cart-btn">add to cart</a>
                    <a class="popup-btn btn">Quick View</a>

                </div>
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="images/product-2-hover.jpg" alt="">
                    </div>
                    <div class="info">
                        <h2>Nike Shoe<br><span>Men's Sport</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span class="price">$120.00</span>
                        <a href="#" class="add-cart-btn">Add to Cart</a>
                        <a href="#" class="add-wish">Add to Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-shipping-fast"></a>
                </div>
                <img src="images/product-3.png" alt="">
                <div class="content">
                    <h3>nike shoes</h3>
                    <div class="price">$120.99 <span>$150.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="btn add-cart-btn">add to cart</a>
                    <a class="popup-btn btn">Quick View</a>

                </div>
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="images/product-3.jpg" alt="">
                    </div>
                    <div class="info">
                        <h2>Nike Shoe<br><span>Men's Sport</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span class="price">$120.00</span>
                        <a href="#" class="add-cart-btn">Add to Cart</a>
                        <a href="#" class="add-wish">Add to Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-shipping-fast"></a>
                </div>
                <img src="images/product-4.png" alt="">
                <div class="content">
                    <h3>nike shoes</h3>
                    <div class="price">$120.99 <span>$150.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="btn add-cart-btn">add to cart</a>
                    <a class="popup-btn btn">Quick View</a>

                </div>
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="images/product-4-hover.jpg" alt="">
                    </div>
                    <div class="info">
                        <h2>Nike Shoe<br><span>Men's Sport</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span class="price">$120.00</span>
                        <a href="#" class="add-cart-btn">Add to Cart</a>
                        <a href="#" class="add-wish">Add to Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-shipping-fast"></a>
                </div>
                <img src="images/counter-img.png" alt="">
                <div class="content">
                    <h3>nike shoes</h3>
                    <div class="price">$120.99 <span>$150.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="btn add-cart-btn">add to cart</a>
                    <a class="popup-btn btn">Quick View</a>

                </div>
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="images/counter-img.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Nike Shoe<br><span>Men's Sport</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span class="price">$120.00</span>
                        <a href="#" class="add-cart-btn">Add to Cart</a>
                        <a href="#" class="add-wish">Add to Wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="box">
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <a href="#" class="fas fa-shipping-fast"></a>
                </div>
                <img src="images/counter-img.png" alt="">
                <div class="content">
                    <h3>nike shoes</h3>
                    <div class="price">$120.99 <span>$150.99</span></div>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <a href="#" class="btn add-cart-btn">add to cart</a>
                    <a class="popup-btn btn">Quick View</a>

                </div>
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="images/counter-img.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Nike Shoe<br><span>Men's Sport</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <span class="price">$120.00</span>
                        <a href="#" class="add-cart-btn">Add to Cart</a>
                        <a href="#" class="add-wish">Add to Wishlist</a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

</section>
<script>
    //product view
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick) {
        popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
        popupBtn.addEventListener("click", () => {
            popup(i);
        });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
        closeBtn.addEventListener("click", () => {
            popupViews.forEach((popupView) => {
                popupView.classList.remove('active');
            });
        });
    });
</script>