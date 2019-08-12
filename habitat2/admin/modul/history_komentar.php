

          <h2 class="sub-header">Arsip Komentar</h2>
		  		   <span class="navbar-form ">
            <a class='conf' style="cursor:pointer;"><span class='glyphicon glyphicon-floppy-open'> ExportToExcel</span><br>
         </a>
          </span>
          <form class="navbar-form " action='index.php?q=history_komentar'>
		  <label>
			Komentar untuk event  
		  </label>
		  <select name='Levent' class="form-control">
			<?php
				$ambilev = "select * from event";
				$resambilev = mysql_query($ambilev);
				while($evx = mysql_fetch_array($resambilev)){
					echo "<option value='$evx[id]'>$evx[nama]</option>";
				}
			?>
		  </select>
            <input type="hidden" class="form-control" name='q' value='history_komentar' >
            <input type="submit" class="form-control" name='sort' value='Show' class='btn btn-primary'>
          </form>
           <div class="table-responsive">
            <table class="table table-striped">
              <thead bgcolor="#428bca">
                <tr>
 
                  <th>No</th>
                  <th>Nama</th>
                  <th>Direktorat</th>
                  <th>Komentar</th> 
                </tr>
              </thead>
              <tbody>
			  <?php
				if(isset($_GET['sort']))
				{
					$evh = $_GET['Levent'];
					$i=1;
					$bgcolor=" bgcolor='#fff'";
					//`id`, `nama`, `direktorat`, `pembawa`, `komentar`, `status`, `vote`, `tanggal`, `id_user`, `level`, `flag`
					$getevent="select * from pertanyaan where status='$evh' order by tanggal desc";
 					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						if($bgcolor==" bgcolor='#fff'"){$bgcolor=" bgcolor='#f1f1f1'";}else{$bgcolor=" bgcolor='#fff'";}
						$nm=$dtev['nama'];
						$direktorat=$dtev['direktorat'];
						$komentar=$dtev['komentar'];
						//$flag=$dtev['flag'];
                echo "
					<tr>
					  <td $bgcolor>$i</td>
					  <td $bgcolor>$nm</td>
					  <td $bgcolor>$direktorat</td>
					  <td $bgcolor>$komentar</td>
					   
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