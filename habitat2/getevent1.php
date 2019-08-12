<?php
 					$cekevent="select * from event where flag='1'";
					$rescekevent = mysql_query($cekevent);
					$dtcek = mysql_fetch_array($rescekevent);
					if(mysql_num_rows($rescekevent)!='0'){
					$idevent = $dtcek['id'];
					$nmevent = $dtcek['nama'];
					$tglev = $dtcek['tanggal'];
					$lokasi = $dtcek['lokasi'];
					$tglevna = date("d M Y", strtotime($tglev));
					}else{
					$idevent = "0";
					$tglevna = "";
					$nmevent = "";
					$lokasi = "";
					}
		?>