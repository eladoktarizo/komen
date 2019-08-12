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
				$id=$_POST['idna'];
 
				$update = "update pertanyaan set flag='1' where id='$id'";
				$res = mysql_query($update);
			//	print $update;
		//		$getnilai = "insert into pertanyaan (nama,direktorat,pembawa,komentar,status,vote,tanggal,id_user,level) values ('$nama','$direk','$pembw','$komen','$st','$vote','$idu','$level',)";
		//		$hasilnya = mysql_query($getnilai);
 
			}
		 
		}
	} else {
		header("Location: ../login.php");
	}
mysql_close($conn);
?>