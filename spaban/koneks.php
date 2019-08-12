<?
	error_reporting(0);
	$host_db="localhost";//"192.168.0.250";
	$user_db="postgres";
	$pass_db="root@ck.ciptakarya.pu.go.id";//"root";
	$db="spaban_ad";
	$conn = pg_connect("host=$host_db dbname=$db user=$user_db password=$pass_db");
?>