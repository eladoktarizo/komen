<?php
include "connect.php";
$die="";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check = pg_query("SELECT * FROM t_member WHERE uname = '$username1'")or die('Error to connect to Database');
		while($info = pg_fetch_array( $check )) {
			if ($pass1 != $info['passwd']) {
				
			} else {
				header("Location: index.php");
			}
		}
	}

	if (isset($_POST['submit'])) {
	
		if(!$_POST['username'] | !$_POST['pass']) {
			$die='<font color="#ff000" size=1>You did not fill in a required field.</font>';
		}
		if (!get_magic_quotes_gpc()) {
			$_POST['username'] = addslashes($_POST['username']);
		}
		$check = pg_query("SELECT * FROM t_member WHERE uname = '".$_POST['username']."'")or die('Error to connect to Database');
		$check2 = pg_num_rows($check);
		if ($check2 == 0) {
			$die='<font color="#ff000" size=1>That user does not exist in our database.  </font>';
		}
		
		while($info = pg_fetch_array( $check )){
			$_POST['pass'] = stripslashes($_POST['pass']);
			$info['passw'] = stripslashes($info['passw']);
			if ($_POST['pass'] != $info['passw']) {
			$_POST['pass'] = $_POST['pass'];
				$die='<font color="#ff000" size=1>Incorrect password, please try again.</font>  ';
			} else {
				$_POST['username'] = stripslashes($_POST['username']);
				$hour = time() + 86400;
				setcookie("ID_my_site", $_POST['username'], $hour);
				setcookie("Key_my_site", $_POST['pass'], $hour);
				$level =$info['level'];
				//echo $level;
				if ($level =='ADMIN'){ 
					//header("Location:apbn.php");
					echo "<script>setTimeout(function(){ window.location = 'apbn.php'; }, 10);</script>";	
				}else
				if($level=='PLP'){
				//header("Location:resikosanitasi.php");
					echo "<script>setTimeout(function(){ window.location = 'resikosanitasi.php'; }, 10);</script>";	
				}else
				if($level=='AIR MINUM'){
				//header("Location:resikosanitasi.php");
					echo "<script>setTimeout(function(){ window.location = 'rawanair.php'; }, 10);</script>";	
				}else
				if($level=='BANGKIM'){
				//header("Location:resikosanitasi.php");
					echo "<script>setTimeout(function(){ window.location = 'apbn.php'; }, 10);</script>";	
				}else
				if($level=='PBL'){
				//header("Location:resikosanitasi.php");
					echo "<script>setTimeout(function(){ window.location = 'bersejarahtradisional.php'; }, 10);</script>";	
				}else{
				
				}
 
			}
		}
	}
//	} else {
	
?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" type="images/png" href=""/>
<title> </title>
<meta charset="UTF-8" />
<style>
body{
background-color:#1E1E1E;
}
.login{
margin: 0px auto;
width: 25%;
background: #f1f1f1;
padding: 50px;
border: 1px solid;
border-radius: 5px;
margin-top: 10%;
box-shadow: 0px 0px 3px 3px #ffffff;
border-color: #cfcfcf;
}
#txt {
font-size: 18px;
padding: 10px;
border-radius: 10px;
width: 100%;
margin-bottom: 5%;
background-color: #FAF9E4;
font-family: verdana;

}
.btnLogin
{
    -moz-border-radius:2px;
    -webkit-border-radius:2px;
    border-radius:15px;
    background:#a1d8f0;
    background:-moz-linear-gradient(top, #badff3, #7acbed);
    background:-webkit-gradient(linear, left top, left bottom, from(#badff3), to(#7acbed));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#badff3', EndColorStr='#7acbed')";
    border:1px solid #7db0cc !important;
    cursor: pointer;
    padding:11px 16px;
    font:bold 22px/22px Verdana, Tahomma, Geneva;
    text-shadow:rgba(0,0,0,0.2) 0 1px 0px; 
    color:#fff;
    -moz-box-shadow:inset rgba(255,255,255,0.6) 0 1px 1px, rgba(0,0,0,0.1) 0 1px 1px;
    -webkit-box-shadow:inset rgba(255,255,255,0.6) 0 1px 1px, rgba(0,0,0,0.1) 0 1px 1px;
    box-shadow:inset rgba(255,255,255,0.6) 0 1px 1px, rgba(0,0,0,0.1) 0 1px 1px;
/* margin-left: 12px; */
/* float: right; */
/* padding: 7px 21px; */
width: 107%;
}

.btnLogin:hover,
.btnLogin:focus,
.btnLogin:active{
    background:#a1d8f0;
    background:-moz-linear-gradient(top, #7acbed, #badff3);
    background:-webkit-gradient(linear, left top, left bottom, from(#7acbed), to(#badff3));
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='#7acbed', EndColorStr='#badff3')";
}
.btnLogin:active
{
    text-shadow:rgba(0,0,0,0.3) 0 -1px 0px; 
}
</style>
</head>
<body>
	<div class="box login">
		<form  action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			 <table style='width:90%;'> 
			 <tr>
				<td>
 				  <!--label>Username</label-->
					<input type="text" name="username" placeholder="USERNAME" tabindex="1" id='txt' >
				</td>	  
			</tr>
			<tr>
				<td>	
				  <!--label>Password</label-->
					<input type="password" name="pass" placeholder="PASSWORD" tabindex="2" id='txt'>
				</td>	  
			</tr>
			<tr>
				<td>	
					<input type="submit" class="btnLogin" value="Login" name="submit" tabindex="4"> <!--a href='index.php'><button class="btnLogin" style='margin-right: 25px;margin-bottom:10px;'>Home</button></a-->
				</td>	  
			</tr>	  
			<tr>
				<td>	
					<?php echo $die;?>
				</td>	  
			</tr>	  
		 
 	  </table>
 
		</form> 
		
 	</div>
	<!--footer id="main">	
		Copyright (c) 2014. All rights reserved.
	</footer-->
</body>
</html>
<?php
	 //}
pg_close($connect);
?> 
