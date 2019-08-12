<?php
		include "koneksi.php";
				$id = $_GET["id"];
				$nama=$_GET["nama"];
				$direk=$_GET["direktorat"];
				$pembw=$_GET["pembw"];
				$komen=$_GET["komen"];
				$st=$_GET["st"];
				$vote=$_GET["vt"];
				$idu=$_GET["idus"];
				$level=$_GET["level"];
				$tgl = date('Y-m-d');
				//$kmn=urldecode($komen);
				$getnilai = "insert into pertanyaan (nama,direktorat,pembawa,komentar,status,vote,tanggal,id_user,level) values ('$nama','$direk','$pembw','$komen','$st','$vote','$tgl','$idu','$level')";
				//print "sql =".$getnilai;
				$hasilnya = mysql_query($getnilai);
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
							echo 'id:"'.$id.'",';
							echo 'tt:"1"';
						echo '},';
					 
					echo ']);';
		}else{
		echo 'callback([';
						echo '{';
							echo 'id:"'.$id.'",';
							echo 'tt:"0"';
						echo '},';
					 
					echo ']);';
		}
?>