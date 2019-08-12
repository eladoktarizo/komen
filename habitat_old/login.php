<?php
include "koneksi.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = mysql_fetch_array( $check )) {
			if ($pass1 != $info['passwd']) {
				
			} else {
				header("Location: post.php");
			}
		}
	}
 
	if (isset($_POST['submit2'])) {
		header("Location: index.php");
	}
	if (isset($_POST['submit'])) {
		if(!$_POST['username'] | !$_POST['pass']) {
			die('You did not fill in a required field.');
		}
		if (!get_magic_quotes_gpc()) {
			$_POST['username'] = addslashes($_POST['username']);
		}
		$check = mysql_query("SELECT * FROM t_member WHERE username = '".$_POST['username']."'")or die('Error to connect to Database');
		$check2 = mysql_num_rows($check);
		if ($check2 == 0) {
			die('That user does not exist in our database. <a href=login.php>Click Here to Back to login page</a>');
		}
		while($info = mysql_fetch_array( $check )){
			$_POST['pass'] = stripslashes($_POST['pass']);
			$info['passwd'] = stripslashes($info['passwd']);
			$_POST['pass'] = $_POST['pass'];
			if ($_POST['pass'] != $info['passwd']) {
				die('Incorrect password, please try again. <a href=login.php>Click Here to Back to login page</a>');
			} else {
				$_POST['username'] = stripslashes($_POST['username']);
				$hour = time() + 86400;
				setcookie("ID_my_site", $_POST['username'], $hour);
				setcookie("Key_my_site", $_POST['pass'], $hour);
				if($info['level']=='1'){
					header("Location: index1.php");
				} else {
					if($info['username'] == 'juri4'){
						header("Location: slide/upload.php");
					} else {
						header("Location: post.php");
					}
				}
			}
		}
	} else {
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" type="images/png" href="img/iiww.png"/>
<title>INDONESIA INTERNATIONAL WATER WEEK</title>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/structure.css">
</head>
<body>
	<div class="box login">
		<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<fieldset class="boxBody">
				<h1><img src="img/indonesia_water_week_logo.png" style='width:70%;'> <!--img src="img/logo_login2.png" style="float:right;"--></h1>
				<div>
					<font style='font-family: arial;font-size: 17px;color: #006699;font-weight: bold;'>Stakeholder's Forum<br>
					<font style='font-family: arial;font-size: 15px;color: #F0C237;text-shadow: 1px 1px 1px #000000;font-weight: bold;'>Surabaya, 21-23 Mei 2014</font>
				</div><br>
				  <!--label>Username</label-->
				  <input type="text" name="username" placeholder="USERNAME" tabindex="1" >
				  <!--label>Password</label-->
				  <input type="password" name="pass" placeholder="PASSWORD" tabindex="2" >
			</fieldset>
			<footer>
				<label></label>	  
				<input type="submit" class="btnLogin" value="Login" name="submit" tabindex="4"> <!--a href='index.php'><button class="btnLogin" style='margin-right: 25px;margin-bottom:10px;'>Home</button></a-->
			</footer>
		</form> 
		
		<a href='index2.php'><button class="btnLogin"  name="submit2" tabindex="4" style='margin-right: 25px;margin-bottom:10px;'><img src='images/home.png' style='height: 20px;vertical-align: middle;'> Home</button></a>
	</div>
	<!--footer id="main">	
		Copyright (c) 2014. All rights reserved.
	</footer-->
</body>
</html>
<?php
	}
mysql_close($conn);
?> 
