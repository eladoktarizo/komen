<?php
					if(isset($_GET['idnya'])) {
						$idnya = $_GET['idnya'];
					
						include "koneksi.php";
						include "../admin/modul/getevent1.php";
						
						$ayena = date("Y-m-d");
						//$get = "select * from pertanyaan where  status='$idevent' and  flag='1'  and id>'$idnya' limit 10";
						$get = "select * from pertanyaan where  status='$idevent' and id>'$idnya' and komentar != '' and komentar not like '%http%' limit 10";
						$result = mysql_query($get);
						while ($row = mysql_fetch_array($result)) {
							$id = $row['id'];

							$nama = $row['nama'];
							$direktorat = $row['direktorat'];
							$pembawa = $row['pembawa'];
							$komentar = $row['komentar'];
							$status = $row['status'];
							echo "<li><i class='icon-comment-alt'></i>&nbsp;&nbsp;<span>$nama  - $direktorat </span><p style='margin-left:20px;letter-spacing:1px;line-height: 35px;'>$komentar</p></li>";
	//						$update = "update pertanyaan set id_user='2' where id='$id'";
		///					$res = mysql_query($update);
						}
						echo '@@'.$id;
				}					
?>