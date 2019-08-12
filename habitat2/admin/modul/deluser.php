
<?
 
 
$idx = $_GET['k'];
 
$getevent="select * from t_member where id='$idx'";
$resev=mysql_query($getevent);
while($dtev=mysql_fetch_array($resev)){
						$idna=$dtev['id'];
						$nm=$dtev['nama'];
						$lokasi=$dtev['lokasi'];
						$tanggal=$dtev['tanggal'];
 $deleven="delete from t_member where id='$idna'";	
 $resdel = mysql_query($deleven);
 echo "<label>User $nm Sudah Dihapus. <a href=index.php?q=ussr>Kembali ke List User</a></label>";
  } 
 ?>
 


