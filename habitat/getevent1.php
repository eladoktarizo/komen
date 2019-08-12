<?php
 					$cekevent="select * from event where flag='1'";
					$rescekevent = mysql_query($cekevent);
					$dtcek = mysql_fetch_array($rescekevent);
					if(mysql_num_rows($rescekevent)!='0'){
						$idevent = $dtcek['id'];
						$nmevent = $dtcek['nama'];
						$tglev = $dtcek['tanggal'];
						$lokasi = $dtcek['lokasi'];
						$sub=str_replace("|","'",$dtcek['sub_judul']);
						$tglevna = date("d M Y", strtotime($tglev));
					}else{
						$idevent = "0";
						$tglevna = "";
						$nmevent = "";
						$lokasi = "";
					}
 					$ceklogo1="select * from logopu where flag='1'";
					$resceklogo1 = mysql_query($ceklogo1);
					$dtceklogo = mysql_fetch_array($resceklogo1);				
					if(mysql_num_rows($resceklogo1)!='0'){
						$logo = $dtceklogo['url'];
						$logona = "<img src='$logo' style='width: 65%;float: left;left: 0px;position: relative; '>";
					}else{
						$logo = "";
						$logona = "";
						
					}					
		
		?>