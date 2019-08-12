
<?php
 
 
$idx = $_GET['id'];
 
$getevent="select * from event where id='$idx'";
$resev=mysql_query($getevent);
while($dtev=mysql_fetch_array($resev)){
						$idna=$dtev['id'];
						$nm=$dtev['nama'];
						$lokasi=$dtev['lokasi'];
						$tanggal=$dtev['tanggal'];
 $deleven="delete from event where id='$idna'";	
 $resdel = mysql_query($deleven);
 echo "<label>Event $nm Sudah Dihapus. <a href=index.php?q=event>Kembali ke List Event</a></label>";
  } 
 ?>
 


