<?php
include "koneksi.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check1 = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = mysql_fetch_array( $check1 )){	
			if ($pass1 != $info['passwd']){ 
				header("Location: login.php");
			} else {
 $aksi=$_GET['aksi']; // variabel untuk menangkap perintah aksi yang akan kita lakukan, karena kita akan buat file CRUD dalam satu file
?>
<html>
<head>
 
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<style>
body{
	background:url(images/batik_blue.jpg);
	font-family:FontAwesome;
}
a{
	text-decoration:none;
	color:#876DDA;
}
#content{
	background:#fff;
	width: 90%;
	position:relative;
	min-height:800px;;
 	padding-bottom: 20px;
	box-shadow: 1px 20px 30px 2px #636363;
	margin: 0 auto;
}
#content H1{
	font: 35px/45px 'FontAwesome',Tahoma,sans-serif;
	margin-bottom: 15px;
}
#content table td{
	font: 14px/30px 'FontAwesome',Tahoma,sans-serif;
	margin-bottom: 15px;
}
#topbar{
padding: 10px;
background: #404040;
height: 20px;
border-bottom: 4px solid #7E7E7E;
}
#head{
	font: 14px/30px 'FontAwesome',Tahoma,sans-serif;
	margin-bottom: 15px;
	color:#fff;
}
td{
	padding:5px;
}
#kiri{
float: left;
left: 10px;
position: relative;
width: auto;
}
#kanan{
float: right;
right: 10px;
position: relative;
width: auto;
}
</style>
</head>
<body>
<div id='content'>
<?php
if(empty($aksi)){ //ketika aksi = 0 (tidak melakukan aksi apapun)
$no=1; // variabel untuk penomoran pada tabel
$bgcolor1="#404040";?>
<div id='topbar'>
	<div id='kiri'> <a href="index.php"><i class='icon-user'></i> Data Admin </a></div>
	<div id='kanan'> <a href="logout.php"><i class='icon-signout'></i> Logout </a></div>
</div> 
<table align="center" border="0" cellpadding='1' cellspacing='1' width='95%'>
	<tr>	
		<td colspan="6" align="center"><h1>DATA ADMIN</h1></td>
	</tr>
	<tr align="center">	
		<td bgcolor='<?php echo $bgcolor1;?>' id='head'>No</td>
		<td bgcolor='<?php echo $bgcolor1;?>' id='head'>Username</td>
		<td bgcolor='<?php echo $bgcolor1;?>' id='head'>Password</td>
		<td bgcolor='<?php echo $bgcolor1;?>' id='head'>Nama</td>
		<td bgcolor='<?php echo $bgcolor1;?>' id='head'>Level</td>
		<td bgcolor='<?php echo $bgcolor1;?>' id='head'><a href="?aksi=tambah"><i class="icon-plus-sign"></i> Tambah</a></td> <!-- link untuk aksi tambah-->
	</tr>
	<?php 
	$tampil=mysql_query("select * from t_member "); // query untuk menampilkan isi data=
	$bgcolor='#fff';
	while($data=mysql_fetch_object($tampil)){ // perulangan untuk menampilkan
	if($bgcolor=='#EAECFF'){$bgcolor='#fff';}else{$bgcolor='#EAECFF';}
	?>
	<tr>
		<td bgcolor='<?php echo $bgcolor;?>'><?php echo $no++;?></td>
		<td bgcolor='<?php echo $bgcolor;?>'><?php echo $data->username;?></td>
		<td bgcolor='<?php echo $bgcolor;?>'><?php echo "***************";?></td>
		<td bgcolor='<?php echo $bgcolor;?>'><?php echo $data->nama;?></td>
		<td bgcolor='<?php echo $bgcolor;?>'>
			<?php 
				$level =  $data->level;
				if($level=='1'){
					$lv = "Admin Grup";
				}else{
					$lv = "Admin Utama";
				}
				echo $lv;
			?>
		</td>
		<td bgcolor='<?php echo $bgcolor;?>' align='center'><a href="?aksi=ubah&id=<?php echo $data->id;?>"><i class="icon-pencil"></i> Ubah</a>&nbsp;&nbsp;  <!-- link untuk aksi ubah-->
			<a href="?aksi=hapus&id=<?php echo $data->id;?>"><i class="icon-eraser"></i> Hapus</a>  <!-- link untuk aksi hapus-->
		</td>
	</tr>
	<?php
	}
	?>
</table>
<?php
}elseif($aksi=="tambah"){ // form tambah ketika aksi = tambah
?>
<div id='topbar'>
	<div id='kiri'> <a href="index.php"><i class='icon-reply'></i> Kembali </a></div>
	<div id='kanan'> <a href="logout.php"><i class='icon-signout'></i> Logout </a></div>
</div>
<form action="proses.php?pilih=tambah" method="post" name="tambah">
<table align="center">
	<tr>
		<td colspan="2" align="center"><h1>TAMBAH DATA ADMIN</h1></td>
	</tr>
	<tr>
		<td>Username</td><td><input type="text" name="uname"  ></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="password" name="pwd"></td>
	</tr>
	<tr>
		<td>Nama</td><td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Level</td><td><select name='cb' ><option value='0'>Admin Utama</option><option value='1'>Admin Grup</option></select></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="tambah" value="Simpan">
		    <input type="reset" name="batal" value="Batal" onClick="back()">
		</td>
	</tr>
</table>
</form>
<?php
}elseif($aksi=="ubah"){ // form ubah ketika aksi=ubah
$id=$_GET['id'];
$tampil=mysql_query("select * from t_member where id='$id'"); 
$data=mysql_fetch_object($tampil);
?>
<div id='topbar'>
	<div id='kiri'> <a href="index.php"><i class='icon-reply'></i> Kembali </a></div>
	<div id='kanan'> <a href="logout.php"><i class='icon-signout'></i> Logout </a></div>
</div>

<form action="proses.php?pilih=ubah" method="post" name="ubah">
<table align="center">
	<tr>
		<td colspan="2" align="center"><h1>UBAH DATA ADMIN</h1></td>
	</tr>
	<tr>
		<td>Username</td><td><input type="text" name="uname" value="<?php echo $data->username;?>" ><input type="hidden" name="id" value="<?php echo $data->id;?>" ></td>
	</tr>
	<tr>
		<td>Nama</td><td><input type="text" name="nama" value="<?php echo $data->nama;?>"></td>
	</tr>
	<tr>
		<td>Level Akses</td><td>
		<select name = "cb" id="cb">
		<?php
				$level =  $data->level;
				if($level=='1'){
					$lv = "<option value='1'>Admin Grup</option><option value='0'>Admin Utama</option>";
				}else{
					$lv = "<option value='0'>Admin Utama</option><option value='1'>Admin Grup</option>";
				}
				echo $lv;			
		?>
		</select>
 	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="tambah" value="Ubah">
		    <input type="reset" name="batal" value="Batal" onClick="back()">
		</td>
	</tr>
</table>
</form>
<?php
}elseif($aksi=="hapus"){ // form hapus ketika aksi=ubah
$id=$_GET[id];
$tampil=mysql_query("select * from t_member where id='$id'"); 
$data=mysql_fetch_object($tampil);
?>
<div id='topbar'>
	<div id='kiri'> <a href="index.php"><i class='icon-reply'></i> Kembali </a></div>
	<div id='kanan'> <a href="logout.php"><i class='icon-signout'></i> Logout </a></div>
</div>
<form action="proses.php?pilih=hapus" method="post" name="hapus">
<table align="center">
	<tr>
		<td colspan="2" align="center"><h1>HAPUS DATA ADMIN</h1></td>
	</tr>
	<tr>
		<td>Username</td><td><input type="text" name="uname" value="<?php echo $data->username;?>" ><input type="hidden" name="id" value="<?php echo $data->id;?>" ></td>
	</tr>
	<tr>
		<td>Nama</td><td><input type="text" name="nama" value="<?php echo $data->nama;?>"></td>
	</tr>
	<tr>
		<td>Level Akses</td><td>
		<select name = "cb" id="cb">
		<?php
				$level =  $data->level;
				if($level=='1'){
					$lv = "<option value='1'>Admin Grup</option><option value='0'>Admin Utama</option>";
				}else{
					$lv = "<option value='0'>Admin Utama</option><option value='1'>Admin Grup</option>";
				}
				echo $lv;			
		?>
		</select>
 	</tr>

	<tr>
		<td colspan="2" align="center"><input type="submit" name="tambah" value="Hapus">
		    <input type="reset" name="batal" value="Batal" onClick="back()">
		</td>
	</tr>
</table>

</form>
<?php
}
?>
</div>
</body>
</html>
<?php
			}
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);
?>
