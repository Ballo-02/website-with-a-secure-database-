<?php
    session_start();
?>
<!DOCTYPE html> 
<html lang"en">
    <head>
        <meta charset=”utf-8”>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/profile.css">
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
                <div class="navigation-search">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <li><a href=""> 
                    <img src="./images/logo.png" alt="logo" />
                </a></li>
            </ul>
            <?php
            if (isset($_SESSION["useruid"])){
                echo "<p>Hello there " . $_SESSION["useruid"] ."</p>";
            }
            else{
                echo "<p>Please sign in or create an account</p>";
            }
            ?>
        </div>
        <dev class="ProfileBackground">
            <dev class="Profile">
                <dev class="ProfileGreen">
                    <form action="sign_up.inc.php" method="post"> <br><br>
                        <br><br>
                        <h1>PROFILE</h1>
                        <br><br><br><br>
                        <h2>FULL NAME</h2>
                        <br><br>
                        <p>Owen Ball</p>
                        <br><br>
                        <h2>USERNAME</h2>
                        <br><br>
                        <?php
                        echo "<p>" . $_SESSION["useruid"] ."</p>";
                        ?>
                        <br><br>
                        <h2>EMAIL</h2>
                        <br><br>
                        <p>owen.ball@gmail.com</p>
                        <div class="personal-img">
							<img src="profile/pic_1.png" alt="picture_1">
						</div>
                    </form>
                </dev>
            </dev>
        </dev>
    </body>
</html>