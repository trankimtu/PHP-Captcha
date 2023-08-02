<?php
  session_start();
  
  // Generate random string
  $random_alpha = md5(rand());
  
  // Generate a captcha of length 6
  $captcha_code = substr($random_alpha, 0, 6);
  
  
  
  // Width and Height of captcha
  $target_layer = imagecreatetruecolor(170,70); 
  
  // Background color of captcha
  $captcha_background = imagecolorallocate($target_layer, 255,255,255);
  imagefill($target_layer,0,0,$captcha_background);
  
  // Captch text color RGB
  $captcha_text_color = imagecolorallocate($target_layer, 39,55,70);
  
  // Text size and properties
  $font_size = 25;
  $img_width = 80;
  $img_height = 48;
  
  // Text size
  imagettftext($target_layer, $font_size, 10, 10, 60, $captcha_text_color, '/fonts/RosesareFF0000.ttf', $captcha_code);
  
  
  
  
  // For lines
  $line_color = imagecolorallocate($target_layer, 64, 64,64);
  for($i=0;$i<6;$i++) {
    imageline($target_layer,0,rand()%50,200,rand()%100,$line_color);
  }  
  
  // For pixels
  $pixel_color = imagecolorallocate($target_layer, 0,0,255);
  for($i=0;$i<1000;$i++){
      // width and height of text image rand() 
      imagesetpixel($target_layer,rand()%200,rand()%100,$pixel_color);
  }
  
  
  
  header('Content-type: image/png');
  imagepng($target_layer);    
?>
