<?php
set_time_limit(0);
include "koneksi.php";
	if(isset($_COOKIE["ID_my_site"])){
		$username1 = $_COOKIE["ID_my_site"];
		$pass1 = $_COOKIE["Key_my_site"];
		$check1 = mysql_query("SELECT * FROM t_member WHERE username = '$username1'")or die('Error to connect to Database');
		while($info = mysql_fetch_array( $check1 )){
			if ($pass1 != $info['passwd']){ 
				header("Location: ../login.php");
			} else {
				$member_id = $info['id'];
				if($info['username'] != 'juri4'){
						header("Location: ../post.php");
				}
?>
<!doctype html>
<head>
<meta charset="utf-8" />
<title>iiww - forum</title>
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<link href="resources/css/global.css" rel="stylesheet" type="text/css" />

<script src="resources/js/jquery.1.6.4.min.js"></script>
<script src="resources/js/jsonp.js"></script>
 <script>
 $(document).ready(function() {
  $('#pilih').click(function(){
	if(this.checked){
		$("input:checkbox").attr('checked', true);
	}else{
		$("input:checkbox").attr('checked', false);
	}
  });
  
$('#aplot').click(function(){
var checkboxes = document.getElementsByName('pilih1');
var vals = "";
for (var i=0, n=checkboxes.length;i<n;i++) {
  if (checkboxes[i].checked) 
  {
  //vals += ","+checkboxes[i].value;
  var idna = checkboxes[i].value;
  var nama = $('#nm'+idna).val();
  var direk = $('#dirk'+idna).val();
  var pembawa = $('#pembawa'+idna).val();
  var komeng = $("#komeng"+idna).val();
  var status = $('#status'+idna).val();
  var vote = $('#vote'+idna).val();
  var idu = $('#idu'+idna).val();
  var lvl = $('#lvl'+idna).val();
  	 				$.post( "upload_pr.php",{idna:idna}, function( data ) {
  				//	$.post( "http://ciptakarya.pu.go.id/comment/1/accept.php",{id:idna,nama:nama,direktorat:direk,pembw:pembawa,komen:komeng,st:status,vt:vote,idus:idu,level:lvl}, function( data ) {
					 // $( ".slide" ).html( data );
					 
				 	});
					
		$.jsonp({
			url: "http://ciptakarya.pu.go.id/comment/1/accept.php?id="+idna+"&nama="+nama+"&direktorat="+direk+"&pembw="+pembawa+"&komen="+komeng+"&st="+status+"&vt="+vote+"&idus="+idu+"&level="+lvl,
			callback: "callback",
			success: function(data) {
				console.log(data);
			},
			error: function() {
					
			}
		});
	console.log("http://ciptakarya.pu.go.id/comment/1/accept.php?id="+idna+"&nama="+nama+"&direktorat="+direk+"&pembw="+pembawa+"&komen="+komeng+"&st="+status+"&vt="+vote+"&idus="+idu+"&level="+lvl);		
	$('#tes'+idna).hide();				
  //"http://ciptakarya.pu.go.id/comment/1/accept.php
 // console.log(idna);
 // console.log(nama);
  }
}

//if (val) val = val.substring(1);
});  
});
 			function display() {
				$.get(
					"data1.php",
					function(data) {
 						$("#ticker_02").empty();
						$("#ticker_02").append(data);
 
					}
				);
			}
			function display1() {
				window.open("../logout.php","_self");
			}

 	
 </script>
 </head>
<body>
 

<div id="page">
	<div id='logo' style='width: 75%;float: left;'>
		<img src='img/iiww.png' style='width: 250px;'>
		
	</div>
	
	<div id='mytext' style='float: left;margin-bottom: 20px;'>
		<h2> <p class='forum''>Stakeholder's Forum</p><p class='tglna'>Surabaya, 21-23 Mei 2014</p></h2>
	</div>
	<br>
   <input type="submit" value="Upload" name='aplot' id='aplot' class="btn"/><input type="submit" class="btn" value="Get New Comment" name='submit_add' onclick="display();" style='float: right;'/><input type="submit" class="btn" value="Logout" name='submit_add' onclick="display1();" style='float: right;'/>
	<br>
	<br>
	 <input type='checkbox' id='pilih' name='pilih' >Check All
 
	<ul id="ticker_02" class="ticker2">
	
<?php
					$ayena = date("Y-m-d");
					$get = "select * from pertanyaan where status='1' and tanggal='$ayena'  and flag='0' ";
					$result = mysql_query($get);
					
					while ($row = mysql_fetch_array($result)) {
						$id = $row['id'];
 						$nama = $row['nama'];
						$direktorat = $row['direktorat'];
						$pembawa = $row['pembawa'];
						$komentar = $row['komentar'];
						$status = $row['status'];
						$vote = $row['vote'];
						$idu = $row['id_user'];
						$lvl = $row['level'];
						$kmn1 = str_replace("'","",$komentar);
						$kmn2 = str_replace('"','',$kmn1);
						$kmn3 = str_replace("&"," dan ",$kmn2);
						echo "<li id='tes$id'><input type='checkbox' id='pilih1' name='pilih1' value='$id'><i class='icon-comment-alt'></i> <font color='#5182CC'>$nama </font><br><p style='margin-left:20px;'>$komentar</p>
						<input type='hidden' id='nm$id' name='nm$id' value='$nama'>
						<input type='hidden' id='dirk$id' name='dirk$id' value='$direktorat'>
						<input type='hidden' id='pembawa$id' name='pembawa$id' value='$pembawa'>
						<input type='hidden' id='komeng$id' name='komeng$id' value='$kmn3'>
						<input type='hidden' id='status$id' name='status$id' value='$status'>
						<input type='hidden' id='vote$id' name='vote$id' value='$vote'>
						<input type='hidden' id='idu$id' name='idu$id' value='$idu'>
						<input type='hidden' id='lvl$id' name='lvl$id' value='$lvl'>
						</li>";

					} 
?>		
				<!--div id='aa'>
					
				</div-->
 	</ul>

 


</div>


<script>

 
	function tick2(){
	//	$('#ticker_02 li:first').slideUp( function () { $(this).appendTo($('#ticker_02')).slideDown(); });
	}
	//setInterval(function(){ tick2 () }, 10000);


</script>


 

</body>
</html>
<?
			}
		 
		}
	} else {
		header("Location: ../login.php");
	}
mysql_close($conn);
?>