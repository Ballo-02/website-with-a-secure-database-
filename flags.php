<?php
    session_start();
?>

<!DOCTYPE html> 
<html lang"en">
    <head>
        <meta charset=”utf-8”>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/flags.css">
        <title>CTF fun</title>
    </head>
    <body>
        <div class="navigation">
            <ul>
                <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<li><a href='profile.php'><b>PROFILE PAGE</b></a><li>";
                        echo "<li><a href='logout.inc.php'><b>LOGOUT</b></a><li>";
                    }
                    else {
                        echo "<li><a href='sign_up.php'><b>REGISTER</b></a><li>";
                        echo "<li><a href='login.php'><b>LOGIN</b></a><li>";
                    }
                ?>
                <li><a href="leaderboard.php"><b>LEADERBOARD</b></a></li>
                <li><a href="flag.php"><b>FIND FLAGS</b></a></li>
                <li><a href=""> 
                    <img src="./images/logo.png" alt="logo" />
                </a></li>
                <div class="navigation-search">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"></button>
                </div>
                
            </ul>
        </div>
        <?php
            if (isset($_SESSION["useruid"])){
                echo "<p>Hello there " . $_SESSION["useruid"] ."</p>";
            }
            else{
                echo "<p>Please sign in or create an account</p>";
            }
        ?>
        <dev class="FlagBackground">
            <dev class="Flag">
                <dev class="FlagGreen">
                    <form action="login.inc.php" method="post"> <br><br>
                        <h1>FLAGS</h1><br>
                        <div class="flag-search">
                            <input type="text" placeholder="Search.." name="search">
                            <button type="submit" id="points"></button>
                        </div>
                    </form>
                </dev>
            </dev>
        </dev>
        <dev class="found-flags">
            <h1><b>Found Flags</b></h1>
            <p>
            No Flags Found
            </p>
        </dev>
    </body>
</html>

