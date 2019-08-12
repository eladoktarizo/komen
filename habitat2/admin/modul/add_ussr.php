
<?
if (isset($_GET['simpanevent'])){
	$uname=$_GET['uname'];
	$pwd=$_GET['pwd'];
	$nama=$_GET['nama'];
	$cb=$_GET['cb'];
	$insev = "insert into t_member(username,passwd,level,nama)values('$uname','$pwd','$cb','$nama')";
	$resinsev = mysql_query($insev);
 
	echo "<label>User Sudah Ditambahkan. <a href=index.php?q=ussr>Lihat List User</a></label>";
}else{
?>
<h2 class="sub-header">Tambah User</h2>
<!--`id`, `username`, `passwd`, `level`, `nama`-->
<form method='GET' action='index.php?q=add_ussr&'>
<label>Username</label>
<input type='text' name='uname' id='uname'  class="form-control"  >
<input type='hidden' name='q' id='q'  value='add_ussr' class="form-control"  >
<br>
<label>Password</label>
<input type='password' name='pwd' id='pwd'  class="form-control"  >

<br>
<label>Nama</label>
<input type='text' name='nama' id='nama'  class="form-control"  >
<br>
<label>Level Akses</label>
<select name='cb'  class="form-control"  ><option value='0'>Jury</option><option value='1'>Facilitator</option></select>
<br>
 <input type='submit' name='simpanevent' id='simpanevent' value='Simpan Event' class='btn-primary form-control'>
</form>

<?php } ?>
		<br>
		<br>
 