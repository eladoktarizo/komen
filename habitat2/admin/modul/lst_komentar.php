 
		   <span class="navbar-form navbar-right">
            <a class='conf' style="cursor:pointer;"><span class='glyphicon glyphicon-floppy-open'> ExportToExcel</span><br>
         </a>
          </span>
          <h2 class="sub-header"><span class='glyphicon glyphicon-comment'> Komentar</h2></span>


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
					$getevent="select * from pertanyaan where status='$idevent' order by id asc  ";
					
					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						if($bgcolor==" bgcolor='#fff'"){$bgcolor=" bgcolor='#f1f1f1'";}else{$bgcolor=" bgcolor='#fff'";}
						$nm=$dtev['nama'];
						$direktorat=$dtev['direktorat'];
						$komentar=$dtev['komentar'];
						$id=$dtev['id'];
						$vt=$dtev['flag'];
						if($direktorat=="kosong"){
							$dirr = "-";
						}else{
							$dirr=$direktorat;
						}
						
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
					  <td $bgcolor>$dirr</td>
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