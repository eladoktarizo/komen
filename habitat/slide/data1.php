<?php
set_time_limit(0);
include "koneksi.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check1 = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = mysql_fetch_array( $check1 )){
			if ($pass1 != $info['passwd']){ 
				header("Location: login.php");
			} else {
				$member_id = $info['id'];
				if($info['username'] != 'juri4'){
						header("Location: ../post.php");
				}
					$ayena = date("Y-m-d");
					$get = "select * from pertanyaan where status='1' and tanggal='$ayena'  and flag='0'";
					$result = mysql_query($get);
					
					while ($row = mysql_fetch_array($result)) {
						$id = $row['id'];
 						$nama = $row['nama'];
						$direktorat = $row['direktorat'];
						$pembawa = $row['pembawa'];
						$komentar = $row['komentar'];
						$status = $row['status'];
						$vote = $row['vote'];
						$idu = $row['id_user'];
						$lvl = $row['level'];
 						$kmn1 = str_replace("'","",$komentar);
						$kmn2 = str_replace('"','',$kmn1);
						$kmn3 = str_replace("&"," dan ",$kmn2);
						echo "<li id='tes$id'><input type='checkbox' id='pilih1' name='pilih1' value='$id'><i class='icon-comment-alt'></i> <font color='#5182CC'>$nama </font><br><p style='margin-left:20px;'>$komentar</p>
						<input type='hidden' id='nm$id' name='nm$id' value='$nama'>
						<input type='hidden' id='dirk$id' name='dirk$id' value='$direktorat'>
						<input type='hidden' id='pembawa$id' name='pembawa$id' value='$pembawa'>
						<input type='hidden' id='komeng$id' name=komeng$id value='$kmn3'>
						<input type='hidden' id='status$id' name='status$id' value='$status'>
						<input type='hidden' id='vote$id' name='vote$id' value='$vote'>
						<input type='hidden' id='idu$id' name='idu$id' value='$idu'>
						<input type='hidden' id='lvl$id' name='lvl$id' value='$lvl'>
						</li>";

					}
			}
		 
		}
	} else {
		header("Location: ../login.php");
	}
mysql_close($conn);
?>