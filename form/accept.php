		<?php
		set_time_limit(0);
		include "koneksi.php";
				$id=$_POST['id'];
				$val=$_POST['val'];
				$tgl = date('Y-m-d');
				$getnilai = "update pertanyaan set status='$val' where id='$id' ";
				$hasilnya = mysql_query($getnilai);
 		?>
