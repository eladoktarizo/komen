<?
set_time_limit(0);
error_reporting(0);
include "koneks.php";
if(isset($_COOKIE["ID_my_site"])){
	$username1 = $_COOKIE["ID_my_site"];
	$pass1 = $_COOKIE["Key_my_site"];
	$check1 = pg_query("SELECT username, passwd, tambah_data, id FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
	while($info = pg_fetch_array( $check1 )){	
		if ($pass1 != $info['passwd']){ 
			header("Location: login.php");
		} else {
			$tmbdt = $info['tambah_data'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>STAF UMUM PERSONEL ANGKATAN DARAT SPABAN II/BINDIK</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/table.css" type="text/css" media="screen">
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/cufon-yui.js"></script>
	<script src="js/cufon-replace.js"></script>
	<script src="js/Glegoo_400.font.js"></script>
	<script src="js/FF-cash.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script language="javascript" type="text/javascript" src="datetimepicker_css.js"></script>
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page1">
	<header>
		<div class="main">
			<div class="wrapper">
				<h1><a href="#">STAF UMUM PERSONEL ANGKATAN DARAT SPABAN II/BINDIK</a></h1>
				<nav class="fright">
					<ul class="menu">
						<li><a class="active" href="index.php">Data</a></li>
						<li><a href="logout.php">Keluar</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="row-bot">
			<div class="main">
				<div class="clear"></div>
			</div>
		</div>
	</header>
	<section id="content">
		<div class="main">
			<div class="container_12">
				<div class="wrapper p3">
					<!--img src="images/BANNER.jpg" alt="" width='960px'-->
				</div>
				<div class="wrapper">
<?
				if (isset($_POST['submit_save'])) {
					$jam = date("Y-m-d");
					if(isset($_POST["nama"])){
						$nama = $_POST["nama"];
					}
					if(isset($_POST["id_pangkat"])){
						$id_pangkat = $_POST["id_pangkat"];
					}
					if(isset($_POST["nrp"])){
						$nrp = $_POST["nrp"];
					}
					if(isset($_POST["jabatan"])){
						$jabatan = $_POST["jabatan"];
					}
					if(isset($_POST["kotama"])){
						$kotama = $_POST["kotama"];
					}
					if(isset($_POST["panda"])){
						$panda = $_POST["panda"];
					}
					if(isset($_POST["id_korp"])){
						$id_korp = $_POST["id_korp"];
					}
					if(isset($_POST["tgl_lahir"])){
						$tgl_lahir = $_POST["tgl_lahir"];
					}
					if(isset($_POST["id_sumber"])){
						$id_sumber = $_POST["id_sumber"];
					}
					if(isset($_POST["tahun"])){
						$tahun = $_POST["tahun"];
					}
					if(isset($_POST["dikum"])){
						$dikum = $_POST["dikum"];
					}
					if(isset($_POST["gelar_s1"])){
						$gelar_s1 = $_POST["gelar_s1"];
					}
					if(isset($_POST["gelar_s2"])){
						$gelar_s2 = $_POST["gelar_s2"];
					}
					if(isset($_POST["gelar_s3"])){
						$gelar_s3 = $_POST["gelar_s3"];
					}
					if(isset($_POST["c_log"])){
						$c_log = $_POST["c_log"];
					}
					if (!empty($_FILES['ufile']['name'])) {
						//get filename
						$file_name = $_FILES['ufile']['name'];
						//get date 
						$unic = time();
						//give new file name
						$new_file_name = $unic."-".$file_name;
						//folder uploads
						$path = "uploads/".$new_file_name;
						//file yang diupload
						$_FILES['ufile']['type'];
						$file_type = $_FILES['ufile']['type'];
						$allowed = array("image/jpeg", "image/gif", "image/png");
						if(!in_array($file_type, $allowed)) { //jika salah
							$error_message = "Tipe file yang diizinkan untuk diupload adalah JPEG, GIF dan PNG";		
							echo $error_message;
						} else { //jika benar
							if(copy($_FILES['ufile']['tmp_name'],$path)){
								$insert = "INSERT INTO t_data (nama,id_pangkat,nrp,jabatan,kotama,panda,id_korp,tgl_lahir,id_sumber,tahun,dikum,gelar_s1,gelar_s2,gelar_s3,dikmil_1,dikmil_2,dikmil_3,c_log,foto) VALUES ('$nama','$id_pangkat','$nrp','$jabatan','$kotama','$panda','$id_korp','$tgl_lahir','$id_sumber','$tahun','$dikum','$gelar_s1','$gelar_s2','$gelar_s3','$dikmil_1','$dikmil_2','$dikmil_3','$c_log','$new_file_name')";
								$add_data = pg_query($insert);
								//echo $insert;
								echo "Data baru telah berhasil ditambahkan";
								echo "<br>Terima kasih, Kembali ke halaman <a href=index.php>Data</a>.";
							} else {
								echo "Gagal Upload <a href='index.php'>Kembali</a>";
							}
						}
					} else {
						$insert = "INSERT INTO t_data (nama,id_pangkat,nrp,jabatan,kotama,panda,id_korp,tgl_lahir,id_sumber,tahun,dikum,gelar_s1,gelar_s2,gelar_s3,c_log,foto) VALUES ('$nama','$id_pangkat','$nrp','$jabatan','$kotama','$panda','$id_korp','$tgl_lahir','$id_sumber','$tahun','$dikum','$gelar_s1','$gelar_s2','$gelar_s3','$c_log','')";
						$add_data = pg_query($insert);
						//echo $insert;
						echo "Data baru telah berhasil ditambahkan";
						echo "<br>Terima kasih, Kembali ke halaman <a href=index.php>Data</a>.";
					}				
				} else {
?>
					<article class="grid_8">
					<h2>Form Pengisian Data</h2>
					<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
						<fieldset>
							<label>
								Nama:<br>
								<input id="nama" name="nama" required="required"/>
							</label>
							<label>
								Pangkat:<br>
								<select name='id_pangkat' id="id_pangkat">
<?
								$getupt = "select id, nama from t_pangkat order by id asc";
								$hslupt = pg_query($getupt);
								while ($rowupt = pg_fetch_array($hslupt)) {
									$idupt = $rowupt['id'];
									$uptnya = $rowupt['nama'];
									echo "<option value='$idupt'>$uptnya</option>";
								}
?>								
								</select>
							</label>
							<label>
								NRP:<br>
								<input id="nrp" name="nrp" required="required"/>
							</label>
							<label>
								Jabatan:<br>
								<input id="jabatan" name="jabatan" required="required"/>
							</label>
							<label>
								Kotama:<br>
								<input id="kotama" name="kotama" required="required"/>
							</label>
							<label>
								Panda:<br>
								<input id="panda" name="panda" required="required"/>
							</label>
							<label>
								Korp:<br>
								<select name='id_korp' id="id_korp">
<?
								$getkorp = "select id, nama from t_korp order by id asc";
								$hslkorp = pg_query($getkorp);
								while ($rowkorp = pg_fetch_array($hslkorp)) {
									$idkorp = $rowkorp['id'];
									$uptkorp = $rowkorp['nama'];
									echo "<option value='$idkorp'>$uptkorp</option>";
								}
?>								
								</select>
							</label>
							<label>
								Tanggal Lahir::<br>								
								<input type="text" class="input" id="tgl_lahir" name="tgl_lahir" required="required">
								<a href="javascript:NewCssCal('tgl_lahir','yyyymmdd','arrow',false,24,false)">
								<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">
								</a>
							</label>
							<label>
								Sumber:<br>
								<select name='id_sumber' id="id_sumber">
<?
								$getsumber = "select id, nama from t_sumber order by id asc";
								$hslsumber = pg_query($getsumber);
								while ($rowsumber = pg_fetch_array($hslsumber)) {
									$idsumber = $rowsumber['id'];
									$uptsumber = $rowsumber['nama'];
									echo "<option value='$idsumber'>$uptsumber</option>";
								}
?>								
								</select>
							</label>
							<label>
								Tahun:<br>
								<input id="tahun" name="tahun" required="required"/>
							</label>
							<label>
								Dikum:<br>
								<input id="dikum" name="dikum" required="required"/>
							</label>
							<label>
								Gelar S1:<br>
								<input id="gelar_s1" name="gelar_s1"/>
							</label>
							<label>
								Gelar S2:<br>
								<input id="gelar_s2" name="gelar_s2"/>
							</label>
							<label>
								Gelar S3:<br>
								<input id="gelar_s3" name="gelar_s3"/>
							</label>							
							<label>
								FOTO:<br>
								<input type="file" name="ufile">
							</label>
							<input type="submit" value="Simpan" name="submit_save" class="button2"/>
						</fieldset>
					</form></article>
<?
				}
?>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
							<center>Copyright &copy; <a href="#">STAF UMUM PERSONEL ANGKATAN DARAT</a> All Rights Reserved</center>
				</div>
			</div>
		</div>
	</footer>
	<script>Cufon.now();</script>
</body>
</html>
<?
		}
	}
} else {
	header("Location: login.php");
}
pg_close($conn);
?> 
