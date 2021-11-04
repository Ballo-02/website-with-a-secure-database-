# website-with-a-secure-database-
 
WEB DEVELOPMENT
 
 
Contents
The leader board page	3
The Login Page	5
Login Errors	6
The Register Page	6
Register Errors	7
Flag Page	8
Profile Page	8
Database	9
The Navigation Bar	9
Code	10
CSS	10
Flags.css	10
Form.css	11
Leaderboard.css	12
Login.css	14
Profile.css	15
Style.css	16
Php	17
Dbh.inc.php	17
Flag.php	17
Functions.php	19
Leaderboard.php	22
Login.inc.php	32
Login.php	33
Logout.inc.php	34
Profile.php	35
Sign_up.inc.php	36
Sign_up.php	37
Scripts.js	39

 
The leader board page 
This displays the “leaderboard” page with today’s winner on the left (who came first today) and a column to the right written in JavaScript showing the positions of the top 5 players. This column includes their points they have earnt, a bar displaying their progress on the total amount of points that can be won (including their points) and their own profile picture.
This first screen shot is again the “leaderboard” page but showing who won overall in the month with the same data as described from above but with the month highlighted instead of Today or Year. With an additional screen shot showing the same information but for the year.
 



This second screen shot is again the “leaderboard” page but showing who won overall in the year with the same data as described from above but with the year highlighted instead of Today or Month.
The Login Page
 

As shown above this is the login page with a place to type your username or email and a password box which when typed in goes to asterixis (shown in picture B). Once correct login details are entered the page will automatically be sent to the flag screen with a new navigation bar with extra options due to you being signed in







Login Errors
If Any of the boxes are left empty then the following error will occur “emptyinput”

If the wrong login details are entered “wronglogin” error will be displayed for either password or username as I it would be a flaw in the website if it displayed which one was wrong due to hackers being able to exploit this and discover which usernames exist and which don’t.
The Register Page
Screenshot above displays the “register” page linked in with the database. You must enter your full name, email, username, password (asterixis) and a repeat of the same password. If all the details are correct a user Id is created incremented from the last created user the details name, username, email are added to that set of data, the password is encrypted with BCrypt (constantly updating to stay ahead and secure for php encryptions) and finally added to the last column. The password is hashed to be more secure.



Register Errors
If the passwords do not match when registering the following error will occur “passworddontmatch”
A function will check the database for any existing usernames with the same username entered and if found the error “usernametaken” will occur
A function implemented in php checks for correct email addresses, therefore if the email entered isn’t valid the following error will occur “invalidemail”
If any of the boxes are left empty then the following error will occur “emptyinput”
If the username entered contains characters such as “/”then the error “invaliduid” will occur




Flag Page
The “Flag Page” is shown when a user is logged (directly sent to this page), it displaying the current flags obtained as well as a search bar with a button including to add and get more points when a flag is found.
Profile Page

The “Profile Page” is shown when a user is logged in where you can see the information of the current user including email, username and profile picture all using php with session management. Therefore will change as users log in
Database
The following picture shows us the database created using SQL and phpMyAdmin. A project called “ctf_project” (named after the website) is created with a table called users, consisting of 5 elements usersId for the private key (increments everytime), usersName for the full name, usersEmail for the email, usersUid for the username and finally usersPwd for the encrypted password (using BCrypt). 
The Navigation Bar
This navigation bar is shown when a user is logged in with a welcoming message with ther users username displayed. On the far left is the logo of the website “FlagIt” and a search bar to find certain webpages in the website. On the right there is “FIND FLAGS” to locate to the found flags page, “LEADERBOARD” locating to the leader board page, “”LOGOUT” so users can logout their account and “PROFILE PAGE” so users can see their profile.
This navigation bar is shown when a user is not logged in with a string of text asking the user to “Please sign in or create an account”. On the far left is the logo of the website “FlagIt” and a search bar to find certain webpages in the website. On the right there “LEADERBOARD” locating to the leader board page, “”LOGIN” so users can login to their existing account and “REGISTER” so users can create a new account.








Code
CSS
Flags.css
1.	*{  
2.	    margin: 0;  
3.	    padding: 0;  
4.	    list-style: none;  
5.	    font-family: 'Helvetica';  
6.	}  
7.	.FlagBackground {  
8.	    position: absolute;  
9.	    width: 100%;  
10.	    height: 100%;  
11.	    background-image: url("../images/FormBackground.png");  
12.	}  
13.	  
14.	.FlagGreen h1{  
15.	    position: absolute;  
16.	    color:black;  
17.	    left: 440px;  
18.	    font-family: 'Helvetica';  
19.	}  
20.	  
21.	.FlagGreen form{  
22.	    position: absolute;  
23.	    top: 0px;  
24.	    left: 270px;  
25.	    width: 700px;  
26.	    height: 60px;  
27.	    background-image: url("../images/FormBackGroundRegister.png");  
28.	}  
29.	  
30.	.Flag form{  
31.	  position: absolute;  
32.	  top: 50px;  
33.	  left: 270px;  
34.	  width: 950px;  
35.	  height: 500px;  
36.	  border: 1px solid black;  
37.	  background-color: white;  
38.	  border-radius: 25px;  
39.	  }  
40.	.flag-search input{  
41.	float:middle;  
42.	padding: 7px;  
43.	margin-top: 60px;  
44.	margin-left: 370px;  
45.	font-size: 17px;  
46.	border-radius: 25px;  
47.	}  
48.	.flag-search button {  
49.	position: absolute;  
50.	top: 110px;  
51.	left: 540px;  
52.	height:36px;  
53.	width:36px;  
54.	border-radius: 25px;  
55.	margin-top: 7px;  
56.	background-image: url("../images/Magnifying.png");  
57.	cursor: pointer;  
58.	}  
59.	.found-flags {  
60.	    position: absolute;  
61.	    top: 300px;  
62.	    left: 450px;  
63.	    width: 600px;  
64.	    height: 300px;  
65.	    background-color:#00DE94;  
66.	}  
67.	.found-flags p{  
68.	    position: absolute;  
69.	    top: 50px;  
70.	    left: 10px;  
71.	    color: #3a3d51;  
72.	}  
73.	.found-flags h1{  
74.	    position: absolute;  
75.	    top: 0px;  
76.	    left: 10px;  
77.	    color: #3a3d51;  
78.	}  
Form.css
1.	.RegisterFormBackground {  
2.	    position: absolute;  
3.	    width: 100%;  
4.	    height: 100%;  
5.	    background-image: url("../images/FormBackground.png");  
6.	}  
7.	  
8.	.RegisterForm h2{  
9.	    position: absolute;  
10.	    left:420px;  
11.	    font-family: 'Helvetica';  
12.	}  
13.	  
14.	.RegisterForm p{  
15.	    position: absolute;  
16.	    color:black;  
17.	    left: 100px;  
18.	    font-family: 'Helvetica';  
19.	}  
20.	.RegisterForm h3{  
21.	    position: absolute;  
22.	    color:black;  
23.	    left: 420px;  
24.	    font-family: 'Helvetica';  
25.	}  
26.	  
27.	.RegisterFormGreen form{  
28.	    position: absolute;  
29.	    top: 0px;  
30.	    left: 270px;  
31.	    width: 700px;  
32.	    height: 60px;  
33.	    background-image: url("../images/FormBackGroundRegister.png");  
34.	}  
35.	  
36.	.RegisterForm form{  
37.	  position: absolute;  
38.	  top: 50px;  
39.	  left: 270px;  
40.	  width: 950px;  
41.	  height: 500px;  
42.	  border: 1px solid black;  
43.	  background-color: white;  
44.	  border-radius: 25px;  
45.	  }  
46.	.button {  
47.	position: absolute;  
48.	background-image: url("../images/FormButton.png");  
49.	border: none;  
50.	color: white;  
51.	padding: 15px 32px;  
52.	font-size: 14px;  
53.	margin: 4px 2px;  
54.	cursor: pointer;  
55.	border-radius: 25px;  
56.	font-family: 'Helvetica';  
57.	}  
Leaderboard.css
1.	*{  
2.	    margin: 0;  
3.	    padding: 0;  
4.	    list-style: none;  
5.	    font-family: 'Helvetica';  
6.	}  
7.	.LeaderboardBackground {  
8.	    position: absolute;  
9.	    width:100%;  
10.	    height:100%;  
11.	    background-image: url("../images/FormBackground.png");  
12.	}  
13.	  
14.	.LeaderboardGreen h1{  
15.	    position: absolute;  
16.	    color:black;  
17.	    left: 440px;  
18.	    font-family: 'Helvetica';  
19.	}  
20.	  
21.	.LeaderboardGreen form{  
22.	    position: absolute;  
23.	    top: 30px;  
24.	    left: 270px;  
25.	    width: 700px;  
26.	    height: 60px;  
27.	    background-image: url("../images/LeaderboardBackGound.png");  
28.	}  
29.	  
30.	.Leaderboard form{  
31.	    position: absolute;  
32.	    top: 50px;  
33.	    left: 270px;  
34.	    width: 950px;  
35.	    height: 500px;  
36.	    border-radius: 25px;  
37.	}  
38.	.personal-img{  
39.	    position: absolute;  
40.	    top: 100px;  
41.	    left: 93px;  
42.	    width: 20px;  
43.	    height:20px;  
44.	    display: block;  
45.	}  
46.	.Leaderboard form h1{  
47.	    position: absolute;  
48.	    top: 360px;  
49.	    left: 160px;  
50.	    font-size: 80px;  
51.	    font-family: 'Helvetica';  
52.	}  
53.	.lboard_section{  
54.	    position: absolute;  
55.	    top:20px;  
56.	    left: 500px;  
57.	    width: 250px;  
58.	    height: 340px;  
59.	    background:#3D6957;  
60.	    padding: 25px 40px;  
61.	    position: relative;  
62.	    border-radius: 5px;  
63.	}  
64.	  
65.	.lboard_section .lboard_tabs ul{  
66.	    display: flex;  
67.	}  
68.	  
69.	.lboard_section .lboard_tabs ul li{  
70.	    margin-right: 50px;  
71.	    font-size: 18px;  
72.	    font-weight: 600;  
73.	    color: black;  
74.	    cursor: pointer;  
75.	}  
76.	  
77.	.lboard_section .lboard_tabs ul li:hover,  
78.	.lboard_section .lboard_tabs ul li.active{  
79.	    color: #fff;  
80.	}  
81.	  
82.	.lboard_wrap{  
83.	    position: absolute;  
84.	    top: 70px;  
85.	    left: 40px;  
86.	    background: #00DE94;  
87.	    width: 100%;  
88.	    height: 100%;  
89.	    border-radius: 5px;  
90.	}  
91.	  
92.	.lboard_wrap .lboard_item{  
93.	    padding: 25px;  
94.	}  
95.	  
96.	.lboard_wrap .lboard_mem{  
97.	    display: flex;  
98.	    align-items: center;  
99.	    padding: 15px 0;  
100.	    border-bottom: 1px solid #ffe773;  
101.	}  
102.	  
103.	.lboard_wrap .lboard_mem:first-child{  
104.	    padding-top: 0;  
105.	}  
106.	  
107.	.lboard_wrap .lboard_mem:last-child{  
108.	    padding-bottom: 0;  
109.	    border-bottom: 0;  
110.	}  
111.	  
112.	.lboard_wrap .lboard_mem .img{  
113.	    width: 50px;  
114.	}  
115.	  
116.	.lboard_wrap .lboard_mem img{  
117.	    display: block;  
118.	    width: 100%;  
119.	}  
120.	  
121.	.lboard_wrap .lboard_mem .name_bar{  
122.	    margin: 0 20px;  
123.	    width: calc(100% - 150px);  
124.	}  
125.	  
126.	.lboard_wrap .lboard_mem .name_bar p{  
127.	    color: #3a3d51;  
128.	}  
129.	  
130.	.lboard_wrap .lboard_mem .name_bar p span{  
131.	    margin-right: 5px;  
132.	}  
133.	  
134.	.lboard_wrap .lboard_mem .points{  
135.	    width: 100px;  
136.	    color: #3a3d51;  
137.	}  
138.	  
139.	.lboard_wrap .lboard_mem .name_bar .bar_wrap{  
140.	    width: 100%;  
141.	    height: 5px;  
142.	    background: #00DE94 ;  
143.	    margin-top: 5px;  
144.	    border-radius: 5px;  
145.	    position: relative;  
146.	    overflow: hidden;  
147.	}  
148.	  
149.	.lboard_wrap .lboard_mem .name_bar .bar_wrap .inner_bar{  
150.	    position: absolute;  
151.	    top: 0;  
152.	    left: 0;  
153.	    height: 5px;  
154.	    background: #fff;  
155.	    border-radius: 5px;  
156.	    border-top-right-radius: 0px;  
157.	    border-bottom-right-radius: 0px;  
158.	}  
Login.css
1.	.LoginBackground {  
2.	    position: absolute;  
3.	    width: 100%;  
4.	    height: 100%;  
5.	    background-image: url("../images/FormBackground.png");  
6.	}  
7.	  
8.	.Login h2{  
9.	    position: absolute;  
10.	    left:420px;  
11.	    font-family: 'Helvetica';  
12.	}  
13.	  
14.	.Login p{  
15.	    position: absolute;  
16.	    color:black;  
17.	    left: 100px;  
18.	    font-family: 'Helvetica';  
19.	}  
20.	.Login h3{  
21.	    position: absolute;  
22.	    color:black;  
23.	    left: 420px;  
24.	    font-family: 'Helvetica';  
25.	}  
26.	  
27.	.LoginGreen form{  
28.	    position: absolute;  
29.	    top: 0px;  
30.	    left: 270px;  
31.	    width: 700px;  
32.	    height: 60px;  
33.	    background-image: url("../images/FormBackGroundRegister.png");  
34.	}  
35.	  
36.	.Login form{  
37.	  position: absolute;  
38.	  top: 50px;  
39.	  left: 270px;  
40.	  width: 950px;  
41.	  height: 500px;  
42.	  border: 1px solid black;  
43.	  background-color: white;  
44.	  border-radius: 25px;  
45.	  }  
46.	.button {  
47.	position: absolute;  
48.	background-image: url("../images/FormButton.png");  
49.	border: none;  
50.	color: white;  
51.	padding: 15px 32px;  
52.	font-size: 14px;  
53.	margin: 4px 2px;  
54.	cursor: pointer;  
55.	border-radius: 25px;  
56.	font-family: 'Helvetica';  
57.	}  
Profile.css
1.	.ProfileBackground {  
2.	    position: absolute;  
3.	    width: 100%;  
4.	    height: 100%;  
5.	    background-image: url("../images/FormBackground.png");  
6.	}  
7.	  
8.	.ProfileGreen h1{  
9.	    position: absolute;  
10.	    color:black;  
11.	    left: 600px;  
12.	    font-family: 'Helvetica';  
13.	}  
14.	  
15.	.ProfileGreen form{  
16.	    position: absolute;  
17.	    top: 0px;  
18.	    left: 270px;  
19.	    width: 700px;  
20.	    height: 60px;  
21.	    background-image: url("../images/LeaderboardBackGound.png");  
22.	}  
23.	.Profile form{
24.	    position: absolute;
25.	    top: 50px;
26.	    left: 270px;
27.	    width: 950px;
28.	    height: 500px;
29.	    border: 1px solid black;
30.	    background-color: white;
31.	    border-radius: 25px;
32.	}

Style.css
1.	*{  
2.	    margin: 0;  
3.	    padding: 0;  
4.	    list-style: none;  
5.	    font-family: 'Helvetica';  
6.	}  
7.	  
8.	.navigation ul {  
9.	  list-style-type: none;  
10.	  margin: 0;  
11.	  padding: 0;  
12.	  overflow: hidden;  
13.	  background-image: url("../images/NavBarGreen.png");  
14.	  color: white;  
15.	}  
16.	  
17.	.navigation img {  
18.	  position: absolute;  
19.	  top:0%;  
20.	  left: 30px;  
21.	  height:60px;  
22.	  width:130px;  
23.	}  
24.	  
25.	.navigation-search input{  
26.	  float:left;  
27.	  padding: 7px;  
28.	  margin-top: 5px;  
29.	  margin-left: 200px;  
30.	  font-size: 17px;  
31.	  border-radius: 25px;  
32.	}  
33.	.navigation-search button {  
34.	  position: absolute;  
35.	  top: 6px;  
36.	  left: 371px;  
37.	  height:36px;  
38.	  width:36px;  
39.	  border-radius: 25px;  
40.	  background-image: url("../images/Magnifying.png");  
41.	  cursor: pointer;  
42.	}  
43.	  
44.	  
45.	.navigation li a {  
46.	  float: right;  
47.	  display: block;  
48.	  color:black;  
49.	  font-family: 'Helvetica';  
50.	  text-align: center;  
51.	  padding: 14px 16px;  
52.	  text-decoration: none;  
53.	  }  
54.	  
55.	.navigation li a:hover {  
56.	background-color: green;  
57.	}  
Php
Dbh.inc.php
1.	<?php
2.	 
3.	$serverName = "localhost";
4.	$dBUsername = "root";
5.	$dBPassword = "";
6.	$dBName = "ctf_project";
7.	 
8.	$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
9.	if (!$conn){
10.	    die("Connection failed: " . mysqli_connect_error());  
11.	}
12.	?>
Flag.php
1.	<?php
2.	    session_start();
3.	?>
4.	 
5.	<!DOCTYPE html> 
6.	<html lang"en">
7.	    <head>
8.	        <meta charset=”utf-8”>
9.	        <link rel="stylesheet" href="css/style.css">
10.	        <link rel="stylesheet" href="css/flags.css">
11.	        <title>CTF fun</title>
12.	    </head>
13.	    <body>
14.	        <div class="navigation">
15.	            <ul>
16.	                <?php
17.	                    if (isset($_SESSION["useruid"])){
18.	                        echo "<li><a href='profile.php'><b>PROFILE PAGE</b></a><li>";
19.	                        echo "<li><a href='logout.inc.php'><b>LOGOUT</b></a><li>";
20.	                    }
21.	                    else {
22.	                        echo "<li><a href='sign_up.php'><b>REGISTER</b></a><li>";
23.	                        echo "<li><a href='login.php'><b>LOGIN</b></a><li>";
24.	                    }
25.	                ?>
26.	                <li><a href="leaderboard.php"><b>LEADERBOARD</b></a></li>
27.	                <li><a href="flag.php"><b>FIND FLAGS</b></a></li>
28.	                <li><a href=""> 
29.	                    <img src="./images/logo.png" alt="logo" />
30.	                </a></li>
31.	                <div class="navigation-search">
32.	                    <input type="text" placeholder="Search.." name="search">
33.	                    <button type="submit"></button>
34.	                </div>
35.	 
36.	            </ul>
37.	        </div>
38.	        <?php
39.	            if (isset($_SESSION["useruid"])){
40.	                echo "<p>Hello there " . $_SESSION["useruid"] ."</p>";
41.	            }
42.	            else{
43.	                echo "<p>Please sign in or create an account</p>";
44.	            }
45.	        ?>
46.	        <dev class="FlagBackground">
47.	            <dev class="Flag">
48.	                <dev class="FlagGreen">
49.	                    <form action="login.inc.php" method="post"> <br><br>
50.	                        <h1>FLAGS</h1><br>
51.	                        <div class="flag-search">
52.	                            <input type="text" placeholder="Search.." name="search">
53.	                            <button type="submit" id="points"></button>
54.	                        </div>
55.	                    </form>
56.	                </dev>
57.	            </dev>
58.	        </dev>
59.	        <dev class="found-flags">
60.	            <h1><b>Found Flags</b></h1>
61.	            <p>
62.	            1)3d099d0f13df9d0bb4427a6ce99d61b988861761e286d6e34b17d6371b46b13f
63.	            2)81b637d8fcd2c6da6359e6963113a1170de795e4b725b84d1e0b4cfd9ec58ce9
64.	            3)3e23e8160039594a33894f6564e1b1348bbd7a0088d42c4acb73eeaed59c009d
65.	            4)e1608f75c5d7813f3d4031cb30bfb786507d98137538ff8e128a6ff74e84e643
66.	            5)663ea1bfffe5038f3f0cf667f14c4257eff52d77ce7f2a218f72e9286616ea39
67.	            6)e3b98a4da31a127d4bde6e43033f66ba274cab0eb7eb1c70ec41402bf6273dd8
68.	            7)74fa5327cc0f4e947789dd5e989a61a8242986a596f170640ac90337b1da1ee4
69.	            </p>
70.	        </dev>
71.	    </body>
72.	</html>

Functions.php
1.	<?php
2.	 
3.	function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat){
4.	    $result;
5.	    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ){ //checks if their is data
6.	        $result = true;
7.	    }
8.	    else {
9.	        $result = false;
10.	    }
11.	    return $result;
12.	}
13.	 
14.	function invalidUid($username){
15.	    $result;
16.	    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){ //search for specific word
17.	        $result = true;
18.	    }
19.	    else {
20.	        $result = false;
21.	    }
22.	    return $result;
23.	}
24.	function invalidEmail($email){
25.	    $result;
26.	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){ //checks if email is valid
27.	        $result = true;
28.	    }
29.	    else {
30.	        $result = false;
31.	    }
32.	    return $result;
33.	}
34.	 
35.	function pwdmatch($pwd, $pwdRepeat){
36.	    $result;
37.	    if ($pwd !== $pwdRepeat){ //checks if email is valid
38.	        $result = true;
39.	    }
40.	    else {
41.	        $result = false;
42.	    }
43.	    return $result;
44.	}
45.	 
46.	function uidExists($conn, $username, $email){
47.	    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;"; //sql query
48.	    $stmt = mysqli_stmt_init($conn); //connection to the datatbase iniatilise
49.	    if (!mysqli_stmt_prepare($stmt, $sql)){ //check for erros for the iniatilisation
50.	        header("location: ./sign_up.php?error=stmtfailed"); //relocate the browser with an error message
51.	        exit();
52.	    }
53.	 
54.	    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
55.	    mysqli_stmt_execute($stmt);
56.	 
57.	    $resultData = mysqli_stmt_get_result($stmt);
58.	 
59.	    if ($row = mysqli_fetch_assoc($resultData)){ //fetch the data
60.	        return $row;
61.	    }
62.	    else{
63.	        $result = false;
64.	        return $result;
65.	    }
66.	 
67.	    mysqli_stmt_close($stmt);
68.	}
69.	 
70.	function createUser($conn, $name, $email, $username, $pwd){
71.	    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);"; //sql query
72.	    $stmt = mysqli_stmt_init($conn); //connection to the datatbase iniatilise
73.	    if (!mysqli_stmt_prepare($stmt, $sql)){ //check for erros for the iniatilisation
74.	        header("location: .Cw1/sign_up.php?error=invalidemail"); //relocate the browser with an error message
75.	        exit();
76.	    }
77.	 
78.	    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT); //create a pash hash
79.	 
80.	    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
81.	    mysqli_stmt_execute($stmt);
82.	    mysqli_stmt_close($stmt);
83.	    $namefile = ("scores/".$username.".txt");
84.	    $scorefile = fopen($namefile, "w" ) or die("Unable to open file");
85.	    //fwrite($scorefile, "test\n");
86.	    fclose($scorefile);
87.	    header("location: ./sign_up.php?error=none"); //relocate the browser with an error message
88.	    exit();
89.	}
90.	 
91.	function emptyInputLogin($username, $pwd){
92.	        $result;
93.	        if (empty($username) || empty($pwd)){ //checks if their is data
94.	            $result = true;
95.	        }
96.	        else {
97.	            $result = false;
98.	        }
99.	        return $result;
100.	    }
101.	function loginUser($conn, $username, $pwd){
102.	    $uidExists = uidExists($conn, $username, $username);
103.	 
104.	    if ($uidExists == false){
105.	        header("location: ./login.php?error=wronglogin");
106.	        exit();
107.	    }
108.	 
109.	    $pwdHashed = $uidExists["usersPwd"]; //checks if the ahs exists
110.	    $checkPwd = password_verify($pwd, $pwdHashed); //comapares the hash
111.	 
112.	    if ($checkPwd == false){
113.	        header("location: ./login.php?error=wronglogin");
114.	        exit();
115.	    }
116.	    else if ($checkPwd == true){
117.	        session_start(); //starts a new session
118.	        $_SESSION["userid"] = $uidExists["usersId"];
119.	        $_SESSION["useruid"] = $uidExists["usersUid"];
120.	        header("location: ./flag.php");
121.	        exit();
122.	    }
123.	}

Leaderboard.php
1.	<?php
2.	    session_start();
3.	?>
4.	<!DOCTYPE html> 
5.	<html lang"en">
6.	    <head>
7.	        <meta charset=”utf-8”>
8.			<link rel="stylesheet" href="css/leaderboard.css">
9.	        <link rel="stylesheet" href="css/style.css">
10.	        <title>CTF fun</title>
11.	    </head>
12.	    <body>
13.	    	<div class="navigation">
14.	            <ul>
15.	                <?php
16.	                    if (isset($_SESSION["useruid"])){
17.	                        echo "<li><a href='profile.php'><b>PROFILE PAGE</b></a><li>";
18.	                        echo "<li><a href='logout.inc.php'><b>LOGOUT</b></a><li>";
19.	                        echo "<li><a href='flag.php'><b>FIND FLAGS</b></a><li>";
20.	                    }
21.	                    else {
22.	                        echo "<li><a href='sign_up.php'><b>REGISTER</b></a><li>";
23.	                        echo "<li><a href='login.php'><b>LOGIN</b></a><li>";
24.	                    }
25.	                ?>
26.	                <li><a href="leaderboard.php"><b>LEADERBOARD</b></a></li>
27.	                <div class="navigation-search">
28.	                    <input type="text" placeholder="Search.." name="search">
29.	                    <button type="submit"><i class="fa fa-search"></i></button>
30.	                </div>
31.	 
32.	                <li><a href=""> 
33.						<img src="./images/logo.png" alt="logo" />
34.	                </a></li>
35.	            </ul>
36.	        </div>
37.		<?php
38.			if (isset($_SESSION["useruid"])){
39.				echo "<p>Hello there " . $_SESSION["useruid"] ."</p>";
40.			}
41.			else{
42.				echo "<p>Please sign in or create an account</p>";
43.			}
44.	    ?>
45.		<dev class="LeaderboardBackground">
46.	            <dev class="Leaderboard">
47.	                <dev class="LeaderboardGreen">
48.						<form>
49.							<div class="lboard_section">
50.								<div class="lboard_tabs">
51.									<div class="tabs">
52.										<ul>
53.											<li data-li="today">Today</li>
54.											<li class="active" data-li="month">Month</li>
55.											<li data-li="year">Year</li>
56.										</ul>
57.									</div>
58.								</div>
59.	 
60.								<div class="lboard_wrap">
61.									<div class="lboard_item today" style="display: none;">
62.										<div class="lboard_mem">
63.											<div class="img">
64.												<img src="profile/pic_1.png" alt="picture_1">
65.											</div>
66.											<div class="name_bar">
67.												<p><span>1.</span> Charles John</p>
68.												<div class="bar_wrap">
69.													<div class="inner_bar" style="width: 95%"></div>
70.												</div>
71.											</div>
72.											<div class="points">
73.												195 points
74.											</div>
75.										</div>
76.										<div class="lboard_mem">
77.											<div class="img">
78.												<img src="profile/pic_2.png" alt="picture_2">
79.											</div>
80.											<div class="name_bar">
81.												<p><span>2.</span>Alex Mike</p>
82.												<div class="bar_wrap">
83.													<div class="inner_bar" style="width: 80%"></div>
84.												</div>
85.											</div>
86.											<div class="points">
87.												185 points
88.											</div>
89.										</div>
90.										<div class="lboard_mem">
91.											<div class="img">
92.												<img src="profile/pic_3.png" alt="picture_2">
93.											</div>
94.											<div class="name_bar">
95.												<p><span>3.</span>Johnson</p>
96.												<div class="bar_wrap">
97.													<div class="inner_bar" style="width: 60%;"></div>
98.												</div>
99.											</div>
100.											<div class="points">
101.												160 points
102.											</div>
103.										</div>
104.										<div class="lboard_mem">
105.											<div class="img">
106.												<img src="profile/pic_4.png" alt="picture_1">
107.											</div>
108.											<div class="name_bar">
109.												<p><span>4.</span>Rosey</p>
110.												<div class="bar_wrap">
111.													<div class="inner_bar" style="width: 30%"></div>
112.												</div>
113.											</div>
114.											<div class="points">
115.												130 points
116.											</div>
117.										</div>
118.										<div class="lboard_mem">
119.											<div class="img">
120.												<img src="profile/pic_5.png" alt="picture_2">
121.											</div>
122.											<div class="name_bar">
123.												<p><span>5.</span>Scarlett Angela</p>
124.												<div class="bar_wrap">
125.													<div class="inner_bar" style="width: 10%"></div>
126.												</div>
127.											</div>
128.											<div class="points">
129.												110 points
130.											</div>
131.										</div>
132.									</div>
133.									<div class="lboard_item month" style="display: block;">
134.										<div class="lboard_mem">
135.											<div class="img">
136.												<img src="profile/pic_2.png" alt="picture_2">
137.											</div>
138.											<div class="name_bar">
139.												<p><span>1.</span> Alex Mike</p>
140.												<div class="bar_wrap">
141.													<div class="inner_bar" style="width: 95%"></div>
142.												</div>
143.											</div>
144.											<div class="points">
145.												1195 points
146.											</div>
147.										</div>
148.										<div class="lboard_mem">
149.											<div class="img">
150.												<img src="profile/pic_3.png" alt="picture_3">
151.											</div>
152.											<div class="name_bar">
153.												<p><span>2.</span>Johnson</p>
154.												<div class="bar_wrap">
155.													<div class="inner_bar" style="width: 80%"></div>
156.												</div>
157.											</div>
158.											<div class="points">
159.												1185 points
160.											</div>
161.										</div>
162.										<div class="lboard_mem">
163.											<div class="img">
164.												<img src="profile/pic_1.png" alt="picture_1">
165.											</div>
166.											<div class="name_bar">
167.												<p><span>3.</span>Charles John</p>
168.												<div class="bar_wrap">
169.													<div class="inner_bar" style="width: 70%;"></div>
170.												</div>
171.											</div>
172.											<div class="points">
173.												1160 points
174.											</div>
175.										</div>
176.										<div class="lboard_mem">
177.											<div class="img">
178.												<img src="profile/pic_5.png" alt="picture_5">
179.											</div>
180.											<div class="name_bar">
181.												<p><span>4.</span>Scarlett Angela</p>
182.												<div class="bar_wrap">
183.													<div class="inner_bar" style="width: 50%"></div>
184.												</div>
185.											</div>
186.											<div class="points">
187.												1130 points
188.											</div>
189.										</div>
190.										<div class="lboard_mem">
191.											<div class="img">
192.												<img src="profile/pic_4.png" alt="picture_4">
193.											</div>
194.											<div class="name_bar">
195.												<p><span>5.</span>Rosey</p>
196.												<div class="bar_wrap">
197.													<div class="inner_bar" style="width: 30%"></div>
198.												</div>
199.											</div>
200.											<div class="points">
201.												1110 points
202.											</div>
203.										</div>
204.									</div>
205.									<div class="lboard_item year" style="display: none;">
206.										<div class="lboard_mem">
207.											<div class="img">
208.												<img src="profile/pic_5.png" alt="picture_5">
209.											</div>
210.											<div class="name_bar">
211.												<p><span>1.</span>Scarlett Angela</p>
212.												<div class="bar_wrap">
213.													<div class="inner_bar" style="width: 90%"></div>
214.												</div>
215.											</div>
216.											<div class="points">
217.												2195 points
218.											</div>
219.										</div>
220.										<div class="lboard_mem">
221.											<div class="img">
222.												<img src="profile/pic_4.png" alt="picture_4">
223.											</div>
224.											<div class="name_bar">
225.												<p><span>2.</span>Rosey</p>
226.												<div class="bar_wrap">
227.													<div class="inner_bar" style="width: 85%"></div>
228.												</div>
229.											</div>
230.											<div class="points">
231.												2185 points
232.											</div>
233.										</div>
234.										<div class="lboard_mem">
235.											<div class="img">
236.												<img src="profile/pic_3.png" alt="picture_3">
237.											</div>
238.											<div class="name_bar">
239.												<p><span>3.</span>Johnson</p>
240.												<div class="bar_wrap">
241.													<div class="inner_bar" style="width: 65%;"></div>
242.												</div>
243.											</div>
244.											<div class="points">
245.												2160 points
246.											</div>
247.										</div>
248.										<div class="lboard_mem">
249.											<div class="img">
250.												<img src="profile/pic_1.png" alt="picture_1">
251.											</div>
252.											<div class="name_bar">
253.												<p><span>4.</span>Charles John</p>
254.												<div class="bar_wrap">
255.													<div class="inner_bar" style="width: 30%"></div>
256.												</div>
257.											</div>
258.											<div class="points">
259.												2130 points
260.											</div>
261.										</div>
262.										<div class="lboard_mem">
263.											<div class="img">
264.												<img src="profile/pic_2.png" alt="picture_2">
265.											</div>
266.											<div class="name_bar">
267.												<p><span>5.</span>Alex Mike</p>
268.												<div class="bar_wrap">
269.													<div class="inner_bar" style="width: 10%"></div>
270.												</div>
271.											</div>
272.											<div class="points">
273.												2110 points
274.											</div>
275.										</div>
276.									</div>
277.								</div>
278.							</div>
279.							<div class="personal-img">
280.								<img src="profile/pic_1.png" alt="picture_1">
281.							</div>
282.							<h1>1st</h1>
283.						</form>
284.					</div>
285.				</div>
286.			</div>	
Login.inc.php
1.	<?php
2.	 
3.	if (isset($_POST["submit"])){
4.	    $username = $_POST["uid"];
5.	    $pwd = $_POST["pwd"];
6.	 
7.	    require_once 'dbh.inc.php'; //connects to that file
8.	    require_once 'functions.inc.php';
9.	 
10.	    if (emptyInputLogin($username, $pwd) !== false){
11.	        header("location: ./login.php?error=emptyinput"); //relocate the browser with an error message
12.	        exit();
13.	    }
14.	 
15.	    loginUser($conn, $username, $pwd);
16.	}
17.	else{
18.	    header("location: ./login.php");
19.	    exit();
20.	}
21.	?>
Login.php
1.	<!DOCTYPE html> 
2.	<html lang"en">
3.	    <head>
4.	        <meta charset=”utf-8”>
5.	        <link rel="stylesheet" href="css/style.css">
6.	        <link rel="stylesheet" href="css/login.css">
7.	        <title>CTF fun</title>
8.	    </head>
9.	    <body>
10.	        <div class="navigation">
11.	            <ul>
12.	                <?php
13.	                    if (isset($_SESSION["useruid"])){
14.	                        echo "<li><a href='profile.php'><b>PROFILE PAGE</b></a><li>";
15.	                        echo "<li><a href='logout.inc.php'><b>LOGOUT</b></a><li>";
16.	                        echo "<li><a href='flag.php'><b>FIND FLAGS</b></a><li>";
17.	                    }
18.	                    else {
19.	                        echo "<li><a href='sign_up.php'><b>REGISTER</b></a><li>";
20.	                        echo "<li><a href='login.php'><b>LOGIN</b></a><li>";
21.	                    }
22.	                ?>
23.	                <li><a href="leaderboard.php"><b>LEADERBOARD</b></a></li>
24.	                <div class="navigation-search">
25.	                    <input type="text" placeholder="Search.." name="search">
26.	                    <button type="submit"><i class="fa fa-search"></i></button>
27.	                </div>
28.	                <li><a href=""> 
29.	                    <img src="./images/logo.png" alt="logo" />
30.	                </a></li>
31.	            </ul>
32.	        </div>
33.	        <dev class="LoginBackground">
34.	            <dev class="Login">
35.	                <dev class="LoginGreen">
36.	                    <form action="login.inc.php" method="post"> <br><br>
37.	                        <br><br><h2>LOGIN</h2> 
38.	                        <br><br><br><br><br><br><p><b>USERNAME/EMAIL</b><br><input type="text" name="uid" size="100" placeholder="Username/Email"> </p><br><br><br>
39.	                        <p><b>PASSWORD</b><br><input type="password" name="pwd"  size="100" placeholder="Password">  </p><br><br><br>
40.	                        <br><br><br><br><br><br><br><br><h3><button type="submit" class="button" name="submit"><b>LOGIN</b></button> </h3>
41.	                        <?php
42.	                            if (isset($_Get["error"])){ //look for data in the url
43.	                                if ($_GET["error"] == "emptyinput"){
44.	                                    echo "<p>You have empty inputs</p>";
45.	                                }
46.	                                else if ($_GET["error"] == "wronglogin"){
47.	                                    echo "<p>Incorrect login</p>";
48.	                                }
49.	                                else if ($_GET["error"] == "invalidemail"){
50.	                                    echo "<p>The email entered is not valid</p>";
51.	                                }
52.	                                else if ($_GET["error"] == "passworddontmatch"){
53.	                                    echo "<p>passwords don't match</p>";
54.	                                }
55.	                                else if ($_GET["error"] == "usernametaken"){
56.	                                    header("location: ./Cw1/flag.html");
57.	                                }
58.	                                else if ($_GET["error"] == "stmtfailed"){
59.	                                    echo "<p>failed stmt</p>";
60.	                                }
61.	                            }
62.	                        ?>
63.	                    </form>
64.	                </dev>
65.	            </dev>
66.	        </dev>
67.	    </body>
68.	</html>
69.	 
Logout.inc.php
1.	<?php
2.	 
3.	session_start();
4.	session_unset();
5.	session_destroy();
6.	 
7.	header("location: /cw1/leaderboard.php");
8.	?>
9.	 
Profile.php
1.	<?php
2.	    session_start();
3.	?>
4.	<!DOCTYPE html> 
5.	<html lang"en">
6.	    <head>
7.	        <meta charset=”utf-8”>
8.	        <link rel="stylesheet" href="css/style.css">
9.	        <link rel="stylesheet" href="css/profile.css">
10.	        <title>CTF fun</title>
11.	    </head>
12.	    <body>
13.	        <div class="navigation">
14.	            <ul>
15.	                <?php
16.	                    if (isset($_SESSION["useruid"])){
17.	                        echo "<li><a href='profile.php'><b>PROFILE PAGE</b></a><li>";
18.	                        echo "<li><a href='logout.inc.php'><b>LOGOUT</b></a><li>";
19.	                    }
20.	                    else {
21.	                        echo "<li><a href='sign_up.php'><b>REGISTER</b></a><li>";
22.	                        echo "<li><a href='login.php'><b>LOGIN</b></a><li>";
23.	                    }
24.	                ?>
25.	                <li><a href="leaderboard.php"><b>LEADERBOARD</b></a></li>
26.	                <li><a href="flag.php"><b>FIND FLAGS</b></a></li>
27.	                <div class="navigation-search">
28.	                    <input type="text" placeholder="Search.." name="search">
29.	                    <button type="submit"><i class="fa fa-search"></i></button>
30.	                </div>
31.	                <li><a href=""> 
32.	                    <img src="./images/logo.png" alt="logo" />
33.	                </a></li>
34.	            </ul>
35.	            <?php
36.	            if (isset($_SESSION["useruid"])){
37.	                echo "<p>Hello there " . $_SESSION["useruid"] ."</p>";
38.	            }
39.	            else{
40.	                echo "<p>Please sign in or create an account</p>";
41.	            }
42.	            ?>
43.	        </div>
44.	        <dev class="ProfileBackground">
45.	            <dev class="Profile">
46.	                <dev class="ProfileGreen">
47.	                    <form action="sign_up.inc.php" method="post"> <br><br>
48.	                        <h1>PROFILE</h1>
49.	                    </form>
50.	                </dev>
51.	            </dev>
52.	        </dev>
53.	    </body>
54.	</html>
Sign_up.inc.php
1.	<?php
2.	if (isset($_POST["submit"])){ //if the submit button has been presseed
3.	    $name = $_POST["name"]; //find in the "name" atrribute from the previous tab and making it a variable
4.	    $email = $_POST["email"];
5.	    $username = $_POST["uid"];
6.	    $pwd = $_POST["pwd"];
7.	    $pwdRepeat = $_POST["pwdrepeat"];
8.	 
9.	    require_once 'dbh.inc.php'; //connects to that file
10.	    require_once 'functions.inc.php';
11.	 
12.	    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
13.	        header("location: ./sign_up.php?error=emptyinput"); //relocate the browser with an error message
14.	        exit();
15.	    }
16.	    if (invalidUid($username) !== false){
17.	        header("location: ./sign_up.php?error=invaliduid"); //relocate the browser with an error message
18.	        exit();
19.	    }
20.	    if (invalidEmail($email) !== false){
21.	        header("location: ./sign_up.php?error=invalidemail"); //relocate the browser with an error message
22.	        exit();
23.	    }
24.	    if (pwdmatch($pwd ,$pwdRepeat) !== false){
25.	        header("location: ./sign_up.php?error=passworddontmatch"); //relocate the browser with an error message
26.	        exit();
27.	    }
28.	    if (uidExists($conn, $username, $email) !== false){
29.	        header("location: ./sign_up.php?error=usernametaken"); //relocate the browser with an error message
30.	        exit();
31.	    }
32.	 
33.	    createUser($conn, $name, $email, $username, $pwd);
34.	 
35.	}
36.	else {
37.	    header("location: ./sign_up.php"); //relocate the browser
38.	    exit();
39.	}
Sign_up.php
1.	<!DOCTYPE html> 
2.	<html lang"en">
3.	    <head>
4.	        <meta charset=”utf-8”>
5.	        <link rel="stylesheet" href="css/style.css">
6.	        <link rel="stylesheet" href="css/form.css">
7.	        <title>CTF fun</title>
8.	    </head>
9.	    <body>
10.	        <div class="navigation">
11.	            <ul>
12.	                <?php
13.	                    if (isset($_SESSION["useruid"])){
14.	                        echo "<li><a href='profile.php'><b>PROFILE PAGE</b></a><li>";
15.	                        echo "<li><a href='logout.inc.php'><b>LOGOUT</b></a><li>";
16.	                        echo "<li><a href='flag.php'><b>FIND FLAGS</b></a><li>";
17.	                    }
18.	                    else {
19.	                        echo "<li><a href='sign_up.php'><b>REGISTER</b></a><li>";
20.	                        echo "<li><a href='login.php'><b>LOGIN</b></a><li>";
21.	                    }
22.	                ?>
23.	                <li><a href="leaderboard.php"><b>LEADERBOARD</b></a></li>
24.	                <div class="navigation-search">
25.	                    <input type="text" placeholder="Search.." name="search">
26.	                    <button type="submit"><i class="fa fa-search"></i></button>
27.	                </div>
28.	                <li><a href=""> 
29.	                    <img src="./images/logo.png" alt="logo" />
30.	                </a></li>
31.	            </ul>
32.	        </div>
33.	        <dev class="RegisterFormBackground">
34.	            <dev class="RegisterForm">
35.	                <dev class="RegisterFormGreen">
36.	                    <form action="sign_up.inc.php" method="post"> <br><br>
37.	                        <br><br><h2>REGISTER</h2>
38.	                        <br><br><br><p><b>FULL NAME</b><br><input type="text" name="name"  size="100" placeholder="Type full name"> </p><br><br><br>
39.	                        <p><b>EMAIL</b><br><input type="text" name="email"  size="100" placeholder="Email"> </p><br><br><br>
40.	                        <p><b>USERNAME</b><br><input type="text" name="uid"  size="100" placeholder="Username"> </p><br><br><br>
41.	                        <p><b>PASSWORD</b><br><input type="password" name="pwd" size="100" placeholder="Password"> </p><br><br><br>
42.	                        <p><b>RE-TYPE PASSWORD</b><br><input type="password" name="pwdrepeat" size="100" placeholder="Re-type password"> </p><br><br><br><br>
43.	                        <h3><button type="submit" class="button" name="submit"><b>REGISTER</b></button> </h3>
44.	                    </form>
45.	                </dev>
46.	            </dev>
47.	        </dev>
48.	    </body>
49.	</html>
50.	<?php
51.	    if (isset($_Get["error"])){ //look for data in the url
52.	        if ($_GET["error"] == "emptyinput"){
53.	            echo "<p>You have empty inputs</p>";
54.	        }
55.	        else if ($_GET["error"] == "invaliduid"){
56.	            echo "<p>The UID is not valid</p>";
57.	        }
58.	        else if ($_GET["error"] == "invalidemail"){
59.	            echo "<p>The email entered is not valid</p>";
60.	        }
61.	        else if ($_GET["error"] == "passworddontmatch"){
62.	            echo "<p>passwords don't match</p>";
63.	        }
64.	        else if ($_GET["error"] == "usernametaken"){
65.	            header("location: ./Cw1/flag.php");
66.	        }
67.	        else if ($_GET["error"] == "stmtfailed"){
68.	            echo "<p>failed stmt</p>";
69.	        }
70.	    }
71.	?>
Scripts.js
1.	var tabs = document.querySelectorAll(".lboard_tabs ul li");
2.	var today = document.querySelector(".today");
3.	var month = document.querySelector(".month");
4.	var year = document.querySelector(".year");
5.	var items = document.querySelectorAll(".lboard_item");
6.	 
7.	tabs.forEach(function(tab){
8.		tab.addEventListener("click", function(){
9.			var currenttab = tab.getAttribute("data-li");
10.	 
11.			tabs.forEach(function(tab){
12.				tab.classList.remove("active");
13.			})
14.	 
15.			tab.classList.add("active");
16.	 
17.			items.forEach(function(item){
18.				item.style.display = "none";
19.			})
20.	 
21.			if(currenttab == "today"){
22.				today.style.display = "block";
23.			}
24.			else if(currenttab == "month"){
25.				month.style.display = "block";
26.			}
27.			else{
28.				year.style.display = "block";
29.			}
30.	 
31.		})
32.	})

