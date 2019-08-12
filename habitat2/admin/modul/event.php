<?php
if(isset($_GET['show']))
{
	$show=$_GET['show'];
	$k = $_GET['k'];

	if($show=='1')
	{
		$ev = "update event set flag='0'";
		$resevx = mysql_query($ev);
		
		$updateEv="update event set flag='1' where id='$k'";
		$resup = mysql_query($updateEv);
	}else{
		$updateEv="update event set flag='0' where id='$k'";
		$resup = mysql_query($updateEv);
	
	}
			include "modul/getevent1.php";
	
}
?>

          <h2 class="sub-header"><span class='glyphicon glyphicon-calendar'>  Event</h2></span>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead bgcolor="#428bca">
                <tr>
 
                  <th>No</th>
                  <th>Nama Event</th>
                  <th>Tanggal Event</th>
                  <th>Lokasi Event</th>
                  <th> </th>
                  <th> </th>
                </tr>
              </thead>
              <tbody>
			  <?php
					$ayena=date('yyyy-mm-dd');
					$i=1;
					$getevent="select * from event order by tanggal desc";
					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						$idna=$dtev['id'];
						$nm=$dtev['nama'];
						$lokasi=$dtev['lokasi'];
						$tanggal=$dtev['tanggal'];
						$flag=$dtev['flag'];
						if($tanggal<$ayena){
							$bek = "bgcolor='#FF9D9D'";
						}else{
							$bek = "bgcolor='#fff'";
						}
						if($flag=='1')
						{
							$xx=" <span class='glyphicon glyphicon-star'></span>";
							$aa="<a href='index.php?q=event&k=$idna&show=0'><span class='glyphicon glyphicon-remove'>Sembunyikan Event</span></a>";
							$bek = "bgcolor='#A4FF98'";
						}else{
							$aa="<a href='index.php?q=event&k=$idna&show=1'><span class='glyphicon glyphicon-ok'>Tampilkan Event</span></a>";	
								$bek = "bgcolor='#fff'";
								$xx="";
						}
                echo "
					<tr $bek>
					  <td>$i</td>
					  <td>$xx $nm $xx</td>
					  <td>$tanggal</td>
					  <td>$lokasi</td>
					  <td>$aa</td> 
					  <td><a href='index.php?q=editevent&id=$idna'><span class='glyphicon glyphicon-edit'> Edit</span></a> | <a href='index.php?q=delevent&id=$idna'><span class='glyphicon glyphicon-trash'> Hapus</span></a></td> 
					</tr>";
						$i++;
					} 
			  ?>

               
              </tbody>
            </table>
          </div>
        </div>
		<br>
		<br>