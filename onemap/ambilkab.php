<?php
include "connect.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check1 = pg_query("SELECT * FROM t_member WHERE uname = '$username1'")or die('Error to connect to Database');
		while($info = pg_fetch_array( $check1 )){		
			if ($pass1 != $info['passw']){ 
				header("Location: login.php");
			} else {
				$propinsi = $_GET['propinsi'];
				$kota = pg_query("SELECT DISTINCT kab_kota FROM tdesa WHERE propinsi = '$propinsi' ORDER BY kab_kota");
				echo "<option>--Pilih Kota--</option>";
				while($k = pg_fetch_array($kota)){
					echo "<option value=\"".$k['kab_kota']."\">".$k['kab_kota']."</option>\n";
				}
			}
		}
	} else {
		header("Location: login.php");
	}
pg_close($connect);
?>
