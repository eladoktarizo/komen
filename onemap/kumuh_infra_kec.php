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
                Kumuh Infrastruktur Kecamatan
				<div class="judul">OneMap</div>
            </div>
            <div class="body row scroll-y" style="padding: 0 10px 0 10px;">
			<?php
				if (isset($_POST['submit_add'])) {
			?>
			<h3>Form Input</h3>
            <form name="input" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table width="500" border="0">
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
                <td>Nama Kawasan</td>
                <td>:</td>
                <td><input type="text" name="nama_kawasan" class="k-textbox"/>
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
				<td>Jumlah</td>
				<td>:</td>
				<td><input type="text" name="jumlah" class="k-textbox"/>
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
					if(isset($_POST["nama_kawasan"])){
							$nama_kawasan = $_POST["nama_kawasan"];
						}
					if(isset($_POST["tahun"])){
							$tahun = $_POST["tahun"];
						}
					if(isset($_POST["jumlah"])){
						$jumlah = $_POST["jumlah"];
					}
					/*echo $propinsi."<br>";
					echo $kota."<br>";
					echo $kecamatan."<br>";
					echo $desa."<br>";
					echo $tema."<br>";
					echo $status."<br>";
					echo $id."<br>";*/
					
					$status = "1";
					$charini = 	array("+");
					$propnew = str_replace($charini, " ",$propinsi);
					$qinput = "INSERT INTO kumuh_infra_kec (propinsi, kab_kota, kec, nama_kawasan, tahun, jumlah, status) VALUES ('$propnew', '$kota', '$kecamatan', '$nama_kawasan', '$tahun', '$jumlah', '$status');";
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
					if(isset($_POST["nama_kawasan"])){
							$nama_kawasan = $_POST["nama_kawasan"];
						}
					if(isset($_POST["tahun"])){
							$tahun = $_POST["tahun"];
						}
					if(isset($_POST["jumlah"])){
							$jumlah = $_POST["jumlah"];
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
					$qedit = "UPDATE kumuh_infra_kec SET propinsi='$propnew', kab_kota='$kota', kec='$kecamatan', nama_kawasan='$nama_kawasan', tahun='$tahun', jumlah='$jumlah' WHERE kumuh_infra_kec_pk='$id'";
					pg_query($qedit);
					//echo $qedit;
					echo "<div class=\"success\">";
					echo "Data telah diubah<br/>";
					echo "<a href=".$_SERVER['PHP_SELF'].">Kembali ke Daftar Data</a>";
					echo "</div>";
				}else if(isset($_GET['id_delete'])){	//delete data
					$id_delete = $_GET['id_delete'];
					$query = "select * from kumuh_infra_kec where kumuh_infra_kec_pk = '$id_delete'";
					$result = pg_query($query);
					while ($row = pg_fetch_array($result)) {
						echo "<div class=\"success\">";
						echo "Telah berhasil dihapus.";
						echo "<a href=".$_SERVER['PHP_SELF'].">Kembali ke Daftar Data</a>";
						echo "</div>";
					}
					$sql2 = "DELETE FROM kumuh_infra_kec where kumuh_infra_kec_pk = '$id_delete'";
					pg_query($sql2);
				}else if(isset($_GET['id_edit'])){		//form edit data
					$id_edit = $_GET['id_edit'];
					$qedit = "select * from kumuh_infra_kec where kumuh_infra_kec_pk = '$id_edit'";
					$result = pg_query($qedit);
					while ($redit = pg_fetch_array($result)) {
						$propinsi = $redit['propinsi'];
						$kab = $redit['kab_kota'];
						$kecamatan = $redit['kec'];
						$nama_kawasan = $redit['nama_kawasan'];
						$tahun = $redit['tahun'];
						$jumlah = $redit['jumlah'];
						$id = $redit['kumuh_infra_kec_pk'];
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
								<td>Nama Kawasan</td>
								<td>:</td>
								<td><input type="text" name="nama_kawasan" class="k-textbox" value="<?php echo $nama_kawasan;?>"/>
								</td>	
							</tr>
							<tr>
								<td>Tahun</td>
								<td>:</td>
								<td>
									<select id="tahun" name="tahun" class="k-widget k-combobox k-header" style="width:300px; height:25px;">
										<option value="<?php echo $tahun;?>"><?php echo $tahun;?></option>
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
								<td>Jumlah</td>
								<td>:</td>
								<td><input type="text" name="jumlah" class="k-textbox" value="<?php echo $jumlah;?>"/>
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
				<th>Propinsi</th>
				<th>Kabupaten / Kota</th>
				<th>Kecamatan</th>
				<th>Nama Kawasan</th>
				<th>Tahun</th>
				<th>Jumlah</th>
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
			
			$sqlview = "SELECT * FROM kumuh_infra_kec ORDER BY kumuh_infra_kec_pk DESC";
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
					echo "<td>$s</td>";
					echo "<td>$rowview[propinsi]</td>"; 
					echo "<td>$rowview[kab_kota]</td>";
					echo "<td>$rowview[kec]</td>";
					echo "<td>$rowview[nama_kawasan]</td>";
					echo "<td>$rowview[tahun]</td>";
					echo "<td>$rowview[jumlah]</td>";
					echo "<td align=\"center\"><a href=kumuh_infra_kec.php?id_edit=$rowview[kumuh_infra_kec_pk]>Edit</a> | <a href=\"kumuh_infra_kec.php?id_delete=$rowview[kumuh_infra_kec_pk]\" onclick='return confirmDelete();'>Delete</a></td>";
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