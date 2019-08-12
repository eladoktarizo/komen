<?php


 
	if(isset($_GET['sort'])){
 
		$idl=$_GET['Levent'];
				$ambilev1 = "select * from event where id='$idl'";
 				$resambilev1 = mysql_query($ambilev1);
				while($evx1 = mysql_fetch_array($resambilev1)){
					$nme = $evx1['nama'];
				}
	}else{
		$idl=$idevent;
		$nme = $nmevent;
	}

	if(isset($_GET['del'])){
		$id_del = intval($_GET['del']);
		$deleting = "DELETE FROM `pertanyaan` WHERE id ='$id_del' LIMIT 1";
		mysql_query($deleting);
		echo '<script>
				 window.location.href = "index.php?Levent='.$idl.'&q=history_komentar&sort=Show";
		</script>';

	}





?>

          <h2 class="sub-header"><span class='glyphicon glyphicon-folder-open'></span>  Arsip Komentar</h2>
		   	<div class="navbar-form " style="width:100%;float:right;text-align:right;">	
	<a href="export.php?q=<?php echo $idl;?>&n=<?php echo $nme;?>"class='conf' style="cursor:pointer;" target="_blank"><span class='glyphicon glyphicon-floppy-open'></span>  Export To Excel<br>         </a>
</div>		   
         <div class="navbar-form " style="width:100%;">
          <form  action='index.php?q=history_komentar'>
		  <label>
			Komentar untuk event  
		  </label>
		  <select name='Levent' id='Levent' class="form-control">
			<?php
				$ambilev = "select * from event ";
				$resambilev = mysql_query($ambilev);
				while($evx = mysql_fetch_array($resambilev)){
					echo "<option value='$evx[id]' selected>$evx[nama]</option>";
}
			 
			?>
		  </select>
            <input type="hidden" class="form-control" name='q' value='history_komentar' >
            <input type="submit" class="form-control btn-primary" id='sort' name='sort' value='Show' >
          </form><br>
 <label class="form-control" > <span class='glyphicon glyphicon-folder-open'></span>  Arsip Komentar <?php echo $nme;?> </label>            
</div>

           <div class="table-responsive">
            <table class="table table-striped">
              <thead bgcolor="#428bca">
                <tr>
 
                  <th>No</th>
                  <th>Nama</th>
                  <th>Direktorat</th>
                  <th>Komentar</th>
                  <th>Hapus</th> 
                </tr>
              </thead>
              <tbody>
			  <?php
				if(isset($_GET['sort']))
				{
					 
					$i=1;
					$bgcolor=" bgcolor='#fff'";
					//`id`, `nama`, `direktorat`, `pembawa`, `komentar`, `status`, `vote`, `tanggal`, `id_user`, `level`, `flag`
					$getevent="select * from pertanyaan where status='$idl' order by tanggal desc";
 					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						if($bgcolor==" bgcolor='#fff'"){$bgcolor=" bgcolor='#f1f1f1'";}else{$bgcolor=" bgcolor='#fff'";}
						$nm=$dtev['nama'];
						$direktorat=$dtev['direktorat'];
						$komentar=$dtev['komentar'];
						$id = $dtev['id'];
						//$flag=$dtev['flag'];
                echo "
					<tr>
					  <td $bgcolor>$i</td>
					  <td $bgcolor>$nm</td>
					  <td $bgcolor>$direktorat</td>
					  <td $bgcolor>$komentar</td>
					  <td $bgcolor><a onclick='myFunction($id)'>Hapus</a></td>
					   
					</tr>";
						$i++;
					}
 
					} 
			  ?>

               
              </tbody>
            </table>
          </div>
        </div>
		<br>
		<br>		
<script>
 	 


</script>
<script>
	function myFunction(id="") {
	    var txt;
	    var r = confirm("Anda Yakin Mau Menghapus ?");
	    if (r == true) {
	        // txt = "You pressed OK!";
	        // alert(id);
	        window.location.href = "index.php?Levent=<?php echo $idl ?>&q=history_komentar&sort=Show&del="+id;
	    } else {
	        txt = "Tidak Jadi Di Hapus";
	        alert(txt);
	    }
	    // alert("berhasil Di Hapus");
	}
</script>
