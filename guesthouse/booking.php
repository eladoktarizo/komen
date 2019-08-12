<?php
include "tmp/meta.php";
?>
    <script>
		jQuery(function() {
		new datepickr('checkin');
		});
		jQuery(function() {
		new datepickr('checkout');
		});
	</script>
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
		 <p style=" font-family:channels;letter-spacing: 1px;color:#000;"><b >BOOKING</b> </p>

            </div>
          </div>
    	</div>
    </div>		

	<!-- subheader close -->  
      
	<!-- content begin -->
  <div id="content">
    	<div class="container">
						<a href="about.php"><img  src="img/howbook.jpg" alt="" style='margin-bottom: 50px;
height: 500px;'> </a> 
		
        	<div class="row">
            	<div class="booking-form">
                    <div class="span9">
                    	<div class="row">
                        <h3 class="title span9">Personal Data</h3>
                    	<div class="span3">
                            <span class="text-label"><i class=" icon-user"></i>Name</span>
                            <input type="text" />
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-envelope-alt"></i>Email</span>
                            <input type="text" />
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-phone"></i>Phone</span>
                            <input type="text" />
                        </div>
						<br>
						<br>
						<br>
						<br>
                        <h3 class="title span9">Your Stay</h3>
                        <div class="span6">
                            <span class="text-label"><i class="icon-group"></i>Guests</span>
                        	<div class="row">
                            	<div class="span3">
                                    <select>
                                          <option />Adults
                                          <option />1
                                          <option />2
                                          <option />3
                                          <option />4
                                          <option />5
                                          <option />5+
                                    </select>
                               	</div>
                                <div class="span3">
                                    <select>
                                          <option />Kids
                                          <option />1
                                          <option />2
                                          <option />3
                                          <option />4
                                          <option />5
                                          <option />5+
                                    </select>
                               	</div>
                        	</div>                       
                        </div>	
                        <div class="span3">
                            <span class="text-label"><i class="icon-suitcase"></i>Room</span>
                            <select>
                                  <option />Select Room
                                  <option />Deluxe Room - $199 / night
                                  <option />Elegant Room - $299 / night
                                  <option />luxury Room - $399 / night
                            </select>
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-calendar"></i>Check In Date</span>
                            <input type="text" id="checkin" />
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-calendar"></i>Check Out Date</span>
                            <input type="text" id="checkout" />
                        </div>
                        <div class="span3">
                            <span class="text-label"><i class="icon-money"></i>Payment</span>
                            <select>
                                  <option />Select Payment
                                  <option />Cash
                                  <option />Credit Card
                                  <option />Bank Transfer
                            </select>
                        </div>
                    </div>
                    </div>
                    
                    <div class="span3 btn-book-submit">
                    	<input type="button" class="btn btn-primary" value="Submit" /> 
                    </div>
            	</div>
            </div>
        </div>
	</div>
	<!-- content close -->
    <div style='margin-bottom:30px;'></div>
<?php include "tmp/footer.php";?>   
</body>
</html>

