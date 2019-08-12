
<?
if (isset($_GET['simpanevent'])){
	$ide=$_GET['id'];
	$namae=$_GET['nama'];
	$tgle=$_GET['tgl'];
	$lokasie=$_GET['lokasi'];
	$txt=$_GET['color'];
	
	$sub=str_replace("'","|",$_GET['sub']);
	$insev = "update event set nama='$namae',tanggal='$tgle',lokasi ='$lokasie',sub_judul='$sub',style='$txt' where id='$ide'";
	$resinsev = mysql_query($insev);
 //echo $insev;
	echo "<label>Event Sudah Ditambahkan. <a href=index.php?q=event>Lihat List Event</a></label>";
}else{

 
$idx = $_GET['id'];
 
$getevent="select * from event where id='$idx'";
$resev=mysql_query($getevent);
while($dtev=mysql_fetch_array($resev)){
						$idna=$dtev['id'];
						$nm=$dtev['nama'];
						$lokasi=$dtev['lokasi'];
						$tanggal=$dtev['tanggal'];
//						$sub=$dtev['sub_judul'];
						$sub=str_replace("|","'",$dtev['sub_judul']);
						$txt=$dtev['style'];

?>
<h2 class="sub-header">Edit Event</h2>
<!--`id`, `nama`, `tanggal`, `lokasi`, `flag`-->
<form method='GET'action='index.php?q=add_event&'>
<label>Nama Event</label>
<input type='text' name='nama' id='nama' value='<?php echo $nm;?>' class="form-control"  >
<input type='hidden' name='q' id='q'  value='editevent' class="form-control"  >
<input type='hidden' name='id' id='id'  value='<?php echo $idna;?>' class="form-control"  >
<br>
<label>Sub Judul Event</label>
<input type='text' name='sub' id='sub' value="<?php echo $sub;?>" class="form-control"  >
 <br>
<label>Warna Judul Event </label><br>
	<input class="color form-control" value="<?php echo $txt;?>"  name='color'  >		

 <br>
<label>Tanggal Event</label>
 <input  type="text" placeholder="click to show datepicker"  id="example1" name='tgl'  class="form-control" value='<?php echo $tanggal;?>' >
<br>
 <label> Lokasi Event</label>
<textarea id='lokasi' name='lokasi'  class="form-control" rows='10'><?php echo $lokasi;?></textarea>
<br>
<input type='submit' name='simpanevent' id='simpanevent' value='Simpan Event' class='btn-primary form-control'>
</form>

<?php } ?>
<?php } ?>


		<br>
		<br>
		</div>