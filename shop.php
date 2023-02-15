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
                    echo $_SERVER["REQUEST_URI"];
                    
                    // if($_SERVER["PHP"])

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            $product_title = $row['name'];
                            $product_image = $row['pimage1'];
                            $product_price = $row['regular_price'];
                            $product_sale_percent = $row['products_sale_per'];

                            $product_sale_price = $product_price - ($product_price * ($product_sale_percent / 100));

                        }
                    } else {
                        echo "0 results";
                    }
                }


                ?>
<!-- Next page Navigation -->
<div class="nextpage-navigation" style="margin-bottom: 50px;">
    <ul class="pagination">
      <li class="pageNumber active"><a href="" class="nextpage-anchor">1</a></li>
      <li class="pageNumber "><a href="2shop.php" class="nextpage-anchor">2</a></li>
      <li class="pageNumber"><a href="" class="nextpage-anchor">3</a></li>
    </ul>
  </div>
<!-- Next page Naviation end  -->

            </div>

        </section>
    </div>
    <!-- Products container END -->
</div>


<?php

include('footer.php');

?>