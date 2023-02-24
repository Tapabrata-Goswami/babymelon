<style>

.about-top-banner {
        background-position: center;
        background-size: cover;
        background-image: url(./img/banner.jpeg);
        height: 310px;
    }

    .about-top-banner-heading {
        color: #E00D7B;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        font-size: 55px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }
   </style>
<?php
$file_name = $_SERVER['SCRIPT_NAME'];

if($file_name == '/babymelon/privacy-policy.php'){
    $file_name = 'Privacy Policy';
}else if($file_name == '/babymelon/return-refund-policy.php'){
    $file_name = 'Return & Refund Policy';
}elseif($file_name == '/babymelon/about.php'){
    $file_name = 'About Us';
}elseif($file_name == '/babymelon/faq.php'){
    $file_name = 'FAQs';
}elseif($file_name == '/babymelon/shipping-policy.php'){
        $file_name = 'Shipping Policy';
    }elseif($file_name == '/babymelon/terms-conditions.php'){
        $file_name = 'Terms & Conditions';
    }

?>


<section class="about-top-banner">
    <h1 class="about-top-banner-heading"><?php echo $file_name ;?></h1>
</section>