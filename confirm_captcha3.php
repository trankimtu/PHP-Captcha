<?php
// session_start();
//$conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));

// if (count($_POST) > 0) {
    if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
        $submitButton = '<input type="submit" name="submit" value="submit" id="st" class="btn btn-danger btn-block" />';
        $message = "Your message received successfully";
        //mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $_POST['userName'] . "', '" . $_POST['userEmail'] . "','" . $_POST['subject'] . "','" . $_POST['content'] . "')");
    } else {
        $submitButton = '<input type="submit" name="submit" value="submit" id="st" class="btn btn-danger btn-block" disabled />';
        $message = "Incorrect Captcha Code";
    }
// }


?>
