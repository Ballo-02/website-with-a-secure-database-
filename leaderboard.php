<?php
    session_start();
?>
<!DOCTYPE html> 
<html lang"en">
    <head>
        <meta charset=”utf-8”>
		<link rel="stylesheet" href="css/leaderboard.css">
        <link rel="stylesheet" href="css/style.css">
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
	<?php
		if (isset($_SESSION["useruid"])){
			echo "<p>Hello there " . $_SESSION["useruid"] ."</p>";
		}
		else{
			echo "<p>Please sign in or create an account</p>";
		}
    ?>
	<dev class="LeaderboardBackground">
            <dev class="Leaderboard">
                <dev class="LeaderboardGreen">
					<form>
						<div class="lboard_section">
							<div class="lboard_tabs">
								<div class="tabs">
									<ul>
										<li data-li="today">Today</li>
										<li class="active" data-li="month">Month</li>
										<li data-li="year">Year</li>
									</ul>
								</div>
							</div>

							<div class="lboard_wrap">
								<div class="lboard_item today" style="display: none;">
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_1.png" alt="picture_1">
										</div>
										<div class="name_bar">
											<p><span>1.</span> Charles John</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 95%"></div>
											</div>
										</div>
										<div class="points">
											195 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_2.png" alt="picture_2">
										</div>
										<div class="name_bar">
											<p><span>2.</span>Alex Mike</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 80%"></div>
											</div>
										</div>
										<div class="points">
											185 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_3.png" alt="picture_2">
										</div>
										<div class="name_bar">
											<p><span>3.</span>Johnson</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 60%;"></div>
											</div>
										</div>
										<div class="points">
											160 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_4.png" alt="picture_1">
										</div>
										<div class="name_bar">
											<p><span>4.</span>Rosey</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 30%"></div>
											</div>
										</div>
										<div class="points">
											130 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_5.png" alt="picture_2">
										</div>
										<div class="name_bar">
											<p><span>5.</span>Scarlett Angela</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 10%"></div>
											</div>
										</div>
										<div class="points">
											110 points
										</div>
									</div>
								</div>
								<div class="lboard_item month" style="display: block;">
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_2.png" alt="picture_2">
										</div>
										<div class="name_bar">
											<p><span>1.</span> Alex Mike</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 95%"></div>
											</div>
										</div>
										<div class="points">
											1195 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_3.png" alt="picture_3">
										</div>
										<div class="name_bar">
											<p><span>2.</span>Johnson</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 80%"></div>
											</div>
										</div>
										<div class="points">
											1185 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_1.png" alt="picture_1">
										</div>
										<div class="name_bar">
											<p><span>3.</span>Charles John</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 70%;"></div>
											</div>
										</div>
										<div class="points">
											1160 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_5.png" alt="picture_5">
										</div>
										<div class="name_bar">
											<p><span>4.</span>Scarlett Angela</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 50%"></div>
											</div>
										</div>
										<div class="points">
											1130 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_4.png" alt="picture_4">
										</div>
										<div class="name_bar">
											<p><span>5.</span>Rosey</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 30%"></div>
											</div>
										</div>
										<div class="points">
											1110 points
										</div>
									</div>
								</div>
								<div class="lboard_item year" style="display: none;">
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_5.png" alt="picture_5">
										</div>
										<div class="name_bar">
											<p><span>1.</span>Scarlett Angela</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 90%"></div>
											</div>
										</div>
										<div class="points">
											2195 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_4.png" alt="picture_4">
										</div>
										<div class="name_bar">
											<p><span>2.</span>Rosey</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 85%"></div>
											</div>
										</div>
										<div class="points">
											2185 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_3.png" alt="picture_3">
										</div>
										<div class="name_bar">
											<p><span>3.</span>Johnson</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 65%;"></div>
											</div>
										</div>
										<div class="points">
											2160 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_1.png" alt="picture_1">
										</div>
										<div class="name_bar">
											<p><span>4.</span>Charles John</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 30%"></div>
											</div>
										</div>
										<div class="points">
											2130 points
										</div>
									</div>
									<div class="lboard_mem">
										<div class="img">
											<img src="profile/pic_2.png" alt="picture_2">
										</div>
										<div class="name_bar">
											<p><span>5.</span>Alex Mike</p>
											<div class="bar_wrap">
												<div class="inner_bar" style="width: 10%"></div>
											</div>
										</div>
										<div class="points">
											2110 points
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="personal-img">
							<img src="profile/pic_1.png" alt="picture_1">
						</div>
						<h1>1st</h1>
					</form>
				</div>
			</div>
		</div>	

<script src="scripts.js"></script>
</body>
</html>