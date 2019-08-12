<?php
$host ="192.168.0.250";// "localhost";
$user = "postgres";
//$pass = "12345";
$pass = "root";//"root@ck.ciptakarya.pu.go.id";//
$db = "onemap_spatial"; //"mapmaker";
//$db = "mapmaker";
$port='5432';
$connect = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");
if($connect){
	//echo "terhubung";
}else{
	//echo "tidak terhubung";
}
?>