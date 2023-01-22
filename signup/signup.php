<?php

//Database Details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babymelon";

$name = $contact_number = $email = $user_password = $conforim_password = "";

// Data collect to user by form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $contact_number = $_POST["contact_number"];
    $email = $_POST["email"];
    $user_password = $_POST["u_password"];
    $conforim_password = $_POST["u_conforim_password"];

    // Conection checking in database 
    $conection_check = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conection_check) {
        die("Connection failed: " . mysqli_connect_error());
        echo '<div class="alert alert-danger" role="alert">
        This is a danger alert—check it out! -- 1
      </div>';
    } else {
        // Data send in database
        if ($user_password == $conforim_password) {

            $data = "INSERT INTO `bm_user` ( `name`, `phonenumber`, `email`, `password`) VALUES ('$name', '$contact_number', '$email', '$user_password')";

            $data_insert = mysqli_query($conection_check, $data);

            if (!$data_insert) {
                echo '<div class="alert alert-danger" role="alert">
                This is a danger alert—check it out! --- 2
                </div>';
                echo "Error: " . $data . "<br>" . mysqli_error($conection_check);
            } else {
                echo '<div class="alert alert-success" role="alert">
                This is a success alert—check it out!
                </div>';

                header("Location: https://www.w3schools.com/");
                // // Mailtrap Connections
                // $phpmailer = new PHPMailer();
                // $phpmailer->isSMTP();
                // $phpmailer->Host = 'smtp.mailtrap.io';
                // $phpmailer->SMTPAuth = true;
                // $phpmailer->Port = 2525;
                // $phpmailer->Username = '3f58d315ff6f70';
                // $phpmailer->Password = '9723d0b39c214d';


                // // verification mail sending

                // $to = $email;
                // $subject = "Verification Mail | Babymelon.in";
                // $message = "Please click on this link <a href='https://babymelon.in'>Babymelon</a>.";
                // $from = "";
                // $headers ="From : $from";

                // $mail_send = mail($to, $subject, $message, $headers);

                // if(!$mail_send){
                //     echo '<div class="alert alert-danger" role="alert">
                //     This is a danger alert—check it out! --- 2
                //     </div>';
                // }else{
                //     echo  "DONE!";
                // }

            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">

    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

    <title>Sign Up</title>
</head>

<body>
    <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h2 class="form-heading">
                Sign Up
            </h2>
            <input type="text" placeholder="Full Name" required class="input-style" name="name">

            <input type="text" placeholder="Phone" required class="input-style" name="contact_number">
            <input type="email" placeholder="email" required class="input-style" name="email">
            <input type="password" placeholder="password" required class="input-style" name="u_password">
            <input type="password" placeholder="password" required class="input-style" name="u_conforim_password">

            <input type="submit">


        </form>

</body>

</html>