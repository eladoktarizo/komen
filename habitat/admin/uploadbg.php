<?php
 
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip');
chown( "../img/bg/bg.jpg",777);
if (unlink("../img/bg/bg.jpg"))
{
if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
	 
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);
 	$url = "img/bg/".$_FILES['upl']['name'];
	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], '../img/bg/'.$_FILES['upl']['name'])){
		
		rename("../img/bg/".$_FILES['upl']['name'],"../img/bg/bg.jpg");
		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;

}