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
		<script>
			function confirmDelete() {
				if (confirm('Hapus?')){
					document.location = "index.php";
				}else{						
					return false;
				}
			}
			$(window).load(function(){
				$("#tableTerima").dataTable({
					"bSort": false,
					"sDom": '<"tbl-controls clearfix"lfrTC>tip',
					"oLanguage": {
						"oPaginate": {
							"sNext": "Selanjutnya",
							"sPrevious": "Sebelumnya",
						},
						"sLengthMenu": 'Tampilkan <select>'+
									   '<option value="10">10</option>'+
									   '<option value="20">20</option>'+
									   //'<option value="30">30</option>'+
									   //'<option value="40">40</option>'+
									   //'<option value="50">50</option>'+
									   //'<option value="-1">All</option>'+
									   '</select> Data',
						"sInfo": "Menampilkan data ke-_START_ sampai ke-_END_ dari _TOTAL_ data",
						"sSearch": "Cari Data",
					}
				});
				$("#submit_save").live("click",function(){
					window.location="tmbdt.php";
				});				
				$("#detail").live("click",function(){
					var name = this.name;
					window.location="detail.php?id="+name;
				});
			});
		</script>
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
						<li><a href="#">Lihat Arsip</a></li>
<?
						if ($tmbdt == 'y') {
?>
							<li><a href="#">Pengguna</a></li>
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
						if(isset($_GET['id_delete'])) {
							if ($tmbdt == 'y') {
								$id_delete = $_GET['id_delete'];
								$query = "select * from t_data where id = '$id_delete'";
								$result = pg_query($query);
								while ($row = pg_fetch_array($result)) {
									echo "Data : ";
									echo "<font color=red size=+1>";
									echo $row["nama"];
									echo "</font>";
									echo " Telah berhasil dihapus<br>";
									echo " Kembali ke halaman <a href=index.php>Data</a>.";
									$sql2 = "DELETE FROM t_data where id = '$id_delete'";
									$rslt = pg_query($sql2);
								}
							} else {
								echo "Anda tidak memiliki hak untuk menghapus";
							}
						} else if(isset($_GET['id_edit'])) {
							if ($tmbdt == 'y') {
								$id_edit = $_GET['id_edit'];
								$query = "select * from t_data where id = '$id_edit'";
								$result = pg_query($query);
								while ($row = pg_fetch_array($result)) {
									$nama = $row["nama"];
									$id_pangkat = $row["id_pangkat"];
									$nrp = $row["nrp"];
									$jabatan = $row["jabatan"];
									$kotama = $row["kotama"];
									$panda = $row["panda"];
									$id_korp = $row["id_korp"];
									$tgl_lahir = $row["tgl_lahir"];
									$id_sumber = $row["id_sumber"];
									$tahun = $row["tahun"];
									$dikum = $row["dikum"];
									$gelar_s1 = $row["gelar_s1"];
									$gelar_s2 = $row["gelar_s2"];
									$gelar_s3 = $row["gelar_s3"];
									$c_log = $row["c_log"];
									$foto = $row["foto"];
								}
?>
								<article class="grid_8">
									<h2>Form Perubahan Data</h2>
									<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
										<fieldset>
											<label>
												Nama:<br>
												<input id="nama" name="nama" required="required" value="<?php echo $nama; ?>"/>
											</label>
											<label>
												Pangkat:<br>
												<select name='id_pangkat' id="id_pangkat">
<?
												$getupt = "select id, nama from t_pangkat where id = '$id_pangkat'";
												$hslupt = pg_query($getupt);
												while ($rowupt = pg_fetch_array($hslupt)) {
													$idupt = $rowupt['id'];
													$uptnya = $rowupt['nama'];
													echo "<option value='$idupt' selected>$uptnya</option>";
												}
												$getupt1 = "select id, nama from t_pangkat where id != '$id_pangkat'";
												$hslupt1 = pg_query($getupt1);
												while ($rowupt1 = pg_fetch_array($hslupt1)) {
													$idupt1 = $rowupt1['id'];
													$uptnya1 = $rowupt1['nama'];
													echo "<option value='$idupt1'>$uptnya1</option>";
												}
?>								
												</select>
											</label>
											<label>
												NRP:<br>
												<input id="nrp" name="nrp" required="required" value="<?php echo $nrp; ?>"/>
											</label>
											<label>
												Jabatan:<br>
												<input id="jabatan" name="jabatan" required="required" value="<?php echo $jabatan; ?>"/>
											</label>
											<label>
												Kotama:<br>
												<input id="kotama" name="kotama" required="required" value="<?php echo $kotama; ?>"/>
											</label>
											<label>
												Panda:<br>
												<input id="panda" name="panda" required="required" value="<?php echo $panda; ?>"/>
											</label>
											<label>
												Korp:<br>
												<select name='id_korp' id="id_korp">
<?
												$getkorp = "select id, nama from t_korp where id = '$id_korp'";
												$hslkorp = pg_query($getkorp);
												while ($rowkorp = pg_fetch_array($hslkorp)) {
													$idkorp = $rowkorp['id'];
													$uptkorp = $rowkorp['nama'];
													echo "<option value='$idkorp' selected>$uptkorp</option>";
												}
												$getkorp1 = "select id, nama from t_korp where id != '$id_korp'";
												$hslkorp1 = pg_query($getkorp1);
												while ($rowkorp1 = pg_fetch_array($hslkorp1)) {
													$idkorp1 = $rowkorp1['id'];
													$uptkorp1 = $rowkorp1['nama'];
													echo "<option value='$idkorp1'>$uptkorp1</option>";
												}
?>								
												</select>
											</label>
											<label>
												Tanggal Lahir::<br>								
												<input type="text" class="input" id="tgl_lahir" name="tgl_lahir" required="required" value="<?php echo $tgl_lahir; ?>">
												<a href="javascript:NewCssCal('tgl_lahir','yyyymmdd','arrow',false,24,false)">
												<img src="images/cal.gif" width="16" height="16" border="0" alt="Pick a date">
												</a>
											</label>
											<label>
												Sumber:<br>
												<select name='id_sumber' id="id_sumber">
<?
												$getsumber = "select id, nama from t_sumber where id = '$id_sumber'";
												$hslsumber = pg_query($getsumber);
												while ($rowsumber = pg_fetch_array($hslsumber)) {
													$idsumber = $rowsumber['id'];
													$uptsumber = $rowsumber['nama'];
													echo "<option value='$idsumber' selected>$uptsumber</option>";
												}
												$getsumber1 = "select id, nama from t_sumber where id != '$id_sumber'";
												$hslsumber1 = pg_query($getsumber1);
												while ($rowsumber1 = pg_fetch_array($hslsumber1)) {
													$idsumber1 = $rowsumber1['id'];
													$uptsumber1 = $rowsumber1['nama'];
													echo "<option value='$idsumber1'>$uptsumber1</option>";
												}
?>								
												</select>
											</label>
											<label>
												Tahun:<br>
												<input id="tahun" name="tahun" required="required" value="<?php echo $tahun; ?>"/>
											</label>
											<label>
												Dikum:<br>
												<input id="dikum" name="dikum" required="required" value="<?php echo $dikum; ?>"/>
											</label>
											<label>
												Gelar S1:<br>
												<input id="gelar_s1" name="gelar_s1" value="<?php echo $gelar_s1; ?>"/>
											</label>
											<label>
												Gelar S2:<br>
												<input id="gelar_s2" name="gelar_s2" value="<?php echo $gelar_s2; ?>"/>
											</label>
											<label>
												Gelar S3:<br>
												<input id="gelar_s3" name="gelar_s3" value="<?php echo $gelar_s3; ?>"/>
											</label>
											<label>
												FOTO:<br>
												<input type="file" name="ufile">
											</label>
											<label>
												<img src="uploads/<?php echo $foto; ?>" width="280px">
											</label>
											<label>
												
											</label>
											<label>
												
											</label>
											<label>
												
											</label>
											<label>
												
											</label>
											<input type="hidden" value="<?php echo $id_edit; ?>" name="id" id="id">
											<input type="submit" value="Submit" name="submit_edit" class="button2" />
										</fieldset>
									</form>
								</article>
<?
							} else {
								echo "Anda tidak memiliki hak untuk Melakukan Perubahan data";
							}
						} else if (isset($_POST['submit_edit'])) {
							if(isset($_POST["id"])){
								$id = $_POST["id"];
							}
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
										$insert = "update t_data set nama='$nama',id_pangkat='$id_pangkat',nrp='$nrp',jabatan='$jabatan',kotama='$kotama',panda='$panda',id_korp='$id_korp',tgl_lahir='$tgl_lahir',id_sumber='$id_sumber',tahun='$tahun',dikum='$dikum',gelar_s1='$gelar_s1',gelar_s2='$gelar_s2',gelar_s3='$gelar_s3',c_log='$c_log' ,foto='$new_file_name' where id = $id";
										$add_data = pg_query($insert);
										echo "Data baru telah berhasil ditambahkan";
										echo "<br>Terima kasih, Kembali ke halaman <a href=index.php>Data</a>.";
									} else {
										echo "Gagal Upload <a href='index.php'>Kembali</a>";
									}
								}
							} else {
								$insert = "update t_data set nama='$nama',id_pangkat='$id_pangkat',nrp='$nrp',jabatan='$jabatan',kotama='$kotama',panda='$panda',id_korp='$id_korp',tgl_lahir='$tgl_lahir',id_sumber='$id_sumber',tahun='$tahun',dikum='$dikum',gelar_s1='$gelar_s1',gelar_s2='$gelar_s2',gelar_s3='$gelar_s3',c_log='$c_log' ,foto='' where id = $id";
								$add_data = pg_query($insert);
								echo "Data Berhasil diubah";
								echo "<br>Terima kasih, <a href=index.php>Kembali ke halaman data</a>.";
							}
						} else {
?>
							<br><center><input type="submit" value="TAMBAH DATA" name="submit_save" id="submit_save" class="button2" /> <!--input type="submit" value="CARI DATA" name="submit_cari" id="submit_cari" class="button2" /--></center><br>
							<table id="tableTerima">
								<thead>
									<tr>
										<th>NAMA</th>
										<th>PANGKAT</th>
										<th>NRP</th>
										<th>JABATAN</th>
										<th>KOTAMA</th>
										<th>PANDA</th>
										<th>KORP</th>
										<th>TAHUN</th>
										<th style="width: 100px;">Lihat Detail</th>
										<th style="width: 100px;">Edit</th>
									</tr>
								</thead>
								<tbody>
<?
									/*prior1 = merah
									prior2 = kuning
									prior3 = hijau*/
									$getData = "select t_data.id, t_data.nama as nama_data, t_pangkat.nama as nama_pangkat, t_data.nrp, t_data.jabatan, t_data.kotama, t_data.panda, t_korp.nama as nama_korp, t_data.tahun from t_data left join t_pangkat on t_data.id_pangkat = t_pangkat.id left join t_korp on t_data.id_korp = t_korp.id order by t_data.id desc";
									$jwbData = pg_query($getData);
									while ($rowData = pg_fetch_array($jwbData)) {
										$id = $rowData['id'];
										$nama_data = $rowData['nama_data'];
										$nama_pangkat = $rowData['nama_pangkat'];
										$nrp = $rowData['nrp'];
										$jabatan = $rowData['jabatan'];
										$kotama = $rowData['kotama'];
										$panda = $rowData['panda'];
										$nama_korp = $rowData['nama_korp'];
										$tahun = $rowData['tahun'];
										echo "<tr class=\"prior4\">";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$nama_data</td>";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$nama_pangkat</td>";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$nrp</td>";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$jabatan</td>";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$kotama</td>";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$panda</td>";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$nama_korp</td>";
											echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$tahun</td>";
											echo "<td style=\"width: 100px; padding:6px 8px 8px\"><center><input type=\"submit\" value=\"Detail\" name=\"$id\" id=\"detail\" class=\"button2\" /></center></td>";
											if ($tmbdt == 'y') {
												echo "<td style=\"font-size:12px; padding:6px 8px 8px\"><font face='Verdana' size='2'><a href=index.php?id_edit=$id>Edit</a> | <a href=index.php?id_delete=$id onclick='return confirmDelete();'>Delete</a></font></td>";
											} else {
												echo "<td style=\"font-size:12px; padding:6px 8px 8px\"></td>";
											}
											echo "</tr>";
										}
?>
								</tbody>
							</table>
							<br><br><br><br><br>
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
