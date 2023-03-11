<?php 
include ('../nav.php');
?>
<style>
    <?php
include( './cart.css');
?>
</style>

<section class="cart-page">
    <div class="cart-all-content">

        <div class="cart-product-contain">
            <div class="contain_head">
                <span class="continue-shopping"><i class="fa-solid fa-arrow-left-long"></i><a href="#"> Continue Shopping</a></span> 
            </div>
            <div class="products-contain-price">
                <div class="contain_item">
                    <span class="shopping-cart-heading">Shopping cart</span> 
                    <div id="cart-page-item-counter-box">

                        <span class="item-counter-number" id="total_item">   
                            4
                        </span> 
                        <span id="it">items</span>
                    </div>

                </div>
                <div class="cart-add-product_items" > 
                    <div class="cart-product-add" id="product_item">
<!-- JS iteam -->



<!-- JS iteam -->
                    </div>
                </div>
            </div>

        </div>
        <div class="second-part-cart"> 
            
                <div class="scond-part-address">
                    <div>
                        <span class="cart-page-customer-name">Tapabrata Goswami</span> 
                        <address>Mirthakhali, Babupara, kolkata</address>
                    </div>
                    <a class="cart-address-edit-btn" href="">Edit</a>
                </div> 
                <div class="cart-cuppon-dicount">
                    <span class="cart-cuppon-dicount-heading">Do you have any discount code?</span> 
                    <span class="cart-cuppon-dicount-subheading" >only one discount code per order can be applied</span> 
                    <form action=""> 
                        <input type="text"> 
                        <button class="cuppon-apply-button-cart">Apply</button>
                    </form>
                </div> 
                <div class="cart-total-amount-checkout">
                    <div class="cart-total-amount-subtotal">
                        <span>Subtotal</span> 
                        <span><i class="fa-solid fa-indian-rupee-sign">100</i></span>
                    </div>  
                    <div class="cart-total-amount-tax"> 
                        <span>Tax</span> 
                        <span><i class="fa-solid fa-indian-rupee-sign">100</i></span>
                    </div>
                    <div class="cart-total-amount-shipping">
                        <span>Shipping Cost</span> 
                        <span>FREE!</span>
                    </div>  
                    <div class="cart-total-end">
                        <div class="cart-total-amount-total">
                            <span class="cart-total-amount-total-design" id="tot">Total</span> 
                            <span class="cart-total-amount-total-number"><i class="fa-solid fa-indian-rupee-sign" id="tp">100</i></span>
                        </div>  
                        <div class="checkout-button-cart-page">

                            <button class="checkout-button-cart-page-btn1">CHECKOUT</button>
                        </div>
                    </div>

                </div>

        </div>
    </div>

</section>

<script src="https://kit.fontawesome.com/061101a69a.js" crossorigin="anonymous"></script>
<script src="nav.js"></script>


<?php
    include ('../footer.php');
?>