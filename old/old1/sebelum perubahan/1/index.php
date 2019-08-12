<?php
 
include "koneksi.php";
session_start();
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		//if($username1!='user'){
		$check1 = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = mysql_fetch_array( $check1 )){	
			if ($pass1 != $info['passwd']){ 
				header("Location: login.php");
			} else {
			$nama = $info['nama'];
?>
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="images/png" href="img/iiww.png"/>
	<title>Form Comment - IIWW </title>
	<style>
		body{
			background:url(images/batik_blue.jpg);
			/*background:url(file:///D:/post-bg_ori.jpg);*/
			font-family: segoe ui,calibri,helvetica,helvetica neue,sans-serif;
			color:#555;
			font-size: 18px;
 		}
		.alert{
			padding:5px 10px;
			background:white;
			border-radius:5px;
			box-shadow: 0 0 10px rgba(0,0,0,.2);
			width:600px;
			margin:10px auto;
			text-align: center;
			font-style: italic;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			position: absolute;
			left: 50%;
			top: 50%;
			margin: -130px 0 0 -275px;			
		}
		.alert p{
			margin:10px 0;
		}
		.question header{ border-bottom:1px solid #dedede; margin-bottom:20px; background-color:#ffffff;}
		.question header #logo,.question header h1,.question header #logo2{
			display: inline-block;
			vertical-align: middle
		}
		.question header #logo{
			padding-right:10px;
			border-right:1px solid #dedede;
		}
		.question header #logo2{
			float:right;
			border-left:1px solid #dedede;
			padding-left:10px;
			}
		.question header h1{
			font-weight: normal;
			padding-left:10px;
		}
		.question{
			width:600px;
			padding:30px 20px;
			background-color:white;
			/*background-image:url(images/head_bg.jpg);
			background-image:url(file:///D:/envelope.png);*/
			background-repeat:repeat-x;
			 
			background-position:10px 0;
			position:relative;
			margin:50px auto 0;
			border-radius:5px;
			box-shadow:0 0 10px rgba(0,0,0,.2);
			border:1px solid #adadad;
			overflow: hidden;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			box-shadow:0px 0px 25px 0px #006699;
		}
		.question:after{
			content:"";
			width:100%;
			height:17px;
			bottom:0;
			left:0;
			position: absolute;
			/*background-image:url(images/head_bg.jpg);
			background:url(file:///D:/envelope.png) repeat-x;*/
			background-position:10px 0;
			/*border-bottom-left-radius:5px;
			border-bottom-right-radius:5px;*/
		}
		.question form div.input{ 
			position: relative;
			display: table;
			width:100%;
			border-bottom:1px solid #dedede;
		}
		
		.question label,.question .control{
			display: table-cell;
		}
		.question label{
			width:100px;
			padding:10px;
			position: relative;
			text-align: right;
		}
		.question label#lblkomentar{position: relative;}
		.question input,.question textarea{
			width:100%;
			padding:10px;
			border:none;
			margin-bottom:10px;
			position:relative;
			color:#555;
			font-size: 18px;
			font-family: inherit;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			outline: none;
			background: #EAF2FF;
			border-radius: 10px;
		}
 
		.question .pkomentar{
			width:100px;
			display: block !important;
		}
		.question .pver{margin-bottom:20px}
		.question textarea{
			padding-left:10px;
			width:100%;
			display: block;
			-webkit-transition: height .3s ease;
			-moz-transition: height .3s ease;
			-ms-transition: height .3s ease;
			-o-transition: height .3s ease;
			transition: height .3s ease;
		}
		#kirim{
			width: auto ;
			padding:10px;
			border-radius:3px;
			text-shadow:0 -1px 0 rgba(0,0,0,.5);
			box-shadow:0 1px 0 rgba(0,0,0,.3);
			float:right;
			border-bottom:none;
			background:#519fe2;
			color:white;
		}
		figure{
			width:300px;
			height:80px;
			overflow:hidden;
			display:inline-block;
			margin:0;
		}
		figure img{
			position:relative;
			top:-10px;
		}
		#cklogo{display:none;}
		@media screen and (max-width:600px){
			.question{	width:100%; margin-top:10px; 	}
			#logo,header h1{ 
				display: block !important;
				text-align: center !important;
			}
			#logo{ border-right:none !important }
			#logo2{display:none!important;}
			.alert{	width:100%;	}
			#cklogo{display:inline-block;}
		}
 

.styled-select {
	width: 100%;
	/*background: url(images/down_arrow_select1.png) no-repeat right;*/
	 cursor:pointer;
}
.question .input .styled-select select {
	padding: 5px;
	border: 0;
	border-radius: 0;
	font-size: 16px;
 
	height: 34px;
	-webkit-appearance: none;
	background: #EAF2FF;
	width: 100%;
	border-radius: 10px;
}

.styled-select select:focus {
   outline: none;
}
#translt{
margin-bottom: 20px;
float: right;
margin-top: -20px;	
}
#translt1{
margin-bottom: 20px;
float: left;
margin-top: -20px;
font-family: arial;
font-size: 15px;
color: #F0C237;
text-shadow: 1px 1px 1px #000000;
font-weight: bold;
}
#sudah{
font-family: tahoma;
font-size: 12px;
margin-bottom: 10px;
}
	</style>
		<script type="text/javascript" src="js/jquery.min.js"></script>	
		<script type="text/javascript">
 			$(function(){
				//display();
				//var reloadData = 10 * 1000 * 2;
				//var holdTheInterval = setInterval(display, reloadData);
			});
		</script>	
</head>
<body>
	<?php

		if (isset($_POST['submit_add'])) {
			if ($_POST['captcha'] == $_SESSION['captcha']) {
				if(isset($_POST["Nama"])){
					$Nama = $_POST["Nama"];
				}
				if(isset($_POST["level"])){
					$level = $_POST["level"];
				}
				if(isset($_POST["idu"])){
					$idu = $_POST["idu"];
				}
				/*if(isset($_POST["Direktorat"])){
					$Direktorat = $_POST["Direktorat"];
				}*/
				$Direktorat = 'kosong';
				if(isset($_POST["Pembawa"])){
					$Pembawa = $_POST["Pembawa"];
				}
				if(isset($_POST["Komentar"])){
					$Komentar = $_POST["Komentar"];
				}
 
				if(isset($_POST['st'])){
					if ($_POST['st']==2)
					{
						$xx = "<p>Thanks, Your comment has been sent !</p><p><a href=''>Click here to send other comments</a></p>";					

					}else{
						$xx = "<p>Komentar telah dikirim, Terima Kasih!</p><p><a href=''>Klik untuk mengirim komentar lainnya</a></p>";

						}
				}
				$tgl1 = date("Y-m-d");
				$cek_id = "select * from pertanyaan where id_user='$info[id]'  and pembawa='$Pembawa'  and tanggal='$tgl1'";
				//print $cek_id;
				$rescek = mysql_query($cek_id);
				$dt = mysql_fetch_array($rescek);
				$sesina = $dt['pembawa'];
				if($Pembawa != $sesina){
					$tgl = date("Y-m-d");
					$que = "insert into pertanyaan (nama,direktorat,pembawa,komentar, status,tanggal,id_user,level) VALUES ('$Nama','$Direktorat','$Pembawa','$Komentar','0','$tgl','$idu','$level' )";
					
					$ins = mysql_query($que);
					if ($ins) {
						?>
							<div class="alert" id="alert">
								<?php echo $xx;?>
							</div>
						<?
					} else {
						?>
							<div class="alert" id="alert">
								<?php echo $xx;?>
							</div>
						<?
					}
				}else{
				echo '<div class="alert" id="alert">Anda sudah mengomentari sesi ini<br><p><a href="javascript:history.go(-1)">Klik untuk mengganti sesi</a></p></div>';
				}
			} else {
				echo '<div class="alert" id="alert">Kode yang anda masukkan salah<br><p><a href="javascript:history.go(-1)">Klik untuk mengirim ulang</a></p></div>';
			}
		} else {
		

	
		 
?>

	<div class="question">
		<header>
			<div id="logo">
				<img src="img/indonesia_water_week_logo.png" height=65>
				<img src="img/logo_login2.png" height=65 id="cklogo">
			</div>
			<h1 id="form_komen">Form <strong>Komentar</strong></h1>
			<div id="logo2">
				<img src="img/logo_login2.png" height='65' style='width: 64px;'>
			</div>
		</header>
		<div id='translt'>
			<select name="transl" id="transl">
				<option value="1" selected> Bahasa Indonesia</option>
				<option value="2"> English</option>
			</select>
		</div>
		<div id='translt1'>
			Surabaya, 21-22 Mei 2014
		</div><br>
 
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
			<div class="input">
				<label for="nama" id="nama">Nama :</label>
				<div class="control">
					<input type="text" id="nama" name="Nama" value="<?php echo $nama;?>"  readonly>
					<input type="hidden" id="st" name="st" >
					<input type="hidden" id="level" name="level" value="<?php echo $info['level'];?>">
					<input type="hidden" id="idu" name="idu" value="<?php echo $info['id'];?>">
				</div>
			</div>
 
			<div class="input">
				<label for="penyaji" id="penyaji">Penyaji :</label>
				<div class="styled-select">
 					
				<span id="penyajinya"></span>
 
			</div>
			</div>			
 			<div class="pkomentar input">
				<label for="komentar" id="lblkomentar">Komentar :</label>
				<div>
					<textarea rows="1" name="Komentar" id="komentar"></textarea>
				</div>
			</div>
			
			<div class="input pver">
				<label for="captcha" id="captcha">Kode Verifikasi :</label>
				<div class="control">
				<span id='txtcoment'></span>
					
				</div>
			</div>
			<figure>
			<img src="captcha.php" />
			</figure>
			<span id="tbl_send"></span>

			</form>
			<span id="tbl_Logout"></span>
			<?php
 
	 
		}
	?>

	<script src="jquery/jquery.js"></script>
	<script src="jquery/jquery.autosize.min.js"></script>
	<script>
		$(function(){
					document.getElementById('form_komen').innerHTML = 'Form Komentar';
					document.getElementById('nama').innerHTML = 'Nama';
					//document.getElementById('direktorat').innerHTML = 'Direktorat';
					document.getElementById('penyaji').innerHTML = 'Penyaji';
 
					document.getElementById('lblkomentar').innerHTML = 'Komentar';
					document.getElementById('captcha').innerHTML = 'Kode Verifikasi';				
					document.getElementById('txtcoment').innerHTML = '<input type="text" name="captcha" id="captcha" placeholder="Ketikkan kode verifikasi di bawah"/>';
					document.getElementById('tbl_send').innerHTML = '<input type="submit" value="Kirim Komentar" id="kirim" name="submit_add"/>';
					document.getElementById('tbl_Logout').innerHTML = '<a href="logout.php"><button   id="kirim" name="out"/>Logout</button></a>';
	 	//	document.getElementById('alertz').innerHTML = '<p>Komentar telah dikirim, Terima Kasih!</p><p><a href="">Klik untuk mengirim komentar lainnya</a></p>';
					document.getElementById('penyajinya').innerHTML = '<select name="Pembawa" id="penyaji" class="select"><option value="sesi-1">Sesi 1</option><option value="sesi-2">Sesi 2</option><option value="sesi-3">Sesi 3</option><option value="sesi-4">Sesi 4</option><option value="sesi-5">Sesi 5</option><option value="sesi-6">Sesi 6</option><option value="sesi-7">Sesi 7</option><option value="Umum">Umum</option></select>';			
			$("#komentar").autosize();
			$("#transl").change(function(){
				 var x = document.getElementById("transl").value;
				 document.getElementById("st").value = x;
				 console.log(x);
				 if (x==2)
				{
					document.getElementById('form_komen').innerHTML = '<b>Comment</b> Form';
					document.getElementById('nama').innerHTML = 'Name';
					//document.getElementById('direktorat').innerHTML = 'Directorate';
 					document.getElementById('penyaji').innerHTML = 'Presenter';
					document.getElementById('lblkomentar').innerHTML = 'Comment';
					document.getElementById('captcha').innerHTML = 'Verification Code';
					document.getElementById('txtcoment').innerHTML = '<input type="text" name="captcha" id="captcha" placeholder="Type the verification code below"/>';
					document.getElementById('tbl_send').innerHTML = '<input type="submit" value="Submit Comment" id="kirim" name="submit_add"/>';
		 //			document.getElementById('alertz').innerHTML = '<p>Thanks, your comment has been sent. </p><p><a href="">Click here to send another comments.</a></p>';
					document.getElementById('penyajinya').innerHTML = '<select name="Pembawa" id="penyaji" class="select"><option value="sesi-1">Session 1</option><option value="sesi-2">Session 2</option><option value="sesi-3">Session 3</option><option value="sesi-4">Session 4</option><option value="sesi-5">Session 5</option><option value="sesi-6">Session 6</option><option value="sesi-7">Session 7</option><option value="Umum">Global</option></select>';					
				}else{
					document.getElementById('form_komen').innerHTML = 'Form Komentar';
					document.getElementById('nama').innerHTML = 'Nama';
					//document.getElementById('direktorat').innerHTML = 'Direktorat';
 					document.getElementById('penyaji').innerHTML = 'Penyaji';
					document.getElementById('lblkomentar').innerHTML = 'Komentar';
					document.getElementById('captcha').innerHTML = 'Kode Verifikasi';				
					document.getElementById('txtcoment').innerHTML = '<input type="text" name="captcha" id="captcha" placeholder="Ketikkan kode verifikasi di bawah"/>';
					document.getElementById('tbl_send').innerHTML = '<input type="submit" value="Kirim Komentar" id="kirim" name="submit_add"/>';
					document.getElementById('penyajinya').innerHTML = '<select name="Pembawa" id="penyaji" class="select"><option value="sesi-1">Sesi 1</option><option value="sesi-2">Sesi 2</option><option value="sesi-3">Sesi 3</option><option value="sesi-4">Sesi 4</option><option value="sesi-5">Sesi 5</option><option value="sesi-6">Sesi 6</option><option value="sesi-7">Sesi 7</option><option value="Umum">Umum</option></select>';
		//			document.getElementById('alertz').innerHTML = '<p>Komentar telah dikirim, Terima Kasih!</p><p><a href="">Klik untuk mengirim komentar lainnya</a></p>';

					}
			});
		});
	</script>
</body>
</html>
<?php
			}
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);
?>