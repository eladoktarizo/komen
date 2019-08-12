<?php
include "tmp/meta.php";
?>

    <script>
		jQuery(function() {
	$('#checkin').datepick();
	$('#checkout').datepick();
 
				$('#tbl-book').hover(function(){
					$('#tbl-book').text("IDR 249.")
				},function(){
					$('#tbl-book').text("> BOOK <")
				})	
	});
	
 		
	//	console.log($(window).width());
	</script>
 
<body>
<?php include "tmp/header.php";?>

 	<!-- content begin -->

    <div id="content">
    	<div class="container">
	<!-- slider -->
	<div id="subheader">
    	<div class="container">
    	  <div class="row">
          	<div class="span12">
			<hr style="border-color: #000;width: 20px;height: 1px;background: #000;margin-bottom: 5px;">
				 <p style=" font-family:channels;letter-spacing: 1px;color:#000;"><b >FERRY</b> ROOMS</p>
            </div>
          </div>
    	</div>
    </div>		
	<div id="slider" style="height:560px;"> 
    

    	<div class="callbacks_container">
        	<ul class="rslides pic_slider">
             	<li>
               		<img src="img/room/slide/ROOM - 40.jpg" alt="" />
                	<!--div class="slider-info">
					<h1>Room1</h1><br>
                	<span>IDR</span><p>490</p><span>000</span>
                	</div-->
                </li>  
                <li>
               		<img src="img/room/slide/ROOM - 41.jpg" alt="" />
                	<!--div class="slider-info">
					<h1>Room1</h1><br>
                	<span>IDR</span><p>490</p><span>000</span>
                	</div-->
                </li>                              
        	</ul>
    	</div>
     </div>
	<!-- slider close -->
  
      	
			<div class="row">
					<div style=" width:100%;">
						<a href=""><img  src="img/breakfast.jpg" alt="" style="width:60%;float:left;padding:10px;height:695px"> </a> 
						<div id='booking2' align='center'>
							<p style="font-family: anton;
font-size: 72px;
line-height: 130px;color:#000;">FERRY</p>
							<p>. ROOM FACTS .</p>
							<hr style='border: 2px solid #000;'> 
							<p>ED 160 X 220 CM</p>
							<hr style='border: 1px dashed #000;'> 
							<p>AC</p>
							<hr style='border: 1px dashed #000;'> 
							<p>WIFI</p>
							<hr style='border: 1px dashed #000;'> 
							<p>TV</p>
							<hr style='border: 1px dashed #000;'> 
							<p><i>(Room price does not include breakfast)</i></p>
						</div>
						<a href="about.php"><img  src="img/img2.jpg" alt="" style="width:35%;float:left;padding:10px;height:335px"></a> 
					
						<a href="facility.php"><img  src="img/img3.jpg" alt="" style="width:35%;float:left;padding:10px;height:335px"> </a> 
 

	
 
						<a href="our_people.php"><img  src="img/img4.jpg" alt="" style="width:97%;float:left;padding:10px;height:335px"> </a> 
 
						
	 
		 
 
				 
 				</div>
				<br>
				<br>
				<br>
				<div class="span7">
				
				<div id='sub1' ><p id='judulna'>FERRY ROOM. <BR>SMART.</p>
</div>
				<div id='sub2'><p style="font-family: channels;font-size: 18px;line-height: 30px;color: #000;letter-spacing: 1px;margin-top: 3%;">YOU WANT STAY IN ALL EIGHT OF  OUR ROOM CATGORIES TODAY?</p></div>
<br>
 
				<div id='sub3' style='margin-top: 3%;'><P style="font-family: futura;font-size: 16px;color: #5A5A5A;letter-spacing: 1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vestibulum tincidunt ante mollis ornare. Nulla id
nulla justo. Mauris quis sapien ac orci consequat accumsan. Quisque iaculis ipsum ac nulla venenatis sagittis. Aliquam
hendrerit mi a turpis malesuada nec dictum est vehicula. Curabitur quis dolor eu metus malesuada dictum adipiscing et
risus. Aliquam erat volutpat. Aenean pharetra aliquam magna, fringilla tempus erat iaculis eu. Suspendisse potenti.
Sed fringilla lobortis viverra. </p></div>
		 		</div>
		 		
				<div class="span3" style='margin-top: 8%;'>
						<p  title='Click and book this room'><a href='booking.php' id='tbl-book'>> BOOK <</a></p>
			</div>
		 		</div>
		 		</div>
                <!-- close room -->
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				</div>
					<div align='center'> 
						<a href=""><img  src="img/up.jpg" alt="" style='width:30px;cursor:pointer;' id='kaluhur'> </a> 
					</div> 
            	
         	 </div>
            
 
            
 
             
            </div>
              

        
        </div>
	<div id="subheader">
    	<div class="container">
    	  <div class="row">
          	<div class="span12">
 
 
            </div>
          </div>
    	</div>
    </div>		
	<!-- content close -->
    
<?php include "tmp/footer.php";?>   
</body>
</html>
