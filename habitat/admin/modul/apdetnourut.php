<?php
include "../koneksi.php";
 
					if(isset($_GET['idnya'])) {
						$idnya = $_GET['idnya'];
					}
					if(isset($_GET['q'])) {
						$no = $_GET['q'];
					}
					
							include "../../koneksi.php";
					
 
						$get = "update logo set nourut='$no' where id='$idnya'";
 
						$result = mysql_query($get);
						if($result){
							//echo '1';
						//	echo $get ;
						}else{
							//echo "0";
							//echo $get ;
						}
 
 			 				
?>