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
				$kota = $_GET['kota'];
				$kecamatan = $_GET['kecamatan'];
				$desa = pg_query("SELECT desa FROM tdesa WHERE kecamatan = '$kecamatan' and kab_kota = '$kota' and propinsi = '$propinsi' ORDER BY desa");
				echo "<option>--Pilih Desa--</option>";
				while($k = pg_fetch_array($desa)){
					echo "<option value=\"".$k['desa']."\">".$k['desa']."</option>\n";
				}
			}
		}
	} else {
		header("Location: login.php");
	}
pg_close($connect);
?>
