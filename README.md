# website-with-a-secure-database-
 
WEB DEVELOPMENT
 
 
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
