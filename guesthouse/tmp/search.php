	<!-- search begin -->
   	<div id="booking" class=''>
<div id="spanx">BOOK NOW!</div>  
    	<div class="container">
		   	
        	<div class="row">
     
 	
        	<form class="form-inline" />
			<table cellspacing='2' cellpadding='2' border=0 class='tbl1'>
			<tr>
			<td colspan='2' align='left'>
     
				<span>LOCATION</span> 
            		<select name='location' >
                   		<option />  </option>
                        <option />Jakarta </option>
                        <option />Jogja </option>
                    </select>
 				</td>
				<td align='left'> 
				
			 
				<span>ROOMS </span>
                	<input type="text" id="jml" placeholder="" style='width: 83%;'	/>
              			
				</td align='left'>
				</tr>
				<tr>
				<td  align='left'>				
 				<span>ARRIVAL</span>
            		<select name='tgl'  >
						<?php
						for ($i=1;$i<32;$i++){
							echo "<option value=$i>$i</option>";
						}
						
						?>
 
                    </select>
				</td>
				<td  align='left'>				
					<br>
            		<select name='bln' style='width: 55px;' >
						<?php
						for ($i=1;$i<13;$i++){
							echo "<option value=$i>$i</option>";
						}
						
						?>
                    </select>
	 
 				</td>
				<td  align='left'>				
					<br>
 		 
            		<select name='taun'  >
						<?php
						 
							$thna = date("Y");
							echo $thna;
						 	for($i=0;$i<5;$i++){
								$tn = $thna+$i;
								echo "<option value='$tn'>$tn</option>";
							}
							 
						 
						
						?>
                    </select>
				</td>				
				</tr>
				<tr>
				<td align='left'>
 				<span>DEPARTURE</span>
            		<select name='tgl1'  >
						<?php
						for ($i=1;$i<32;$i++){
							echo "<option value=$i>$i</option>";
						}
						
						?>
                    </select>
				</td>
				<td align='left'>
 					<br>
	 
            		<select name='bln1'  >
						<?php
						for ($i=1;$i<13;$i++){
							echo "<option value=$i>$i</option>";
						}
						
						?>
                    </select>
				</td>
				<td align='left'>
					<br>
 
            		<select name='taun1'  >
						<?php
						 
							$thna = date("Y");
							echo $thna;
						 	for($i=0;$i<5;$i++){
								$tn = $thna+$i;
								echo "<option value='$tn'>$tn</option>";
							}
							 
						 
						
						?>
                    </select>
				</td>
				</tr>
				<tr>
				<td  colspan='2'  align='left'> 
				
 				<span>GUEST NAME</span>
                	<input type="text" id="gname" placeholder="" style='width: 80%;'	/>
 				</td>				
				<td align='left'>
				<br>
 				
                <a href="booking.php"  style='width:71%;background: #000;
color: #fff;'><img src='img/book.jpg' style='height:32px;'></a>
 				</td>
				</tr>
				</table>
        	</form>
      	</div>
      </div>
	</div>
	<!-- search close -->
    