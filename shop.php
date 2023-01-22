<?php

// Including nav bar

include 'nav.php';

?>

<style>
    <?php
    include "shop.css";
    ?>.fa-solid {
        color: #ffffff;
    }
</style>



<!-- 
<!DOCTYPE html>
<html lang="en"> -->

<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shop.css">
    <link rel="stylesheet" href="shop.js">
    <link rel="stylesheet" href="shop.css.map">
    <title>Shop</title>
</head> -->

<!-- <body> -->
<!-- <div class="box">

        <h3>Price <span>Range</span></h3>
        <div class="values">
            <div>$<span id="first">500</span></div> - <div>$<span id="second">2000</span></div>
        </div>
        <small>
            Current Range:
            <div>$<span id="third">2500</span></div>
        </small>
    
        <div class="slider" data-value-0="#first" data-value-1="#second" data-range="#third"></div>
    
    </div>
    
    
    <a class="dribbble" href="https://dribbble.com/shots/7268454-Rubber-Slider" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

    <script src="shop.js"></script> -->

<!-- <div class="filter-process">
        
        <h3>Filter by Price</h3>
        
        <div class="slidecontainer">
          <input type="range" min="350" max="850" value="50" class="slider" id="myRange">
          <p class="filter-price">&#8377<span id="demo"></span></p>
        </div> -->

<!-- Filter by catagories start -->

<div class="shop-center">
    <div>
        <section class="cattt">
            <div class="catagory">
                <h3 class="filter-heading">Filter by Categories</h3>
                <ul class="cat-list" type="none">
                    <!-- call data from databaseinto span tag -->
                    <li class="cat-list-text">Combos <span>(4)</span></li>
                    <li class="cat-list-text">Skin Care <span>(10)</span></li>
                    <li class="cat-list-textt">Baby Products <span>(4)</span></li>
                    <li class="cat-list-textt">Mother Products <span>(4)</span></li>
                </ul>
            </div>
            <!-- Filter by catagories end -->
        </section>

        <!-- Products container start -->
        <section class="shop-total-page">
            <div class="products-full-container">


                <?php

                // Conection Details

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "babymelon";


                // Conection Checking

                $database_conection = mysqli_connect($servername, $username, $password, $database);

                if (!$database_conection) {
                    header("Location: http://localhost/babymelon_website/ ");
                } else {
                    $sql = "SELECT id, pimage1, name, regular_price, products_sale_per FROM bm_products";
                    $result = mysqli_query($database_conection, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            $product_title = $row['name'];
                            $product_image = $row['pimage1'];
                            $product_price = $row['regular_price'];
                            $product_sale_percent = $row['products_sale_per'];

                            $product_sale_price = $product_price - ($product_price * ($product_sale_percent / 100));
                ?>

                            <div class="product-contain">
                                <div class="img-contain">
                                    <a href="" style="text-decoration: none;">
                                        <?php
                                        echo '<img class="first-image" id="all-images"  src="data:image/jpeg;base64,' . base64_encode($row['pimage1']) . '"/>';
                                        ?>

                                    </a>
                                    <div class="overlay-percent-circle">
                                        <!-- call data from databaseinto span tag -->
                                        <span class="overly-percent"><?php echo htmlspecialchars($product_sale_percent); ?>%</span>
                                        <h4 class="overly-percent-text">OFF</h4>
                                    </div>
                                </div>

                                <a href="" style="text-decoration: none;">
                                    <div>
                                        <p class="product-text"><?php echo htmlspecialchars($product_title); ?></p>
                                    </div>
                                </a>
                                <div class="star-review-row">

                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    <p class="product-review">Review <span>(30)</span></p>

                                </div>

                                <div class="prices">
                                    <span style="font-size: 18px; font-weight: bol;">&#8377</span> <span class="cutoff-price"><?php echo htmlspecialchars($product_sale_price); ?></span>
                                    <strike style="color: #646467;"> <span>&#8377</span> <span class="original"><?php echo htmlspecialchars($product_price); ?></span></strike>
                                </div>

                                <div class="addbutton">
                                    <button class="add-to-button">
                                        <div>
                                            <span></span>
                                            <i class="fa-solid fa-cart-shopping style-cart-white"></i>
                                            <a href="">Add to Cart</a>
                                        </div>
                                    </button>
                                </div>
                            </div>

                <?php
                        }
                    } else {
                        echo "0 results";
                    }
                }


                ?>

                <?php

                include('next.php');

                ?>

            </div>

        </section>
    </div>
    <!-- Products container END -->
</div>

<!-- <script>
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;

        slider.oninput = function () {
            output.innerHTML = this.value;
        }
    </script> -->

<!-- 
</body>

</html> -->

<?php

include('footer.php');

?>