<?php
if (isset($_POST["submit"])){ //if the submit button has been presseed
    $name = $_POST["name"]; //find in the "name" atrribute from the previous tab and making it a variable
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php'; //connects to that file
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
        header("location: ./sign_up.php?error=emptyinput"); //relocate the browser with an error message
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ./sign_up.php?error=invaliduid"); //relocate the browser with an error message
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ./sign_up.php?error=invalidemail"); //relocate the browser with an error message
        exit();
    }
    if (pwdmatch($pwd ,$pwdRepeat) !== false){
        header("location: ./sign_up.php?error=passworddontmatch"); //relocate the browser with an error message
        exit();
    }
    if (uidExists($conn, $username, $email) !== false){
        header("location: ./sign_up.php?error=usernametaken"); //relocate the browser with an error message
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ./sign_up.php"); //relocate the browser
    exit();
}