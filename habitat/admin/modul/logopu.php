<?php
ini_set('display_errors', 'On'); 
 
if(isset($_GET['show']))
{
	$show=$_GET['show'];
	$k = $_GET['k'];
 
	if($show=='1')
	{
 
 
		$updateEv="update logopu set flag='1' where id='$k'";
		$resup = mysql_query($updateEv);
	}else{
		$updateEv="update logopu set flag='0' where id='$k'";
		$resup = mysql_query($updateEv);
	
	}
			include "modul/getevent1.php";
	
}
if(isset($_GET['show2']))
{
	$show=$_GET['show2'];
	$k = $_GET['k'];
 
	if($show=='1')
	{
 
		
		$updateEv="update logopu set flag2='1' where id='$k'";
		$resup = mysql_query($updateEv);
	}else{
		$updateEv="update logopu set flag2='0' where id='$k'";
		$resup = mysql_query($updateEv);
	
	}
			include "modul/getevent1.php";
	
}
if(isset($_GET['z']))
{
 	$k = $_GET['k'];
	$z = $_GET['z'];

 
 /*$xy = split("/",$_SERVER['REQUEST_URI']);
$local="$xy[1]";
$file =$_GET['u'];
$hpp = $local."/habitat/".$file;
 chown( ("http://ciptakarya.pu.go.id//$hpp"),777);
if (!unlink("http://ciptakarya.pu.go.id//$hpp"))
  {
  //echo ("Error deleting $file");
  }
else
  {
  //echo ("Deleted $file");
  }	
*/
		$updateEv="delete from logopu where id='$k'";
		$resup = mysql_query($updateEv);
	
	 
			include "modul/getevent1.php";
	
}

?>
          <h2 class="sub-header"><span class='glyphicon glyphicon-picture'></span>  Logo PU</h2>
 <a href="index.php?q=add_logopu"><button name='apdet' id='apdet' class='btn-primary'>Tambah Logo PU</button></a>
 <br>
 <br>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead bgcolor="#428bca">
                <tr>
                   <th  >No</th>
                  <th >Logo</th>
 
                   <th >Action</th> 

                </tr>
              </thead>
              <tbody>
			  <?php
 
					$i=1;
	 
					$bgcolor=" bgcolor='#fff'";
					//`id`, `nama`, `direktorat`, `pembawa`, `komentar`, `status`, `vote`, `tanggal`, `id_user`, `level`, `flag`
					$getevent="select * from logopu  order by id asc";
 					$resev=mysql_query($getevent);
					while($dtev=mysql_fetch_array($resev)){
						if($bgcolor==" bgcolor='#fff'"){$bgcolor=" bgcolor='#f1f1f1'";}else{$bgcolor=" bgcolor='#fff'";}
 
						$idna=$dtev['id'];
						$url=$dtev['url']; 
						$id=$dtev['id'];
						$flag=$dtev['flag'];
						$flag2=$dtev['flag2'];
						 
						if($flag=='1')
						{
							$xx=" <span class='glyphicon glyphicon-star'></span>";
							$aa="<a href='index.php?q=logopu&k=$idna&show=0'><span class='glyphicon glyphicon-ok'></span>  Komentar</a>";
 							$bek = "bgcolor='#A4FF98'";
						}else{
							$aa="<a href='index.php?q=logopu&k=$idna&show=1'><span class='glyphicon glyphicon-remove'></span>  Komentar</a>";	
 								$bek = "bgcolor='#fff'";
								$xx="";
						}
						if($flag2=='1')
						{
							$xx2=" <span class='glyphicon glyphicon-star'></span>";
 							$aa2="<a href='index.php?q=logopu&k=$idna&show2=0'><span class='glyphicon glyphicon-ok'></span>  Slide</a>";
							$bek2 = "bgcolor='#A4FF98'";
						}else{
 							$aa2="<a href='index.php?q=logopu&k=$idna&show2=1'><span class='glyphicon glyphicon-remove'></span>  Slide</a>";	
								$bek2 = "bgcolor='#fff'";
								$xx2="";
						}
						
						//$flag=$dtev['flag'];
                echo "
					<tr>
					   
					<td $bgcolor>$i</td>
					  <td $bgcolor><a href='../$url' target='_blank' title='Lihat'><img src='../$url' width='80px' ></a></td>
				 
 
 					  <td $bgcolor>$aa  $aa2  | <a href='index.php?q=logopu&k=$idna&z=hapus&u=$url'><span class='glyphicon glyphicon-trash'></span> Hapus</a></td> 

					   
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