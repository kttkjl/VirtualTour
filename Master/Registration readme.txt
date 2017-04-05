SIMON
See website uploaded:
https://comp-1536-lab-1.000webhostapp.com/comp1536Project/Master/registration.html

To access the database:
http://www.phpmyadmin.co/
server: sql3.freemysqlhosting.net
username: sql3167116
password: PRUvzPi6Qr

This is for the registration page. I'm not sure why uploading to bcit's server restricts my access to external MySQL database.
Try it out and see the database update!
--------------------------------------------------------------------------------------------------------------------------------
JACKY
See this guy 
http://www.codingcage.com/2015/04/php-login-and-registration-script-with.html

I'm currently on the registration thing atm -- JACKY


=====How this works, AFAIK====
class.user.php ---calls---> require_once() on PDO_conn.php -> session started for this user

----ON Login page ----
userLogin.php is called when the login button is pressed
userLogin.php calls require_once() on PDO_conn.php

session is started in PDO_conn 
include_once called on class.user.php 
new user object created (line 28 on PDO_conn.php)

Check if user is already logged in, if yes redirect to index.html

if the login button is pressed on current HTML file with id='login'
	Grab username/email and password as variables
	call user class method doLogin with 3 params
	if doLogin returns true -> redirect to index.html
	else "LOL NO"