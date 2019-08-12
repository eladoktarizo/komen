<?php
ini_set('display_errors', 'On'); 
if(isset($_GET['apdet']))
{
	$no=$_GET['no'];
	$id = $_GET['id'];
 
		include "../koneksi.php";
		$updatelogo="update logo set nourut='$no' where id='$id'";
		$resuplogo = mysql_query(updatelogo);
		echo $updatelogo;
			include "modul/getevent1.php";
	
}
if(isset($_GET['show']))
{
	$show=$_GET['show'];
	$k = $_GET['k'];
	$z = $_GET['z'];

	if($show=='1')
	{
 
		
		$updateEv="update logo set flag='1' where id='$k'";
		$resup = mysql_query($updateEv);
	}else{
		$updateEv="update logo set flag='0' where id='$k'";
		$resup = mysql_query($updateEv);
	
	}
			include "modul/getevent1.php";
	
}
if(isset($_GET['z']))
{
 	$k = $_GET['k'];
	$z = $_GET['z'];

 
  $xy = split("/",$_SERVER['REQUEST_URI']);
$local="$xy[1]";
$file =$_GET['u'];
$hpp = $local."/".$file;
chown( ($_SERVER['DOCUMENT_ROOT']."/$url"),777);
if (!unlink($_SERVER['DOCUMENT_ROOT']."/$hpp"))
  {
  //echo ("Error deleting $file");
  }
else
  {
  //echo ("Deleted $file");
  }		$updateEv="delete from logo where id='$k'";
		$resup = mysql_query($updateEv);
	
	 
			include "modul/getevent1.php";
	
}

?>
          <h2 class="sub-header"><span class='glyphicon glyphicon-picture'></span>  Logo Event</h2>
 <input type='submit' name='apdet' id='apdet' value='Update No Urut' class='btn-primary'>
 <br>
 <br>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead bgcolor="#428bca">
                <tr>
                   <th  >No</th>
                  <th >Logo</th>
                  <th >Nama Logo</th>
                  <th >No urut</th>
                   <th >Action</th> 

                </tr>
              </thead>
              <tbody>
			  <?php
 
					$i=1;
	 
					$bgcolor=" bgcolor='#fff'";
					//`id`, `nama`, `direktorat`, `pembawa`, `komentar`, `status`, `vote`, `tanggal`, `id_user`, `level`, `flag`
					$getevent="select * from logo  order by nourut asc";
 					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						if($bgcolor==" bgcolor='#fff'"){$bgcolor=" bgcolor='#f1f1f1'";}else{$bgcolor=" bgcolor='#fff'";}
						$nm=$dtev['nama'];
						$idna=$dtev['id'];
						$url=$dtev['url']; 
						$id=$dtev['id'];
						$flag=$dtev['flag'];
						$nourut=$dtev['nourut'];
 
						if($flag=='1')
						{
							$xx=" <span class='glyphicon glyphicon-star'></span>";
							$aa="<a href='index.php?q=logo&k=$idna&show=0'><span class='glyphicon glyphicon-remove'></span>  Cabut Logo</a>";
							$bek = "bgcolor='#A4FF98'";
						}else{
							$aa="<a href='index.php?q=logo&k=$idna&show=1'><span class='glyphicon glyphicon-ok'></span>  Pasang Logo</a>";	
								$bek = "bgcolor='#fff'";
								$xx="";
						}
						
						//$flag=$dtev['flag'];
                echo "
					<tr>
					   
					<td $bgcolor>$i</td>
					  <td $bgcolor><a href='../$url' target='_blank' title='Lihat'><img src='../$url' width='80px' ></a></td>
					  <td $bgcolor>$nm</td> 
					  <td $bgcolor>
						 
							  <input type='text' name='no$i' id='no$i' size='3' value='$nourut' >
							  <input type='hidden' name='q' id='q' size='3' value='logo' > 
							  <input type='hidden' name='id$i' id='id$i' size='3' value='$idna' > 
							  
							  
						 
					</td> 
 					  <td $bgcolor>$aa  | <a href='index.php?q=logo&k=$idna&z=hapus&u=$url'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td> 

					   
					</tr>";
						$i++;
 				
					}
					$tot = mysql_num_rows($resev);
					echo "<input type='hidden' name='tot' id='tot' size='3' value='$tot' > ";
					//mysql_close($conn);
				
			  ?>

               
              </tbody>
            </table>
          </div>
        </div>
		<br>
		<br>		