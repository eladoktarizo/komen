<?php
/*
include "connect.php";
echo "kouki ". $_COOKIE["ID_my_site"];
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check1 = pg_query("SELECT * FROM t_member WHERE uname = '$username1'")or die('Error to connect to Database');
		while($info = pg_fetch_array( $check1 )){		
			if ($pass1 != $info['passw']){ 
				header("Location: login.php");
			} else {
			}
		 
	 
		}
	} else {
		header("Location: login.php");
	}
pg_close($connect);
*/
header("Location: login.php");
?> 
 
