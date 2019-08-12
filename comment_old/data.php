<?php
					include "koneksi.php";
					$ayena = date("Y-m-d");
					$get = "select * from pertanyaan where status='1' and tanggal='$ayena' and vote='0'  limit 10";
					$result = mysql_query($get);
					while ($row = mysql_fetch_array($result)) {
						$id = $row['id'];
						$update = "update pertanyaan set vote='1' where id='$id'";
						$res = mysql_query($update);
						$nama = $row['nama'];
						$direktorat = $row['direktorat'];
						$pembawa = $row['pembawa'];
						$komentar = $row['komentar'];
						$status = $row['status'];
 
						echo "<li id='tes$id'><i class='icon-comment-alt'></i> <font color='#5182CC' size='4'><b>$nama </b></font><br><p style='margin-left:20px;'><font color='#5182CC' size='3'>Presenter: $pembawa </font></p><p style='margin-left:20px;'><font size='4'>$komentar</font></p></li>";
						//echo "<li><i class='icon-comment-alt'></i> <font color='#5182CC' size='4'><b>$nama </b></font><br><p style='margin-left:20px;'><font color='#5182CC' size='3'>Presenter: $pembawa </font></p><p style='margin-left:20px;'><font size='4'>$komentar</font></p></li>";

					} 
?>