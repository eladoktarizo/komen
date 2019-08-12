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
          <h2 class="sub-header"><span class='glyphicon glyphicon-picture'></span>  Background Event</h2>
 <a href="index.php?q=gantibg"><button name='apdet' id='apdet' class='btn-primary'>Update Background</button></a>
 <br>
 <br>
 <img src="../img/bg/bg.jpg" style='width:100%'>

           </div>
        </div>
		<br>
		<br>		