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
				if($info['username'] != 'admin'){			
					echo '<a href="logout.php">Click Here to Logout </a>';
				} else {
 

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>ADMIN PANEL - Comment</title>
	<link rel="icon" type="images/png" href="images/comments.png"/>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/datepicker.css">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
<script src="js/holder.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   </head>

  <body  >

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?q='home'"><span class='glyphicon glyphicon-wrench'> </span> ADMIN Panel</a>
        </div>
        <div class="navbar-collapse collapse">
          <!--ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul-->
          <ul class="nav navbar-nav navbar-right">
             <li class="active"><a href="#"><span class='glyphicon glyphicon-calendar'></span>  Event</a></li>
            <li><a href="index.php?q=event"><span class='glyphicon glyphicon-calendar'></span>  List Event</a></li>
            <li><a href="index.php?q=add_event"><span class='glyphicon glyphicon-plus'></span>  Tambah Event</a></li>
            <li><a href="../slide/" target='_blank'>Slide Komentar</a></li>
             <li class="active"><a href="#"><span class='glyphicon glyphicon-picture'></span>  Logo Event</a></li>
            <li><a href="index.php?q=logo"><span class='glyphicon glyphicon-list'></span>  List Logo Event</a></li>
            <li><a href="index.php?q=add_logo"><span class='glyphicon glyphicon-plus'></span>  Tambah Logo Event</a></li>
 
         
   
            <li class="active"><a href=""><span class='glyphicon glyphicon-comment'></span>  Komentar</a></li>
            <li><a href="index.php?q=list_komentar"><span class='glyphicon glyphicon-comment'></span>  List komentar</a></li> 
            <li><a href="index.php?q=history_komentar"><span class='glyphicon glyphicon-folder-open'></span>  Arsip komentar</a></li> 
      
  
            <li class="active"><a href=""><span class='glyphicon glyphicon-user'></span> User</a></li>
            <li><a href="index.php?q=ussr"><span class='glyphicon glyphicon-user'></span>  List User</a></li>
            <li><a href="index.php?q=add_ussr"><span class='glyphicon glyphicon-plus'></span>  Tambah User</a></li>
        
     
            <li class="active"><a href=""><span class='glyphicon glyphicon-off'></span>  Logout</a></li>
            <li><a href="logout.php"><span class='glyphicon glyphicon-log-out'></span>  Logout</a></li>
 
           </ul>		  
          <!--form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form-->
 
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><span class='glyphicon glyphicon-calendar'></span>  Event</a></li>
            <li><a href="index.php?q=event"><span class='glyphicon glyphicon-calendar'></span>  List Event</a></li>
            <li><a href="index.php?q=add_event"><span class='glyphicon glyphicon-plus'></span>  Tambah Event</a></li>
            <li><a href="../slide/" target='_blank'>Slide Komentar</a></li>
           </ul>
          <ul class="nav nav-sidebar">
             <li class="active"><a href="#"><span class='glyphicon glyphicon-picture'></span>  Logo Event</a></li>
            <li><a href="index.php?q=logo"><span class='glyphicon glyphicon-list'></span>  List Logo Event</a></li>
            <li><a href="index.php?q=add_logo"><span class='glyphicon glyphicon-plus'></span>  Tambah Logo Event</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href=""><span class='glyphicon glyphicon-comment'></span>  Komentar</a></li>
            <li><a href="index.php?q=list_komentar"><span class='glyphicon glyphicon-comment'></span>  List komentar</a></li> 
            <li><a href="index.php?q=history_komentar"><span class='glyphicon glyphicon-folder-open'></span>  Arsip komentar</a></li> 
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href=""><span class='glyphicon glyphicon-user'></span> User</a></li>
            <li><a href="index.php?q=ussr"><span class='glyphicon glyphicon-user'></span>  List User</a></li>
            <li><a href="index.php?q=add_ussr"><span class='glyphicon glyphicon-plus'></span>  Tambah User</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="active"><a href=""><span class='glyphicon glyphicon-off'></span>  Logout</a></li>
            <li><a href="logout.php"><span class='glyphicon glyphicon-log-out'></span>  Logout</a></li>
 
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<?php
		if ($_GET['q']=='event')
		{
			include "modul/getevent1.php";
			include "modul/event.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='add_event')
		{
			include "modul/getevent1.php";
			include "modul/add_event.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='editevent')
		{
			include "modul/getevent1.php";
			include "modul/editevent.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='delevent')
		{
			include "modul/getevent1.php";
			include "modul/delevent.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='list_komentar')
		{
			include "modul/getevent1.php";
			include "modul/lst_komentar.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='history_komentar')
		{
			include "modul/getevent1.php";
			include "modul/history_komentar.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='ussr')
		{
			include "modul/getevent1.php";
			include "modul/user.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='add_ussr')
		{
			include "modul/getevent1.php";
			include "modul/add_ussr.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='edituser')
		{
			include "modul/getevent1.php";
			include "modul/edituser.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='logo')
		{
			include "modul/getevent1.php";
			include "modul/logo.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='add_logo')
		{
			include "modul/getevent1.php";
			include "modul/add_logo.php";
			include "modul/getevent.php";
		}else
		if ($_GET['q']=='deluser')
		{
			include "modul/getevent1.php";
			include "modul/deluser.php";
			include "modul/getevent.php";
		}else{
			include "modul/getevent1.php";
			include "modul/home.php";
			include "modul/getevent.php";
		}
		
	?>

      </div>
	  
    </div>
	
    </div>
	 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="js/jquery111.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- script src="js/docs.min.js"></script>
    <IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="js/ie10-viewport-bug-workaround.js"></script> -->
        <script src="js/bootstrap-datepicker.js"></script>
 		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>		
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "yyyy-mm-dd"
                });  
                $('#example2').datepicker({
                    format: "yyyy-mm-dd"
                });  
     $('#cekal').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $('.cek').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"   
				var str1=$(this).val() ;
				console.log(str1);
						$.get(
							"modul/apdetcb.php?q=ya&idnya="+str1,
							function(data) {
								var isinya = data;
								console.log(isinya);
								if (isinya == '1') {
									
								} else {
									
									//console.log(isinya);
								} 
							}
						);
				
            });
        }else{
            $('.cek').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"           
				var str1=$(this).val() ;
				console.log(str1);	
						$.get(
							"modul/apdetcb.php?q=no&idnya="+str1,
							function(data) {
								var isinya = data;
								console.log(isinya);
								if (isinya == '1') {
									
								} else {
									
									//console.log(isinya);
								} 
							}
						);				
            });         
        }
    });
 
 $(".cek").click(function(){
		 var str=$(this).val() ;
		 console.log(str);
		  if(this.checked) {
						$.get(
							"modul/apdetcb.php?q=ya&idnya="+str,
							function(data) {
								var isinya = data;
								console.log(isinya);
								if (isinya == '1') {
									
								} else {
									
									//console.log(isinya);
								} 
							}
						);

		  //  console.log( $(this).val() );
		 }else{
						$.get(
							"modul/apdetcb.php?q=no&idnya="+str,
							function(data) {
								var isinya = data;
								console.log(isinya);
								if (isinya == '1') {
									
								} else {
									
									//console.log(isinya);
								} 
							}
						);

		}
 });

 
 $("#apdet").click(function(){
  var tot=$('#tot').val() ;
  for(var ii=0; ii<=tot;ii++){ 
 //console.log("no"+ii);
 
		 var id=$('#id'+ii).val() ;
		 var no=$('#no'+ii).val() ;
		
	 
		console.log(id);
		console.log("modul/apdetnourut.php?q="+no+"&idnya="+id);
 						$.get(
							"modul/apdetnourut.php?q="+no+"&idnya="+id,
							function(data) {
								var isinya = data;
								console.log(isinya);
							 
							}
						);

 
 }
 });
 
            });
        </script>
  </body>
</html>
<?php
			}}
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);
?>
