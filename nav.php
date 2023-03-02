<?php

session_start();
// Live server 
$server_url_index = $_SERVER['HTTP_HOST'];

// Local Server
$for_local = '/babymelon/';

// Conection Details
$servername = "localhost";
$username = "root";
$password = "";
$database = "babymelon";

// Conection Checking
$database_conection = mysqli_connect($servername, $username, $password, $database);

// Page Name function
$base_name = basename($_SERVER["PHP_SELF"]);
if ($base_name == 'index.php') {
    $page_name = 'Babymelon';
} elseif ($base_name == 'shop.php') {
    $page_name = 'Babymelon | Shop';
} elseif ($base_name == 'login-signup.php') {
    $page_name = 'Babymelon | Account';
}elseif ($base_name == 'contact.php') {
    $page_name = 'Babymelon | Contact';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="header.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title><?php echo $page_name; ?></title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./bm_logo.jpeg" type="image/x-icon">
    <!-- Header Stylesheet include  -->
    <style>
    <?php
        include "header.css";
    ?>
    </style>

</head>


<body style="margin: 0;">

    <div class="head-blank-area"></div>
    <nav class="nav-main-header">

        <div class="nav-logo"></div>
        <div class="nav-list">
            <ul class="nav-ul">
                <li id="home" class="nav-lists-item"> <a class="nav-lists-anchor other-color" href="<?php echo $for_local; ?>">Home</a></li>
                <li id="shop" class="nav-lists-item"> <a class="nav-lists-anchor" href="shop.php">Shop</a></li>
                <li id="about" class="nav-lists-item"> <a class="nav-lists-anchor" href="about.php">About</a></li>
                <li id="blogs" class="nav-lists-item"> <a class="nav-lists-anchor" href="./my-account.php">Blogs</a></li>
            </ul>
        </div>

        <div class="account-bag-wish-options">
            <div class="user-account">
                <a href="<?php echo $account_link;?>" class="account-bag-wish-anchor">
                    <i class="fa-regular fa-user"></i>
                    <p class="user-bottom-text">account</p>
                </a>
            </div>
            <div class="user-bag">
                <a href="" class="account-bag-wish-anchor">
                    <i class="fa-solid fa-cart-shopping" style="color:black;"></i>
                    <p class="bag-bottom-text">Cart</p>
                </a>
            </div>

        </div>

    </nav>

</body>

</html>

