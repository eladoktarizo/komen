

          <h2 class="sub-header"><span class='glyphicon glyphicon-user'></span>  User</h2> 
          <div class="table-responsive">
            <table class="table table-striped">
              <thead bgcolor="#428bca">
                <tr>
 
                  <th>No</th>
                  <th>Username </th>
                  <th>Nama </th>
                  <th>Level Akses </th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
			  <?php
					$i=1;
					//`id`, `username`, `passwd`, `level`, `nama`
					$getevent="select * from t_member order by nama desc";
					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						$username=$dtev['username'];
						$level=$dtev['level'];
						$nama=$dtev['nama'];
						//$flag=$dtev['flag'];
						$idna=$dtev['id'];
						if($level=="1"){
							$lvl="Facilitator";
						}else
						if($level=="0"){
							$lvl="Jury";
						}
                echo "
					<tr>
					  <td>$i</td>
					  <td>$username</td>
					  <td>$nama</td>
					  <td>$lvl</td>
					  <td><a href='index.php?q=edituser&k=$idna'><span class='glyphicon glyphicon-edit'> Edit</span></a> | <a href='index.php?q=deluser&k=$idna'><span class='glyphicon glyphicon-trash'> Hapus</span></a></td> 
					</tr>";
						$i++;
					}
					mysql_close($conn);
			  ?>

               
              </tbody>
            </table>
          </div>
        </div>
				<br>
		<br>
?>