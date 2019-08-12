<?php
include "koneksi.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check1 = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = mysql_fetch_array( $check1 )){	
		
			if ($pass1 != $info['passwd']){ 
				header("Location: login.php");
			} else {
		if($info['level']==1){			
		header("Location: index.php");
		}else{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="icon" type="images/png" href="img/iiww.png"/>
		<title>Comment - IIWW</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
   		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<script src="js/modernizr.custom.28468.js"></script>
		<link rel="stylesheet" type="text/css" href="css/simptip-mini.css" media="screen,projection" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css" />
		<script type="text/javascript" src="jquery/jRating.jquery.js"></script>
		<style type="text/css">
			.exemple{margin-top:10px; margin-left:5%;}
			.exemple6{padding: 0px 0px 15px 0px; background: url("images/post-bg_ori.jpg") repeat scroll 0 0 rgba(0, 0, 0, 0);}
		</style>
		<script type="text/javascript">
			function display() {
				$.get(
					"data.php",
					function(data) {
						$("#aa").empty();
						$("#aa").append(data+"<div class='clear'> </div>");
						$(".exemple6").jRating({
							length:10,
							decimalLength:1,
							showRateInfo:true
						});
					}
				);
			}
			
			$(function(){
				display();
				//var reloadData = 10 * 1000 * 2;
				//var holdTheInterval = setInterval(display, reloadData);
			});
		</script>
	</head>
	<body>
		<div class="header" id="home">
			<div class="wrap">
				<div class="top-header">
					<div class="logo">
						<a href="index.php"><span> </span></a>
					</div><div class="logo2">
						<a href="index.php"><span> </span></a>
					</div>
					<div class="top-nav">
						<ul>
							<li class="active"><a href="post.php" class="scroll">List Komentar</a></li>
							<li><a href="list.php" class="scroll">List Penilaian</a></li>
							<li><a href="logout.php" class="scroll">Keluar</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
					
					<div class="clear"> </div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="recent-posts" id="blog">
				<div class="wrap">
				<div class="recent-posts-head">
					<h3><font color="#3b3737">List Komentar</font></h3>
					<div class="contatct-form2"><input type="submit" value="Ambil Data Baru" name='submit_add' onclick="display();"/></div>
				</div>
				<div class="post-grids" id='aa'>
					
				</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="wrap">
				<div class="footer-grids">
					<div class="footer-left">
						
					</div>
					<div class="footer-right">
						
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
			}
			}
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);
?>
