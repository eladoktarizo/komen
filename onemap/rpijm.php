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
                RPIJM
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
                <td>Wilayah</td>
                <td>:</td>
                <td>
                	<select id="wilayah" name="wilayah" class="k-widget k-combobox k-header" style="width:300px; height:25px;">
						<option value="">-- Pilih Wilayah --</option>
						<option value="JAWA">JAWA</option>
						<option value="KALIBANUSTRA">KALIBANUSTRA</option>
						<option value="SULAWESI">SULAWESI</option>
						<option value="SUMATERA">SUMATERA</option>
						<option value="TIMUR">TIMUR</option>
                    </select>
                </td>
              </tr>
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
				<td>Masa Berlaku</td>
				<td>:</td>
				<td>
					<select id="tahun" name="awal" class="k-widget k-combobox k-header" style="width:200px; height:25px;">
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
					</select> - 
					<select id="tahun" name="akhir" class="k-widget k-combobox k-header" style="width:200px; height:25px;">
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
					</select>
				</td>	
			  </tr>
			  <tr>
				<td>Tahun</td>
				<td>:</td>
				<td>
					<select id="tahun" name="tahun" class="k-widget k-combobox k-header" style="width:300px; height:25px;">
						<option value="2008">2008</option>
						<option value="2009">2009</option>
						<option value="2010">2010</option>
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
					</select>
				</td>	
			  </tr>			  
			  <tr>
				<td>Status</td>
				<td>:</td>
				<td><input type="radio" name="status" value="3"/>RPIJM Lengkap<br/><input type="radio" name="status" value="7"/>RPIJM Hanya Matrik
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
					if(isset($_POST["awal"])){
							$awal = $_POST["awal"];
						}
					if(isset($_POST["akhir"])){
						$akhir = $_POST["akhir"];
					}
					if(isset($_POST["wilayah"])){
							$wilayah = $_POST["wilayah"];
						}
					if(isset($_POST["status"])){
							$status = $_POST["status"];
						}
					if(isset($_POST["tahun"])){
							$tahun = $_POST["tahun"];
						}
						
					$masalaku = $awal."-".$akhir;
					if ($status == "7"){
						$keterangan = "RPIJM hanya matrik";
					}else{
						$keterangan = "RPIJM lengkap";
					}
					
					$charini = 	array("+");
					$propnew = str_replace($charini, " ",$propinsi);
					$qinput = "INSERT INTO rpijm (wilayah, propinsi, kab_kota, status, masa_laku, akhir_rpijm, keterangan,tahun) VALUES ('$wilayah', '$propnew', '$kota', '$status', '$masalaku', '$akhir', '$keterangan','$tahun');";
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
					if(isset($_POST["awal"])){
							$awal = $_POST["awal"];
						}
					if(isset($_POST["akhir"])){
						$akhir = $_POST["akhir"];
					}
					if(isset($_POST["wilayah"])){
							$wilayah = $_POST["wilayah"];
						}
					if(isset($_POST["status"])){
							$status = $_POST["status"];
						}
					if(isset($_POST["tahun"])){
							$tahun = $_POST["tahun"];
						}
						
					$masalaku = $awal."-".$akhir;
					if ($status == "7"){
						$keterangan = "RPIJM hanya matrik";
					}else{
						$keterangan = "RPIJM lengkap";
					}
					
					$charini = 	array("+");
					$propnew = str_replace($charini, " ",$propinsi);
					$qedit = "UPDATE rpijm SET wilayah='$wilayah', propinsi='$propnew', kab_kota='$kota', status='$status', masa_laku='$masalaku', akhir_rpijm='$akhir', keterangan='$keterangan' ,tahun='$tahun' WHERE rpijm_pk='$id'";
					pg_query($qedit);
					//echo $qedit;
					echo "<div class=\"success\">";
					echo "Data telah diubah<br/>";
					echo "<a href=".$_SERVER['PHP_SELF'].">Kembali ke Daftar Data</a>";
					echo "</div>";
				}else if(isset($_GET['id_delete'])){	//delete data
					$id_delete = $_GET['id_delete'];
					$query = "select * from rpijm where rpijm_pk = '$id_delete'";
					$result = pg_query($query);
					while ($row = pg_fetch_array($result)) {
						echo "<div class=\"success\">";
						echo "Telah berhasil dihapus.";
						echo "<a href=".$_SERVER['PHP_SELF'].">Kembali ke Daftar Data</a>";
						echo "</div>";
					}
					$sql2 = "DELETE FROM rpijm where rpijm_pk = '$id_delete'";
					pg_query($sql2);
				}else if(isset($_GET['id_edit'])){		//form edit data
					$id_edit = $_GET['id_edit'];
					$qedit = "select * from rpijm where rpijm_pk = '$id_edit'";
					$result = pg_query($qedit);
					while ($redit = pg_fetch_array($result)) {
						$propinsi = $redit['propinsi'];
						$kab = $redit['kab_kota'];
						$id = $redit['rpijm_pk'];
						$tahun = $redit['tahun'];
						$tahun_akhir = $redit['akhir_rpijm'];
						?>
							<h3>Form Edit Data</h3>
							<form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<table width="500" border="0">
						      <tr>
								<td>Wilayah</td>
								<td>:</td>
								<td>
									<select id="wilayah" name="wilayah" class="k-widget k-combobox k-header" style="width:300px; height:25px;">
										<option value="<?php  echo $redit['wilayah'];?>"><?php  echo $redit['wilayah'];?></option>
										<option value="JAWA">JAWA</option>
										<option value="KALIBANUSTRA">KALIBANUSTRA</option>
										<option value="SULAWESI">SULAWESI</option>
										<option value="SUMATERA">SUMATERA</option>
										<option value="TIMUR">TIMUR</option>
									</select>
								</td>
							  </tr>
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
								<td>Masa Berlaku</td>
								<td>:</td>
								<td>
									<select id="tahun" name="awal" class="k-widget k-combobox k-header" style="width:200px; height:25px;">
 										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
									</select> - 
									<select id="tahun" name="akhir" class="k-widget k-combobox k-header" style="width:200px; height:25px;">
									<option value="<?php echo $tahun_akhir;?>" selected><?php echo $tahun_akhir;?></option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
									</select>
								</td>	
							  </tr>
							  <tr>
								<td>Tahun</td>
								<td>:</td>
								<td>
									<select id="tahun" name="tahun" class="k-widget k-combobox k-header" style="width:300px; height:25px;" value=>
										<option value="<?php echo $tahun;?>" selected><?php echo $tahun;?></option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
									</select>
								</td>	
							  </tr>								  
							  <tr>
								<td>Status</td>
								<td>:</td>
								<td>
								<?php
									if($redit['status'] == "7"){
								?>
								<input type="radio" name="status" value="3"/>RPIJM Lengkap<br/><input type="radio" name="status" value="7" checked="checked"/>RPIJM Hanya Matrik
								<?php
									}else{
								?>
								<input type="radio" name="status" value="3" checked="checked"/>RPIJM Lengkap<br/><input type="radio" name="status" value="7" />RPIJM Hanya Matrik
								<?php }?>
								</td>
							  </tr>
							  <tr>
								<td><input type="hidden" name="id" value="<?php echo $id;?>"/>
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
			
			<table width="90%" class="k-grid">
			<tr>
				<th>No</th>
				<th>Wilayah</th>
				<th>Propinsi</th>
				<th>Kabupaten / Kota</th>
				<th>Masa Berlaku</th>
				<th>Tahun</th>
				<th>Status</th>
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
			
			$sqlview = "SELECT * FROM rpijm ORDER BY rpijm_pk DESC";
			$resultview = pg_query($sqlview);
			if (!$resultview) {
				echo "no results ";
			}
			$tcount = pg_num_rows($resultview);
			$tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
			$reload = $_SERVER['PHP_SELF'] . "?tpages=" . $tpages . "&amp;adjacents=" . $adjacents;
					
			if ($tcount == 0) {
				echo "Data Belum Terisi!";
			} else {
				$count = 0;
				$i = ($page-1)*$rpp;
				while(($count<$rpp) && ($i<$tcount)) {
				pg_result_seek($resultview,$i);
				$rowview = pg_fetch_array($resultview);
				$s = $i+1;
				if ($rowview['status'] == "7"){
					$status = "RPIJM Hanya Matrik";
				}else{
					$status = "RPIJM Lengkap";
				}
				echo "<tr>";
					echo "<td>$s</td>";
					echo "<td>$rowview[wilayah]</td>";
					echo "<td>$rowview[propinsi]</td>"; 
					echo "<td>$rowview[kab_kota]</td>";
					echo "<td>$rowview[masa_laku]</td>";
					echo "<td>$rowview[tahun]</td>";
					echo "<td>$status</td>";					
					echo "<td align=\"center\"><a href=rpijm.php?id_edit=$rowview[rpijm_pk]>Edit</a> | <a href=\"rpijm.php?id_delete=$rowview[rpijm_pk]\" onclick='return confirmDelete();'>Delete</a></td>";
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