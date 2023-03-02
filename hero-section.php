
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