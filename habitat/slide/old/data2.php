<?php
					include "koneksi.php";
					$ayena = date("Y-m-d");
					$get = "select * from pertanyaan where  tanggal='$ayena' and id_user!='2'  limit 10";
					$result = mysql_query($get);
					while ($row = mysql_fetch_array($result)) {
						$id = $row['id'];

						$nama = $row['nama'];
						$direktorat = $row['direktorat'];
						$pembawa = $row['pembawa'];
						$komentar = $row['komentar'];
						$status = $row['status'];
 						echo "<li id='tes$id'><i class='icon-comment-alt'></i>&nbsp;<font color='#5182CC'>$nama  - $direktorat </font><p style='margin-left:20px;'>$komentar</p></li>";
						$update = "update pertanyaan set id_user='2' where id='$id'";
						$res = mysql_query($update);
					} 
?>