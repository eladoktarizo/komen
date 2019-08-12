<?php
include "koneksi.php";

?>
<!doctype html>
<head>
<meta charset="utf-8" />
<title>iiww - Forum</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<link href="resources/css/global.css" rel="stylesheet" type="text/css" />

<script src="resources/js/jquery.1.6.4.min.js"></script>
 <script>
 			function display() {
				$.get(
					"data.php",
					function(data) {
 						$("#aa").empty();
						$("#aa").html(data);
 
					}
				);
			}
			$(function(){
			//	display();
				window.setInterval(function(){display()},10000);
			});			
 </script>
 </head>
<body>
 

<div id="page">
	<div id='logo' style='width: 75%;float: left;'>
		<img src='img/iiww.png' style='width: 250px;'>
	</div>
	
	<div id='mytext' style='float: left;'>
		<h2> <p class='forum''>Stakeholder's Forum</p><p class='tglna'>Surabaya, 21-23 Mei 2014</p></h2>
	</div>
 	<ul id="ticker_02" class="ticker">
<?php
					$ayena = date("Y-m-d");
					$get = "select * from pertanyaan where status='1' and tanggal='$ayena'  ";
					$result = mysql_query($get);
					while ($row = mysql_fetch_array($result)) {
						$id = $row['id'];
					//	$update = "update pertanyaan set vote='1' where id='$id' ";
					//	$res = mysql_query($update);
						$nama = $row['nama'];
						$direktorat = $row['direktorat'];
						$pembawa = $row['pembawa'];
						$komentar = $row['komentar'];
						$status = $row['status'];
 
						echo "<li><i class='icon-comment-alt'></i> <font color='#5182CC'>$nama </font><br><p style='margin-left:20px;'>$komentar</p></li>";

					} 
?>		
				<div id='aa'>
					
				</div>
 	</ul>

 


</div>


<script>

 
	function tick2(){
		$('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
	}
	setInterval(function(){ tick2 () }, 10000);


</script>


 

</body>
</html>