
<?
if (isset($_GET['simpanevent'])){
	$uname=$_GET['uname'];
	$pwd=$_GET['pwd'];
	$nama=$_GET['nama'];
	$cb=$_GET['cb'];
	$idx=$_GET['id'];
	$insev = "update t_member set username='$uname',passwd='$pwd',level='$cb',nama='$nama' where id='$idx'";
	$resinsev = mysql_query($insev);
 
	echo "<label>User Sudah Ditambahkan. <a href=index.php?q=ussr>Lihat List User</a></label>";
}else{

$idx = $_GET['k'];
 
$getevent="select * from t_member where id='$idx'";
$resev=mysql_query($getevent);
while($dtev=mysql_fetch_array($resev)){
						$idna=$dtev['id'];
						$nm=$dtev['nama'];
						$username=$dtev['username'];
						$passwd=$dtev['passwd'];
						$level=$dtev['level'];
?>
<h2 class="sub-header">Tambah User</h2>
<!--`id`, `username`, `passwd`, `level`, `nama`-->
<form method='GET' action='index.php?q=edituser&'>
<label>Username</label>
<input type='text' name='uname' id='uname'  class="form-control"  value='<?php echo $username;?>' >
<input type='hidden' name='q' id='q'  value='edituser' class="form-control"  >
<input type='hidden' name='id' id='id'  value='<?php echo $idna;?>' class="form-control"  >

<br>
<label>Password</label>
<input type='password' name='pwd' id='pwd'  class="form-control" value='<?php echo $passwd;?>'  >

<br>
<label>Nama</label>
<input type='text' name='nama' id='nama'  class="form-control"  value='<?php echo $nm;?>' >
<br>
<label>Level Akses</label>
<select name='cb'  class="form-control"  value='<?php echo $level;?>' ><option value='0'>Jury</option><option value='1'>Facilitator</option></select>
<br>
 <input type='submit' name='simpanevent' id='simpanevent' value='Simpan Event' class='btn-primary form-control'>
</form>

<?php } ?>
<?php } ?>

 		<br>
		<br>