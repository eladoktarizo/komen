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
				$ayena = date("Y-m-d");
				if ($info['username'] == 'juri1') {//fasilitator
					$get = "select * from pertanyaan where tanggal = '$ayena' and level = '1' and status = '0' order by id asc";
				} else if ($info['username'] == 'juri2') {//participant genap
					$get = "select * from pertanyaan where tanggal = '$ayena' and level = '0' and (id%2=0) and status = '0' order by id asc";
				} else if ($info['username'] == 'juri3') {//participant ganjil
					$get = "select * from pertanyaan where tanggal = '$ayena' and level = '0' and (id%2=1) and status = '0' order by id asc";
				} else {
					$get = "select * from pertanyaan where tanggal = '$ayena' and level = '5' order by id asc";
				}
				//echo $get;
				//$get = "select * from pertanyaan  where tanggal='$ayena' order by id asc";
				$result = mysql_query($get);
				while ($row = mysql_fetch_array($result)) {
					//$adm=$row['adm'];
					//$nmadm=$row['uname'];
					$id = $row['id'];
					$nama = $row['nama'];
					//$direktorat = $row['direktorat'];
					$pembawa = $row['pembawa'];
					$komentar = $row['komentar'];
					//$status = $row['status'];
					//$getnilai = "select * from nilai where pertanyaan_id = '$id' and member_id = '$member_id'";
 					//$hasilnya = mysql_query($getnilai);
					//$check = mysql_num_rows($hasilnya);
					//if ($check == 0) {
					//$nilai = $check['nilai'];
					echo "<div id= '$id' class='post-grid'>
							<h4><a href='#'>Name: $nama</a></h4>
							<label>Presenter: $pembawa</label>
							<p>$komentar</p><br>
							<div class=\"exemple\">
							<button name='masukan' id='masukan' onclick='gow($id)'>Accept</button>
							<button name='abaikan' id='abaikan' onclick='abaikan($id)'>Ignore</button>
							</div></div>";
						/*echo "<div id= '$id' class='post-grid'>
							<h4><a href='#'>Name: $nama</a></h4>
							<label>Presenter: $pembawa</label>
							<p>$komentar</p><br>
							<div class=\"exemple\">
							<!--em><strong>Rating</strong>:</em-->
							<input type='hidden' name='idh' id='idh' value='$id'>
							<input type='hidden' name='mid' id='mid' value='$member_id'>
							<input type='hidden' name='nilai' id='nilai' value='$nilai'>
							<button name='masukan' id='masukan' onclick='gow($id)'>Accept</button>
							<button name='abaikan' id='abaikan' onclick='abaikan($id)'>Ignore</button>
							<!--div class=\"exemple6\" data-average=\"0\" data-id=\"$id\"></div-->
							</div></div>";*/
					//} else {
						//Display nothing
					//}
				}
			}
		 
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);
?>
