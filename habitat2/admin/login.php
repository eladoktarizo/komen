<?php
// Connects to Database
include "../koneksi.php";

//Checks login cookie
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = mysql_fetch_array( $check ))
			{
				if ($pass1 != $info['passwd']){
				}
				else{
					header("Location: index.php");

				}
			}
	}
//echo $_POST['username'];
//if the login form is submitted
	if (isset($_POST['submit'])) { // if form has been submitted

		// makes sure they filled it in
		if(!$_POST['username'] | !$_POST['pass']) {
			die('You did not fill in a required field.');
		}
		// checks it against the database

		if (!get_magic_quotes_gpc()) {
			$_POST['username'] = addslashes($_POST['username']);
		}
		$check = mysql_query("SELECT * FROM t_member WHERE username = '".$_POST['username']."'")or die('Error to connect to Database');

		//Gives error if user dosen't exist
		$check2 = mysql_num_rows($check);
		if ($check2 == 0) {
			die('That user does not exist in our database. <a href=login.php>Click Here to Back to login page</a>');
		}
		while($info = mysql_fetch_array( $check )){
			$_POST['pass'] = stripslashes($_POST['pass']);
			$info['passwd'] = stripslashes($info['passwd']);
			$_POST['pass'] = $_POST['pass'];
			//gives error if the password is wrong
			if ($_POST['pass'] != $info['passwd']) {
				die('Incorrect password, please try again. <a href=login.php>Click Here to Back to login page</a>');
			}
			else{
				// if login is ok then we add a cookie
				$_POST['username'] = stripslashes($_POST['username']);
				$hour = time() + 86400;
				setcookie("ID_my_site", $_POST['username'], $hour);
				setcookie("Key_my_site", $_POST['pass'], $hour);
				//then redirect them to the members area
				header("Location: index.php");
			}
		}
	}
	else{
		// if they are not logged in
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>ADMIN PANEL - Comment</title>
	<link rel="icon" type="images/png" href="images/comments.png"/>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form class="box login" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<fieldset class="boxBody">
	  <h1 align='center'><img src="images/key.png" style='width:40%;margin:0 auto;'> <!--img src="img/logo_login2.png" style="float:right;"--></h1>
	  <label>Username</label>
	  <input type="text" name="username" tabindex="1" required>
	  <label>Password</label>
	  <input type="password" name="pass" tabindex="2" required>
	</fieldset>
	<footer>
	  <label></label>
	  <input type="submit" class="btnLogin" value="Login" name="submit" tabindex="4">
	</footer>
</form>
<footer id="main">
  Copyright (c) 2014. All rights reserved.
</footer>
</body>
</html>
<?php
	}
mysql_close($conn);
?> 
