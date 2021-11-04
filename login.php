<!DOCTYPE html> 
<html lang"en">
    <head>
        <meta charset=”utf-8”>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/login.css">
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
        <dev class="LoginBackground">
            <dev class="Login">
                <dev class="LoginGreen">
                    <form action="login.inc.php" method="post"> <br><br>
                        <br><br><h2>LOGIN</h2> 
                        <br><br><br><br><br><br><p><b>USERNAME/EMAIL</b><br><input type="text" name="uid" size="100" placeholder="Username/Email"> </p><br><br><br>
                        <p><b>PASSWORD</b><br><input type="password" name="pwd"  size="100" placeholder="Password">  </p><br><br><br>
                        <br><br><br><br><br><br><br><br><h3><button type="submit" class="button" name="submit"><b>LOGIN</b></button> </h3>
                        <?php
                            if (isset($_Get["error"])){ //look for data in the url
                                if ($_GET["error"] == "emptyinput"){
                                    echo "<p>You have empty inputs</p>";
                                }
                                else if ($_GET["error"] == "wronglogin"){
                                    echo "<p>Incorrect login</p>";
                                }
                                else if ($_GET["error"] == "invalidemail"){
                                    echo "<p>The email entered is not valid</p>";
                                }
                                else if ($_GET["error"] == "passworddontmatch"){
                                    echo "<p>passwords don't match</p>";
                                }
                                else if ($_GET["error"] == "usernametaken"){
                                    header("location: ./Cw1/flag.html");
                                }
                                else if ($_GET["error"] == "stmtfailed"){
                                    echo "<p>failed stmt</p>";
                                }
                            }
                        ?>
                    </form>
                </dev>
            </dev>
        </dev>
    </body>
</html>
