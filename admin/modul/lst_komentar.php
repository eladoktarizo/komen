 

          <h2 class="sub-header"><span class='glyphicon glyphicon-comment'></span>  Komentar</h2>
		   <span class="navbar-form " >
				<a href="export.php?q=<?php echo $idevent;?>&n=<?php echo $nmevent;?>"class='conf' style="cursor:pointer;" target="_blank"><span class='glyphicon glyphicon-floppy-open'></span>  Export To Excel<br>   
				</a>	
			</span>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead bgcolor="#428bca">
                <tr>
                   <th ><input type='checkbox' name='cekal' id='cekal'> </th> 
                  <th  >No</th>
                  <th >Nama</th>
                  <th >Direktorat</th>
                  <th >Komentar</th> 

                </tr>
              </thead>
              <tbody>
			  <?php
 
					$i=1;
	 
					$bgcolor=" bgcolor='#fff'";
					//`id`, `nama`, `direktorat`, `pembawa`, `komentar`, `status`, `vote`, `tanggal`, `id_user`, `level`, `flag`
					$getevent="select * from pertanyaan where status='$idevent' order by tanggal desc  ";
					// echo $getevent;
					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						if($bgcolor==" bgcolor='#fff'"){$bgcolor=" bgcolor='#f1f1f1'";}else{$bgcolor=" bgcolor='#fff'";}
						$nm=$dtev['nama'];
						$direktorat=$dtev['direktorat'];
						$komentar=$dtev['komentar'];
						$id=$dtev['id'];
						$vt=$dtev['flag'];
						if($vt=='1'){
							$vtt="<input type='checkbox' name='cek[]' class='cek' value='$id' checked>";
						}else{
							$vtt="<input type='checkbox' name='cek[]' class='cek' value='$id' >";						
						}
						//$flag=$dtev['flag'];
                echo "
					<tr>
					  <td $bgcolor> $vtt</td>
					<td $bgcolor>$i</td>
					  <td $bgcolor>$nm</td>
					  <td $bgcolor>$direktorat</td>
					  <td $bgcolor>$komentar</td>

					   
					</tr>";
						$i++;
 				
					}
					//mysql_close($conn);
				
			  ?>

               
              </tbody>
            </table>
          </div>
        </div>
		<br>
		<br>		