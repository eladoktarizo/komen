<?php
include "koneksi.php";
?>
<html>
<head>	
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/tvcredits.jquery.js"></script>
	<meta charset=utf-8 />
    <link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<title></title>
</head>
<body>

	<div id="highlights">
		<ul class='slide' id='slide'>
		<?php
	 
				$tgl = date('Y-m-d');
				$getnilai = "SELECT sum( nilai ) AS nilainya, count( * ) AS jml_data, sum( nilai) / count( * ) AS rata, pertanyaan_id FROM nilai  where tanggal='$tgl'  GROUP BY pertanyaan_id order by rata desc";
				//print $getnilai;
				$hasilnya = mysql_query($getnilai);
			//	$tot = mysq_num_rows($hasilnya);
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
						echo "<li><i class=icon-star></i> [$nama] $komentar</li> | ";
						echo "";
					}
				}		
 
		?>
 
		</ul>  
	</div> 
</body>
<script>
 
	$("#highlights").tvCredits({
		direction: 'left',
		speed: 60000,

	});
 
 
</script>
</html>	