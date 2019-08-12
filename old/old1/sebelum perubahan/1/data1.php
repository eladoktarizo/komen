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
				
				$getnilai = "SELECT sum( nilai ) AS nilainya, count( * ) AS jml_data, sum( nilai) / count( * ) AS rata, pertanyaan_id FROM nilai  GROUP BY pertanyaan_id order by rata desc";
				$hasilnya = mysql_query($getnilai);
				while ($rownilai = mysql_fetch_array($hasilnya)) {
					$jml_data = $rownilai['jml_data'];
					$rata = number_format($rownilai['rata'], 1, '.', '');//$rownilai['rata'];
					$pertanyaan_id = $rownilai['pertanyaan_id'];
					$ayena = date("Y-m-d");
					$get = "select * from pertanyaan where id = '$pertanyaan_id' and tanggal='$ayena' ";
					$result = mysql_query($get);
					while ($row = mysql_fetch_array($result)) {
						$id = $row['id'];
						$nama = $row['nama'];
						$direktorat = $row['direktorat'];
						$pembawa = $row['pembawa'];
						$komentar = $row['komentar'];
						$status = $row['status'];
						echo "<div class='post-grid'>
							<h4><a href='#'>Nama: $nama</a></h4>
							<label>Penyaji: $pembawa</label>
							<p>$komentar</p><br>
							<div class=\"exemple\">
							<em><strong>Rating</strong>:</em>
							<div class=\"exemple6\" data-average=\"$rata\" data-id=\"$id\"></div>
							<em><strong>Score $rata dari ($jml_data) vote</strong></em>
							</div></div>";
					}
				}
			}
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);
?>
