<?php

// Including nav bar

include 'nav.php';

?>


<style>
    .accordion {
        padding: 60px;
        width: 80%;
        font-family: 'Poppins', sans-serif;
        background-color: whitesmoke;
        margin: auto;

    }

    .accordion-list {
        list-style: none;
        width: 100%;
        margin: 20px;
        padding: 10px;
        border-radius: 8px;
        background: white;
        box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
            -6px -6px 10px -1px rgba(255, 255, 255, 0.7)
    }

    .accordion-list-label {
        display: flex;
        align-items: center;
        padding: 10px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
    }

    .accordion-list-label::before {
        content: '+';
        margin-right: 10px;
        font-size: 24px;
        font-weight: 600;
    }

    input[type="radio"] {
        display: none;
    }

    .accordion .accordion-content {
        color: #555;
        padding: 0 10px;
        line-height: 26px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s, padding 0.5s;
    }

    .accordion input[type="radio"]:checked+.accordion-list-label+.accordion-content {
        max-height: 400px;
        padding: 10px 10px 20px;
    }

    .accordion input[type="radio"]:checked+.accordion-list-label::before {
        content: '-';
    }
</style>

<?php

// Including hero-section

include 'hero-section.php';

?>

<div class="privacy-policy-fullpage" style="background-color: whitesmoke;">
    <ul class="accordion">
        <li class="accordion-list">
            <input type="radio" name="accordion" id="first">
            <label for="first" class="accordion-list-label">CAN YOU SHIP THE PRODUCTS TO AN ADDRESS THAT IS DIFFERENT FROM MY BILLING ADDRESS?</label>
            <div class="accordion-content">

                <p> Yes, absolutely! we can do so. you need to fill in the address you wish to ship your order to as the ‘shipping address’.
                </p>
            </div>
        </li>


        <li class="accordion-list">
            <input type="radio" name="accordion" id="second">
            <label for="second" class="accordion-list-label">WHAT IS THE SHELF LIFE OF THE PRODUCTS?</label>
            <div class="accordion-content">

                <p>The shelf life of our products varies between 2-3 years from the date of manufacturing. We recommend keeping our products out of direct sunlight and at a moderate room temperature.
                </p>
            </div>
        </li>

        <li class="accordion-list">
            <input type="radio" name="accordion" id="third">
            <label for="third" class="accordion-list-label">WHAT IS THE RETURN/ REFUND POLICY IF THE PRODUCT DOESN'T SUIT OR WRONGLY PLACED?</label>
            <div class="accordion-content">

                <p>Please be informed that refund or replacement of the product will not be applicable if the product doesn’t suit, as we always recommend a patch test (mentioned on the packaging). Buying the product is completely the customer’s choice, we only make the recommendations of the products according to the skin types. Therefore Orders cannot be changed or canceled once placed online.
                </p>
            </div>
        </li>

        <li class="accordion-list">
            <input type="radio" name="accordion" id="fourth">
            <label for="fourth" class="accordion-list-label">WHAT IF MY ORDER WAS WRONG OR RECEIVED IN DAMAGED CONDITION?</label>
            <div class="accordion-content">

                <p>Please contact us as soon as you can. While we try our best to fulfill your orders correctly and in the best manner possible, for any complaints regarding your order, reach out to us via Call/WhatsApp: +91-958098611 or email us at care@babymelon.in. We will contact you within 48 hours of working.
                </p>
            </div>
        </li>

    </ul>

    </div>

    <?php

    include('footer.php');

    ?>