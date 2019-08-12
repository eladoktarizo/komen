<?php
include "connect.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check1 = pg_query("SELECT * FROM t_member WHERE uname = '$username1'")or die('Error to connect to Database');
		while($info = pg_fetch_array( $check1 )){		
			if ($pass1 != $info['passw']){ 
				header("Location: login.php");
			} else {
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link href="css/panes.css" rel="stylesheet" type="text/css" />
        <link href="css/tablet.css" rel="stylesheet" type="text/css" />
 
		<link rel="stylesheet" type="text/css" href="css/paginate.css">
		<link rel="stylesheet" type="text/css" href="css/messagebox.css">
		<link href="css/kendo.common.min.css" rel="stylesheet" />
		<link href="css/kendo.default.min.css" rel="stylesheet" />
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.js"></script>
		<!-- <script src="js/kendo.all.min.js"></script> -->
		<script type="text/javascript">
		var htmlobjek;
		$(document).ready(function(){
		  //apabila terjadi event onchange terhadap object <select id=propinsi>
		  $("#propinsi").change(function(){
			var propinsi = $("#propinsi").val();
			$.ajax({
				url: "ambilkab.php",
				data: "propinsi="+propinsi,
				cache: false,
				success: function(msg){
					$("#kota option").remove();
					$("#kota").append(msg);
				}
			});
		  });
		  $("#kota").change(function(){
			var kota = $("#kota").val();
			var prop = $("#propinsi").val();
			$.ajax({
				url: "ambilkec.php",
				data: "kota="+kota+"&propinsi="+prop,
				//data: "propinsi="+propinsi,
				cache: false,
				success: function(msg){
					$("#kecamatan option").remove();
					$("#kecamatan").append(msg);
				}
			});
		  });
		  $("#kecamatan").change(function(){
			var kec = $("#kecamatan").val();
			var kota = $("#kota").val();
			var prop = $("#propinsi").val();
			$.ajax({
				url: "ambildesa.php",
				data: "kecamatan="+kec+"&kota="+kota+"&propinsi="+prop,
				cache: false,
				success: function(msg){
					$("#desa option").remove();
					$("#desa").append(msg);
				}
			});
		  });
		});
		
		</script>
		<script language="javascript">
		function confirmDelete() {
			if (confirm('Hapus?')){
				document.location = "sms.php";
			}else{						
				return false;
			}
		}
		</script>
    </head>
    <body background="img/bg.png">
        <div class="left col">
            <div class="header row">
                <div class="judul1"></div>
            </div>
            <div class="body row scroll-y">
                <ul class="listview">
                    <!-- <li class="selected">One</li>
					<li>Two</li>
					<li>Three</li>
					<li>One</li>
					<li>Two</li>
					-->
					<?php
						include "menu.php";
					?>
                </ul>
            </div>
            <div class="footer row">
                Ciptakarya &copy; 2013
            </div>
        </div>
        <div class="right col">
            <div class="header row">
                Rusunawa (point)
				<div class="judul">OneMap</div>
            </div>
            <div class="body row scroll-y" style="padding: 0 10px 0 10px;">
			<?php
				if (isset($_POST['submit_add'])) {
			?>
			<h3>Form Input</h3>
            <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table width="80%" border="0">
              <tr>
                <td>Propinsi</td>
                <td>:</td>
                <td>
                	<select id="propinsi" name="propinsi" class="k-widget k-combobox k-header" style="width:300px; height:25px;" required >
                    	<option value="pilih">-- Pilih Propinsi --</option>
						<?php
							$sqlprop = "SELECT DISTINCT	propinsi FROM tdesa ORDER BY propinsi ASC";
							$qprop = pg_query($connect, $sqlprop);
							while($rprop=pg_fetch_array($qprop)){
								$a = $rprop['propinsi'];
								$b = explode(' ', $a);
								if (count($b) == 2){
									$c = $b[0]."+".$b[1];
								}else if (count($b) == 3){
									$c = $b[0]."+".$b[1]."+".$b[2];
								}else{
									$c = $b[0];
								}
								echo "<option value=".$c.">".$rprop['propinsi']."</option>";
							}
                        ?>
                    </select>
                </td>
              </tr>
              <tr>
                <td>Kabupaten / Kota</td>
                <td>:</td>
                <td>
                	<select id="kota" name="kota" class="k-widget k-combobox k-header" style="width:300px; height:25px;" required >
                    </select>
                </td>
              </tr>
			  <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>
                	<select id="kecamatan" name="kecamatan" class="k-widget k-combobox k-header" style="width:300px; height:25px;">
                    </select>

                </td>
              </tr>
				<tr>
					<td>Nama Rusunawa</td>
					<td>:</td>
					<td><input type="text" name="namarusunawa" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Lokasi</td>
					<td>:</td>
					<td><input type="text" name="lokasi" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Tahun Anggaran</td>
					<td>:</td>
					<td>
							<select name="thanggaran" class="k-textbox">
							<?php
							$thna = date("Y");
							echo $thna;
						 	for($i=0;$i<20;$i++){
								$tn = $thna-$i;
								echo "<option value='$tn'>$tn</option>";
							}
							 
							?>
							</select>
							<!--input type="text" name="thanggaran" class="k-textbox"/-->
					</td>	
				</tr>
				<tr>
					<td>Peruntukan</td>
					<td>:</td>
					<td><input type="text" name="peruntukan" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Volume</td>
					<td>:</td>
					<td><input type="text" name="volume" class="k-textbox"/> TB
					</td>	
				</tr>
				<tr>
					<td>Jumlah Unit</td>
					<td>:</td>
					<td><input type="text" name="jmlunit" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Jumlah Jiwa</td>
					<td>:</td>
					<td><input type="text" name="jmljiwa" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Nilai Kontrak</td>
					<td>:</td>
					<td><input type="text" name="nilai" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Kontraktor</td>
					<td>:</td>
					<td><input type="text" name="kontraktor" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Program Fisik</td>
					<td>:</td>
					<td><input type="text" name="progfisik" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Status Penghuni</td>
					<td>:</td>
					<td><input type="text" name="statpenghuni" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Pengelola</td>
					<td>:</td>
					<td><input type="text" name="pengelola" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Koordinat Latitude</td>
					<td>:</td>
					<td><input type="text" name="lat" class="k-textbox"/>
					</td>	
				</tr>
				<tr>
					<td>Koordinat Longitude</td>
					<td>:</td>
					<td><input type="text" name="lon" class="k-textbox" />
					</td>	
				</tr>
				<tr>
					<td>Status</td>
					<td>:</td>
					<td><input type="radio" name="status" value="1"/> Belum terhuni <span style="font-size:12px; color:#ff0000;"> (Meski sudah terhuni sebagian)</span><br/>
						<input type="radio" name="status" value="3"/> Sudah Terhuni <span style="font-size:12px; color:#ff0000;">(Terhuni seluruhnya)</span>
					</td>	
				</tr>
              <tr>
                <td></td>
                <td></td>
                <td><button class="k-button" type="submit" name="simpan_data">Simpan</button> <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><button class="k-button" type="button">Batal</button></a></td>
              </tr>
            </table>
            </form>
			<?php
				}else if (isset($_POST['simpan_data'])){	//eksekusi simpan file add new
					if(isset($_POST["propinsi"])){
							$propinsi = $_POST["propinsi"];
						}
					if(isset($_POST["kota"])){
							$kota = $_POST["kota"];
						}
					if(isset($_POST["kecamatan"])){
							$kecamatan = $_POST["kecamatan"];
						}
					if(isset($_POST["namarusunawa"])){
							$namarusunawa = $_POST["namarusunawa"];
						}
					if(isset($_POST["lokasi"])){
							$lokasi = $_POST["lokasi"];
						}
					if(isset($_POST["thanggaran"])){
							$thanggaran = $_POST["thanggaran"];
						}
					if(isset($_POST["peruntukan"])){
							$peruntukan = $_POST["peruntukan"];
						}
					if(isset($_POST["volume"])){
							$volume = $_POST["volume"]." TB";
						}
					if(isset($_POST["jmlunit"])){
							$jmlunit = $_POST["jmlunit"];
						}
					if(isset($_POST["jmljiwa"])){
							$jmljiwa = $_POST["jmljiwa"];
						}
					if(isset($_POST["nilai"])){
							$nilai = $_POST["nilai"];
						}
					if(isset($_POST["kontraktor"])){
							$kontraktor = $_POST["kontraktor"];
						}
					if(isset($_POST["progfisik"])){
							$progfisik = $_POST["progfisik"];
						}
					if(isset($_POST["statpenghuni"])){
							$statpenghuni = $_POST["statpenghuni"];
						}
					if(isset($_POST["pengelola"])){
							$pengelola = $_POST["pengelola"];
						}
					if(isset($_POST["lat"])){
							$lat = $_POST["lat"];
						}
					if(isset($_POST["lon"])){
							$lon = $_POST["lon"];
						}
					if(isset($_POST["status"])){
							$status = $_POST["status"];
						}
					/*echo $propinsi."<br>";
					echo $kota."<br>";
					echo $kecamatan."<br>";
					echo $desa."<br>";
					echo $tema."<br>";
					echo $status."<br>";
					echo $id."<br>";*/
					
					
					$charini = 	array("+");
					$propnew = str_replace($charini, " ",$propinsi);
					$qinput = "INSERT INTO rusunawa_point (propinsi, kab_kota, kecamatan, nm_rsnw, lokasi, thn_anggar, peruntukan, vol, jum_unit, jum_jiwa, nil_kontra, kontraktor, prog_fisik, stat_pengh, pengelola, lon, lat, status) VALUES ( '$propnew', '$kota', '$kecamatan', '$namarusunawa', '$lokasi', '$thanggaran', '$peruntukan', '$volume', '$jmlunit', '$jmljiwa', '$nilai', '$kontraktor', '$progfisik', '$statpenghuni', '$pengelola', '$lon', '$lat', '$status');";
					pg_query($qinput);
					//echo $qinput;
					echo "<div class=\"success\">";
					echo "Data telah disimpan<br/>";
					echo "<a href=".$_SERVER['PHP_SELF'].">Kembali ke Daftar Data</a>";
					echo "</div>";
					
				}else if (isset($_POST['edit_data'])){	//eksekusi simpan file edit data
					if(isset($_POST["propinsi"])){
							$propinsi = $_POST["propinsi"];
						}
					if(isset($_POST["kota"])){
							$kota = $_POST["kota"];
						}
					if(isset($_POST["kecamatan"])){
							$kecamatan = $_POST["kecamatan"];
						}
					if(isset($_POST["namarusunawa"])){
							$namarusunawa = $_POST["namarusunawa"];
						}
					if(isset($_POST["lokasi"])){
							$lokasi = $_POST["lokasi"];
						}
					if(isset($_POST["thanggaran"])){
							$thanggaran = $_POST["thanggaran"];
						}
					if(isset($_POST["peruntukan"])){
							$peruntukan = $_POST["peruntukan"];
						}
					if(isset($_POST["volume"])){
							$volume = $_POST["volume"];
						}
					if(isset($_POST["jmlunit"])){
							$jmlunit = $_POST["jmlunit"];
						}
					if(isset($_POST["jmljiwa"])){
							$jmljiwa = $_POST["jmljiwa"];
						}
					if(isset($_POST["nilai"])){
							$nilai = $_POST["nilai"];
						}
					if(isset($_POST["kontraktor"])){
							$kontraktor = $_POST["kontraktor"];
						}
					if(isset($_POST["progfisik"])){
							$progfisik = $_POST["progfisik"];
						}
					if(isset($_POST["statpenghuni"])){
							$statpenghuni = $_POST["statpenghuni"];
						}
					if(isset($_POST["pengelola"])){
							$pengelola = $_POST["pengelola"];
						}
					if(isset($_POST["lat"])){
							$lat = $_POST["lat"];
						}
					if(isset($_POST["lon"])){
							$lon = $_POST["lon"];
						}
					if(isset($_POST["status"])){
							$status = $_POST["status"];
						}
					if(isset($_POST["id"])){
							$id = $_POST["id"];
						}
					/*echo $propinsi."<br>";
					echo $kota."<br>";
					echo $kecamatan."<br>";
					echo $desa."<br>";
					echo $tema."<br>";
					echo $status."<br>";
					echo $id."<br>";*/
					
					$charini = 	array("+");
					$propnew = str_replace($charini, " ",$propinsi);
					$qedit = "UPDATE rusunawa_point SET propinsi='$propnew', kab_kota='$kota', kecamatan='$kecamatan', nm_rsnw='$namarusunawa', lokasi='$lokasi', thn_anggar='$thanggaran', peruntukan='$peruntukan', vol='$volume', jum_unit='$jmlunit', jum_jiwa='$jmljiwa', nil_kontra='$nilai', kontraktor='$kontraktor', prog_fisik='$progfisik', stat_pengh='$statpenghuni', pengelola='$pengelola', lon='$lon', lat='$lat', status='$status' WHERE rusunawa_point_pk='$id'";
					pg_query($qedit);
					//echo $qedit;
					echo "<div class=\"success\">";
					echo "Data telah diubah<br/>";
					echo "<a href=".$_SERVER['PHP_SELF'].">Kembali ke Daftar Data</a>";
					echo "</div>";
				}else if(isset($_GET['id_delete'])){	//delete data
					$id_delete = $_GET['id_delete'];
					$query = "select * from rusunawa_point where rusunawa_point_pk = '$id_delete'";
					$result = pg_query($query);
					while ($row = pg_fetch_array($result)) {
						echo "<div class=\"success\">";
						echo "Telah berhasil dihapus.";
						echo "<a href=".$_SERVER['PHP_SELF'].">Kembali ke Daftar Data</a>";
						echo "</div>";
					}
					$sql2 = "DELETE FROM rusunawa_point where rusunawa_point_pk = '$id_delete'";
					pg_query($sql2);
				}else if(isset($_GET['id_edit'])){		//form edit data
					$id_edit = $_GET['id_edit'];
					$qedit = "select * from rusunawa_point where rusunawa_point_pk = '$id_edit'";
					$result = pg_query($qedit);
					while ($redit = pg_fetch_array($result)) {
						$propinsi = $redit['propinsi'];
						$kab = $redit['kab_kota'];
						$kecamatan = $redit['kecamatan'];
						$id = $redit['rusunawa_point_pk'];
						?>
							<h3>Form Edit Data</h3>
							<form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<table width="500" border="0">
							  <tr>
								<td>Propinsi</td>
								<td>:</td>
								<td>
									<select id="propinsi" name="propinsi" class="k-widget k-combobox k-header" style="width:300px; height:25px;" required >
										<option value="<?php echo $propinsi;?>"><?php echo $propinsi;?></option>
										<?php
											$sqlprop = "SELECT DISTINCT	propinsi FROM tdesa ORDER BY propinsi ASC";
											$qprop = pg_query($connect, $sqlprop);
											while($rprop=pg_fetch_array($qprop)){
												$a = $rprop['propinsi'];
												$b = explode(' ', $a);
												if (count($b) == 2){
													$c = $b[0]."+".$b[1];
												}else if (count($b) == 3){
													$c = $b[0]."+".$b[1]."+".$b[2];
												}else{
													$c = $b[0];
												}
												echo "<option value=".$c.">".$rprop['propinsi']."</option>";
											}
										?>
									</select>
								</td>
							    </tr>
							    <tr>
									<td>Kabupaten / Kota</td>
									<td>:</td>
									<td>
										<select id="kota" name="kota" class="k-widget k-combobox k-header" style="width:300px; height:25px;" required>
											<option value="<?php echo $kab;?>"><?php echo $kab;?></option>
										</select>
								</td>
								</tr>
								<tr>
									<td>Kecamatan</td>
									<td>:</td>
									<td>
										<select id="kecamatan" name="kecamatan" class="k-widget k-combobox k-header" style="width:300px; height:25px;">
											<option value="<?php echo $kecamatan;?>"><?php echo $kecamatan;?></option>			
										</select>

								</td>
						    </tr>
							<tr>
								<td>Nama Rusunawa</td>
								<td>:</td>
								<td><input type="text" name="namarusunawa" class="k-textbox" value="<?php echo $redit['nm_rsnw'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Lokasi</td>
								<td>:</td>
								<td><input type="text" name="lokasi" class="k-textbox" value="<?php echo $redit['lokasi'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Tahun Anggaran</td>
								<td>:</td>
								<td> 
										<select name="thanggaran" class="k-textbox">
										<option value="<?php echo $redit['thn_anggar'];?>"><?php echo $redit['thn_anggar'];?></option>
										<?php
										$thna = date("Y");
										echo $thna;
										for($i=0;$i<20;$i++){
											$tn = $thna-$i;
											echo "<option value='$tn'>$tn</option>";
										}
										 
										?>
										</select>								
								</td>	
							</tr>
							<tr>
								<td>Peruntukan</td>
								<td>:</td>
								<td><input type="text" name="peruntukan" class="k-textbox" value="<?php echo $redit['peruntukan'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Volume</td>
								<td>:</td>
								<td><input type="text" name="volume" class="k-textbox" value="<?php echo $redit['vol'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Jumlah Unit</td>
								<td>:</td>
								<td><input type="text" name="jmlunit" class="k-textbox" value="<?php echo $redit['jum_unit'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Jumlah Jiwa</td>
								<td>:</td> 
								<td><input type="text" name="jmljiwa" class="k-textbox" value="<?php echo $redit['jum_jiwa'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Nilai Kontrak</td>
								<td>:</td>
								<td><input type="text" name="nilai" class="k-textbox" value="<?php echo $redit['nil_kontra'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Kontraktor</td>
								<td>:</td>
								<td><input type="text" name="kontraktor" class="k-textbox" value="<?php echo $redit['kontraktor'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Program Fisik</td>
								<td>:</td>
								<td><input type="text" name="progfisik" class="k-textbox" value="<?php echo $redit['prog_fisik'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Status Penghuni</td>
								<td>:</td>
								<td><input type="text" name="statpenghuni" class="k-textbox" value="<?php echo $redit['stat_pengh'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Pengelola</td>
								<td>:</td>
								<td><input type="text" name="pengelola" class="k-textbox" value="<?php echo $redit['pengelola'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Koordinat Latitude</td>
								<td>:</td>
								<td><input type="text" name="lat" class="k-textbox" value="<?php echo $redit['lat'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Koordinat Longitude</td>
								<td>:</td>
								<td><input type="text" name="lon" class="k-textbox" value="<?php echo $redit['lon'];?>"/>
								</td>	
							</tr>
							<tr>
								<td>Status	</td>
								<td>:</td>
								<td>
								<?php 
								if ($redit['status'] == "1"){
								?>
								<input type="radio" name="status" value="1" checked="checked"/> Belum terhuni <span style="font-size:12px; color:#ff0000;"> (Meski sudah terhuni sebagian)</span><br/> 
								<input type="radio" name="status" value="3"/> Sudah Terhuni <span style="font-size:12px; color:#ff0000;">(Terhuni seluruhnya)</span>
								<?php }else{?>
								<input type="radio" name="status" value="1"> Belum terhuni <span style="font-size:12px; color:#ff0000;"> (Meski sudah terhuni sebagian)</span><br/>
								<input type="radio" name="status" value="3"  checked="checked"/> Sudah Terhuni <span style="font-size:12px; color:#ff0000;">(Terhuni seluruhnya)</span>
								<?php }?>
								</td>	
							</tr>
							  <tr>
								<td><input type="hidden" name="id" value="<?php echo $id;?>"/>
									<input type="hidden" name="status" value="3"/></td>
								<td></td>
								<td><button class="k-button" type="submit" name="edit_data">Simpan</button> <a href="<?php echo $_SERVER['PHP_SELF']; ?>"><button class="k-button" type="button">Batal</button></a></td>
							  </tr>
							</table>
							</form>
						<?php
						
					}
				}else{ //tampilan awal mulai
			?>
			<!-- view start -->
			<span class="juduldalam">View Data</span>
			<div align="right"><form name="calladdform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'><input type='submit' class="k-button" value='Add Data' name='submit_add'></form></div>
			
			<table width="100%" class="k-grid">
			<tr>
				<th>No</th>
				<th>Propinsi</th>
				<th>Kabupaten / Kota</th>
				<th>Kecamatan</th>
				<th>Nama Rusunawa</th>
				<th>Keterangan</th>
				<th>Action</th>
			</tr>
			<?php
			$rpp = 10;
			$adjacents = 2;

			if (isset($_GET['page'])) {
				$page = intval($_GET["page"]);
			} else {
				$page = 1;
			}
			if($page<=0) $page = 1;
			
			$sqlview = "SELECT * FROM rusunawa_point ORDER BY rusunawa_point_pk DESC";
			$resultview = pg_query($sqlview);
			if (!$resultview) {
				echo "no results ";
			}
			$tcount = pg_num_rows($resultview);
			$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
			$reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages . "&amp;adjacents=" . $adjacents;
					
			if ($tcount == 0) {
				echo "Data kosong";
			} else {
				$count = 0;
				$i = ($page-1)*$rpp;
				while(($count<$rpp) && ($i<$tcount)) {
				pg_result_seek($resultview,$i);
				$rowview = pg_fetch_array($resultview);
				$s = $i+1;
				echo "<tr style='font-size:13px;'>";
					echo "<td style='vertical-align: top;'>$s</td>";
					echo "<td style='vertical-align: top;'>$rowview[propinsi]</td>"; 
					echo "<td style='vertical-align: top;'>$rowview[kab_kota]</td>";
					echo "<td style='vertical-align: top;'>$rowview[kecamatan]</td>";
					echo "<td style='vertical-align: top;'>$rowview[nm_rsnw]</td>";
					echo "<td>Lokasi : $rowview[lokasi]<br/>
						  Th Anggaran : $rowview[thn_anggar]<br/>
						  Peruntukan : $rowview[peruntukan]<br/>
						  Volume : $rowview[vol]<br/>
						  Jml Unit : $rowview[jum_unit]<br/>
						  Jml Jiwa : $rowview[jum_jiwa]<br/>
						  Nilai Kontrak : $rowview[nil_kontra]<br/>
						  Kontraktor : $rowview[kontraktor]<br/>
						  Prog Fisik : $rowview[prog_fisik]<br/>
						  Stat Penguhin : $rowview[stat_pengh]<br/>
						  Pengelola : $rowview[pengelola]<br/>
						  Koordinat (Lat,Lon) : $rowview[lat], $rowview[lon]</td>";
					echo "<td align=\"center\"><a href=rusunawa_point.php?id_edit=$rowview[rusunawa_point_pk]>Edit</a> | <a href=\"rusunawa_point.php?id_delete=$rowview[rusunawa_point_pk]\" onclick='return confirmDelete();'>Delete</a></td>";
				echo "</tr>";
				$i++;
				$count++;
				}
			}
			?>
			</table>
			<?php
			include("pagination3.php");
			echo paginate_three($reload, $page, $tpages, $adjacents);
			?>
			<?php
			}	//akhir tampilan awal
			?>
			<!-- view end -->
						<div id='logout'><a href='logout.php'><button >Logout</button></a></div>
            </div>
            <div class="footer row">
                
            </div>
        </div>

        <script src="script/iemobile-fix.js" type="text/javascript"></script>
    </body>
</html>
<?php
			}
		 
		}
	} else {
		header("Location: login.php");
	}
pg_close($connect);
?>