 <?php
 
	$itungkomen = mysql_query("select count(*) as itung from pertanyaan where status='$idevent'");
	$komen=mysql_fetch_array($itungkomen);
	$itunguser = mysql_query("select count(*) as itung from t_member");
	$komen2=mysql_fetch_array($itunguser);
	$itungevent= mysql_query("select count(*) as itung from event");
	$komen3=mysql_fetch_array($itungevent);
 ?>
<h2 class="sub-header"><span class='glyphicon glyphicon-home'> Home</span></h2>
         <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href='index.php?q=list_komentar'><img src="images/comments.png" class="img-responsive" width='100' ></a>
              <h4>Komentar</h4>
              <span class="text-muted"><?php echo $komen['itung']+0;?> Comments</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <a href='index.php?q=ussr'><img src="images/user.png" class="img-responsive"  width='100'></a>
              <h4>User</h4>
              <span class="text-muted"><?php echo $komen2['itung']+0;?> Users</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
               <a href='index.php?q=event'> <img src="images/config_date.png" class="img-responsive"  width='100'></a>
              <h4>Event</h4>
              <span class="text-muted"><?php echo $komen3['itung']+0;?> Events</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
                <a href='logout.php'><img src="images/logout.png" class="img-responsive"  width='100'></a>
              <h4>Logout</h4>
              <span class="text-muted">Leave Aplication</span>
            </div>
           </div>
		<br>
		<br>

