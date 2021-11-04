<!DOCTYPE html> 
<html lang"en">
    <head>
        <meta charset=”utf-8”>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
        <title>CTF fun</title>
    </head>
    <body>
        <div class="navigation">
            <ul>
                <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<li><a href='profile.php'><b>PROFILE PAGE</b></a><li>";
                        echo "<li><a href='logout.inc.php'><b>LOGOUT</b></a><li>";
                        echo "<li><a href='flag.php'><b>FIND FLAGS</b></a><li>";
                    }
                    else {
                        echo "<li><a href='sign_up.php'><b>REGISTER</b></a><li>";
                        echo "<li><a href='login.php'><b>LOGIN</b></a><li>";
                    }
                ?>
                <li><a href="leaderboard.php"><b>LEADERBOARD</b></a></li>
                <div class="navigation-search">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <li><a href=""> 
                    <img src="./images/logo.png" alt="logo" />
                </a></li>
            </ul>
        </div>
        <dev class="RegisterFormBackground">
            <dev class="RegisterForm">
                <dev class="RegisterFormGreen">
                    <form action="sign_up.inc.php" method="post"> <br><br>
                        <br><br><h2>REGISTER</h2>
                        <br><br><br><p><b>FULL NAME</b><br><input type="text" name="name"  size="100" placeholder="Type full name"> </p><br><br><br>
                        <p><b>EMAIL</b><br><input type="text" name="email"  size="100" placeholder="Email"> </p><br><br><br>
                        <p><b>USERNAME</b><br><input type="text" name="uid"  size="100" placeholder="Username"> </p><br><br><br>
                        <p><b>PASSWORD</b><br><input type="password" name="pwd" size="100" placeholder="Password"> </p><br><br><br>
                        <p><b>RE-TYPE PASSWORD</b><br><input type="password" name="pwdrepeat" size="100" placeholder="Re-type password"> </p><br><br><br><br>
                        <h3><button type="submit" class="button" name="submit"><b>REGISTER</b></button> </h3>
                    </form>
                </dev>
            </dev>
        </dev>
    </body>
</html>
<?php
    if (isset($_Get["error"])){ //look for data in the url
        if ($_GET["error"] == "emptyinput"){
            echo "<p>You have empty inputs</p>";
        }
        else if ($_GET["error"] == "invaliduid"){
            echo "<p>The UID is not valid</p>";
        }
        else if ($_GET["error"] == "invalidemail"){
            echo "<p>The email entered is not valid</p>";
        }
        else if ($_GET["error"] == "passworddontmatch"){
            echo "<p>passwords don't match</p>";
        }
        else if ($_GET["error"] == "usernametaken"){
            echo "<p>username taken</p>";
        }
        else if ($_GET["error"] == "stmtfailed"){
            echo "<p>failed stmt</p>";
        }
    }
?>
