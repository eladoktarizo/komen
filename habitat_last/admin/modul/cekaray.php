<?php
// 
include '../koneksi.php';
 					$getevent="select id from pertanyaan  where status='2' order by id asc  ";
					
					$resev=mysql_query($getevent);
					$dtev=mysql_fetch_array($resev);
					//while($dtev=mysql_fetch_array($resev)){
				 
 					//}
  print_r( $dtev );	
  ?>