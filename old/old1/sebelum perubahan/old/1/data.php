<?php
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
				$ayena = date("Y-m-d");
				$get = "select * from pertanyaan  where tanggal='$ayena' and level='1' order by id asc";
				$result = mysql_query($get);
				while ($row = mysql_fetch_array($result)) {
					$adm=$row['adm'];
					$nmadm=$row['uname'];
					$id = $row['id'];
					$nama = $row['nama'];
					$direktorat = $row['direktorat'];
					$pembawa = $row['pembawa'];
					$komentar = $row['komentar'];
					$status = $row['status'];
					$getnilai = "select * from nilai where pertanyaan_id = '$id' and member_id = '$member_id'";
 					$hasilnya = mysql_query($getnilai);
					$check = mysql_num_rows($hasilnya);
					if ($check == 0) {
						echo "<div class='post-grid'>
							<h4><a href='#'>Nama: $nama</a></h4>
							<label>Penyaji: $pembawa</label>
							<p>$komentar</p><br>
							<div class=\"exemple\">
							<em><strong>Rating</strong>:</em>
							<div class=\"exemple6\" data-average=\"0\" data-id=\"$id\"></div>
							</div></div>";
					} else {
						//Display nothing
					}
				}
			}
		 
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);
?>
