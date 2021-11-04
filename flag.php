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
            1)3d099d0f13df9d0bb4427a6ce99d61b988861761e286d6e34b17d6371b46b13f
            2)81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9
            3)3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d
            4)e1608f75c5d7813f3d4031cb30bfb786507d98137538ff8e128a6ff74e84e643
            5)663ea1bfffe5038f3f0cf667f14c4257eff52d77ce7f2a218f72e9286616ea39
            6)e3b98a4da31a127d4bde6e43033f66ba274cab0eb7eb1c70ec41402bf6273dd8
            7)74fa5327cc0f4e947789dd5e989a61a8242986a596f170640ac90337b1da1ee4
            </p>
        </dev>
    </body>
</html>

