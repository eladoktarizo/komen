
<?php
if (isset($_GET['simpanevent'])){
	$namae=$_GET['nama'];
	$tgle=$_GET['tgl'];
	$lokasie=$_GET['lokasi'];
	$sub=$_GET['sub'];
	$style=$_GET['color'];
	$insev = 'insert into event(nama,tanggal,lokasi,sub_judul,style)values("'.$namae.'","'.$tgle.'","'.$lokasie.'","'.$sub.'","'.$style.'")';
	$resinsev = mysql_query($insev);
	echo "<label>Event Sudah Ditambahkan. <a href=index.php?q=event>Lihat List Event</a></label>";
}
?>
<h2 class="sub-header"><span class='glyphicon glyphicon-plus'></span>  Tambah Event</h2>
<!--`id`, `nama`, `tanggal`, `lokasi`, `flag`-->
<form method='GET'action='index.php?q=add_event&'>
<label>Nama Event</label>
<input type='text' name='nama' id='nama'  class="form-control"  >
<input type='hidden' name='q' id='q'  value='add_event' class="form-control"  >
<br>
<label>Sub Judul Event</label>
<input type='text' name='sub' id='sub' value="Stakeholder's Forum" class="form-control"  >
 <br>
<label>Warna Judul Event </label><br>
	<input class="color form-control" value=""  name='color'  >		

 <br>
<label>Tanggal Event</label>
 <input  type="text" placeholder="click to show date"  id="example1" name='tgl'  class="form-control" >
<br>
 <label> Lokasi Event</label>
<textarea id='lokasi' name='lokasi'  class="form-control" rows='10'></textarea>
<br>
<input type='submit' name='simpanevent' id='simpanevent' value='Simpan Event' class='btn-primary form-control'>
</form>

<?php  ?>

		<br>
		<br>
</div>