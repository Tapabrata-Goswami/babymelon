<?php
// session_start();
include('nav.php');
include ('db_acess.php');
?>

<section class="account">
    
    <?php 
        echo "Name : ".$_SESSION['user_name'];
    ?>

    <div class="logout">
        <a href="logout.php" class="logout">Logout</a>
    </div>
</section>

<?php
    include('footer.php');
?>