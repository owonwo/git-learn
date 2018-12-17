<?php
    session_start();

    
    echo gettype(true);
    
    $_SESSION['First_name'] = 'John';

    $_SESSION['First_name'] ;

    var_dump($_COOKIE);

    var_dump($_SESSION);
    //one
    echo $_COOKIE['user_id'];

    //two
    $user_id = $_COOKIE['user_id'];
    echo $user_id;

?>