<?php
session_start();
header("Content-type: image/jpg");
function RandomCode($max){
/* $char = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y",
			  "Z","a","b","c","d","e","f","g","h","j","k","l","m","n","p","q","r","s","t","u","v","w","x",
			  "y","z","1","2","3","4","5","6","7","8","9"); */
$char = array("a","b","c","d","e","f","g","h","j","k","l","m","n","p","q","r","s","t","u","v","w","x",
			  "y","z","1","2","3","4","5","6","7","8","9");
$keys = array();
while(count($keys) < $max) {
    $x = mt_rand(0, count($char)-1);
    if(!in_array($x, $keys)) {
       $keys[] = $x;   
    }		
}
$random='';
foreach($keys as $key => $val){
   $random .= $char[$val];  
}
return $random;
}
$font='./fonts/VeraMoBd.ttf';
$images='./images/mk-logo.jpg';
$im = imagecreatefromjpeg("$images")or die("Cannot Initialize new GD image stream");
$text_color = imagecolorallocate($im, 29, 126, 200);
$text=RandomCode(6);
$_SESSION['captcha']=$text;
imagettftext($im, 40, 0, 20, 60, $text_color, $font, $text);
imagejpeg($im);
imagedestroy($im);
?>