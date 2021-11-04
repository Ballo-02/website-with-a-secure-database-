<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ){ //checks if their is data
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){ //search for specific word
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ //checks if email is valid
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdmatch($pwd, $pwdRepeat){
    $result;
    if ($pwd !== $pwdRepeat){ //checks if email is valid
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; //sql query
    $stmt = mysqli_stmt_init($conn); //connection to the datatbase iniatilise
    if (!mysqli_stmt_prepare($stmt, $sql)){ //check for erros for the iniatilisation
        header("location: ./sign_up.php?error=stmtfailed"); //relocate the browser with an error message
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){ //fetch the data
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);"; //sql query
    $stmt = mysqli_stmt_init($conn); //connection to the datatbase iniatilise
    if (!mysqli_stmt_prepare($stmt, $sql)){ //check for erros for the iniatilisation
        header("location: .Cw1/sign_up.php?error=invalidemail"); //relocate the browser with an error message
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); //create a pash hash

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $namefile = ("scores/".$username.".txt");
    $scorefile = fopen($namefile, "w" ) or die("Unable to open file");
    //fwrite($scorefile, "test\n");
    fclose($scorefile);
    header("location: ./sign_up.php?error=none"); //relocate the browser with an error message
    exit();
}

function emptyInputLogin($username, $pwd){
        $result;
        if (empty($username) || empty($pwd)){ //checks if their is data
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }
function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists == false){
        header("location: ./login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"]; //checks if the ahs exists
    $checkPwd = password_verify($pwd, $pwdHashed); //comapares the hash
    
    if ($checkPwd == false){
        header("location: ./login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd == true){
        session_start(); //starts a new session
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ./flag.php");
        exit();
    }
}
