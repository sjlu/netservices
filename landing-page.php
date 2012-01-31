<?php include_once 'includes/header.php'; ?>

<div id="header">
   <div id="header_container">
      <img src="resources/img/logo.png" style="top: -110px; left: 30px;" />
      <img src="resources/img/landing_page-consultant.png" style="margin: 20px 0 0 260px;" />
   </div>
</div>

<script>
   $(document).ready(function(){
      $("#request_consultation").validationEngine('attach', {promptPosition: "centerRight", scroll: false});
   });
</script>

<div id="container">
   <div id="content">
      <div id="form">
         <form id="request_consultation" onsubmit="return validateConsultationRequest()" action="request-consultation-recaptcha.php" method="POST" style="padding-top: 30px; padding-left: 45px;">
            <label>E-mail Address:</label><input type="text" name="email" id="email" style="width: 280px;" class="validate[required,custom[email]]"/><br />
            <label>First Name:</label><input type="text" name="firstname" id="firstname" style="width: 280px;" class="validate[required]" /><br />
            <label>Last Name:</label><input type="text" name="lastname" id="lastname" style="width: 280px;" class="validate[required]" /><br />
            <label>Business Name:</label><input type="text" name="businessname" id="businessname" style="width: 280px;" class="validate[required]" /><br />
            <label>Type of Business:</label><input type="text" name="businesstype" id="businesstype" style="width: 280px;" class="validate[required]" /><br />
            <label>Your Title:</label><input type="text" name="title" id="title" style="width: 280px;" class="validate[required]" /><br />
            <label>Phone Number:</label><input type="text" name="phonenumber" id="phonenumber" style="width: 280px;" class="validate[required,custom[phone]]" /><br />
            <label>1st Best Time to Call:</label>
               <select id="1_call" class="validate[required]">
                  <option value="">Choose a time</option>
                  <?php $time = date('g:i a', strtotime('0:00')); ?>
                  <?php for ($i = 0; $i < 96; $i++): ?>
                     <option value="<?= $time ?>"><?= $time ?> U.S. Eastern Time</option>
                     <?php $time = date('g:i a', strtotime('+15 mins', strtotime($time))); ?>
                  <?php endfor; ?>
               </select><br />
            <label>2nd Best Time to Call:</label>
               <select id="2_call" class="validate[required]">
                  <option value="">Choose a time</option>
                  <?php $time = date('g:i a', strtotime('0:00')); ?>
                  <?php for ($i = 0; $i < 96; $i++): ?>
                     <option value="<?= $time ?>"><?= $time ?> U.S. Eastern Time</option>
                     <?php $time = date('g:i a', strtotime('+15 mins', strtotime($time))); ?>
                  <?php endfor; ?>
               </select><br />
            <label>3rd Best Time to Call:</label>
               <select id="3_call" class="validate[required]">
                  <option value="">Choose a time</option>
                  <?php $time = date('g:i a', strtotime('0:00')); ?>
                  <?php for ($i = 0; $i < 96; $i++): ?>
                     <option value="<?= $time ?>"><?= $time ?> U.S. Eastern Time</option>
                     <?php $time = date('g:i a', strtotime('+15 mins', strtotime($time))); ?>
                  <?php endfor; ?>
               </select><br />
            <label>Your Questions:</label><textarea name="message" id="message" style="width: 280px; height: 75px;" class="validate[required]"></textarea></br> 
            <button type="submit" class="button_continue"></button>
         </form>

      </div>
      <div id="box">
         <div id="buttons" style="margin: 20px 0 0 40px; width: 440px;">
            I do not need a consultation at this time but I would like to explore services that may help my business.<br />
            <a href="index.php"><button type="submit" class="button_submit" style="margin-top: 8px;"></button></a>
         </div>
      </div>
      <div id="text">
         <h1>Sample Title</h1>
         <p>Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text</p>
         <h1>Sample Title</h1>
         <p>Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text</p>
         <h1>Sample Title</h1>
         <p>Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text Sample Text</p>
      </div>
   </div>
</div>
