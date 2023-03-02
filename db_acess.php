<?php

// Conection Details

$servername = "localhost";
$username = "root";
$password = "";
$database = "babymelon";


// Conection Checking

$database_conection = mysqli_connect($servername, $username, $password, $database);

if (!$database_conection) {
    header("Location: http://localhost/babymelon/error_404.php ");
} 