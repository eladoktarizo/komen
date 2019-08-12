<?php
include "koneksi.php";

?>
<!doctype html>
<head>
<meta charset="utf-8" />
<title>Kemitraan Agenda Habitat Indonesia</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<link href="resources/css/global.css" rel="stylesheet" type="text/css" />

<script src="resources/js/jquery.1.6.4.min.js"></script>
 <script>
 			function display() {
				$.get(
					"data.php",
					function(data) {
 						//$("#ticker_02").empty();
						$("#ticker_02").append(data);
 
					}
				);
			}
			$(function(){
			//	display();
				window.setInterval(function(){display()},6000);
			});			
 </script>
 </head>
<body>
 

<div id="page">
	<div id='pala'>
		<div id='logo' style='width: 65%;float: left;'>
			<img src='../img/pu.png' style='width: 45%;margin-left: -25px;'>
			  <p class='forum'>Kemitraan Agenda Habitat Indonesia</p> 
			
		</div>
		<div id='mytext' style='float:left;width: 30%;margin-left: 5%;margin-top: 15px;' align='right'>
				<img src='../img/logock.png' style='width: 10%'>
				<img src='../img/index.jpg' style='width: 50%'>
			 <p class='tglna'>Jakarta, 20 Juni 2014</p> 
		</div>
	</div>
 	<ul id="ticker_02" class="ticker">
<?php
					$ayena = date("Y-m-d");
					$get = "select * from pertanyaan where  tanggal='$ayena'  ";
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
				<!--div id='aa'>
					
				</div-->
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