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
					document.location = "detail.php";
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
<?
					if(isset($_GET["id"])){
						$id = $_GET["id"];
?>
						window.location="tmbdt_detail.php?id_dt=<? echo $id; ?>";
<?
					}
?>
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
					<article class="grid">
						<div class="indent-right">
<?
							if(isset($_GET["id"])){
								$id = $_GET["id"];
								$getData = "select t_data.nama as nama_data, t_pangkat.nama as nama_pangkat, t_data.nrp, t_data.jabatan, t_data.kotama, t_data.panda, t_korp.nama as nama_korp, t_data.tgl_lahir, t_sumber.nama as nama_sumber, t_data.tahun, t_data.dikum, t_data.gelar_s1, t_data.gelar_s2, t_data.gelar_s3, t_data.foto from t_data left join t_pangkat on t_data.id_pangkat = t_pangkat.id left join t_korp on t_data.id_korp = t_korp.id left join t_sumber on t_data.id_sumber = t_sumber.id order by t_data.id desc";
								$jwbData = pg_query($getData);
								while ($rowData = pg_fetch_array($jwbData)) {
									$nama_data = $rowData['nama_data'];
									$nama_pangkat = $rowData['nama_pangkat'];
									$nrp = $rowData['nrp'];
									$jabatan = $rowData['jabatan'];
									$kotama = $rowData['kotama'];
									$panda = $rowData['panda'];
									$nama_korp = $rowData['nama_korp'];
									$tgl_lahir = $rowData['tgl_lahir'];
									$nama_sumber = $rowData['nama_sumber'];
									$tahun = $rowData['tahun'];
									$dikum = $rowData['dikum'];
									$gelar_s1 = $rowData['gelar_s1'];
									$gelar_s2 = $rowData['gelar_s2'];
									$gelar_s3 = $rowData['gelar_s3'];
									$foto = $rowData['foto'];
								}
							}
?>
							<center><input type="submit" value="TAMBAH DETAIL" name="submit_save" id="submit_save" class="button2" /></center><br><h2><? echo $nama_data;?></h2>
							<div class="wrapper indent-bot">
								<figure class="img-indent3"><img src="uploads/<? echo $foto;?>" alt="" width="280px" height="212px"></figure>
								<div class="extra-wrap">
									<table style="border: 0px solid #e8e8e8;">
										<tr>
											<td>
												PANGKAT
											</td>
											<td>:</td>
											<td>
												<? echo $nama_pangkat;?>
											</td>
										</tr>
										<tr>
											<td>
												NRP
											</td>
											<td>:</td>
											<td>
												<? echo $nrp;?>
											</td>
										</tr>
										<tr>
											<td>
												JABATAN
											</td>
											<td>:</td>
											<td>
												<? echo $jabatan;?>
											</td>
										</tr>
										<tr>
											<td>
												KOTAMA
											</td>
											<td>:</td>
											<td>
												<? echo $kotama;?>
											</td>
										</tr>
										<tr>
											<td>
												PANDA
											</td>
											<td>:</td>
											<td>
												<? echo $panda;?>
											</td>
										</tr>
										<tr>
											<td>
												KORP
											</td>
											<td>:</td>
											<td>
												<? echo $nama_korp;?>
											</td>
										</tr>
										<tr>
											<td>
												TGL LAHIR
											</td>
											<td>:</td>
											<td>
												<? echo $tgl_lahir;?>
											</td>
										</tr>
										<tr>
											<td>
												SUMBER
											</td>
											<td>:</td>
											<td>
												<? echo $nama_sumber;?>
											</td>
										</tr>
										<tr>
											<td>
												TAHUN
											</td>
											<td>:</td>
											<td>
												<? echo $tahun;?>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="wrapper indent-bot">
								<div class="extra-wrap">
									<table style="border: 0px solid #e8e8e8;">
										<tr>
											<td>
												DIKUM
											</td>
											<td>:</td>
											<td>
												<? echo $dikum;?>
											</td>
										</tr>
										<tr>
											<td>
												GELAR S1
											</td>
											<td>:</td>
											<td>
												<? echo $gelar_s1;?>
											</td>
										</tr>
										<tr>
											<td>
												GELAR S2
											</td>
											<td>:</td>
											<td>
												<? echo $gelar_s2;?>
											</td>
										</tr>
										<tr>
											<td>
												GELAR S3
											</td>
											<td>:</td>
											<td>
												<? echo $gelar_s3;?>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="wrapper indent-bot">
								<div class="extra-wrap">
									<table id="tableTerima">
										<thead>
											<tr>
												<th>NO Seleksi</th>
												<th>Pendidikan</th>
												<th>Jenis Dik</th>
												<th>Tahun Dik</th>
												<th>Nama Dik</th>
												<th>Tanggal Buka Dik</th>
												<th style="width: 100px;">Lihat Detail</th>
												<th style="width: 100px;">Edit</th>
											</tr>
										</thead>
										<tbody>
<?
											/*prior1 = merah
											prior2 = kuning
											prior3 = hijau*/
											$getDataDetail = "select t_arsip.id, t_arsip.no_seleksi, t_arsip.pendidikan, t_jenisdik.nama as nama_jenisdik, t_arsip.thn_dik, t_arsip.nama_dik, t_arsip.tgl_buka_dik from t_arsip left join t_jenisdik on t_arsip.id_jenisdik = t_jenisdik.id where t_arsip.t_dataid = $id order by t_arsip.id desc";
											$jwbDataDetail = pg_query($getDataDetail);
											while ($rowDataDetail = pg_fetch_array($jwbDataDetail)) {
												$idDetail = $rowDataDetail['id'];
												$no_seleksi = $rowDataDetail['no_seleksi'];
												$pendidikan = $rowDataDetail['pendidikan'];
												$nama_jenisdik = $rowDataDetail['nama_jenisdik'];
												$thn_dik = $rowDataDetail['thn_dik'];
												$nama_dik = $rowDataDetail['nama_dik'];
												$tgl_buka_dik = $rowDataDetail['tgl_buka_dik'];
												echo "<tr class=\"prior4\">";
													echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$no_seleksi</td>";
													echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$pendidikan</td>";
													echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$nama_jenisdik</td>";
													echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$thn_dik</td>";
													echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$nama_dik</td>";
													echo "<td style=\"font-size:12px; padding:6px 8px 8px\">$tgl_buka_dik</td>";
													echo "<td style=\"width: 100px; padding:6px 8px 8px\"><center><input type=\"submit\" value=\"Detail\" name=\"$idDetail\" id=\"detail\" class=\"button2\" /></center></td>";
													if ($tmbdt == 'y') {
														echo "<td style=\"font-size:12px; padding:6px 8px 8px\"><font face='Verdana' size='2'><a href=index.php?id_edit=$idDetail>Edit</a> | <a href=index.php?id_delete=$idDetail onclick='return confirmDelete();'>Delete</a></font></td>";
													} else {
														echo "<td style=\"font-size:12px; padding:6px 8px 8px\"></td>";
													}
												echo "</tr>";
											}
?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</article>
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
