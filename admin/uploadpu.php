<?php
include "koneksi.php";
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
	 
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
 
	$url = "img/logopu/".$_FILES['upl']['name'];
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], '../img/logopu/'.$_FILES['upl']['name'])){
		$insert = "insert into logopu(url)values('$url')";
		$resul = mysql_query($insert);
		
		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;