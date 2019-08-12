<?php
include "tmp/meta.php";
?>
<body>
<?php include "tmp/header.php";?>            
    
    <!-- subheader begin -->
	<div id="subheader">
    	<div class="container">
    	  <div class="row">
          	<div class="span12">
			<hr style="border-color: #000;
width: 20px;
 
height: 1px;
background: #000;margin-bottom: 5px;">
		 <p style=" font-family:channels;letter-spacing: 1px;color:#000;"><b >LOCATION</b> </p>

            </div>
          </div>
    	</div>
    </div>		
	<!-- subheader close -7.784258, 110.386725-->  
        

    
	<!-- content begin -->
    <div id="content">
    	<div class="container">
        	<div class="row">
   <div id="map-container">
        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.id/maps?q=itc+depok&amp;hl=id&amp;sll=-6.248411,106.833801&amp;sspn=0.371998,0.529404&amp;ie=UTF8&amp;view=map&amp;f=d&amp;daddr=Jalan+Tribrata,+Gondokusuman,+Kota+Yogyakarta,+Yogyakarta+55222&amp;geocode=CXBfEqpsWd8iFV5wnv8dev5dBiFfQlEfkZZ3Xw&amp;ll=-7.784258,110.386725&amp;spn=0.006295,0.006335&amp;output=embed"></iframe>
   </div>			
            	<div class="span6">
                	<h4>Get in touch with us now!</h4>
Feel free to contact us by contact to get more information.<br /><br />
                	<div class="contact_form_holder">
              <form id="contact" class="row" name="form1" method="post" action="" />
              
       			<div class="span4">
                <label>Name</label>
           		<input type="text" class="full" name="name" id="name" />
           		</div>
                
                <div class="span4">
                <label>Email <span class="req">*</span></label>
           		<input type="text" class="full" name="email" id="email" />
                <div id="error_email" class="error">Please check your email</div> 
				</div>
				
                <div class="span5">
                <label>Message <span class="req">*</span></label>
                <textarea cols="10" rows="10" name="message" id="message" class="full"></textarea>
                <div id="error_message" class="error">Please check your message</div>
                <div id="mail_success" class="success"> Thank you. Your message has been sent.</div>
<div id="mail_failed" class="error">Error, email not sent</div>

<p id="btnsubmit"><input type="submit" id="send" value="Send" class="btn btn-large" style='background: #000;
color: #fff;' /></p>               
                </div>
                
                    
              </form>
            </div>
            
                </div> 
                    
              <div id="sidebar" class="span4">
              		
<div class="widget latest_news">
                    	<h4 class="title">Contact Us</h4>
                    	<ul class="list-news"> 
                            <li>
                                <img src="img/Phone.png" alt="" class="img-polaroid"  style='width:40px'/>
                                <div class="text"><h5><a href="img/#">Lorem ipsum dolor sit amet</a></h5>
                              Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </li>
                            <li> <img src="img/mail.png" alt="" class="img-polaroid"  style='width:40px'/>
                              <div class="text">
                                <h5><a href="img/#">Lorem ipsum dolor sit amet</a></h5>
                              Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                            </li></ul>
                     
                    	  
    				 
                    </div>
              
              		 <!-- widget category --><!-- widget tags --><!-- widget text -->
 
              </div>
        	</div>
</div>
        </div>
    
	<!-- content close -->    
<?php include "tmp/footer.php";?>   
   
</body>
</html>

