<?php
include "koneksi.php";
include "../admin/modul/getevent1.php";
  session_start();
?>
<!doctype html>
<head>
<meta charset="utf-8" />
<title><?php echo $nmevent ?></title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<link href="resources/css/global.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="resources/css/jquery.mCustomScrollbar.css">
	
<script src="resources/js/jquery.1.6.4.min.js"></script>
	<script src="resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
 <script>
 			function display() {
				var str=$('#idna').val();
				console.log(str);
				$.get(
					"data2.php?idnya="+str,
					function(data) {
 						var isinya = data.split('@@');
						if (isinya[1] == '') {
						
						} else {
						$("#ticker_02").append(isinya[0]);
						$('#idna').val(isinya[1]);
						console.log(isinya[0]);
						}
						//$("#ticker_02").empty();
					}
				);
			}
			$(document).ready(function(){
				//display();
				window.setInterval(function(){display()},6000);
		 
			/*	$(".ticker").mCustomScrollbar({
					autoHideScrollbar:true,
					theme:"dark-thick"
				});
				*/ 				
			});			
 </script>
 <style>
 		.ticker{
			 overflow-y:scroll; 
		}
 </style>
 </head>
<body>
 

<div id="page">
	<div id='pala'>
		<div id='logo' style='width: 65%;float: left;'>
			<img src='../img/pu.png' style='width: 50%;margin-left: -25px;'>
			  <p class='forum'><?php echo $nmevent; ?><br>Stakeholder Forum</p> 
			
		</div>
		<div id='mytext' style='float:left;width: 30%;margin-left: 5%;margin-top: 15px;' align='right'>
			<?php
				$getlogo="select * from logo where flag='1' order by nourut asc" ;
				$resgetlogo = mysql_query($getlogo);
				while($dtlogo = mysql_fetch_array($resgetlogo))
				{
					$url=$dtlogo['url'];
					echo "<img src='../$url' style='height: 50px;vertical-align: middle;'>";
				}
			?>
		
				<!--img src='../img/logock.png' style='width: 15%'>
				 <img src='../img/slum.gif' style='width: 50%'-->
				<!--img src='../img/logo1.png' style='width: 16%'>
				<img src='../img/logo2.png' style='width: 18%'-->
			 <p class='tglna'><?php echo $lokasi; ?>, <?php echo $tglevna; ?></p> 
		</div>
	</div>
 	<ul id="ticker_02" class="ticker">
<?php
					$isi="";
					 
					$ayena = date("Y-m-d");
					//$get = "select * from pertanyaan where  status='$idevent'  and  flag='1' ";
					$get = "select * from pertanyaan where  status='$idevent'   ";
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
						echo "<li><i class='icon-comment-alt'></i>&nbsp;&nbsp;<span>$nama  - $direktorat </span><p style='margin-left:20px;letter-spacing:1px;line-height: 35px;'>$komentar</p></li>";
						//$nama.",". $direktorat </font><p style='margin-left:20px;'>$komentar</p></li>";
						//$update = "update pertanyaan set id_user='2' where id='$id'";
						//$res = mysql_query($update);
					//print_r($id);
					} 
					$isi = $id;

?>			
				<input type="hidden" id="idna" name="idna" value=<?php echo $isi;?>>	
				<!--div id='aa'>
					
				</div-->
 	</ul>

 


</div>


<script>

 
/*	function tick2(){
		$('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
	}
	setInterval(function(){ tick2 () }, 10000);
*/

</script>


 

</body>
</html>