<?php

if (isset($_POST["submit"])){
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php'; //connects to that file
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false){
        header("location: ./login.php?error=emptyinput"); //relocate the browser with an error message
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else{
    header("location: ./login.php");
    exit();
}
?>