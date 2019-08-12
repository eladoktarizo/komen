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
<?
					if(isset($_GET["id_dt"])){
						$id_dt = $_GET["id_dt"];
?>
						<li><a class="active" href="detail.php?id=<?echo $id_dt?>">Data Detail</a></li>
<?
					} else if(isset($_POST["id"])){
						$t_dataid = $_POST["id"];
?>
						<li><a class="active" href="detail.php?id=<?echo $t_dataid?>">Data Detail</a></li>
<?
					}
?>
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
					if(isset($_POST["no_seleksi"])){
						$no_seleksi = $_POST["no_seleksi"];
					}
					if(isset($_POST["pendidikan"])){
						$pendidikan = $_POST["pendidikan"];
					}
					if(isset($_POST["garjas"])){
						$garjas = $_POST["garjas"];
					}
					if(isset($_POST["kasjas"])){
						$kasjas = $_POST["kasjas"];
					}
					if(isset($_POST["ket_1"])){
						$ket_1 = $_POST["ket_1"];
					}
					if(isset($_POST["psikologi"])){
						$psikologi = $_POST["psikologi"];
					}
					if(isset($_POST["kesehatan"])){
						$kesehatan = $_POST["kesehatan"];
					}
					if(isset($_POST["ket_2"])){
						$ket_2 = $_POST["ket_2"];
					}
					if(isset($_POST["litpers"])){
						$litpers = $_POST["litpers"];
					}
					if(isset($_POST["ket_3"])){
						$ket_3 = $_POST["ket_3"];
					}
					if(isset($_POST["administrasi"])){
						$administrasi = $_POST["administrasi"];
					}
					if(isset($_POST["ket_4"])){
						$ket_4 = $_POST["ket_4"];
					}
					if(isset($_POST["akademik"])){
						$akademik = $_POST["akademik"];
					}
					if(isset($_POST["pengum"])){
						$pengum = $_POST["pengum"];
					}
					if(isset($_POST["pengmilum"])){
						$pengmilum = $_POST["pengmilum"];
					}
					if(isset($_POST["pengmilcab"])){
						$pengmilcab = $_POST["pengmilcab"];
					}
					if(isset($_POST["aplikasi"])){
						$aplikasi = $_POST["aplikasi"];
					}
					if(isset($_POST["bhs_inggris"])){
						$bhs_inggris = $_POST["bhs_inggris"];
					}
					if(isset($_POST["toefl"])){
						$toefl = $_POST["toefl"];
					}
					if(isset($_POST["tpa"])){
						$tpa = $_POST["tpa"];
					}
					if(isset($_POST["ketdik"])){
						$ketdik = $_POST["ketdik"];
					}
					if(isset($_POST["no_surat"])){
						$no_surat = $_POST["no_surat"];
					}
					if(isset($_POST["tgl_surat"])){
						$tgl_surat = $_POST["tgl_surat"];
					}
					if(isset($_POST["id_jenisdik"])){
						$id_jenisdik = $_POST["id_jenisdik"];
					}
					if(isset($_POST["thn_dik"])){
						$thn_dik = $_POST["thn_dik"];
					}
					if(isset($_POST["nama_dik"])){
						$nama_dik = $_POST["nama_dik"];
					}
					if(isset($_POST["tgl_buka_dik"])){
						$tgl_buka_dik = $_POST["tgl_buka_dik"];
					}
					if(isset($_POST["c_log"])){
						$c_log = $_POST["c_log"];
					}
					if(isset($_POST["id"])){
						$t_dataid = $_POST["id"];
					}
					
					$insert = "INSERT INTO t_arsip (no_seleksi,pendidikan,garjas,kasjas,ket_1,psikologi,kesehatan,ket_2,litpers,ket_3,administrasi,ket_4,akademik,pengum,pengmilum,pengmilcab,aplikasi,bhs_inggris,toefl,tpa,ketdik,no_surat,tgl_surat,id_jenisdik,thn_dik,nama_dik,tgl_buka_dik,c_log,t_dataid) VALUES ('$no_seleksi','$pendidikan','$garjas','$kasjas','$ket_1','$psikologi','$kesehatan','$ket_2','$litpers','$ket_3','$administrasi','$ket_4','$akademik','$pengum','$pengmilum','$pengmilcab','$aplikasi','$bhs_inggris','$toefl','$tpa','$ketdik','$no_surat','$tgl_surat','$id_jenisdik','$thn_dik','$nama_dik','$tgl_buka_dik','$c_log','$t_dataid')";
					$add_data = pg_query($insert);
					echo "Data Detail baru telah berhasil ditambahkan";
					echo "<br>Terima kasih, Kembali ke halaman <a href=detail.php?id=$t_dataid>Data Detail</a>.";				
				} else {
					if(isset($_GET["id_dt"])){
						$id_dt = $_GET["id_dt"];
?>
						<article class="grid_8">
						<h2>Form Pengisian Data Detail</h2>
						<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
							<fieldset>
								<div  class="wrapper"> <span>No Seleksi:</span>
									<div class="bg">
										<input type="text" class="input" id="no_seleksi" name="no_seleksi" />
									</div>
								</div>
								<div  class="wrapper"> <span>Pendidikan:</span>
									<div class="bg">
										<input type="text" class="input" id="pendidikan" name="pendidikan" />
									</div>
								</div>
								<div  class="wrapper"> <span>Garjas:</span>
									<div class="bg">
										<input type="text" class="input" id="garjas" name="garjas" />
									</div>
								</div>
								<div  class="wrapper"> <span>Kasjas:</span>
									<div class="bg">
										<input type="text" class="input" id="kasjas" name="kasjas" />
									</div>
								</div>					
								<div  class="textarea_box"> <span>Keterangan:</span>
									<div class="bg">
										<textarea cols="1" rows="1" id="ket_1" name="ket_1" ></textarea>
									</div>
								</div>
								<div  class="wrapper"> <span>Psikologi:</span>
									<div class="bg">
										<input type="text" class="input" id="psikologi" name="psikologi" />
									</div>
								</div>
								<div  class="wrapper"> <span>Kesehatan:</span>
									<div class="bg">
										<input type="text" class="input" id="kesehatan" name="kesehatan" />
									</div>
								</div>					
								<div  class="textarea_box"> <span>Keterangan:</span>
									<div class="bg">
										<textarea cols="1" rows="1" id="ket_2" name="ket_2" ></textarea>
									</div>
								</div>
								<div  class="wrapper"> <span>Litpers:</span>
									<div class="bg">
										<input type="text" class="input" id="litpers" name="litpers" />
									</div>
								</div>					
								<div  class="textarea_box"> <span>Keterangan:</span>
									<div class="bg">
										<textarea cols="1" rows="1" id="ket_3" name="ket_3" ></textarea>
									</div>
								</div>
								<div  class="wrapper"> <span>Administrasi:</span>
									<div class="bg">
										<input type="text" class="input" id="administrasi" name="administrasi" />
									</div>
								</div>					
								<div  class="textarea_box"> <span>Keterangan:</span>
									<div class="bg">
										<textarea cols="1" rows="1" id="ket_4" name="ket_4" ></textarea>
									</div>
								</div>
								<div  class="wrapper"> <span>Akademik:</span>
									<div class="bg">
										<input type="text" class="input" id="akademik" name="akademik" />
									</div>
								</div>
								<div  class="wrapper"> <span>Pengum:</span>
									<div class="bg">
										<input type="text" class="input" id="pengum" name="pengum" />
									</div>
								</div>
								<div  class="wrapper"> <span>Pengmilum:</span>
									<div class="bg">
										<input type="text" class="input" id="pengmilum" name="pengmilum" />
									</div>
								</div>
								<div  class="wrapper"> <span>Pengmilcab:</span>
									<div class="bg">
										<input type="text" class="input" id="pengmilcab" name="pengmilcab" />
									</div>
								</div>
								<div  class="wrapper"> <span>Aplikasi:</span>
									<div class="bg">
										<input type="text" class="input" id="aplikasi" name="aplikasi" />
									</div>
								</div>
								<div  class="wrapper"> <span>Bahasa Inggris:</span>
									<div class="bg">
										<input type="text" class="input" id="bhs_inggris" name="bhs_inggris" />
									</div>
								</div>
								<div  class="wrapper"> <span>Toefl:</span>
									<div class="bg">
										<input type="text" class="input" id="toefl" name="toefl" />
									</div>
								</div>
								<div  class="wrapper"> <span>TPA:</span>
									<div class="bg">
										<input type="text" class="input" id="tpa" name="tpa" />
									</div>
								</div>
								<div  class="wrapper"> <span>Ket Dik:</span>
									<div class="bg">
										<select name='ketdik' id="ketdik">
											<option value='1' selected>Lulus</option>
											<option value='0'>Tidak Lulus</option>
										</select>
									</div>
								</div>
								<div  class="wrapper"> <span>No Surat:</span>
									<div class="bg">
										<input type="text" class="input" id="no_surat" name="no_surat" />
									</div>
								</div>
								<div  class="wrapper"> <span>Tanggal Surat:</span>
									<div class="bg">
										<input type="text" class="input" id="tgl_surat" name="tgl_surat" >
										<a href="javascript:NewCssCal('tgl_surat','yyyymmdd','arrow',false,24,false)">
										<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">
										</a>
									</div>
								</div>
								<div  class="wrapper"> <span>Jenis Dik:</span>
									<div class="bg">
										<select name='id_jenisdik' id="id_jenisdik">
<?
										$getjenisdik = "select id, nama from t_jenisdik order by id asc";
										$hsljenisdik = pg_query($getjenisdik);
										while ($rowjenisdik = pg_fetch_array($hsljenisdik)) {
											$idjenisdik = $rowjenisdik['id'];
											$uptjenisdik = $rowjenisdik['nama'];
											echo "<option value='$idjenisdik'>$uptjenisdik</option>";
										}
?>								
										</select>
									</div>
								</div>
								<div  class="wrapper"> <span>Tahun Dik:</span>
									<div class="bg">
										<input type="text" class="input" id="thn_dik" name="thn_dik" />
									</div>
								</div>
								<div  class="wrapper"> <span>Nama Dik:</span>
									<div class="bg">
										<input type="text" class="input" id="nama_dik" name="nama_dik" />
									</div>
								</div>
								<div  class="wrapper"> <span>Tanggal Buka Dik:</span>
									<div class="bg">
										<input type="text" class="input" id="tgl_buka_dik" name="tgl_buka_dik" >
										<a href="javascript:NewCssCal('tgl_buka_dik','yyyymmdd','arrow',false,24,false)">
										<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">
										</a>
									</div>
								</div><br>
								<input type="hidden" value="<?php echo $id_dt; ?>" name="id" id="id">
								<input type="submit" value="Simpan" name="submit_save" class="button2"/>
							</fieldset>
						</form></article>
<?
					}
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
