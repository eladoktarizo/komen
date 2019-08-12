<?php
 
include '../koneksi.php';
 					$getevent="select id from pertanyaan where status='$idevent' order by id asc   ";
					
					$resev=mysql_query($getevent);
					while($dtev[]=mysql_fetch_array($resev)){
 					}
  print_r( $dtev );	
  ?>