<?
set_time_limit(0);
error_reporting(0);
include "koneksi.php";
$que=$_GET['q'];
$nm1=$_GET['n'];
$nm=str_replace(" ","_",$nm1);
$tg = date("dMY");
if(isset($_COOKIE["ID_my_site"])){
	$username1 = $_COOKIE["ID_my_site"];
	$pass1 = $_COOKIE["Key_my_site"];
	$check1 = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
	while($info = mysql_fetch_array( $check1 )){	
		if ($pass1 != $info['passwd']){ 
			header("Location: login.php");
		} else {
      
     
			$sql = "Select nama as Nama,direktorat as DIrektorat,komentar as Komentar,tanggal as Tanggal from pertanyaan where status='$que'";
			 // Execute query
			$result = @mysql_query($sql,$conn) or die("Failed to execute query:<br />" . mysql_error(). "<br />" . mysql_errno());
			 
			// Header info settings
			header("Content-Type: application/xls");
			header("Content-Disposition: attachment; filename=$nm$tg.xls");
			header("Pragma: no-cache");
			header("Expires: 0");
			 
			/***** Start of Formatting for Excel *****/
			// Define separator (defines columns in excel &amp; tabs in word)
			$sep = "\t"; // tabbed character
			 
			// Start of printing column names as names of MySQL fields
			for ($i = 0; $i<mysql_num_fields($result); $i++) {
			  echo mysql_field_name($result, $i) . "\t";
			}
			print("\n");
			// End of printing column names
			 
			// Start while loop to get data
			while($row = mysql_fetch_row($result))
			{
			  $schema_insert = "";
			  for($j=0; $j<mysql_num_fields($result); $j++)
			  {
				if(!isset($row[$j])) {
				  $schema_insert .= "NULL".$sep;
				}
				elseif ($row[$j] != "") {
				  $schema_insert .= "$row[$j]".$sep;
				}
				else {
				  $schema_insert .= "".$sep;
				}
			  }
			  $schema_insert = str_replace($sep."$", "", $schema_insert);
			  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
			  $schema_insert .= "\t";
			  print(trim($schema_insert));
			  print "\n";
			}
		}
	}
} else {
	header("Location: login.php");
}
mysql_close($conn);
?> 