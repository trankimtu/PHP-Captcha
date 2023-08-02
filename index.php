<?php
  session_start();
if(isset($_POST["captcha_code"])){
  if($_POST["captcha_code"] === $_SESSION["captcha_code"]){
    $message = '<p class="text-success" id="msg">Message Submitted Successfully</p>';
  }
}
?>
