<?php
include"koneksi.php";
if(isset($_POST['id'])){
	$id=$_POST['id']; // membuat variabel untuk isi dari data base
}
if(isset($_POST['uname'])){
	$username=$_POST['uname'];
}
if(isset($_POST['nama'])){
	$nama=$_POST['nama'];
}
if(isset($_POST['cb'])){
	$level=$_POST['cb'];
}
if(isset($_POST['pwd'])){
	$passwd=$_POST['pwd'];
}
$pilih=$_GET[pilih];
switch($pilih){  // memilih proses dengan switch
	case "tambah" : mysql_query("insert into t_member (username,passwd,nama,level)values ('$username','$passwd','$nama','$level')");break;
	case "ubah"	  : mysql_query("update t_member set nama='$nama', username='$username', level='$level' where id='$id'");break;
	case "hapus"  : mysql_query("delete from t_member where id='$id'");
}
header("location:index.php");	
//print "insert into t_member values ('$username','$passwd','$nama','$level')";
?>