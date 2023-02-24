<?php

//Including NavBar 

include('nav.php');


// Conection Details

$servername = "localhost";
$username = "root";
$password = "";
$database = "babymelon";


// Conection Checking

$database_conection = mysqli_connect($servername, $username, $password, $database);

// Conection True

// if($database_conection){
//     echo '<div>Conection Done</div>';
// }else{
//     echo '<div>Conection Error!</div>';
// }

mysqli_close($database_conection);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Babymelon</title>
</head>

<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta dolorum aspernatur ullam! Voluptatum eligendi possimus, voluptate dicta voluptatibus beatae officia aliquid </p>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At aliquam officia temporibus nihil amet facere libero. Repudiandae dolor assumenda itaque similique possimus nobis repellendus architecto vero iure cupiditate. Enim necessitatibus nihil commodi in fugiat tenetur vero numquam sed culpa molestiae, repudiandae recusandae. Veniam dolor ut quibusdam! Iste asperiores laudantium eligendi animi. Ipsa distinctio deserunt amet dolor, repellat beatae labore, dolore voluptas consectetur nemo odio ea mollitia corporis minus temporibus nobis fugit libero. Quas quo accusantium explicabo totam numquam magni ex at nisi quis. Doloremque soluta quas perspiciatis aspernatur, illum atque, nihil officia provident expedita asperiores maxime natus quod adipisci quo?</p>
</body>

</html>