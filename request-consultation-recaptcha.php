<?php include_once 'includes/header.php'; ?>
<?php require_once('includes/recaptchalib.php'); ?>
<body id="home">
	<?php include_once 'includes/top.html'; ?>
	<div id="content">
	   <div style="width: 440px; text-align: center; margin: 20px auto;">
         <?php if (isset($_GET['verify'])) { ?>
            <?php
               $privatekey="6LetU8kSAAAAAOQk-Dz2iqinHFRT5XeNk6hDomY-";
               $resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
            ?>

            <?php if (!$resp->is_valid) { ?>
               <strong>Wrong reCAPTCHA entered.</strong><br />
               Please go back and try again<br /><br />If you are having trouble, please contact Support by calling 1-724-NET-SERV (1-724-638-7378) or email us at<br/>w e b r e s p o n s e t e a m @ n s - e m a i l . c o m
            <?php } else { ?>
               <strong>Your call-request has been sent.</strong><br />
               If you have any questions or concerns, please contact Support by calling 1-724-NET-SERV (1-724-638-7378) or email us at&nbsp;&nbsp;w e b r e s p o n s e t e a m @ n s - e m a i l . c o m
               <?php include 'request-call.php'; ?>
            <?php } ?>
         <?php } else { ?>
            <strong>Verification</strong><br />
            For anti-spam purposes, please enter the text in the image into the box, then press submit.<br /><br />

            <form method="post" action="?verify">
               <input type="hidden" name="firstname" value="<?php echo $_POST['firstname']; ?>" />
               <input type="hidden" name="lastname" value="<?php echo $_POST['lastname']; ?>" />
               <input type="hidden" name="phonenumber" value="<?php echo $_POST['phonenumber']; ?>" />
               <input type="hidden" name="email" value="<?php echo $_POST['email']; ?>" />
               <input type="hidden" name="businessname" value="<?php echo $_POST['businessname']; ?>" />
               <input type="hidden" name="businesstype" value="<?php echo $_POST['businesstype']; ?>" />
               <input type="hidden" name="title" value="<?php echo $_POST['title']; ?>" />
               <input type="hidden" name="1_call" value="<?php echo $_POST['1_call']; ?>" /> 
               <input type="hidden" name="2_call" value="<?php echo $_POST['2_call']; ?>" /> 
               <input type="hidden" name="3_call" value="<?php echo $_POST['3_call']; ?>" /> 
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
	<?php include_once 'includes/footer.html'; ?>
</body>
