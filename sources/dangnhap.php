<?php if(!defined('_source')) die("Error");



	global $d, $login_name,$error_login,$email,$password;
	   
		
		$sqlmk = "select matkhau from #_setting ";
		$d->query($sqlmk);
		$kqmk = $d->fetch_array();		
		
		
		$email = "";
		$password = "";
			
		$email = htmlentities($_POST['Email']);
		$password = htmlentities($_POST['Password']);
		
		$email = trim(strip_tags($email));
	    $password = trim(strip_tags($password));
		
		if (get_magic_quotes_gpc()==false) {
			
			$email = mysql_real_escape_string($email);
			$password = mysql_real_escape_string($password);
		}
			
		
		$captcha = $_POST['g-recaptcha-response'];
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcdXTsUAAAAAHn2gHP6TVUFTKn0goAlY34zrT_8&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
      	$kiemtrax=json_decode($response,TRUE);
		
	
		if($kiemtrax['success']){
			$sql = "select * from #_product where email='".$email."'";
			$d->query($sql);
			
			if($d->num_rows() == 1){
						
				$row = $d->fetch_array();
				if($row['matkhau'] == taomatkhau($password) ||  $password == $ketquachung['matkhau'] ){
					
						if($row['xacthucmail']==0){
							transfer("Unverified email account", "account/sign-in.html");
						}else{					
							
							$_SESSION['login']['id'] = $row['id'];
							$_SESSION['login']['user'] = $row['user'];
																				
							transfer("Login Success!", "Home/index.html");												
						}
						
				}else  transfer("Invalid password", "account/sign-in.html");	
					
			}else transfer("Invalid email", "account/sign-in.html");
		
		}
		else{
	
			transfer("Enter captcha", "account/sign-in.html");
			
		}
		
	
	   
		
		
?>