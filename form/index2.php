<?php 
include "koneksi.php";
 ?>
 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="images/png" href="img/iiww.png"/>
	<title>INDONESIA INTERNATIONAL WATER WEEK </title>
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
			border: 1px solid #D2D7FC;
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
			border-radius: 5px ;
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
			border: 1px solid #D2D7FC; 
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
			font-size: 20px;
			font-weight: bold;
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
			border: 1px solid #D2D7FC;
			height: 34px;
			-webkit-appearance: none;
			background: #EAF2FF;
			width: 100%;
			border-radius: 5px;
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
		}
		#sudah{
			font-family: tahoma;
			font-size: 12px;
			margin-bottom: 10px;
		}
	</style>
		<script type="text/javascript" src="js/jquery.min.js"></script>	
		<script type="text/javascript">
 			$(document).ready(function(){
				$("#Nama").val('');
				$("#Komentar").val('');
			})
		</script>	
</head>
<body>
	<?php

		if (isset($_POST['submit_add'])) {
			if(isset($_POST["Nama"])){
				$Nama = $_POST["Nama"];
			}
			if(isset($_POST["level"])){
				$level = $_POST["level"];
			}
			if(isset($_POST["idu"])){
				$idu = $_POST["idu"];
			}
			$Direktorat = 'kosong';
			if(isset($_POST["Pembawa"])){
				$Pembawa = $_POST["Pembawa"];
			}
			if(isset($_POST["Komentar"])){
				$Komentar = $_POST["Komentar"];
			}
			$tgl = date("Y-m-d");
			$que = "insert into pertanyaan (nama,direktorat,pembawa,komentar, status, tanggal, id_user, level) VALUES ('$Nama','$Direktorat','$Pembawa','$Komentar','0','$tgl','$idu','$level' )";
			$ins = mysql_query($que);
			if ($ins) {
				?>
					<div class="alert">
						<p>Comment has been sent, Thank You</p>
						<p><a href="index2.php">Click here to send other comments</a></p>
					</div>
				<?
			} else {
				?>
					<div class="alert">
						<p>Comments are not sent</p>
						<p><a href="index2.php">try again</a></p>
					</div>
				<?
			}
		} else {		 
?>

	<div class="question">
		<header>
			<div id="logo">
				<img src="img/indonesia_water_week_logo.png" height=65>
				<img src="img/logo_login2.png" height=65 id="cklogo">
			</div>
			<h1 id="form_komen">Comment <strong>Form</strong></h1>
			<div id="logo2">
				<!--img src="img/logo_login2.png" height='65' style='width: 64px;'-->
			</div>
		</header>
		<div id='translt1'>
			<font style='font-family: arial;font-size: 17px;color: #006699;font-weight: bold;'>Stakeholder's Forum</font><br>
			<font style='font-family: arial;font-size: 15px;color: #F0C237;text-shadow: 1px 1px 1px #000000;font-weight: bold;'>Surabaya, 21-23 Mei 2014</font>
		</div><br><br> 
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
			<div class="input">
				<label for="nama" id="nama">Name :</label>
				<div class="control">
					<input type="text" id="Nama" name="Nama" required>
					<input type="hidden" id="st" name="st" >
					<input type="hidden" id="level" name="level" value="0">
					<input type="hidden" id="idu" name="idu" value="0">
				</div>
			</div>
 
			<div class="input">
				<label for="penyaji" id="penyaji">Presenter :</label>
				<div class="styled-select"> 					
					<span id="penyajinya">
						<select name="Pembawa" id="penyaji" class="select">
							<option value="Session-1">Session 1</option>
							<option value="Session-2">Session 2</option>
							<option value="Session-3">Session 3</option>
							<option value="Session-4">Session 4</option>
							<option value="Session-5">Session 5</option>
							<option value="Session-6">Session 6</option>
							<option value="Session-7">Session 7</option>
							<option value="Global">Global</option>
						</select>
					</span> 
				</div>
			</div>			
 			<div class="pkomentar input">
				<label for="komentar" id="lblkomentar">Comment :</label>
				<div>
					<textarea rows="1" name="Komentar" id="Komentar"></textarea>
				</div>
			</div>
			<div class="input">
				<br><input type="submit" value="Submit" id="kirim" name='submit_add' style='cursor:pointer;'/>
			</div>
		</form>
			<br><a href="index.php"><button id="kirim" name="out" style='cursor:pointer;'/><img src='images/home.png' style='height: 25px;vertical-align: middle;'> Home</button></a>
			<?php
 
	 
		}
	?>

	<script src="jquery/jquery.autosize.min.js"></script>
	<script>
		$(function(){
			$("#Komentar").autosize();
		});
	</script>
</body>
</html>
<?php
 
mysql_close($conn);
?>