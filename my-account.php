<?php

// Including nav bar

include 'nav.php';

?>

<style>
    <?php
    include "my-account.css";
    ?>
</style>

<div class="account-format-list">
    <div class="left-side-details">
        <a href="" class="left-side-menu-list"><i class="fa-solid fa-user"></i>&nbsp;<span class="left-side-menu-list-items">My Account</span></a>
        <a href="" class="left-side-menu-list"><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp;<span class="left-side-menu-list-items">My adress book</span></a>
        <a href="" class="left-side-menu-list"><i class="fa-solid fa-bag-shopping"></i>&nbsp;<span class="left-side-menu-list-items">My orders</span></a>
        <a href="" class="left-side-menu-list"><i class="fa-solid fa-tag"></i>&nbsp;<span class="left-side-menu-list-items">Refer & Earn</span></a>
        <a href="" class="left-side-menu-list"><i class="fa-solid fa-gear"></i>&nbsp;<span class="left-side-menu-list-items">Account setting</span></a>
    </div>
    <div class="right-side-details">
        <h3 class="my-details-heading">My Details</h3>

        <div class="personal-information-area">

            <p class="personal-information-heading">Personal Information</p>
            <hr class="horizental-line">
            <div class="personal-information-bottom-text">
                <span>Lorem ipsum dolor sit amet hlw dev cr consectetur adipisicing elit. Optio odit fugit soluta
                    quas!
                </span>
            </div>

            <div class="personal-information-bottom-data-area">
                <div class="label-for-first-and-second-name">
                    <div class="first-name-division" style="float: left; margin-right: 22px;">
                        <label for="" class="labels-for-personal-information">FIRST NAME</label><br>
                        <input type="text" name="" id="" placeholder="Sovan" class="input-for-personal-information">
                    </div>
                    <div class="for-second-name-division">
                        <label for="" class="labels-for-personal-information">SECOND NAME</label><br>
                        <input type="text" name="" id="" placeholder="Majumder" class="input-for-personal-information"><br>
                    </div>
                </div>
                <label for="" class="labels-for-personal-information">BIRTH DATE</label><br>
                <input type="date" name="" id="" placeholder="dd/mm/yy" class="input-for-personal-information"><br>
                <label for="" class="labels-for-personal-information">PHONE NUMBER</label><br>
                <input type="number" name="" id="" placeholder="123456789" class="input-for-personal-information" style="margin-bottom: 2px;"><br>
                <span class="phone-number-hint">Keep 9-digitformat with no spaces and dashes</span><br>
                <button type="submit" class="personal-area-save-button">SAVE</button>
            </div>
        </div>

        <br>

        <div class="email-adress-area">
            <p class="email-heading">Email adress</p>
            <hr class="horizental-line">
            <div class="email-adress-bottom-text">
                <span>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Optio odit fugit soluta quas!
                </span>
            </div>

            <div class="personal-information-bottom-data-area">
                <label for="" class="labels-for-personal-information">E-MAIL ADRESS</label><br>
                <input type="email" name="" id="" placeholder="example@gmail.com" class="input-for-personal-information"><br>
                <label for="" class="labels-for-personal-information">PASSWORD</label><br>
                <input type="password" name="" id="" placeholder="********" class="input-for-personal-information"><br>
                <button type="submit" class="personal-area-save-button">SAVE</button>
            </div>
        </div>

        <br>
        <div class="account-password-area">
            <p class="password-heading">Password</p>
            <hr class="horizental-line">
            <div class="account-password-bottom-text">
                <span>Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Optio odit fugit soluta quas!
                </span>
            </div>

            <div class="account-password-bottom-data-area">
                <label for="" class="labels-for-personal-information">CURRENT PASSWORD</label><br>
                <input type="password" name="" id="" placeholder="password" class="input-for-personal-information"><br>
                <label for="" class="labels-for-personal-information">NEW PASSWORD</label><br>
                <input type="password" name="" id="" placeholder="********" class="input-for-personal-information" style="margin-bottom: 2px;"><br>
                <span class="phone-number-hint">Make sure your password is 8 charecters <br>long and contains
                    letters and numbers</span><br><br>
                <label for="" class="labels-for-personal-information">CONFIRM PASSWORD</label><br>
                <input type="password" name="" id="" placeholder="********" class="input-for-personal-information"><br>
                <button type="submit" class="personal-area-save-button">SAVE</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>