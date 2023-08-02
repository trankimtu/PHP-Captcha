<?php
	session_start();
	

	if(isset($_POST["captcha_challenge"])){
 		if($_POST["captcha_challenge"] === $_SESSION["captcha_code"]){
    			$message = '<p class="text-success" id="msg">Message Submitted Successfully</p>';
  		}
	
		else {
			$message = '<p class="text-success" id="msg">Captcha is wrong</p>';
		}
	}
	echo($message);

?>
