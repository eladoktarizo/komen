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
				$member_id = $info['id'];
				$aResponse['error'] = false;
				$aResponse['message'] = '';
				// ONLY FOR THE DEMO
					$aResponse['server'] = ''; 
				// END ONLY FOR DEMO
	
	
				if(isset($_POST['action'])) {
					if(htmlentities($_POST['action'], ENT_QUOTES, 'UTF-8') == 'rating') {
						$id = intval($_POST['idBox']);
						$rate = floatval($_POST['rate']);
						//$que = "update nilai set nilai_akhir='$rate' where pertanyaan_id='$id'";
						$tgl = date('Y-m-d');
						 $que = "insert into nilai (pertanyaan_id,member_id,nilai, tanggal) VALUES ('$id','$member_id','$rate','$tgl')";
						$ins = mysql_query($que);
						$success = true;
						if($success) {
							$aResponse['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';			
							// ONLY FOR THE DEMO
								$aResponse['server'] = '<strong>Success answer :</strong> Success : Your rate has been recorded. Thanks for your rate :)<br />';
								$aResponse['server'] .= '<strong>Rate received :</strong> '.$rate.'<br />';
								$aResponse['server'] .= '<strong>ID to update :</strong> '.$id;
							// END ONLY FOR DEMO			
							echo json_encode($aResponse);
						}
						else {
							$aResponse['error'] = true;
							$aResponse['message'] = 'An error occured during the request. Please retry';			
							// ONLY FOR THE DEMO
								$aResponse['server'] = '<strong>ERROR :</strong> Your error if the request crash !';
							// END ONLY FOR DEMO			
							echo json_encode($aResponse);
						}
					} else {
						$aResponse['error'] = true;
						$aResponse['message'] = '"action" post data not equal to \'rating\'';		
						// ONLY FOR THE DEMO
							$aResponse['server'] = '<strong>ERROR :</strong> "action" post data not equal to \'rating\'';
						// END ONLY FOR DEMO		
						echo json_encode($aResponse);
					}
				} else {
					$aResponse['error'] = true;
					$aResponse['message'] = '$_POST[\'action\'] not found';	
					// ONLY FOR THE DEMO
						$aResponse['server'] = '<strong>ERROR :</strong> $_POST[\'action\'] not found';
					// END ONLY FOR DEMO	
					echo json_encode($aResponse);
				}
			}
		}
	} else {
		header("Location: login.php");
	}
mysql_close($conn);