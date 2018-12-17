<?php
    session_start();

    echo 'This is Just Checking Cookies';
    
    $_SESSION['first_name'] = 'Joseph';
    
    
    setcookie('color_theme', 'red');

    // set the expiration date to 
    // one hour ago
    setcookie("user_id", "", time());
