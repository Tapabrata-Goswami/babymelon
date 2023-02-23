<?php
    include ('nav.php');
?>

<style>
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
    .top-part-heading-info{
        margin-bottom:12px;
    }
    .top-part-heading-info span{
        color:#16003B;
        font-size:25px;
        font-weight:600;
    }
    .top-part-legal-container{
        margin-bottom:8px;
    }
    .top-part-legal-container span{
        color:#16003B;
        font-size:18px;
        font-weight:500;
    }
    .top-part-legal-container div{
        color:#16003B;
        font-size:16px;
        font-weight:400;
        padding-left:16px;
    }
    .bottom-part-conatct-us{
        display:flex;
        justify-content:center;
    }
    .bottom-part-conatct-us div{
        background-color:yellow;
        padding:20px;
        width:50%;
    }
    .bottom-part-form{
        width:100%;
    }
    .bottom-part-heading{
        font-size:25px;
        font-weight:600;
        width:100%;

    }
    input[type='text'], input[type='email']{
        padding:15px 0px;
        width:100%;
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
    <div clas="contact-us-info">

        <div class="top-part-conatct-us">
            <div class="top-part-information">  
                <div class="top-part-heading-info">
                    <span>Reach Us</span>
                </div>
                <div class="top-part-legal-container">
                    <i class="fa fa-map-marker" aria-hidden="true"></i><span> Address</span><br>
                    <div>55 S/F, Panchkuian Marg,<br>Connaught Place, Delhi 110001</div>
                </div>

                <div class="top-part-legal-container">
                    <i class="fa fa-phone"></i><span> Call</span><br>
                    <div>09580986118</div>               
                </div>

                <div class="top-part-legal-container">
                    <i class="fa fa-envelope" aria-hidden="true"></i><span> Email</span><br>
                    <div>care@babymelon.in</div>
                </div>
                <div class="top-part-legal-container">
                    <i class="fa fa-clock-o" aria-hidden="true"></i><span> Working hours</span><br>
                    <div>Mon - Fri: 10:30 - 18:00</div>
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
                <div class="bottom-part-form">
                    <form action="" method="post">
                        <input type="text" placeholder="Name"><br>
                        <input type="email" placeholder="Email"><br>
                        <input type="text" placeholder="+91 86378 15595"><br>
                        <textarea rows="5" placeholder="Drop Your Message"></textarea><br>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- Contact Us info start-->
</section>

<!-- End Cotact -->
<?php
    include ('footer.php');
?>