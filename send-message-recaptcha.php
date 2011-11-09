<?php include_once 'include/header.html'; ?>
<?php require_once('include/recaptchalib.php'); ?>
<body id="home">
	<?php include_once 'include/top.html'; ?>
	<div id="content">
	   <div style="width: 440px; text-align: center; margin: 20px auto;">
         <?php if (isset($_GET['verify'])) { ?>
            <?php
               $privatekey="6LetU8kSAAAAAOQk-Dz2iqinHFRT5XeNk6hDomY-";
               $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
            ?>

            <?php if (!$resp->is_valid) { ?>
               <strong>Wrong reCAPTCHA entered.</strong><br />
               Please go back and try again<br /><br />If you are having trouble, please contact Support by calling 1-724-NET-SERV (1-724-638-7378) or email us at<br />w e b r e s p o n s e t e a m @ n s - e m a i l . c o m
            <?php } else { ?>
               <strong>Your call-request has been sent.</strong><br />
               If you have any questions or concerns, please contact Support by calling 1-724-NET-SERV (1-724-638-7378) or email us at&nbsp;&nbsp;w e b r e s p o n s e t e a m @ n s - e m a i l . c o m
               <?php include 'send-message.php'; ?>
            <?php } ?>
         <?php } else { ?>
            <strong>Verification</strong><br />
            For anti-spam purposes, please enter the text in the image into the box, then press submit.<br /><br />

            <form method="post" action="?verify">
               <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>" />
               <input type="hidden" name="number" value="<?php echo $_POST['number']; ?>" />
               <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
               <input type="hidden" name="message" value="<?php echo $_POST['message']; ?>" />
               <center><?php
                  $publickey = "6LetU8kSAAAAAMUHoaAyXgCCjyYa1OCJifNS_768";
                  echo recaptcha_get_html($publickey);
               ?></center>
               <button type="submit" class="recaptcha_submit" value="Submit Challenge Answer"/>
            </form>
         <?php } ?>
      </div>
   </div>
	<?php include_once 'include/footer.html'; ?>
</body>
