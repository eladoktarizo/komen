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
			/*border-right:1px solid #dedede;*/
		}
		.question header #logo2{
			float:right;
			/*border-right:1px solid #dedede;*/
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
			border-radius: 5px;
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
		.button {
			border-top: 1px solid #96d1f8;
			background: #65a9d7;
			background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
			background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
			background: -moz-linear-gradient(top, #3e779d, #65a9d7);
			background: -ms-linear-gradient(top, #3e779d, #65a9d7);
			background: -o-linear-gradient(top, #3e779d, #65a9d7);
			padding: 20px 40px;
			-webkit-border-radius: 16px;
			-moz-border-radius: 16px;
			border-radius: 16px;
			-webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
			-moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
			box-shadow: rgba(0,0,0,1) 0 1px 0;
			text-shadow: rgba(0,0,0,.4) 0 1px 0;
			color: white;
			font-size: 24px;
			font-family: Georgia, serif;
			text-decoration: none;
			vertical-align: middle;
		}
		.button:hover {
			border-top-color: #28597a;
			background: #28597a;
			color: #ccc;
		}
		.button:active {
			border-top-color: #1b435e;
			background: #1b435e;
		}
	</style>
	<script type="text/javascript" src="js/jquery.min.js"></script>	
</head>
<body>
	<div class="question">
		<header>
			<div id="logo">
				<img src="img/indonesia_water_week_logo.png" height=65>
			</div>
			<div id="logo2">
				<font style='font-family: arial;font-size: 17px;color: #006699;font-weight: bold;'>Stakeholder's Forum<br>
				<font style='font-family: arial;font-size: 15px;color: #F0C237;text-shadow: 1px 1px 1px #000000;font-weight: bold;'>Surabaya, 21-23 Mei 2014</font>
			</div>
		</header>
		<center><a href='login.php'><button class="button" style='cursor:pointer;'><img src='images/group_gear.png' style='height: 35px;vertical-align: middle;'> As Facilitator</button></a></center><br>
		<center><a href='index2.php'><button class="button" style='cursor:pointer;'><img src='images/group_checkmark.png' style='height: 35px;vertical-align: middle;'> As Participant</button></a></center>
</body>
</html>