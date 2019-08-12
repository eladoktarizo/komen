<?php
		include "koneksi.php";
				echo "aaaa";
				$nama=$_GET['nama'];
				echo $nama;
				$direk=$_GET['direktorat'];
				echo $direk;
				$pembw=$_GET['pembw'];
				echo $pembw;
				$komen=$_GET['komen'];
				$st=$_GET['st'];
				$vote=$_GET['vt'];
				$idu=$_GET['idus'];
				$level=$_GET['level'];
				echo $komen;
				echo $st;
				echo $vote;
				echo $idu;
				echo $level;
			$tgl = date('Y-m-d');
			echo $tgl;
				$getnilai = "insert into pertanyaan (nama,direktorat,pembawa,komentar,status,vote,tanggal,id_user,level) values ('$nama','$direk','$pembw','$komen','$st','$vote','$tgl','$idu','$level')";
				echo "sql =".$getnilai;
				$hasilnya = mysql_query($getnilai);
			//	if ($hasilnya){
			//		echo "1";
			//	}else{
			//		echo "0";
			//	}
 		//		$file = 'komen.txt';
				// Open the file to get existing content
		//		$current = file_get_contents($file);
				// Append a new person to the file
		//		$current .= $nama;
		//		$current .= $komentar;
		//		$current .= $pembawa;
		//		$current .= $idu;
		//		$current .= $level;
				// Write the contents back to the file
		//		file_put_contents($file, $current);
		if ($hasilnya){
echo 'callback([';
 				echo '{';
 
					echo 'status:"1"';
				echo '},';
			echo ']);';
		}else{
echo 'callback([';
 				echo '{';
 
					echo 'status:"0"';
				echo '},';
			echo ']);';
		}
?>
