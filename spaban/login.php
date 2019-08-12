<?php
//error_reporting(0);
include "koneks.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check = pg_query($conn,"SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = pg_fetch_array( $check ))
			{
				if ($pass1 != $info['passwd']){
				}
				else{
					header("Location: index.php");

				}
			}
	}
	if (isset($_POST['submit'])) { 
		if(!$_POST['username'] | !$_POST['pass']) {
			die('You did not fill in a required field.');
		}
		if (!get_magic_quotes_gpc()) {
			$_POST['username'] = addslashes($_POST['username']);
		}
		$check = pg_query($conn,"SELECT * FROM t_member WHERE username = '".$_POST['username']."'")or die('Error to connect to Database');
		$check2 = pg_num_rows($check);
		if ($check2 == 0) {
			die('That user does not exist in our database. <a href=login.php>Click Here to Back to login page</a>');
		}
		while($info = pg_fetch_array( $check )){
			$_POST['pass'] = stripslashes($_POST['pass']);
			$info['passwd'] = stripslashes($info['passwd']);
			$_POST['pass'] = $_POST['pass'];
			if ($_POST['pass'] != $info['passwd']) {
				die('Incorrect password, please try again. <a href=login.php>Click Here to Back to login page</a>');
			}
			else{
				$_POST['username'] = stripslashes($_POST['username']);
				$hour = time() + 86400;
				setcookie("ID_my_site", $_POST['username'], $hour);
				setcookie("Key_my_site", $_POST['pass'], $hour);
				header("Location: index.php");
			}
		}
	}
	else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STAF UMUM PERSONEL ANGKATAN DARAT SPABAN II/BINDIK</title>
	<link rel="stylesheet" href="css-login/chosen.css">
	<style>
		@font-face {
			font-family: 'Source Sans Pro';
			src:url('font/SourceSansPro-Light.ttf') format('truetype');
			font-weight: 100;
			font-style: normal;
		}
		@font-face {
			font-family: 'Source Sans Pro';
			src:url('font/SourceSansPro-Regular.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: 'Source Sans Pro';
			src:url('font/SourceSansPro-Bold.ttf') format('truetype');
			font-weight: 700;
			font-style: normal;
		}
		@font-face {
			font-family: 'Source Sans Pro';
			src:url('font/SourceSansPro-Regular.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}

		@font-face {
			font-family: 'Web Symbols';
			src: url('font/WebSymbols-Regular-webfont.eot');
			src: url('font/WebSymbols-Regular-webfont.eot?#iefix') format('embedded-opentype'),
				 url('font/WebSymbols-Regular-webfont.woff') format('woff'),
				 url('font/WebSymbols-Regular-webfont.ttf') format('truetype'),
				 url('font/WebSymbols-Regular-webfont.svg#WebSymbolsRegular') format('svg');
			font-weight: normal;
			font-style: normal;
		}

		body.login{
			/*background:url("img/bg.jpg");*/
			background:#eff3f6;
			-webkit-background-size: cover;
			background-size: cover;
			font-family:"Source Sans Pro", arial,sans-serif;
			font-weight:100;
		}
		#login{
			background-color                 :rgba(255,255,255,.8);
			background-color                 :white\9;
			padding                          :30px;
			margin                           :10% auto;
			width                            :300px;
			position                         :relative;
			border-radius                    :5px;
			display                          : table;
			-webkit-box-sizing               :border-box;
			-moz-box-sizing               :border-box;
			-ms-box-sizing               :border-box;
			-o-box-sizing               :border-box;
			box-sizing               :border-box;

			-webkit-animation-duration       : 1s;
			-webkit-animation-delay          : 1s;
			-webkit-animation-timing-function: ease;
			-webkit-animation-fill-mode      : both;

			-moz-animation-duration       : 1s;
			-moz-animation-delay          : 1s;
			-moz-animation-timing-function: ease;
			-moz-animation-fill-mode      : both;

			-ms-animation-duration       : 1s;
			-ms-animation-delay          : 1s;
			-ms-animation-timing-function: ease;
			-ms-animation-fill-mode      : both;

			-o-animation-duration       : 1s;
			-o-animation-delay          : 1s;
			-o-animation-timing-function: ease;
			-o-animation-fill-mode      : both;

			animation-duration       : 1s;
			animation-delay          : 1s;
			animation-timing-function: ease;
			animation-fill-mode      : both;

		}
		#logo-login{
			text-align: center;
			padding-right:30px;
		}
		#logo-login h1{
			font-family: "Source Sans Pro", "Trajan Pro", arial, sans-serif;
			font-weight: 100;
			font-size:24px;
		}
		#logo-login,#login-form{
			display: table-cell;
			vertical-align: middle;
		}
		#login-form{
			width:220px;
		}
		#login-form label{
			display: block;
			padding:10px 0;
			position: relative
		}
		span.icon{
			font-family: "Web Symbols";
			position: absolute;
			padding:5px;
			color:;
			left:5px;
			top:12px;
		}
		#upt_chzn{width: 100%!important}
		#upt_chzn .chzn-search input{
			width:100% !important;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
		}
		.chzn-container-single .chzn-drop{width:100% !important}
		#login-form label #randal,
		#login-form label #username,
		#login-form label #pass{
			padding:8px;
			width:100%;
			background: #ededed;
			border-radius: 3px;
			border:1px solid #c1c1c1;
			padding-left:35px;
			-webkit-box-sizing:border-box;
			-moz-box-sizing:border-box;
			-ms-box-sizing:border-box;
			-o-box-sizing:border-box;
			box-sizing:border-box;
			-webkit-transition:all .5s ease;
			-moz-transition:all .5s ease;
			-ms-transition:all .5s ease;
			-o-transition:all .5s ease;
			transition:all .5s ease;
		}
		#upt_chzn{width: 100%!important}
		#login-form label #randal:focus,
		#login-form label #username:focus,
		#login-form label #pass:focus{background:white;outline:none;border:1px solid #238fdb;}
		#login-form #marklogin{display: inline}
		#login-form #marklogin span{padding:15px 0;display: inline-block; font-size: 12px;}
		input[type="checkbox"]{float:left;margin:18px 10px 20px 0;padding:8px;}
		input[type="submit"]{
			float:right;
			padding:10px 30px;
			background:#238fdb;
			color:white;
			border-top:1px solid #3de3f6;
			border-bottom:1px solid #292929;
			border-left:none;
			border-right:none;
			border-radius:5px;
			text-shadow:0 -1px 0 black;
			margin-top:10px;
		}
		input[type="submit"]:hover,input[type="submit"]:active{
			background:#42a8f0;
		}
		.alert{
			position: absolute;
			width:100%;
			left:0;
			right:0;
			bottom:-50px;
			background:#fcb0b0;
			border:1px solid #d47e7e;
			padding:10px 10px;
			-webkit-box-sizing:border-box;
			-moz-box-sizing:border-box;
			-ms-box-sizing:border-box;
			-o-box-sizing:border-box;
			box-sizing:border-box;
			text-align: center;
			display:none;

			-webkit-animation-duration       : 1s;
			-webkit-animation-delay          : .1s!important;
			-webkit-animation-timing-function: ease;
			-webkit-animation-fill-mode      : both;

			-moz-animation-duration       : 1s;
			-moz-animation-delay          : .1s!important;
			-moz-animation-timing-function: ease;
			-moz-animation-fill-mode      : both;

			-ms-animation-duration       : 1s;
			-ms-animation-delay          : .1s!important;
			-ms-animation-timing-function: ease;
			-ms-animation-fill-mode      : both;

			-o-animation-duration       : 1s;
			-o-animation-delay          : .1s!important;
			-o-animation-timing-function: ease;
			-o-animation-fill-mode      : both;

			animation-duration       : 1s;
			animation-delay          : .1s!important;
			animation-timing-function: ease;
			animation-fill-mode      : both;
		}
		.alert .icon{
			padding:0;
			margin-right: 10px;
			display: inline-block;
			position: relative;
			left:0;
			top:0;
		}
	</style>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.chosen.min.js"></script>
</head>
<body class="login">
		
		<div id="login" class="fadeInDown">
			<!--div id="logo-login">
				<img src="images/logoPUCK.png" alt="" width=150>
				<h1></h1>
			</div-->
			<!--<form action="index3.php" id="login-form">-->
            
            <form form id="login-form" name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
				<!--label for="upt">
					<span class="icon">p</span>
					<select name="upt" id="upt" placeholder="upt"  class="chzn-select">
						<option value="0">Pilih Lokasi UPT</option>
					</select>
				</label-->

				<div id="userlog">
					<label for="username">
						<span class="icon">U</span>
						<!--<input type="text" id="username" placeholder="USERNAME">-->
                        <input type="text" id="username" placeholder="USERNAME"  name="username">
					</label>
					<label for="password">
						<span class="icon">K</span>
						<!--<input type="password" id="password" placeholder="PASSWORD">-->  
						<input placeholder="PASSWORD" name="pass" type="password" id="pass">
					</label>
					
					<!--<input type="submit" value="LOGIN">-->
                    <input name="submit" value="LOGIN"  type="submit" >
			
				</div>
			</form>
			
			<div class="alert warning ">
				<p><span class="icon">W</span><span class="message">Kombinasi Username dan Password Salah!</span></p>
			</div>
		</div>
	<!-- </div> -->

	<script>
		
        $(document).ready(function(){
			$(".chzn-select").chosen().change(function(){
				$("#userlog").slideDown();
			});
		});


	</script>
</body>
</html>
<?php
	}
pg_close($conn);
?> 