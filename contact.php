<?php
    include ('nav.php');
?>

<style>
    /* body{
        padding-bottom:0;
    } */
    .contact-us-page{
        width:100%;
        font-family:'Poppins';
    }
    .contact-hero{
        display:flex;
        justify-content:center;
        padding:80px 100px;
        background-color:#ffe2ea;
    }
    .contact-title{
        display:flex;
        justify-content:center;
    }
    .contact-title span{
        font-size:50px;
        font-weight:600;
        color:#E00D7B;
    }
    .contact-subtitle p{
        font-size:18px;
        font-weight:500;
    }
    .top-part-conatct-us{
        display:flex;
        justify-content:center;
        padding:50px 0px;
        /* background-color: #f4eeff; */
        /* background-color:#abb8c3; */
        /* background-image:url("./img/contactus.jpeg");
        background-size:cover;
        background-position:center;
        background-attachment:fixed; */
    }
    .top-part-information{
        width:30%;
    }
    .top-part-map{
        width:50%;
    }
    .contact-us-info{
        background-color: #f4eeff;
    }
    .top-part-heading-info{
        margin-bottom:12px;
    }
    .top-part-heading-info span{
        color:#E00D7B;
        font-size:25px;
        font-weight:600;
    }
    .top-part-legal-container{
        margin-bottom:8px;
    }
    /* .contact-us-number span{
        color:black;
        font-size:14px;
        padding-top:5px;    
    } */
    .top-part-legal-container span{
        color:#E00D7B;
        font-size:18px;
        font-weight:500;
    }
    .top-part-legal-container div{
        color:#E00D7B;
        font-size:16px;
        font-weight:400;
        padding-left:16px;
    }
    .bottom-part-conatct-us{
        display:flex;
        justify-content:center;
        margin-top:50px;
        padding-bottom:50px;
        /* box-shadow:2px 4px 7px black; */
        /* background-color: #f4eeff; */
    }
    .bottom-part-conatct-us div{
        /* background-color:red; */
        /* padding:20px; */
        width:50%;
        /* box-shadow:2px 4px 7px black; */
    }
    .bottom-part-heading{
        font-size:25px;
        font-weight:600;
        width:100%;

    }
    form{
        /* background-color:green; */
        width:100%;
    }
    input[type='text'], input[type='email']{
        padding:15px 0px;
        width:100%;
        margin:8px;
        border:2px solid #6B728E;
        border-radius:8px;
        font-size:16px;
        font-weight:400;
        padding-left:9px;
    }
    .contact-us-wrap{
        width:100%;
    }
    .contact-us-wrap-validates-as-required{
        padding:15px 2px;
        width:102%;
        margin:8px;
        border:2px solid #6B728E;
        border-radius:8px;
        font-size:16px;
        font-weight:400;
        /* padding-left:9px; */
    }
    .contact-us-message{
        padding:15px 0px;
        background-color: solid #F0EEED;
        width: 100%;
        margin:8px;
        border:2px solid #6B728E;
        border-radius:8px;
        font-size:16px;
        font-weight:400;
        padding-left:9px;
    }
    .contact-submit-button{
        width:100%;
    }
    input[type='submit']{
        padding:15px 10px;
        background: solid #ffc7c7;
        width:50%;
        margin:8px;
        /* border-color: solid pink; */
        border:2px solid #f6318c;
        border-radius:8px;
        font-size:16px;
        font-weight:200;
        padding-left:9px;
        /* margin-left:50%; */
    }


</style>

<!-- Start Cotact -->
<section class="contact-us-page">
    <!-- Hero Section start-->
    <div class="contact-hero">
        <div class="contact-hero-box">
            <div class="contact-title">
                <span>
                    Contact Us
                </span>
            </div>
            <div class="contact-subtitle">
                <p>Have any issue? We'd love to hear from you.</p>
            </div>
        </div>
    </div>
    <!-- Hero Section End-->

    <!-- Contact Us info start-->
    <div class="contact-us-info">

        <div class="top-part-conatct-us">
            <div class="top-part-information">  
                <div class="top-part-heading-info">
                    <span>Reach Us</span>
                </div>
                <div class="top-part-legal-container">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span> Address</span>
                    <div class=contact-us-address>
                    <span style="color:#3f3b3b; font-size:14px; margin-top:25px">55 S/F, Panchkuian Marg,<br>Connaught Place, Delhi 110001</span>
                    </div>
                </div>

                <div class="top-part-legal-container">
                    <i class="fa fa-phone"></i><span> Call</span>
                    <div class="contact-us-number">
                        <span style="color:#3f3b3b; font-size:14px; margin-top:25px">09580986118</span>
                    </div>               
                </div>

                <div class="top-part-legal-container">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span> Email</span>
                    <div class="contact-us-emali">
                        <span style="color:#3f3b3b; font-size:14px; margin-top:25px">care@babymelon.in</span>
                    </div>
                </div>
                <div class="top-part-legal-container">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <span> Working hours</span>
                    <div class="contact-us-working-hrs">
                        <span style="color:#3f3b3b; font-size:14px; margin-top:25px">Mon - Fri: 10:30 - 18:00<</span>
                    </div>
                </div>
            </div>
            <div class="top-part-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28014.242671214233!2d77.21373399999999!3d28.636345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd4644338bb5%3A0xf9491caf0f8eb837!2sBabymama%20consumer%20care%20LLP!5e0!3m2!1sen!2sus!4v1676909581592!5m2!1sen!2sus"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>


        <div class="bottom-part-conatct-us">
            <div>
                <div class="bottom-part-heading">
                    <span>Feedback & Qurries</span>
                </div>
                <form action="" method="post">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="+91 86378 15595">
                    <span class="contact-us-wrap" data-name="menu">
                        <select name="menu" class="contact-us-wrap-validates-as-required" aria-required="true" aria-invalid="false">
                            <option value="Select an option">Select an option</option>
                            <option value="An Order">An Order</option>
                            <option value="A Product Inquiry">A Product Inquiry</option>
                            <option value="Payment &amp; Placing Orders">Payment &amp; Placing Orders</option>
                            <option value="I'm Having Trouble With Your Website">I'm Having Trouble With Your Website</option>
                            <option value="A Marketing or Sales Request">A Marketing or Sales Request</option>
                            <option value="PR Request">PR Request</option><option value="Others">Others</option>
                        </select>
                    </span>
                    <textarea class="contact-us-message" cols="40" rows="10" placeholder="Drop Your Message"></textarea>
                    <div class="contact-submit-button">
                        <!-- <button>Submit</button> -->
                        <input type="submit">
                    </div>
                </form>

            </div>
        </div>

    </div>
    <!-- Contact Us info start-->
</section>

<!-- End Cotact -->
<?php
    include ('footer.php');
?>