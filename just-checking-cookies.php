<?php
    session_start();

    echo 'This is Just Checking Cookies';

    var_dump($_COOKIE);
    
    $_SESSION['first_name'] = 'Joseph';
    
    var_dump($_SESSION);
    
    setcookie('color_theme', 'red');

    // set the expiration date to 
    // one hour ago
    setcookie("user_id", "", time());
