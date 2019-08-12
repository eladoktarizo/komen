<?php
include "cekaray.php";
/*
					if(isset($_GET['idnya'])) {
						$idnya = $_GET['idnya'];
					}
					if(isset($_GET['q'])) {
						$fl = $_GET['q'];
					}
					
							include "../../koneksi.php";
					
						if($fl=='ya'){
						$get = "update pertanyaan set flag='1'  where id='$idnya'";
						}else{
						$get = "update pertanyaan set flag='0'  where id='$idnya'";
						}
						$result = mysql_query($get);
						if($result){
							echo '1';
						}else{
							echo "0";
							echo $get ;
						}
*/
foreach($dtev as $x=>$x_value) {
  if ($x_value=='6'){
		echo  $x_value;
  }
  
}
 			 				
?>