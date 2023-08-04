<?php
    
	session_start();


	
?>
<form action="" method="post">
    <img src="mycaptcha.php" alt="CAPTCHA" class="captcha-image"><i class="fas fa-redo refresh-captcha"></i><br>
    <label for="captcha">Please Enter the Captcha Text</label><br>
    <input type="text" id="captcha" name="captcha_challenge"><br>
    <a href="" id="refresh">Refresh</a>
    <label for=""><?php $message ?></label>
    <button type="" id="check-captcha">Check Captcha</button>
</form>


<script>
    $(document).ready(function(){
        
    
        $("#refresh").on('click',function(){
            location.reload();
        });
	$("#check-captcha").on('click',function(){

            
        });
        
    });
</script>
