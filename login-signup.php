<?php
// session_start();
?>

<?php
// session_start();

// Navbar including
include('nav.php');

//Database Details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "babymelon";

$name = $contact_number = $email = $user_password = $conforim_password = "";

// Data collect to user by form
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = $_POST["name"];
//   // $contact_number = $_POST["contact_number"];
//   $email = $_POST["email"];
//   $user_password = $_POST["u_password"];
//   $conforim_password = $_POST["u_conforim_password"];

//   // Conection checking in database 
//   $conection_check = mysqli_connect($servername, $username, $password, $dbname);

//   if (!$conection_check) {
//     die("Connection failed: " . mysqli_connect_error());
//     echo '<div class="alert alert-danger" role="alert">
//         This is a danger alert—check it out! -- 1
//       </div>';
//   } else {

//     // Checking same email
//     $log_data = "SELECT phonenumber,email FROM `bm_user`;";
//     $data_fetch = mysqli_query($conection_check, $log_data);
//     if (mysqli_num_rows($data_fetch) > 0) {
//       // output data of each row
//       while ($row = mysqli_fetch_assoc($data_fetch)) {
//         if ($email == $row['email']) {
//           exit('YOUR EMAIL ALREADY EXIST!');
//         } else {

//           if ($user_password == $conforim_password) {

//             // Data send in database
//             $data = "INSERT INTO `bm_user` ( `name`, `phonenumber`, `email`, `password`) VALUES ('$name', '$contact_number', '$email', '$user_password')";

//             $data_insert = mysqli_query($conection_check, $data);

//             if (!$data_insert) {
//               echo '<div class="alert alert-danger" role="alert">
//                       This is a danger alert—check it out! --- 2
//                       </div>';
//               echo "Error: " . $data . "<br>" . mysqli_error($conection_check);
//             } else {
//               echo '<div class="alert alert-success" role="alert">
//                       This is a success alert—check it out!
//                       </div>';

//               // in this part we embbded the js in php
//               echo '<script>window.open("http://localhost/babymelon/account.php", "_self"); </script>';
//             }
//           }
//         }
//       }
//     }
//   }
//   mysqli_close($conection_check);
// }




// login Request to database
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // $log_email = $log_password = "";

  $log_email = $_POST['log_email'];
  $log_password = $_POST['log_u_password'];

  $conection_check = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conection_check) {
    echo "SORRY! SERVER PROBLEM.";
  } else {
    $log_data = "SELECT name, email, password FROM `bm_user`;";
    $data_fetch = mysqli_query($conection_check, $log_data);
    if (mysqli_num_rows($data_fetch) > 0) {
      // output data of each row
      while ($row = mysqli_fetch_assoc($data_fetch)) {
        if (($log_email === $row['email']) and ($log_password === $row['password'])) {
          $_SESSION['user_name'] = $row['name'];
          echo '<script>window.open("http://localhost/babymelon/account.php", "_self"); </script>';
        }
      }
    }
    mysqli_close($conection_check);
  }
}

?>

<style>
  <?php
  echo include('login-signup.css');
  ?>
</style>

<div class="container">
  <div class="forms-container">
    <div class="signin-signup">

      <!-- sign in /Log in form -->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-in-form">
        <h2 class="title">Sign in</h2>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="eamil" placeholder="Email" name="log_email" />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="log_u_password" />
        </div>
        <input type="submit" value="Login" class="btn solid" />
        <p class="social-text">Or Sign in with social platforms</p>
        <div class="social-media">
          <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-google"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </form>

      <!-- Registration form/Sign up form -->
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="sign-up-form">
        <h2 class="title">Sign up</h2>
        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Username" name="name" />
        </div>
        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" placeholder="Email" name="email" />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="u_password" />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" name="u_conforim_password" />
        </div>
        <input type="submit" class="btn" value="Sign up" />
        <p class="social-text">Or Sign up with social platforms</p>
        <div class="social-media">
          <a href="#" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-google"></i>
          </a>
          <a href="#" class="social-icon">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </form>
    </div>
  </div>

  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>New here ?</h3>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
          ex ratione. Aliquid!
        </p>
        <button class="btn transparent" id="sign-up-btn">
          Sign up
        </button>
      </div>
      <img src="img/log.svg" class="image" alt="" />
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>One of us ?</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
          laboriosam ad deleniti.
        </p>
        <button class="btn transparent" id="sign-in-btn">
          Sign in
        </button>
      </div>
      <img src="img/register.svg" class="image" alt="" />
    </div>
  </div>
</div>

<script src="login-signup.js"></script>
<?php

// Navbar including
include('footer.php');
?>